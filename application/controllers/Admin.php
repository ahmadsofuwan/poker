<?php

use phpDocumentor\Reflection\Types\This;

defined('BASEPATH') or exit('No direct script access allowed');
class Admin extends MY_Controller
{

	public function __construct()
	{
		parent::__construct();
		if (!$this->login) {
			redirect(base_url('Auth'));
		}
	}

	public function index()
	{
		$data['html']['title'] = 'Dasboard';
		$this->template($data);
	}

	public function adsList()
	{
		$tableName = 'ads';
		$join = array(
			array('account', 'account.pkey=' . $tableName . '.createon', 'left'),
			array('role', 'role.pkey=account.role', 'left'),
		);
		$select = '
			' . $tableName . '.*,
			account.name as createname,
			account.role as createrole,
			role.name as rolename,
		';


		$dataList = $this->getDataRow($tableName, $select, '', '', $join);
		$data['html']['title'] = 'List Ads';
		$data['html']['dataList'] = $dataList;
		$data['html']['tableName'] = $tableName;
		$data['html']['form'] = get_class($this) . '/ads';
		$data['url'] = 'admin/adsList';
		$this->template($data);
	}

	public function ads($id = '')
	{
		$tableName = 'ads';
		$tableDetail = '';
		$baseUrl = get_class($this) . '/' . __FUNCTION__;
		$detailRef = '';
		$formData = array(
			'pkey' => 'pkey',
			'name' => 'name',
			'createon' => 'sesionid',
			'time' => 'time',
			'link' => 'link',
		);
		$formDetail = array();

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST['action'])) redirect(base_url($baseUrl . 'List'));
			//validate form
			$arrMsgErr = array();
			if (empty($_POST['name']))
				array_push($arrMsgErr, 'Nama Wajib Di isi');


			if ($_POST['action'] == 'add')
				if (empty($_FILES['imgAds']['name']))
					array_push($arrMsgErr, "Gambar wajib Di isi");

			$this->session->set_flashdata('arrMsgErr', $arrMsgErr);
			//validate form
			if (empty(count($arrMsgErr)))
				switch ($_POST['action']) {
					case 'add':
						$refkey = $this->insert($tableName, $this->dataForm($formData));
						$this->insertDetail($tableDetail, $formDetail, $refkey);
						$upload = array(
							'postname' => 'imgAds',
							'tablename' => $tableName,
							'colomname' => 'img',
							'pkey' => $refkey,
						);
						$this->uploadImg($upload);
						redirect(base_url($baseUrl . 'List')); //wajib terakhir
						break;
					case 'update':
						$this->update($tableName, $this->dataForm($formData), array('pkey' => $_POST['pkey']));
						$this->updateDetail($tableDetail, $formDetail, $detailRef, $id);
						if (!empty($_FILES['imgAds']['name'])) {
							$upload = array(
								'postname' => 'imgAds',
								'tablename' => $tableName,
								'colomname' => 'img',
								'pkey' => $_POST['pkey'],
								'replace' => true,
							);
							$this->uploadImg($upload);
						}
						redirect(base_url($baseUrl . 'List'));
						break;
				}
		}

		if (!empty($id)) {
			$dataRow = $this->getDataRow($tableName, '*', array('pkey' => $id), 1)[0];
			$this->dataFormEdit($formData, $dataRow);
		}

		$data['html']['baseUrl'] = $baseUrl;
		$data['html']['title'] = 'Input Data Iklan';
		$data['html']['err'] = $this->genrateErr();
		$data['url'] = 'admin/' . __FUNCTION__ . 'Form';
		$this->template($data);
	}

	public function situsList()
	{
		$tableName = 'situs';
		$join = array(
			array('account', 'account.pkey=' . $tableName . '.createon', 'left'),
			array('role', 'role.pkey=account.role', 'left'),
		);
		$select = '
			' . $tableName . '.*,
			account.name as createname,
			account.role as createrole,
			role.name as rolename,
		';


		$dataList = $this->getDataRow($tableName, $select, '', '', $join);
		$data['html']['title'] = 'List Situs';
		$data['html']['dataList'] = $dataList;
		$data['html']['tableName'] = $tableName;
		$data['html']['form'] = get_class($this) . '/situs';
		$data['url'] = 'admin/situsList';
		$this->template($data);
	}

	public function situs($id = '')
	{
		$tableName = 'situs';
		$tableDetail = '';
		$baseUrl = get_class($this) . '/' . __FUNCTION__;
		$detailRef = '';
		$formData = array(
			'pkey' => 'pkey',
			'name' => 'name',
			'head' => 'head',
			'createon' => 'sesionid',
			'time' => 'time',
			'country' => 'country',
			'deposit' => array('minDeposit', 'number'),
			'viadeposit' => 'viaDeposit',
			'platform' => 'platform',
			'content' => 'content',
			'loginlink' => 'loginLink',
			'registerlink' => 'registerLink',
			'bonuslink' => 'bonusLink',
			'promolink' => 'promoLink',
		);
		$formFile = array(
			'logoimg' => 'logoImg',
			'populerimg' => 'populerImg',
			'bannerimg' => 'bannerImg',
			'registerimg' => 'registerImg',
			'bonusimg' => 'bonusImg',
			'promoimg' => 'promoImg',
		);

		$formDetail = array();

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			//validate form
			$arrMsgErr = array();

			if (empty($_POST['action'])) redirect(base_url($baseUrl . 'List'));
			if (empty($_POST['name']))
				array_push($arrMsgErr, 'Nama Wajib Di isi');
			if (empty($_POST['content']))
				array_push($arrMsgErr, 'Content Wajib Di isi');
			if ($_POST['action'] == 'add')
				if (empty($_FILES['logoImg']['name']) || empty($_FILES['bannerImg']['name']) || empty($_FILES['registerImg']['name']) || empty($_FILES['bonusImg']['name']) || empty($_FILES['promoImg']['name']) || empty($_FILES['populerImg']['name']))
					array_push($arrMsgErr, "Semua Gambar wajib Di isi");

			$checkData = $this->getDataRow('situs', 'name', array('name' => $_POST['name']));
			if (count($checkData) > 1)
				array_push($arrMsgErr, 'Nama Situs Telah Digunakan silahkan pilih Nama lain');


			$this->session->set_flashdata('arrMsgErr', $arrMsgErr);
			//validate form

			if (empty(count($arrMsgErr)))
				switch ($_POST['action']) {
					case 'add':
						$refkey = $this->insert($tableName, $this->dataForm($formData));
						$this->insertDetail($tableDetail, $formDetail, $refkey);
						foreach ($formFile as $formFileKey => $formFileValue) {
							$upload = array(
								'postname' => $formFileValue,
								'tablename' => $tableName,
								'colomname' => $formFileKey,
								'pkey' => $refkey,
								'loop' => $formFileKey,
							);
							$this->uploadImg($upload);
						};
						redirect(base_url($baseUrl . 'List')); //wajib terakhir
						break;
					case 'update':
						print_r($_POST);
						die;
						$this->update($tableName, $this->dataForm($formData), array('pkey' => $_POST['pkey']));
						$this->updateDetail($tableDetail, $formDetail, $detailRef, $id);
						foreach ($formFile as $formFileKey => $formFileValue) {
							if (!empty($_FILES[$formFileValue]['name'])) {
								$upload = array(
									'postname' => $formFileValue,
									'tablename' => $tableName,
									'colomname' => $formFileKey,
									'pkey' => $_POST['pkey'],
									'loop' => $formFileKey,
									'replace' => true,
								);
								$this->uploadImg($upload);
							}
						};
						redirect(base_url($baseUrl . 'List'));
						break;
				}
		}

		if (!empty($id)) {
			$dataRow = $this->getDataRow($tableName, '*', array('pkey' => $id), 1)[0];
			$this->dataFormEdit($formData, $dataRow);
		}

		$data['html']['baseUrl'] = $baseUrl;
		$data['html']['title'] = 'Input Data Situs Website';
		$data['html']['err'] = $this->genrateErr();
		$data['url'] = 'admin/' . __FUNCTION__ . 'Form';
		$this->template($data);
	}

	public function headList()
	{
		$tableName = 'head';

		$join = array(
			array('account', 'account.pkey=' . $tableName . '.createon', 'left'),
			array('role', 'role.pkey=account.role', 'left'),
		);
		$select = '
			' . $tableName . '.*,
			account.name as createname,
			account.role as createrole,
			role.name as rolename,
		';

		$dataList = $this->getDataRow($tableName, $select, '', '', $join);
		$data['html']['title'] = 'List Head Seo';
		$data['html']['dataList'] = $dataList;
		$data['html']['tableName'] = $tableName;
		$data['html']['form'] = get_class($this) . '/head';
		$data['url'] = 'admin/headList';
		$this->template($data);
	}
	public function head($id = '')
	{
		$tableName = 'head';
		$tableDetail = '';
		$baseUrl = get_class($this) . '/' . __FUNCTION__;
		$detailRef = '';
		$formData = array(
			'pkey' => 'pkey',
			'name' => 'name',
			'html' => 'html',
			'createon' => 'sesionid',
			'time' => 'time',
		);
		$formDetail = array();

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST['action'])) redirect(base_url($baseUrl . 'List'));
			//validate form
			$arrMsgErr = array();
			if (empty($_POST['name']))
				array_push($arrMsgErr, 'nama Wajib Di isi');

			$this->session->set_flashdata('arrMsgErr', $arrMsgErr);
			//validate form
			if (empty(count($arrMsgErr)))
				switch ($_POST['action']) {
					case 'add':
						$refkey = $this->insert($tableName, $this->dataForm($formData));
						$this->insertDetail($tableDetail, $formDetail, $refkey);
						redirect(base_url($baseUrl . 'List')); //wajib terakhir
						break;
					case 'update':
						$this->update($tableName, $this->dataForm($formData), array('pkey' => $_POST['pkey']));
						$this->updateDetail($tableDetail, $formDetail, $detailRef, $id);
						redirect(base_url($baseUrl . 'List'));
						break;
				}
		}

		if (!empty($id)) {
			$dataRow = $this->getDataRow($tableName, '*', array('pkey' => $id), 1)[0];
			$this->dataFormEdit($formData, $dataRow);
		}

		$data['html']['baseUrl'] = $baseUrl;
		$data['html']['title'] = 'Input Data Transaksi Deposit';
		$data['html']['err'] = $this->genrateErr();
		$data['url'] = 'admin/' . __FUNCTION__ . 'Form';
		$this->template($data);
	}

	public function bannerList()
	{
		$tableName = 'banner';
		$join = array(
			array('account', 'account.pkey=' . $tableName . '.createon', 'left'),
			array('role', 'role.pkey=account.role', 'left'),
		);
		$select = '
			' . $tableName . '.*,
			account.name as createname,
			account.role as createrole,
			role.name as rolename,
		';


		$dataList = $this->getDataRow($tableName, $select, '', '', $join);
		$data['html']['title'] = 'List Banner';
		$data['html']['dataList'] = $dataList;
		$data['html']['tableName'] = $tableName;
		$data['html']['form'] = get_class($this) . '/banner';
		$data['url'] = 'admin/bannerList';
		$this->template($data);
	}
	public function banner($id = '')
	{
		$tableName = 'banner';
		$tableDetail = '';
		$baseUrl = get_class($this) . '/' . __FUNCTION__;
		$detailRef = '';
		$formData = array(
			'pkey' => 'pkey',
			'name' => 'name',
			'createon' => 'sesionid',
			'time' => 'time',
		);
		$formDetail = array();

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST['action'])) redirect(base_url($baseUrl . 'List'));
			//validate form
			$arrMsgErr = array();
			if (empty($_POST['name']))
				array_push($arrMsgErr, 'Nama Wajib Di isi');
			if ($_POST['action'] == 'add')
				if (empty($_FILES['banner']['name']))
					array_push($arrMsgErr, "Gambar wajib Di isi");

			$this->session->set_flashdata('arrMsgErr', $arrMsgErr);
			//validate form
			if (empty(count($arrMsgErr)))
				switch ($_POST['action']) {
					case 'add':
						$refkey = $this->insert($tableName, $this->dataForm($formData));
						$this->insertDetail($tableDetail, $formDetail, $refkey);
						$upload = array(
							'postname' => 'banner',
							'tablename' => $tableName,
							'colomname' => 'img',
							'pkey' => $refkey,
						);
						$this->uploadImg($upload);
						redirect(base_url($baseUrl . 'List')); //wajib terakhir
						break;
					case 'update':
						$this->update($tableName, $this->dataForm($formData), array('pkey' => $_POST['pkey']));
						$this->updateDetail($tableDetail, $formDetail, $detailRef, $id);
						$upload = array(
							'postname' => 'banner',
							'tablename' => $tableName,
							'colomname' => 'img',
							'pkey' => $_POST['pkey'],
							'replace' => true,
						);
						$this->uploadImg($upload);
						redirect(base_url($baseUrl . 'List'));
						break;
				}
		}

		if (!empty($id)) {
			$dataRow = $this->getDataRow($tableName, '*', array('pkey' => $id), 1)[0];
			$this->dataFormEdit($formData, $dataRow);
		}

		$data['html']['baseUrl'] = $baseUrl;
		$data['html']['title'] = 'Input Data ' . __FUNCTION__;
		$data['html']['err'] = $this->genrateErr();
		$data['url'] = 'admin/' . __FUNCTION__ . 'Form';
		$this->template($data);
	}


	public function contentList()
	{
		$tableName = 'content';
		$join = array(
			array('account', 'account.pkey=' . $tableName . '.createon', 'left'),
			array('role', 'role.pkey=account.role', 'left'),
		);
		$select = '
			' . $tableName . '.*,
			account.name as createname,
			account.role as createrole,
			role.name as rolename,
		';

		$dataList = $this->getDataRow($tableName, $select, '', '', $join);
		$data['html']['title'] = 'List content';
		$data['html']['dataList'] = $dataList;
		$data['html']['tableName'] = $tableName;
		$data['html']['form'] = get_class($this) . '/content';
		$data['url'] = 'admin/contentList';
		$this->template($data);
	}

	public function content($id = '')
	{
		$tableName = 'content';
		$tableDetail = '';
		$baseUrl = get_class($this) . '/' . __FUNCTION__;
		$detailRef = '';
		$formData = array(
			'pkey' => 'pkey',
			'name' => 'name',
			'createon' => 'sesionid',
			'time' => 'time',
			'content' => 'content',
			'privacy' => 'privacy',
			'about' => 'about',
		);
		$formDetail = array();

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST['action'])) redirect(base_url($baseUrl . 'List'));
			//validate form
			$arrMsgErr = array();
			if (empty($_POST['name']))
				array_push($arrMsgErr, 'Nama Wajib Di isi');
			if (empty($_POST['content']))
				array_push($arrMsgErr, 'Content Wajib Di isi');


			$this->session->set_flashdata('arrMsgErr', $arrMsgErr);
			//validate form
			if (empty(count($arrMsgErr)))
				switch ($_POST['action']) {
					case 'add':
						$refkey = $this->insert($tableName, $this->dataForm($formData));
						$this->insertDetail($tableDetail, $formDetail, $refkey);
						redirect(base_url($baseUrl . 'List')); //wajib terakhir
						break;
					case 'update':
						$this->update($tableName, $this->dataForm($formData), array('pkey' => $_POST['pkey']));
						$this->updateDetail($tableDetail, $formDetail, $detailRef, $id);
						redirect(base_url($baseUrl . 'List'));
						break;
				}
		}

		if (!empty($id)) {
			$dataRow = $this->getDataRow($tableName, '*', array('pkey' => $id), 1)[0];
			$this->dataFormEdit($formData, $dataRow);
		}

		$data['html']['baseUrl'] = $baseUrl;
		$data['html']['title'] = 'Input Data ' . __FUNCTION__;
		$data['html']['err'] = $this->genrateErr();
		$data['url'] = 'admin/' . __FUNCTION__ . 'Form';
		$this->template($data);
	}







	public function userList()
	{
		if ($this->session->userdata('role') != '1')
			redirect(base_url());
		$tableName = 'account';
		$join = array(
			array('role', 'role.pkey=account.role', 'left'),
		);
		$dataList = $this->getDataRow($tableName, 'account.*, role.name as rolename', '', '', $join, 'name ASC');
		$data['html']['title'] = 'List Account';
		$data['html']['dataList'] = $dataList;
		$data['html']['tableName'] = $tableName;
		$data['html']['form'] = get_class($this) . '/user';
		$data['url'] = 'admin/userList';
		$this->template($data);
	}

	public function user($id = '')
	{
		$tableName = 'account';
		$tableDetail = '';
		$baseUrl = get_class($this) . '/' . __FUNCTION__;
		$detailRef = '';
		$formData = array(
			'pkey' => 'pkey',
			'name' => 'name',
			'username' => 'username',
			'role' => 'role',
		);
		$formDetail = array();

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
			if (empty($_POST['action'])) redirect(base_url($baseUrl . 'List'));
			//validate form
			$arrMsgErr = array();
			if (empty($_POST['name']))
				array_push($arrMsgErr, "Password wajib Di isi");

			if (empty($_POST['password']) && $_POST['action'] == 'add')
				array_push($arrMsgErr, "Password wajib Di isi");
			if ($_POST['role'] == '1')
				unset($_POST['detailKey']);



			$this->session->set_flashdata('arrMsgErr', $arrMsgErr);
			//validate form
			if (empty(count($arrMsgErr)))
				switch ($_POST['action']) {
					case 'add':
						$formData['password'] = array('password', 'md5');
						$refkey = $this->insert($tableName, $this->dataForm($formData));
						$this->insertDetail($tableDetail, $formDetail, $refkey);
						redirect(base_url($baseUrl . 'List')); //wajib terakhir
						break;
					case 'update':
						if (!empty($_POST['password']))
							$formData['password'] = array('password', 'md5');
						$this->update($tableName, $this->dataForm($formData), array('pkey' => $_POST['pkey']));
						$this->updateDetail($tableDetail, $formDetail, $detailRef, $id);
						redirect(base_url($baseUrl . 'List'));
						break;
				}
		}

		if (!empty($id)) {
			$dataRow = $this->getDataRow($tableName, '*', array('pkey' => $id), 1)[0];
			$this->dataFormEdit($formData, $dataRow);
			$_POST['password'] = '';
		}
		$selVal = $this->getDataRow('role', '*', '', '', '', 'name ASC');
		$selValClass = $this->getDataRow('class', '*', '', '', '', 'name ASC');

		$data['html']['selValClass'] = $selValClass;
		$data['html']['baseUrl'] = $baseUrl;
		$data['html']['selVal'] = $selVal;
		$data['html']['title'] = 'Input Data ' . __FUNCTION__;
		$data['html']['err'] = $this->genrateErr();
		$data['url'] = 'admin/' . __FUNCTION__ . 'Form';
		$this->template($data);
	}

	public function ajax()
	{
		if (empty($_POST['action'])) {
			echo 'no action';
			die;
		}
		switch ($_POST['action']) {
			case 'delete':
				switch ($_POST['tbl']) {
					case 'deposit_transaction':
						$oldData = $this->getDataRow($_POST['tbl'], '*', array('pkey' => $_POST['pkey']));
						$this->delete($_POST['tbl'], 'pkey=' . $_POST['pkey']);

						//update customer
						$customerPoint = $this->getDataRow($_POST['tbl'], 'SUM(totalpoint) as totalpoint', array('customerkey' => $oldData[0]['customerkey']))[0]['totalpoint'];
						$customerTempPoint = $this->getDataRow('customer', 'temppoint', array('pkey' => $oldData[0]['customerkey']))[0]['temppoint'];
						$customerTempPoint = (int)$customerTempPoint - (int)$oldData[0]['totalpoint'];

						$customerRank = $this->getDataRow('level', 'pkey', '', '', '', 'level.rankpoint ASC')[0]['pkey'];
						if (!empty($customerPoint))
							$customerRank = $this->getDataRow('level', 'pkey', array('rankpoint <=' => $customerPoint), '1', '', '`level`.`rankpoint` DESC')[0]['pkey'];

						$dataUpdateCustomer = array(
							'point' => $customerPoint,
							'temppoint' => $customerTempPoint,
							'levelkey' => $customerRank,
						);
						$this->update('customer', $dataUpdateCustomer, array('pkey' => $oldData[0]['customerkey']));
						//update customer
						break;
					case 'level':
						$oldData = $this->getDataRow($_POST['tbl'], '*', array('pkey' => $_POST['pkey']));
						$this->load->helper("file");
						unlink('./uploads/' . $oldData[0]['img']);
						$this->delete($_POST['tbl'], 'pkey=' . $_POST['pkey']);
						break;
					default:
						$this->delete($_POST['tbl'], 'pkey=' . $_POST['pkey']);
						break;
				}
				break;
			case 'statuslink':
				$this->update('link', array('status' => '0'), array('status' => '1'));
				$this->update('link', array('status' => '1'), array('pkey' => $_POST['pkey']));
				break;
			case 'statusAds':
				$oldststus = $this->getDataRow('ads', 'status', array('pkey' => $_POST['pkey']));
				$status = '1';
				if ($oldststus[0]['status'] == '1')
					$status = '0';
				$this->update('ads', array('status' => $status), array('pkey' => $_POST['pkey']));
				break;
			case 'statusSitus':
				$oldststus = $this->getDataRow('situs', 'status', array('pkey' => $_POST['pkey']));
				$status = '1';
				if ($oldststus[0]['status'] == '1')
					$status = '0';
				$this->update('situs', array('status' => $status), array('pkey' => $_POST['pkey']));
				break;
			case 'statusPopuler':
				$oldststus = $this->getDataRow('situs', 'populerstatus', array('pkey' => $_POST['pkey']));
				$status = '1';
				if ($oldststus[0]['populerstatus'] == '1')
					$status = '0';
				$this->update('situs', array('populerstatus' => $status), array('pkey' => $_POST['pkey']));
				break;
			case 'statusHead':
				$this->update('head', array('status' => '0'), array('status' => '1'));
				$this->update('head', array('status' => '1'), array('pkey' => $_POST['pkey']));
				break;
			default:
				echo  $_POST['action'] . ' action is not in the list';
				break;
		}
	}

	public function export($action, $param)
	{
		switch ($action) {
			case 'student':
				$exportData = array();
				$dataSelect = '
				students.*,
				class.name as classname,
				students_detail.memorikey
				';
				$dataJoin = array(
					array('class', 'class.pkey=' . $param, 'left'),
					array('students_detail', 'students_detail.studentkey=students.pkey', 'left'),
					array('student_memori_detail', 'students_detail.studentkey=students.pkey', 'left'),
				);
				$data = $this->getDataRow('students', $dataSelect, array('classkey' => $param), '', $dataJoin, 'students.name ASC');

				foreach ($data as $dataKey => $dataValue) {
					$subExportData = array(
						'studentname' => $dataValue['name'],
						'classname' => $dataValue['classname'],
					);
					print_r($dataValue);
					echo '<br>';
					echo '<br>';
				}

				break;
			case 'label':
				# code...
				break;
			default:
				# code...
				break;
		}
	}
}

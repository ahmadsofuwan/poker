<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends MY_Controller
{

	public function index()
	{
		$dataCompany = $this->getDataRow('profile_company', '*');
		$head = $this->getDataRow('head', 'html', array('status' => '1'));
		$banner = $this->getDataRow('banner', '*', array('status' => '1'));
		$content = $this->getDataRow('content', '*', array('status' => '1'));
		$ads = $this->getDataRow('ads', '*', array('status' => '1'));
		$situs = $this->getDataRow('situs', '*', array('status' => '1'));

		$data['html']['situs'] = $situs;
		$data['html']['ads'] = $ads;
		$data['html']['content'] = $content[0];
		$data['html']['banner'] = $banner;
		$data['html']['head'] = $head;
		$data['html']['dataCompany'] = $dataCompany;
		$data['html']['title'] = 'Laskar138';
		$data['url'] = 'public/body';
		$this->templatePublic($data);
	}
}

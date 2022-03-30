<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alternatif extends MY_Controller
{

	public function _remap($param)
	{
		$this->index($param);
	}
	public function index($param)
	{
		$param = str_replace("%20", " ", $param);
		$situs = $this->getDataRow('situs', '*', array('name' => $param));
		$ads = $this->getDataRow('ads', '*', array('status' => '1'), 4);
		if (empty(count($situs)))
			redirect(base_url());
		$data['html']['ads'] = $ads;
		$data['html']['situs'] = $situs[0];
		$data['html']['title'] = $param;
		$data['url'] = 'public/alternatif';
		$this->templatePublic($data);
	}
}

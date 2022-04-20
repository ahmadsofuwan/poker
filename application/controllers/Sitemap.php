<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sitemap extends MY_Controller
{

	public function index()
	{
		$data['situs'] = $this->getDataRow('situs', '*', array('status' => '1'));;
		$this->load->view('sitemap/index', $data);
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		notLogin();
	}

	public function index()
	{
		$data['page_title'] = 'Dasboard';

		$this->load->view('backend/dashboard/index', $data);
	}
}

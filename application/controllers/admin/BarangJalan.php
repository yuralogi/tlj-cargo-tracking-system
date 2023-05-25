<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BarangJalan extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		notLogin();
	}
	public function index()
	{
		$data['page_title'] = 'Data Barang Di Perjalanan';
		$this->load->model('m_tlj');
		$data['db_tljcargo'] = $this->m_tlj->getData();
		$this->load->view('backend/businesslogic/v_barang_jalan', $data);
	}
}
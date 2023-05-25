<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BarangLampung extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		notLogin();
	}

	public function index()
	{
		// $this->data['page_title'] = 'Dashboard';
		$data['page_title'] = 'Data Barang Lampung';
		$this->load->model('m_tlj');

		$data['sub_title'] = 'Pilih Barang untuk Konfirmasi Sampai Ke Pelanggan';
		$data['db_tljcargo'] = $this->m_tlj->getData();
		$this->load->view('backend/businesslogic/v_barang_lampung', $data);
	}
}

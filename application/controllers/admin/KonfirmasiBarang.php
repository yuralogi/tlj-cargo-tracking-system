<?php
defined('BASEPATH') or exit('No direct script access allowed');

class KonfirmasiBarang extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		notLogin();
		isAdminJakarta();
	}

	public function index()
	{
		$data['page_title'] = 'Barang Sampai';
		$data['sub_title'] = 'Konfirmasi Barang yang Telah Sampai di Lampung';
		$this->load->model('m_tlj');

		$data['db_tljcargo'] = $this->m_tlj->getData();
		$this->load->view('backend/businesslogic/v_barang_konfirmasi', $data);
	}

	public function confirmBarang()
	{
		if ($this->session->userdata('role') == 2) {
			if (isset($_POST['confirmBtn'])) {
				if (!empty($this->input->post('checkbox_value'))) {
					$checkedEmp = $this->input->post('checkbox_value');
					$checked_id = [];

					foreach ($checkedEmp as $tlj) {
						array_push($checked_id, $tlj);
					}
					$this->load->model('m_tlj');
					$this->m_tlj->receiveData($checked_id);

					$this->session->set_flashdata('flash', 'dikirim');
					redirect('admin/konfirmasibarang');
				} else {
					$this->session->set_flashdata('flash', 'gagal-kirim');
					redirect('admin/konfirmasibarang');
				}
			}
		} else {

			redirect('index.html');
		}
	}
}

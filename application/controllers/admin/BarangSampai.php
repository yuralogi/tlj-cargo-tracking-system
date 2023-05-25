<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BarangSampai extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		notLogin();
		isAdminJakarta();
	}

	public function index()
	{
		$data['page_title'] = 'Konfirmasi Barang';
		$data['sub_title'] = 'Konfirmasi Barang yang Sampai Di Lampung';
		$this->load->model('m_tlj');

		$data['db_tljcargo'] = $this->m_tlj->arriveData();
		$this->load->view('backend/businesslogic/v_barang_lampung', $data);
	}

	public function arriveBarang()
	{
		if ($this->session->userdata('role') == 2) {
			if (isset($_POST['arriveBtn'])) {
				if (!empty($this->input->post('checkbox_value'))) {
					$checkedEmp = $this->input->post('checkbox_value');
					$checked_id = [];

					foreach ($checkedEmp as $tlj) {
						array_push($checked_id, $tlj);
					}
					$this->load->model('m_tlj');
					$this->m_tlj->arriveData($checked_id);

					$this->session->set_flashdata('flash', 'dikirim');
					redirect('admin/baranglampung');
				} else {
					$this->session->set_flashdata('flash', 'gagal-kirim');
					redirect('admin/baranglampung');
				}
			}
		} else {

			redirect('index.html');
		}
	}
}

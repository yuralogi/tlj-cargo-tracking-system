<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BarangKirim extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		notLogin();
		isAdminLampung();
	}

	public function index()
	{
		$data['page_title'] = 'Kirim Barang';
		$data['sub_title'] = 'Pilih Barang untuk Dikirim ke Lampung';
		$this->load->model('m_tlj');

		$data['db_tljcargo'] = $this->m_tlj->getData();
		$this->load->view('backend/businesslogic/v_barang_kirim', $data);
	}

	public function sendBarang()
	{
		if ($this->session->userdata('role') == 1) {
			if (isset($_POST['sendBtn'])) {
				if (!empty($this->input->post('checkbox_value'))) {
					$checkedEmp = $this->input->post('checkbox_value');
					$checked_id = [];

					foreach ($checkedEmp as $tlj) {
						array_push($checked_id, $tlj);
					}
					$this->load->model('m_tlj');
					$this->m_tlj->sendData($checked_id);

					$this->session->set_flashdata('flash', 'dikirim');
					redirect('admin/barangkirim');
				} else {
					$this->session->set_flashdata('flash', 'gagal-kirim');
					redirect('admin/barangkirim');
				}
			}
		} else {

			redirect('index.html');
		}
	}
}

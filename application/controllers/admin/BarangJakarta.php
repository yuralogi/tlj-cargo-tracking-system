<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BarangJakarta extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		notLogin();
	}

	public function index()
	{
		$data['page_title'] = 'Data Barang Jakarta';
		$this->load->model('m_tlj');

		$data['db_tljcargo'] = $this->m_tlj->getData();
		$this->load->view('backend/businesslogic/v_barang_jakarta', $data);
	}

	public function inputBarang()
	{
		if ($this->session->userdata('role') == 1) {


			$nama_pengirim = $this->input->post('namaPengirim');
			$nama_penerima = $this->input->post('namaPenerima');
			$nama_barang = $this->input->post('namaBarang');
			$alamat_penerima = $this->input->post('alamatPenerima');
			$tlp_pengirim = $this->input->post('tlpPengirim');
			$tlp_penerima = $this->input->post('tlpPenerima');
			$status_barang = "DITERIMA DI JAKARTA";
			$waktu_terima = date('d F Y H:i:s');
			$cara_packing = $this->input->post('jenisPacking');
			$jumlah_barang = $this->input->post('jumlahBarang');
			$no_resi = "empty";

			$data = array(
				'no_resi' => $no_resi,
				'nama_barang' => $nama_barang,
				'nama_pengirim' => $nama_pengirim,
				'nama_penerima' => $nama_penerima,
				'alamat_penerima' => $alamat_penerima,
				'tlp_pengirim' => $tlp_pengirim,
				'tlp_penerima' => $tlp_penerima,
				'status_barang' => $status_barang,
				'cara_packing' => $cara_packing,
				'jumlah_barang' => $jumlah_barang,
				'waktu_terima' => $waktu_terima,

			);

			$this->M_tlj->inputData($data, 'tbl_barang');


			redirect('admin/barangjakarta/inputResi');
		} else {
			redirect('admin/index.html');
		}
	}

	public function inputResi()
	{
		$row = $this->db->select("*")->limit(1)->order_by('id_barang', "DESC")->get("tbl_barang")->row();
		// $formatingDate =  date('dmYHis');
		$formatingDate =  date('YmdHis');
		$resultResi =    $formatingDate . $row->id_barang;
		$data = $resultResi;


		// $this->M_tlj->inputData($data, 'tbl_barang');
		$this->M_tlj->inputResi($data);
		$this->session->set_flashdata('flash', 'ditambahkan');

		redirect('admin/barangjakarta');
	}
}

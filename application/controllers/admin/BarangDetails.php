<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BarangDetails extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        notLogin();
    }

    public function detail($no_resi)
    {
        $this->load->model('m_tlj');
        $data['page_title'] = 'Detail Data Barang';
        $detail = $this->m_tlj->detailBarang($no_resi);
        $data['detail'] = $detail;

        $this->load->view('backend/businesslogic/v_barang_details', $data);
    }
}
<?php
defined('BASEPATH') or exit('No direct script access allowed');

class BarangSampaiPelanggan extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        notLogin();
    }

    public function index()
    {
        // $this->data['page_title'] = 'Dashboard';
        $data['page_title'] = 'Data Barang Sampai Di Pelanggan ';

        $this->load->model('m_tlj');

        $data['db_tljcargo'] = $this->m_tlj->getData();
        $this->load->view('backend/businesslogic/v_barang_sampai', $data);
    }

    public function arriveBarang()
    {
        if ($this->session->userdata('role') == 2) {
            if (isset($_POST['sendBtn'])) {
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

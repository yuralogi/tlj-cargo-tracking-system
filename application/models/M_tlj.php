<?php

class M_tlj extends CI_Model
{
    public function getData()
    {
        return $this->db->get('tbl_barang')->result_array();
    }

    public function inputData($data)
    {

        $this->db->insert('tbl_barang', $data);
    }

    public function sendData($checked_id)
    {
        $this->db->where_in('id_barang', $checked_id);


        $data = array(
            'status_barang' => "SEDANG DIKIRIM"
        );

        return $this->db->update('tbl_barang', $data);
    }

    public function receiveData($checked_id)
    {
        $this->db->where_in('id_barang', $checked_id);


        $data = array(
            'status_barang' => "DITERIMA DI LAMPUNG"
        );


        return $this->db->update('tbl_barang', $data);
    }


    public function arriveData($checked_id)
    {
        $this->db->where_in('id_barang', $checked_id);


        $data = array(
            'status_barang' => "BARANG SAMPAI DI TUJUAN",
            'waktu_sampai' => date('d F Y H:i:s'),
        );


        return $this->db->update('tbl_barang', $data);
    }

    // public function getLastId()
    // {
    //     return $this->db->get('tbl_barang');
    // }


    public function inputResi($data)
    {
        $this->db->set('no_resi', $data);
        $this->db->where('no_resi', 'empty');
        $this->db->update('tbl_barang');
    }

    public function detailBarang($no_resi)
    {
        $query = $this->db->get_where('tbl_barang', array('no_resi' => $no_resi))->row();

        return $query;
    }
}

<?php

class Servis_model extends CI_model
{

    public function hapusData($id)
    {
        $this->db->where('id_servis', $id);
        $this->db->delete('servis');
    }

    public function cariDataServis($keyword)
    {
        $this->db->select('*');
        $this->db->from('servis');
        $this->db->like('kode_servis', $keyword);
        return $this->db->get()->result_array();
    }
}

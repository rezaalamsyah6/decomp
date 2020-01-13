<?php

class Kategori_model extends CI_Model
{
    public function getAllKategori()
    {
        return $this->db->get('kategori_produk')->result_array();
    }

    public function countAllKategori()
    {
        return $this->db->get('kategori_produk')->num_rows();
    }
}

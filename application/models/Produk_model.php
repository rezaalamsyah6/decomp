<?php

class Produk_model extends CI_model
{
    public function getAllProduk()
    {
        $query = "SELECT id_produk, produk.nama_produk, produk.image , produk.stok ,produk.deskripsi , kategori_produk.nama_kategori , produk.harga 
        FROM produk JOIN kategori_produk 
        ON kategori_produk.id_kategori = produk.id_kategori";

        return $this->db->query($query)->result_array();
    }

    public function countAllProduk()
    {
        return $this->db->get('produk')->num_rows();
    }

    public function hapusData($id)
    {
        $this->db->where('id_produk', $id);
        $this->db->delete('produk');
    }

    public function produkKategori($id)
    {
        if (!empty($id)) {
            $sql = "SELECT id_produk, produk.nama_produk, produk.image , produk.stok ,produk.deskripsi , kategori_produk.nama_kategori , produk.harga 
            FROM produk JOIN kategori_produk 
            ON kategori_produk.id_kategori = produk.id_kategori";
            $query = $this->db->query($sql, $id);
        } else {
            $sql = "SELECT id_produk, produk.nama_produk, produk.image , produk.stok ,produk.deskripsi , kategori_produk.nama_kategori , produk.harga 
            FROM produk JOIN kategori_produk 
            ON kategori_produk.id_kategori = produk.id_kategori";
            $query = $this->db->query($sql);
        }

        if ($query->num_rows() > 0) {
            $result = $query->result_array();
            $query->free_result();
            return $result;
        } else {
            return array();
        }
    }
}

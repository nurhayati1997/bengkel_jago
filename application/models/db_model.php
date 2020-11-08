<?php
class Db_model extends CI_Model
{
    public function insert($tabel, $data)
    {
        $this->db->insert($tabel, $data);
    }

    public function get_where($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
    public function insert_get($tabel, $data)
    {
        $this->db->insert($tabel, $data);
        return $this->db->insert_id();
    }
    public function get_query($query)
    {
        return $this->db->query($query);
    }

    public function get_all($tabel)
    {
        return $this->db->get($tabel);
    }

    public function update($tabel, $data, $where)
    {
        $this->db->update($tabel, $data, $where);
    }

    public function delete($tabel, $where)
    {
        $this->db->delete($tabel, $where);
    }
    function getWarningStock($tabel)
    {
        $this->db->order_by('stok_barang ASC');
        $this->db->limit(10, 0);
        $this->db->where("hapus", 0);
        return $this->db->get($tabel);
    }

    function getTerlaris()
    {
        $this->db->select('*, SUM(jumlah_penjualan)');
        $this->db->where('tgl_transaksi >=', date("Y/m") . "/01 00:00:00");
        $this->db->where('tgl_transaksi <=', date("Y/m") . "/31 23:59:59");
        $this->db->group_by('id_barang');
        $this->db->order_by('SUM(jumlah_penjualan) DESC');
        return $this->db->get('vw_penjualan', 5);
    }

    function getJumlahTerjual()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->db->select('SUM(jumlah_penjualan)');
        $this->db->where('tgl_transaksi >=', date("Y/m/d") . " 00:00:00");
        $this->db->where('tgl_transaksi <=', date("Y/m/d") . " 23:59:59");
        return $this->db->get('vw_penjualan');
    }

    function getJumlahTerbeli()
    {
        date_default_timezone_set('Asia/Jakarta');
        $this->db->select('SUM(jumlah_pembelian)');
        $this->db->where('tgl_pembelian >=', date("Y/m/d") . " 00:00:00");
        $this->db->where('tgl_pembelian <=', date("Y/m/d") . " 23:59:59");
        $this->db->group_by('tgl_pembelian');
        return $this->db->get('tbl_pembelian');
    }
}

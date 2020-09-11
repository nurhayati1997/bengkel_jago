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
    function getDataAgregat($tgl, $col)
    {
        $query = $this->db->where($col, $tgl)->get('vwpasien');

        return $query->result();
    }
    function getDataStatus($col, $table)
    {
        $query = $this->db->select($col)->get($table)->result();
        return $query;
    }
}

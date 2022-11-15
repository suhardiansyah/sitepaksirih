<?php

class M_mapel extends CI_Model
{
    public function tampil_data()
    {
        return $this->db->get('mapel');
    }

    public function detail_mapel($id = null)
    {
        $query = $this->db->get_where('mapel', array('id' => $id))->row();
        return $query;
    }

    public function delete_mapel($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function update_mapel($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    public function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    function get_mapelguru()
    {
        $this->db->select('mapel.id AS id,nama_guru,n_mapel,cover');
        $this->db->from('mapel');
        $this->db->join('guru', 'mapel.id_guru = guru.id', 'inner');
        $query = $this->db->get();
        return $query;
    }
}

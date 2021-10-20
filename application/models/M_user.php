<?php
class M_user extends CI_Model
{
    function getdata($tabel)
    {
        return $this->db->get($tabel)->result();
    }
    public function getlimit($tabel, $where, $limit)
    {
        return $this->db->limit($limit)->get_where($tabel, $where)->result();
    }
    public function getfirst($tabel, $where)
    {
        return $this->db->get_where($tabel, $where)->first_row();
    }
    public function artikel($where, $limit)
    {
        $this->db->select('*');
        $this->db->from('anggota');
        $this->db->join('artikel', 'anggota.id_anggota = artikel.author');
        $this->db->join('kategori', 'kategori.id_kategori = artikel.id_kategori');
        $this->db->where($where);
        $this->db->limit($limit);
        $query = $this->db->get()->result();
        return $query;
    }
}

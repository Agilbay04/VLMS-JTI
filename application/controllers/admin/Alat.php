<?php

class Alat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->helper('string');
    }
    public function index()
    {
        $data['alat'] = $this->M_admin->getjoin('alat', 'grup_penelitian', 'alat.id_grup=grup_penelitian.id_grup');
        $this->load->view('admin/header');
        $this->load->view('admin/alat/list', $data);
        $this->load->view('admin/footer');
    }
    public function simpan()
    {
        $nama = $this->input->post('nama');
        $jumlah = $this->input->post('jumlah');
        $kelompok = $this->input->post('kelompok');
        $data = [
            'nama_alat' => $nama,
            'id_grup' => $kelompok,
            'jumlah' => $jumlah
        ];
        $this->M_admin->insertdata('alat', $data);
        redirect(base_url('admin/alat/'));
    }
    public function new()
    {
        $data['kelompok'] = $this->M_admin->getdata('grup_penelitian');
        $this->load->view('admin/header');
        $this->load->view('admin/alat/new', $data);
        $this->load->view('admin/footer');
    }
    public function update()
    {
        $nama = $this->input->post('nama');
        $jumlah = $this->input->post('jumlah');
        $kelompok = $this->input->post('kelompok');
        $data = [
            'nama_alat' => $nama,
            'id_grup' => $kelompok,
            'jumlah' => $jumlah
        ];
        $this->M_admin->updatedata('alat', ['id_alat' =>  $this->input->post('kode')], $data);
        redirect(base_url('admin/alat/'));
    }
    public function edit($id)
    {
        $data['alat'] = $this->M_admin->getjoinfilter('alat', 'grup_penelitian', 'alat.id_grup=grup_penelitian.id_grup', ['id_alat' => $id]);
        $data['kelompok'] = $this->M_admin->getdata('grup_penelitian');
        $this->load->view('admin/header');
        $this->load->view('admin/alat/edit', $data);
        $this->load->view('admin/footer');
    }
    public function hapus($id)
    {
        $proses = $this->M_admin->delete('alat', ['id_alat' => $id]);
        if ($proses) {
            redirect(base_url('admin/grup/'));
        }
    }
}

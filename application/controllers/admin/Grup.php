<?php

class Grup extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->helper('string');
    }
    public function index()
    {
        $data['kelompok'] = $this->M_admin->getdata('grup_penelitian');
        $this->load->view('admin/header');
        $this->load->view('admin/grup/list', $data);
        $this->load->view('admin/footer');
    }
    public function simpan()
    {
        $nama = $this->input->post('nama');
        $lab = $this->input->post('lab');
        $kampus = $this->input->post('kampus');
        $no_hp = $this->input->post('no_hp');
        $fax = $this->input->post('fax');
        $lokasi = $this->input->post('lokasi');
        $email = $this->input->post('email');
        $data = [
            'nama_grup' => $nama,
            'nama_lab' => $lab,
            'nama_kampus' => $kampus,
            'lokasi' => $lokasi,
            'no_hp' => $no_hp,
            'email' => $email,
            'fax' => $fax
        ];
        $this->M_admin->insertdata('grup_penelitian', $data);
        redirect(base_url('admin/grup/'));
    }
    public function new()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/grup/new');
        $this->load->view('admin/footer');
    }
    public function update()
    {
        $nama = $this->input->post('nama');
        $lab = $this->input->post('lab');
        $kampus = $this->input->post('kampus');
        $no_hp = $this->input->post('no_hp');
        $fax = $this->input->post('fax');
        $lokasi = $this->input->post('lokasi');
        $email = $this->input->post('email');
        $data = [
            'nama_grup' => $nama,
            'nama_lab' => $lab,
            'nama_kampus' => $kampus,
            'lokasi' => $lokasi,
            'no_hp' => $no_hp,
            'email' => $email,
            'fax' => $fax
        ];
        $this->M_admin->updatedata('grup_penelitian', ['id_grup' =>  $this->input->post('kode')], $data);
        redirect(base_url('admin/grup/'));
    }
    public function edit($id)
    {
        $data['grup'] = $this->M_admin->getwhere('grup_penelitian', ['id_grup' => $id]);
        $data['kelompok'] = $this->M_admin->getdata('grup_penelitian');
        $this->load->view('admin/header');
        $this->load->view('admin/grup/edit', $data);
        $this->load->view('admin/footer');
    }
    public function hapus($id)
    {
        $proses = $this->M_admin->delete('grup_penelitian', ['id_grup' => $id]);
        if ($proses) {
            redirect(base_url('admin/grup/'));
        }
    }
}

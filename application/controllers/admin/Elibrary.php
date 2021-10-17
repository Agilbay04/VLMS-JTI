<?php

class Elibrary extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->helper('string');
        is_logged_in();
    }
    public function index()
    {
        $data['elibrary'] = $this->M_admin->getdata('elibrary');
        $this->load->view('admin/header');
        $this->load->view('admin/elibrary/list', $data);
        $this->load->view('admin/footer');
    }
    public function simpan()
    {
        $judul = $this->input->post('judul');
        $link = $this->input->post('link');
        $data = [
            'judul' => $judul,
            'link' => $link
        ];
        $this->M_admin->insertdata('elibrary', $data);
        redirect(base_url('admin/elibrary/'));
    }
    public function new()
    {
        $data['anggota'] = $this->M_admin->getwhere('anggota', ['status' => 'Dosen']);
        $this->load->view('admin/header');
        $this->load->view('admin/elibrary/new', $data);
        $this->load->view('admin/footer');
    }
    public function update()
    {
        $judul = $this->input->post('judul');
        $link = $this->input->post('link');
        $data = [
            'judul' => $judul,
            'link' => $link
        ];
        $this->M_admin->updatedata('elibrary', ['id_library' =>  $this->input->post('kode')], $data);
        redirect(base_url('admin/elibrary/'));
    }
    public function edit($id)
    {
        $data['elibrary'] = $this->M_admin->getwhere('elibrary', ['id_library' => $id]);

        $this->load->view('admin/header');
        $this->load->view('admin/elibrary/edit', $data);
        $this->load->view('admin/footer');
    }
    public function hapus($id)
    {
        $proses = $this->M_admin->delete('elibrary', ['id_library' => $id]);
        if ($proses) {
            redirect(base_url('admin/grup/'));
        }
    }
}

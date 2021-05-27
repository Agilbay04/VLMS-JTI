<?php

class Anggota extends CI_Controller
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
        $this->load->view('admin/newanggota', $data);
        $this->load->view('admin/footer');
    }
    public function simpan()
    {
        $config = [
            'file_name' => random_string('alnum', 15),
            'upload_path' => './img/anggota',
            'allowed_types' => 'gif|jpg|png',
            // 'max_size' => 1000, 'max_width' => 1000,
            // 'max_height' => 1000
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', 'Gambar Harap Di Upload!!!');
            redirect(base_url('admin/anggota/'));
        } else {
            $file = $this->upload->data();
            $nama = $this->input->post('nama');
            $bidang = $this->input->post('bidang');
            $status = $this->input->post('status');
            $kelompok = $this->input->post('kelompok');
            $data = ['gambar' => $file['file_name'], 'bidang' => $bidang, 'nama_anggota' => $nama, 'status' => $status, 'id_grup' => $kelompok];
            $this->M_admin->insertdata('anggota', $data);
            redirect(base_url('admin/anggota/'));
        }
    }
    public function new()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/newartikel');
        $this->load->view('admin/footer');
    }
}

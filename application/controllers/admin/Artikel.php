<?php

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->helper('string');
    }
    public function index()
    {
        $data['artikel'] = $this->M_admin->getjoin('artikel', 'kategori', 'artikel.id_kategori=kategori.id_kategori');
        $this->load->view('admin/header');
        $this->load->view('admin/artikel/list', $data);
        $this->load->view('admin/footer');
    }
    public function new()
    {
        $data['kelompok'] = $this->M_admin->getdata('grup_penelitian');
        $data['anggota'] = $this->M_admin->getdata('anggota');
        $data['kategori'] = $this->M_admin->getdata('kategori');
        $this->load->view('admin/header');
        $this->load->view('admin/artikel/new', $data);
        $this->load->view('admin/footer');
    }
    public function simpan()
    {
        $config = [
            'file_name' => random_string('alnum', 15),
            'upload_path' => './img/artikel',
            'allowed_types' => 'gif|jpg|png',
            // 'max_size' => 1000, 'max_width' => 1000,
            // 'max_height' => 1000
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', 'Gambar Harap Di Upload!!!');
            redirect(base_url('admin/artikel/new'));
        } else {
            $file = $this->upload->data();
            $judul = $this->input->post('judul');
            $author = $this->input->post('author');
            $isi = $this->input->post('isi');
            $kelompok = $this->input->post('kelompok');
            $kategori = $this->input->post('kategori');
            $data = ['gambar' => $file['file_name'], 'isi' => $isi, 'author' => $author, 'id_grup' => $kelompok, 'id_kategori' => $kategori, 'judul' => $judul];
            $this->M_admin->insertdata('artikel', $data);
            redirect(base_url('admin/artikel/new'));
        }
    }
    public function edit($id)
    {
        $data['artikel'] = $this->M_admin->edit_artikel($id);
        $data['kelompok'] = $this->M_admin->getdata('grup_penelitian');
        $data['anggota'] = $this->M_admin->getdata('anggota');
        $data['kategori'] = $this->M_admin->getdata('kategori');
        $this->load->view('admin/header');
        $this->load->view('admin/artikel/edit', $data);
        $this->load->view('admin/footer');
    }
    public function update()
    {
        $gambar = $_FILES['gambar']['name'];
        if (empty($gambar)) {
            $judul = $this->input->post('judul');
            $author = $this->input->post('author');
            $isi = $this->input->post('isi');
            $kelompok = $this->input->post('kelompok');
            $kategori = $this->input->post('kategori');
            $data = ['isi' => $isi, 'author' => $author, 'id_grup' => $kelompok, 'id_kategori' => $kategori, 'judul' => $judul];
            $this->M_admin->updatedata('artikel', ['id' =>  $this->input->post('kode')], $data);
            redirect(base_url('admin/artikel/'));
        } else {
            $config = [
                'file_name' => random_string('alnum', 8),
                'upload_path' => './img/pembicara',
                'allowed_types' => 'gif|jpg|png',
            ];
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error['error']);
                redirect(base_url('admin/pembicara/'));
            } else {
                $file = $this->upload->data();
                $judul = $this->input->post('judul');
                $author = $this->input->post('author');
                $isi = $this->input->post('isi');
                $kelompok = $this->input->post('kelompok');
                $kategori = $this->input->post('kategori');
                $data = ['gambar' => $file['file_name'], 'isi' => $isi, 'author' => $author, 'id_grup' => $kelompok, 'id_kategori' => $kategori, 'judul' => $judul];
                $this->M_admin->updatedata('artikel', ['id' =>  $this->input->post('kode')], $data);
                redirect(base_url('admin/pembicara/'));
            }
        }
    }
}

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
        $data['anggota'] = $this->M_admin->getdata('anggota');
        $data['kelompok'] = $this->M_admin->getdata('grup_penelitian');
        $this->load->view('admin/header');
        $this->load->view('admin/anggota/list', $data);
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
        $data['kelompok'] = $this->M_admin->getdata('grup_penelitian');
        $this->load->view('admin/header');
        $this->load->view('admin/anggota/new', $data);
        $this->load->view('admin/footer');
    }
    public function update()
    {
        $gambar = $_FILES['gambar']['name'];
        if (empty($gambar)) {
            $nama = $this->input->post('nama');
            $bidang = $this->input->post('bidang');
            $status = $this->input->post('status');
            $kelompok = $this->input->post('kelompok');
            $data = ['bidang' => $bidang, 'nama_anggota' => $nama, 'status' => $status, 'id_grup' => $kelompok];
            $this->M_admin->updatedata('anggota', ['id_anggota' =>  $this->input->post('kode')], $data);
            redirect(base_url('admin/anggota/'));
        } else {
            $config = [
                'file_name' => random_string('alnum', 8),
                'upload_path' => './img/anggota',
                'allowed_types' => 'gif|jpg|png',
                // 'max_size' => 1000, 'max_width' => 1000,
                // 'max_height' => 1000
            ];
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error['error']);
                redirect(base_url('admin/pembicara/'));
            } else {
                $file = $this->upload->data();
                $nama = $this->input->post('nama');
                $bidang = $this->input->post('bidang');
                $status = $this->input->post('status');
                $kelompok = $this->input->post('kelompok');
                $data = ['gambar' => $file['file_name'], 'bidang' => $bidang, 'nama_anggota' => $nama, 'status' => $status, 'id_grup' => $kelompok];
                $this->M_admin->updatedata('anggota', ['id_anggota' =>  $this->input->post('kode')], $data);
                redirect(base_url('admin/pembicara/'));
            }
        }
    }
    public function edit($id)
    {
        $data['anggota'] = $this->M_admin->getjoinfilter('anggota', 'grup_penelitian', 'anggota.id_grup=grup_penelitian.id_grup', ['id_anggota' => $id]);
        $data['kelompok'] = $this->M_admin->getdata('grup_penelitian');
        $this->load->view('admin/header');
        $this->load->view('admin/anggota/edit', $data);
        $this->load->view('admin/footer');
    }
}

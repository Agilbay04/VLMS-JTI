<?php

class Dokumentasi extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->helper('string');
    }
    public function index()
    {
        // $data['kelompok'] = $this->M_admin->getdata('grup_penelitian');
        $data['dokumentasi'] = $this->M_admin->getdata('dokumentasi');
        $data['kelompok'] = $this->M_admin->getdata('grup_penelitian');
        $this->load->view('admin/header');
        $this->load->view('admin/dokumentasi/list', $data);
        $this->load->view('admin/footer');
    }
    public function simpan()
    {
        $config = [
            'file_name' => random_string('alnum', 15),
            'upload_path' => './img/dokumentasi',
            'allowed_types' => 'gif|jpg|png',
            // 'max_size' => 1000, 'max_width' => 1000,
            // 'max_height' => 1000
        ];
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('gambar')) {
            $error = array('error' => $this->upload->display_errors());
            $this->session->set_flashdata('error', 'Gambar Harap Di Upload!!!');
            redirect(base_url('admin/dokumentasi/'));
        } else {
            $file = $this->upload->data();
            $deskripsi = $this->input->post('deskripsi');
            $kelompok = $this->input->post('kelompok');
            $data = ['gambar' => $file['file_name'], 'deskripsi' => $deskripsi, 'id_grup' => $kelompok];
            $this->M_admin->insertdata('dokumentasi', $data);
            redirect(base_url('admin/dokumentasi/'));
        }
    }
    public function getdokumentasi()
    {
        $id = $this->input->get('id');
        $data = $this->M_admin->getwhere('dokumentasi', ['id_dokumentasi' => $id]);
        echo json_encode($data);
    }
    public function update()
    {
        $gambar = $_FILES['gambar']['name'];
        if (empty($gambar)) {
            $deskripsi = $this->input->post('deskripsi');
            $kelompok = $this->input->post('kelompok');
            $data = ['deskripsi' => $deskripsi, 'id_grup' => $kelompok];
            $this->M_admin->updatedata('dokumentasi', ['id_dokumentasi' =>  $this->input->post('kode')], $data);
            redirect(base_url('admin/dokumentasi/'));
        } else {
            $config = [
                'file_name' => random_string('alnum', 8),
                'upload_path' => './img/dokumentasi',
                'allowed_types' => 'gif|jpg|png',
                // 'max_size' => 1000, 'max_width' => 1000,
                // 'max_height' => 1000
            ];
            $this->load->library('upload', $config);
            if (!$this->upload->do_upload('gambar')) {
                $error = array('error' => $this->upload->display_errors());
                $this->session->set_flashdata('error', $error['error']);
                redirect(base_url('admin/dokumentasi/'));
            } else {
                $file = $this->upload->data();
                $deskripsi = $this->input->post('deskripsi');
                $kelompok = $this->input->post('kelompok');
                $data = ['gambar' => $file['file_name'], 'deskripsi' => $deskripsi, 'id_grup' => $kelompok];
                $this->M_admin->updatedata('dokumentasi', ['id_dokumentasi' =>  $this->input->post('kode')], $data);
                redirect(base_url('admin/dokumentasi/'));
            }
        }
    }
    public function edit($id)
    {
        $data['dokumentasi'] = $this->M_admin->getjoinfilter('dokumentasi', 'grup_penelitian', 'dokumentasi.id_grup=grup_penelitian.id_grup', ['id_produk' => $id]);
        $data['kelompok'] = $this->M_admin->getdata('grup_penelitian');
        $this->load->view('admin/header');
        $this->load->view('admin/dokumentasi/edit', $data);
        $this->load->view('admin/footer');
    }
}

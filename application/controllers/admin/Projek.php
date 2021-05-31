<?php

class Projek extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->helper('string');
    }
    public function index()
    {
        $data['projek'] = $this->M_admin->getjoin('projek', 'anggota', 'projek.id_dosen=anggota.id_anggota');
        $this->load->view('admin/header');
        $this->load->view('admin/projek/list', $data);
        $this->load->view('admin/footer');
    }
    public function simpan()
    {
        $projek = $this->input->post('projek');
        $cluster = $this->input->post('cluster');
        $status = $this->input->post('status');
        $dosen = $this->input->post('dosen');
        $data = [
            'deskripsi' => $projek,
            'cluster' => $cluster,
            'status' => $status,
            'id_dosen' => $dosen
        ];
        $this->M_admin->insertdata('projek', $data);
        redirect(base_url('admin/projek/'));
    }
    public function new()
    {
        $data['anggota'] = $this->M_admin->getwhere('anggota', ['status' => 'Dosen']);
        $this->load->view('admin/header');
        $this->load->view('admin/projek/new', $data);
        $this->load->view('admin/footer');
    }
    public function update()
    {
        $projek = $this->input->post('projek');
        $cluster = $this->input->post('cluster');
        $status = $this->input->post('status');
        $dosen = $this->input->post('dosen');
        $data = [
            'deskripsi' => $projek,
            'cluster' => $cluster,
            'status' => $status,
            'id_dosen' => $dosen
        ];
        $this->M_admin->updatedata('projek', ['id_projek' =>  $this->input->post('kode')], $data);
        redirect(base_url('admin/projek/'));
    }
    public function edit($id)
    {
        $data['projek'] = $this->M_admin->getjoinfilter('projek', 'anggota', 'projek.id_dosen=anggota.id_anggota', ['id_projek' => $id]);
        $data['anggota'] = $this->M_admin->getwhere('anggota', ['status' => 'Dosen']);
        $this->load->view('admin/header');
        $this->load->view('admin/projek/edit', $data);
        $this->load->view('admin/footer');
    }
    public function hapus($id)
    {
        $proses = $this->M_admin->delete('projek', ['id_projek' => $id]);
        if ($proses) {
            redirect(base_url('admin/grup/'));
        }
    }
}

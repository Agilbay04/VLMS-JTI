<?php

class Alat extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }
    public function index()
    {
        $data['alat'] = $this->M_admin->getjoin('alat', 'grup_penelitian', 'alat.id_grup=grup_penelitian.id_grup');
        $this->load->view('user/header');
        $this->load->view('user/alat', $data);
        $this->load->view('user/footer');
    }
}

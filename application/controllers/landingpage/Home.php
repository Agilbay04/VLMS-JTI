<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_user');
    }

    public function index()
    {
        $data['title'] = "GARIS V | Beranda";
        $data['faq'] = $this->M_user->getdata('faq');
        $data['produk'] = $this->M_user->getlimit('produk', ['id_grup' => '5'], 4);
        $data['profil'] = $this->M_user->getfirst('grup_penelitian', ['id_grup' => 5]);
        $data['artikel'] = $this->M_user->artikel(['artikel.id_grup' => '5'], 3);
        $this->load->view('template/v_header', $data);
        $this->load->view('template/v_navbar');
        $this->load->view('index', $data);
        $this->load->view('template/v_footer');
    }
}

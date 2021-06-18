<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "GARIS V | Tentang";

        $this->load->view('template/v_header', $data);
        $this->load->view('template/v_navbar_det');
        $this->load->view('landingpage/v_tentang');
        $this->load->view('template/v_footer');
    }
}
?>
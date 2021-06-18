<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "GARIS V | Artikel";

        $this->load->view('template/v_header', $data);
        $this->load->view('template/v_navbar_det');
        $this->load->view('landingpage/v_artikel');
        $this->load->view('template/v_footer');
    }

    public function baca_artikel()
    {
        $data['title'] = "GARIS V | Baca Artikel";

        $this->load->view('template/v_header', $data);
        $this->load->view('template/v_navbar_det');
        $this->load->view('landingpage/v_det_artikel');
        $this->load->view('template/v_footer');
    }
}
?>
<?php

class Artikel extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('admin/header');
        $this->load->view('admin/artikel');
        $this->load->view('admin/footer');
    }
}

<?php

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('user/header');
        $this->load->view('user/dashboard');
        $this->load->view('user/footer');
    }
}

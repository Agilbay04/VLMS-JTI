<?php
class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    public function index()
    {
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');
    }
}

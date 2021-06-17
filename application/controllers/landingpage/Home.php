<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller()
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->load->view('template/v_header');
        $this->load->view('template/v_navbar');
        $this->load->view('index');
        $this->load->view('template/v_footer');
    }
}
?>
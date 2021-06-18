<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forgot extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "GARIS V | Lupa Password";

        $this->load->view('template/v_auth_header', $data);
        $this->load->view('auth/v_forgot');
        $this->load->view('template/v_auth_footer');
    }
}
?>
<?php
class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }
    public function index()
    {
        $this->load->view('login');
    }
    function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'no_identitas' => $username,
            'password' => md5($password)
        );
        $cek = $this->M_admin->getwhere('anggota', $where);
        if (!empty($cek)) {

            $data_session = array(
                'nama' => $username,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            print_r($data_session);
            // redirect(base_url("admin"));

        } else {
            echo "Username dan password salah !";
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('login'));
    }
}

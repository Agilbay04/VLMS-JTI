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
        $this->load->view('auth/v_login_admin');
    }
    function aksi_login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array(
            'username' => $username,
            'password' => md5($password)
        );
        $cek = $this->M_admin->login('user', $where);
        if (!empty($cek)) {

            $data_session = array(
                'username' => $cek->username,
                'status' => "login"
            );

            $this->session->set_userdata($data_session);

            print_r($data_session);
            redirect(base_url("admin/anggota"));
        } else {
            echo "Username dan password salah !";
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url('admin'));
    }
}

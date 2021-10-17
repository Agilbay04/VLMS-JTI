<?php

class FAQ extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
        $this->load->helper('string');
        is_logged_in();
    }
    public function index()
    {
        $data['faq'] = $this->M_admin->getdata('faq');
        $this->load->view('admin/header');
        $this->load->view('admin/faq', $data);
        $this->load->view('admin/footer');
    }
    public function simpan()
    {
        $pertanyaan = $this->input->post('pertanyaan');
        $jawaban = $this->input->post('jawaban');
        $data = [
            'pertanyaan' => $pertanyaan,
            'jawaban' => $jawaban
        ];
        $this->M_admin->insertdata('faq', $data);
        redirect(base_url('admin/faq/'));
    }

    public function update()
    {
        $pertanyaan = $this->input->post('nama');
        $jawaban = $this->input->post('jawaban');
        $data = [
            'pertanyaan' => $pertanyaan,
            'jawaban' => $jawaban
        ];
        $this->M_admin->updatedata('faq', ['id_faq' =>  $this->input->post('kode')], $data);
        redirect(base_url('admin/faq/'));
    }
    public function getfaq()
    {
        $id = $this->input->get('kode');
        $data = $this->M_admin->getwhere('faq', ['id_faq' => $id]);
        echo json_encode($data);
    }
    public function hapus($id)
    {
        $proses = $this->M_admin->delete('faq', ['id_faq' => $id]);
        if ($proses) {
            redirect(base_url('admin/grup/'));
        }
    }
}

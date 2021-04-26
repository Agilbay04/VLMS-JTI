<?php

class Repositori extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('M_admin');
    }
    public function grup($id)
    {
        $data['repositori'] = $this->M_admin->getwhere('repositori', ['id_grup' => $id]);
        $data['id'] = $id;
        $this->load->view('admin/header');
        $this->load->view('admin/repositori', $data);
        $this->load->view('admin/footer');
    }
    public function simpan($id)
    {
        $deskripsi = $this->input->post('deskripsi');
        $link = $this->input->post('link');
        $data = ['link' => $link, 'deskripsi' => $deskripsi, 'id_grup' => $id];
        $this->M_admin->insertdata('repositori', $data);
        redirect(base_url('admin/repositori/' . $id));
    }
    public function getrepositori()
    {
        $id = $this->input->get('id');
        $data = $this->M_admin->getwhere('repositori', ['id_repositori' => $id]);
        echo json_encode($data);
    }
    public function update()
    {
        $deskripsi = $this->input->post('deskripsi');
        $link = $this->input->post('link');
        $data = ['link' => $link, 'deskripsi' => $deskripsi];
        print_r($data);
        $this->M_admin->updatedata('repositori', ['id_repositori' => $this->input->post('kode')], $data);
        redirect(base_url('admin/repositori/'));
    }
    public function delete($id)
    {
        $this->M_admin->delete('deskripsi', ['no' => $id]);
        redirect(base_url('admin/repositori/'));
    }
}

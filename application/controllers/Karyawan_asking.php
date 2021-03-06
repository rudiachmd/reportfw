<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan_asking extends CI_Controller
{
    public function index()
    {
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        } else if (!$this->ion_auth->in_group('asking')) {
            redirect('/', 'refresh');
        } else {
            $this->load->model("karyawan_asking_model");
            $this->load->library("ion_auth");
            $data["user"] = $this->karyawan_asking_model->user();
            $data["daftar_tiket"] = $this->karyawan_asking_model->daftar_tiket_resp();
            $this->load->view("templates/admin/admin_header");
            $this->load->view("admin/karyawan_asking_view", $data);
            $this->load->view("templates/admin/admin_footer");
        }
    }
    public function xresp()
    {
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        } else if (!$this->ion_auth->in_group('asking')) {
            redirect('/', 'refresh');
        } else {
            $this->load->model("karyawan_asking_model");
            $this->load->library("ion_auth");
            $data["user"] = $this->karyawan_asking_model->user();
            $data["daftar_tiket_xresp"] = $this->karyawan_asking_model->daftar_tiket_xresp();
            $this->load->view("templates/admin/admin_header");
            $this->load->view("admin/karyawan_asking_view", $data);
            $this->load->view("templates/admin/admin_footer");
        }
    }
    public function close()
    {
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        } else if (!$this->ion_auth->in_group('asking')) {
            redirect('/', 'refresh');
        } else {
            $this->load->model("karyawan_asking_model");
            $this->load->library("ion_auth");
            $data["user"] = $this->karyawan_asking_model->user();
            $data["daftar_tiket_close"] = $this->karyawan_asking_model->daftar_tiket_close();
            $this->load->view("templates/admin/admin_header");
            $this->load->view("admin/karyawan_asking_view", $data);
            $this->load->view("templates/admin/admin_footer");
        }
    }
    public function detail_tiket()
    {
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        } else if (!$this->ion_auth->in_group('asking')) {
            redirect('/', 'refresh');
        } else {
            $id = $this->uri->segment(3);
            $this->load->model("karyawan_asking_model");
            $this->load->library("ion_auth");
            $data["user"] = $this->karyawan_asking_model->user();
            $data["detail_tiket"] = $this->karyawan_asking_model->detail_tiket($id);
            $data["data_chat"] = $this->karyawan_asking_model->chat($id);
            $this->load->view("templates/admin/admin_header");
            $this->load->view("admin/karyawan_asking_view", $data);
            $this->load->view("templates/admin/admin_footer");
        }
    }
    public function send_chat()
    {
        $this->load->library('ion_auth');
        $userid = $this->ion_auth->user()->row()->id;
        $this->load->library('form_validation');
        $this->form_validation->set_rules("chat", "harap diisi", 'required');
        $id_tiket = $this->input->post("hidden_id_tiket");
        $data = array(
            "message" => $this->input->post("chat"),
            "id_users_fk" => $userid,
            "id_tiket_fk" => $id_tiket
        );
        if ($this->form_validation->run() != false) {
            $this->load->model('user_model');
            $this->user_model->send_chat($data);

            $data2 = 1;
            $this->user_model->change_status($data2, $id_tiket);

            redirect(base_url() . "Karyawan_asking/detail_tiket/" . $id_tiket);
        } else {
            redirect(base_url() . "Karyawan_asking/detail_tiket/" . $id_tiket);
        }
    }
    public function close_tiket()
    {
        $id_tiket = $this->uri->segment(3);
        $this->load->model('karyawan_asking_model');
        $data2 = 2;
        $this->karyawan_asking_model->close($data2, $id_tiket);
        redirect(base_url() . "Karyawan_asking/");
    }
}

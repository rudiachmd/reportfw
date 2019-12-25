<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        } else if (!$this->ion_auth->in_group('members')) {
            redirect('/', 'refresh');
        } else {
            $this->load->model("user_model");
            $this->load->library("ion_auth");
            $data["daftar_kategori"] = $this->user_model->daftar_kategori();
            $data["user"] = $this->user_model->user();
            $data['message'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('message');
            $this->load->view("templates/admin/admin_header");
            $this->load->view("/user_view", $data);
            $this->load->view("templates/admin/admin_footer");
        }
    }

    public function form_tambah_tiket()
    {
        $this->load->library("ion_auth");
        $this->load->library('form_validation');
        date_default_timezone_set('asia/Jakarta');
        $this->form_validation->set_rules("judul_tiket", "Masukkan Judul Tiket Anda", 'required');
        $this->form_validation->set_rules("kategori", "Pilih Tipe kategori Tiket Anda");
        $this->form_validation->set_rules("prioritas", "Pilih Tipe Prioritas Tiket Anda", 'required');
        $this->form_validation->set_rules("uraian_kendala", "Tuliskan Pertanyaan atau Kendala Anda", 'required');
        if ($this->form_validation->run()) {
            $this->load->model("user_model");
            $userid = $this->ion_auth->user()->row()->id;
            $status = "0";
            $now = date('Y-m-d H:i:s');
            $data = array(
                "date_time" => $now,
                "point_priority" => $this->input->post("prioritas"),
                "details" => $this->input->post("uraian_kendala"),
                "status_tiket" => $status,
                "id_user_fk" => $userid,
                "id_problem_fk" => $this->input->post("kategori")
            );

            $this->user_model->tiket_masuk($data);
            //var_dump($this->user_model->tiket_masuk($data));
            //die;
            redirect(base_url() . "User/tiket_terkirim");
        } else {
            $this->index();
        }
    }

    public function tiket_terkirim()
    {
        $this->index();
    }

    public function daftar_tiket()
    {
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        } else if (!$this->ion_auth->in_group('members')) {
            redirect('/', 'refresh');
        } else {
            $this->load->model("user_model");
            $this->load->library("ion_auth");
            $data["user"] = $this->user_model->user();
            $data["daftar_tiket"] = $this->user_model->daftar_tiket();

            $this->load->view("templates/admin/admin_header");
            $this->load->view("/user_view", $data);
            $this->load->view("templates/admin/admin_footer");
        }
    }
    public function detail_tiket()
    {
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        } else if (!$this->ion_auth->in_group('members')) {
            redirect('/', 'refresh');
        } else {
            $id = $this->uri->segment(3);
            $this->load->model("user_model");
            $this->load->library("ion_auth");
            $data["user"] = $this->user_model->user();
            $data["detail_tiket"] = $this->user_model->detail_tiket($id);
            $data["data_chat"] = $this->user_model->chat($id);
            $this->load->view("templates/admin/admin_header");
            $this->load->view("/user_view", $data);
            $this->load->view("templates/admin/admin_footer");
        }
    }
    public function send_chat()
    {
        $this->load->library('ion_auth');
        $this->load->library('form_validation');
        $this->form_validation->set_rules("chat", "harap diisi", 'required');
        $id_tiket = $this->input->post("hidden_id_tiket");
        $data = array(
            "message" => $this->input->post("chat"),
            "id_users_fk" => $this->input->post("hidden_id"),
            "id_tiket_fk" => $id_tiket
        );
        if ($this->form_validation->run() != false) {
            $this->load->model('user_model');
            $this->user_model->send_chat($data);

            $data2 = 0;
            $this->user_model->change_status($data2, $id_tiket);

            redirect(base_url() . "User/detail_tiket/" . $id_tiket);
        } else {
            redirect(base_url() . "User/detail_tiket/" . $id_tiket);
        }
    }
    public function close()
    {
        $id_tiket = $this->uri->segment(3);
        $this->load->model('user_model');
        $data2 = 2;
        $this->user_model->close($data2, $id_tiket);
        redirect(base_url() . "User/daftar_tiket/");
    }
}

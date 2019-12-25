<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan extends CI_Controller
{
    public function index()
    {
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        } else if (!$this->ion_auth->in_group('verifikasi')) {
            redirect('/', 'refresh');
        } else {
            $this->load->model("karyawan_model");
            $this->load->library("ion_auth");
            $data["user"] = $this->karyawan_model->user();
            $data["daftar_user_baru"] = $this->karyawan_model->daftar_user_baru();
            $this->load->view("templates/admin/admin_header");
            $this->load->view("admin/karyawan_view", $data);
            $this->load->view("templates/admin/admin_footer");
        }
    }
    public function preview()
    {
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        } else if (!$this->ion_auth->in_group('verifikasi')) {
            redirect('/', 'refresh');
        } else {
            $this->load->library("ion_auth");
            $klien_id = $this->uri->segment(3);
            $this->load->model("karyawan_model");
            $data["user"] = $this->karyawan_model->user();
            $data['klien_data'] = $this->karyawan_model->data_klien($klien_id);
            $this->load->view("templates/admin/admin_header");
            $this->load->view("admin/karyawan_view", $data);
            $this->load->view("templates/admin/admin_footer");
        }
    }

    public function verif()
    {
        $this->load->model("karyawan_model");
        $id = $this->input->post("hidden_id");
        $active = 1;
        if ($this->input->post('delete')) {
            $this->load->library("ion_auth");
            $this->ion_auth->delete_user($id);
        } elseif ($this->input->post('update')) {
            $this->karyawan_model->verif($id, $active);
        }
        redirect(base_url() . "Karyawan/");
    }

    // public function verifikasi()
    // {
    //     $this->index();
    // }

    public function delete_data()
    {
        $id = $this->uri->segment(3);
        $this->load->model("karyawan_model");
        redirect(base_url() . "Karyawan/");
    }
}

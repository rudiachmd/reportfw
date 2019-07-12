<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->model("admin_model");
        $this->load->view("templates/admin/admin_header");
        $data["daftar_karyawan"] = $this->admin_model->daftar();
        $this->load->view("admin/admin_view", $data);
        $this->load->view("templates/admin/admin_footer");
    }

    public function klien()
    {
        $this->load->model("admin_model");
        $this->load->view("templates/admin/admin_header");
        $data["daftar_klien"] = $this->admin_model->daftar();
        $this->load->view("admin/admin_view", $data);
        $this->load->view("templates/admin/admin_footer");
    }

    public function tiket()
    {
        $this->load->model("admin_model");
        $this->load->view("templates/admin/admin_header");
        $data["daftar_tiket"] = $this->admin_model->tiket();
        $this->load->view("admin/admin_view", $data);
        $this->load->view("templates/admin/admin_footer");
    }
    public function masalah()
    {
        $this->load->model("admin_model");
        $this->load->view("templates/admin/admin_header");
        $data["daftar_masalah"] = $this->admin_model->masalah();
        $this->load->view("admin/admin_view", $data);
        $this->load->view("templates/admin/admin_footer");
    }
}

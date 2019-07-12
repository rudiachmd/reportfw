<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Karyawan_software extends CI_Controller
{
    public function index()
    {
        $this->load->model("karyawan_software_model");
        $this->load->view("templates/admin/admin_header");
        //$data["daftar_karyawan"] = $this->admin_model->daftar();
        //$this->load->view("admin/admin_view", $data);
        $this->load->view("admin/karyawan_software_view");
        $this->load->view("templates/admin/admin_footer");
    }
}

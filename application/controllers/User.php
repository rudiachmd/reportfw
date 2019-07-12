<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $this->load->model("user_model");
        $data["daftar_kategori"] = $this->user_model->daftar_kategori();
        $this->load->view("templates/admin/admin_header");
        $this->load->view("/user_view", $data);
        $this->load->view("templates/admin/admin_footer");
    }
    public function form_tambah_tiket()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("nama", "Masukkan Nama Anda", 'required|alpha');
        $this->form_validation->set_rules("judul_tiket", "Masukkan Judul Tiket Anda", 'required');
        $this->form_validation->set_rules("pengguna", "Pilih Tipe Pengguna Anda", 'required');
        $this->form_validation->set_rules("kategori", "Pilih Tipe kategori Tiket Anda", 'required');
        $this->form_validation->set_rules("prioritas", "Pilih Tipe Prioritas Tiket Anda", 'required');
        $this->form_validation->set_rules("uraian_kendala", "Tuliskan Pertanyaan atau Kendala Anda", 'required');

        if ($this->form_validation->run()) {
            $this->load->model("user_model");
            $data = array(
                "nama" => $this->input->post("")
            );
        } else {
            $this->index();
        }
    }
}

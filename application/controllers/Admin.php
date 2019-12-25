<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index()
    {
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        } else if (!$this->ion_auth->is_admin()) {
            redirect('/', 'refresh');
        } else {
            $this->load->model("admin_model");
            $this->load->library("ion_auth");
            $data["user"] = $this->ion_auth->user();
            $this->load->view("templates/admin/admin_header");
            $data["karyawan_asking"] = $this->admin_model->daftar_kar_asking();
            $this->load->view("admin/admin_view", $data);
            $this->load->view("templates/admin/admin_footer");
        }
    }
    public function kar_software()
    {
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        } else if (!$this->ion_auth->is_admin()) {
            redirect('/', 'refresh');
        } else {
            $this->load->model("admin_model");
            $data["user"] = $this->ion_auth->user();
            $this->load->view("templates/admin/admin_header");
            $data["karyawan_software"] = $this->admin_model->daftar_kar_software();
            $this->load->view("admin/admin_view", $data);
            $this->load->view("templates/admin/admin_footer");
        }
    }

    public function kar_hardware()
    {
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        } else if (!$this->ion_auth->is_admin()) {
            redirect('/', 'refresh');
        } else {
            $this->load->model("admin_model");
            $data["user"] = $this->ion_auth->user();
            $this->load->view("templates/admin/admin_header");
            $data["karyawan_hardware"] = $this->admin_model->daftar_kar_hardware();
            $this->load->view("admin/admin_view", $data);
            $this->load->view("templates/admin/admin_footer");
        }
    }

    public function kar_verifikasi()
    {
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        } else if (!$this->ion_auth->is_admin()) {
            redirect('/', 'refresh');
        } else {
            $this->load->model("admin_model");
            $data["user"] = $this->ion_auth->user();
            $this->load->view("templates/admin/admin_header");
            $data["karyawan_verifikasi"] = $this->admin_model->daftar_kar_verifikasi();
            $this->load->view("admin/admin_view", $data);
            $this->load->view("templates/admin/admin_footer");
        }
    }

    public function klien()
    {
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        } else if (!$this->ion_auth->is_admin()) {
            redirect('/', 'refresh');
        } else {
            $this->load->model("admin_model");
            $data["user"] = $this->ion_auth->user();
            $this->load->view("templates/admin/admin_header");
            $data["daftar_klien"] = $this->admin_model->daftar_klien();
            $this->load->view("admin/admin_view", $data);
            $this->load->view("templates/admin/admin_footer");
        }
    }

    public function tiket()
    {
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        } else if (!$this->ion_auth->is_admin()) {
            redirect('/', 'refresh');
        } else {
            $this->load->model("admin_model");
            $data["user"] = $this->ion_auth->user();
            $this->load->view("templates/admin/admin_header");
            $data["daftar_tiket"] = $this->admin_model->tiket();
            $this->load->view("admin/admin_view", $data);
            $this->load->view("templates/admin/admin_footer");
        }
    }
    public function asking()
    {
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        } else if (!$this->ion_auth->is_admin()) {
            redirect('/', 'refresh');
        } else {
            $this->load->model("admin_model");
            $data["user"] = $this->ion_auth->user();
            $this->load->view("templates/admin/admin_header");
            $data["asking"] = $this->admin_model->asking();
            $this->load->view("admin/admin_view", $data);
            $this->load->view("templates/admin/admin_footer");
        }
    }
    public function software()
    {
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        } else if (!$this->ion_auth->is_admin()) {
            redirect('/', 'refresh');
        } else {
            $this->load->model("admin_model");
            $data["user"] = $this->ion_auth->user();
            $data["software"] = $this->admin_model->software();
            $this->load->view("templates/admin/admin_header");
            $this->load->view("admin/admin_view", $data);
            $this->load->view("templates/admin/admin_footer");
        }
    }
    public function hardware()
    {
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        } else if (!$this->ion_auth->is_admin()) {
            redirect('/', 'refresh');
        } else {
            $this->load->model("admin_model");
            $data["user"] = $this->ion_auth->user();
            $this->load->view("templates/admin/admin_header");
            $data["hardware"] = $this->admin_model->hardware();
            $this->load->view("admin/admin_view", $data);
            $this->load->view("templates/admin/admin_footer");
        }
    }
    public function tambah_hardware()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("nama_masalah", "Nama", 'required');
        $this->form_validation->set_rules("nilai_masalah", "Nilai", 'required');

        if ($this->form_validation->run()) {
            $this->load->model("admin_model");
            $data = array(
                "problem_details" => $this->input->post("nama_masalah"),
                "score" => $this->input->post("nilai_masalah"),
                "id_groups_fk" => 5
            );
            $this->admin_model->tambah_masalah($data);
            redirect(base_url() . "Admin/hardware/");
        } else {
            $this->index();
        }
    }
    public function tambah_software()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("nama_masalah", "Nama", 'required');
        $this->form_validation->set_rules("nilai_masalah", "Nilai", 'required');

        if ($this->form_validation->run()) {
            $this->load->model("admin_model");
            $data = array(
                "problem_details" => $this->input->post("nama_masalah"),
                "score" => $this->input->post("nilai_masalah"),
                "id_groups_fk" => 4
            );
            $this->admin_model->tambah_masalah($data);
            redirect(base_url() . "Admin/software/");
        } else {
            $this->index();
        }
    }
    public function tambah_asking()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("nama_masalah", "Nama", 'required');
        $this->form_validation->set_rules("nilai_masalah", "Nilai", 'required');

        if ($this->form_validation->run()) {
            $this->load->model("admin_model");
            $data = array(
                "problem_details" => $this->input->post("nama_masalah"),
                "score" => $this->input->post("nilai_masalah"),
                "id_groups_fk" => 2
            );
            $this->admin_model->tambah_masalah($data);
            redirect(base_url() . "Admin/asking/");
        } else {
            $this->index();
        }
    }
    public function edit_masalah()
    {
        $this->load->library('ion_auth');
        if (!$this->ion_auth->logged_in()) {
            redirect('/', 'refresh');
        } else if (!$this->ion_auth->is_admin()) {
            redirect('/', 'refresh');
        } else {
            $id_problem = $this->uri->segment(3);
            $this->load->library('form_validation');
            $this->load->model('admin_model');
            $data["user"] = $this->ion_auth->user();
            $data["edit_masalah"] = $this->admin_model->data_masalah($id_problem);
            $this->load->view("templates/admin/admin_header");
            $this->load->view("admin/admin_view", $data);
            $this->load->view("templates/admin/admin_footer");
        }
    }
    public function hapus_karyawan_asking()
    {
        $id = $this->uri->segment(3);
        $this->load->model('admin_model');
        $this->admin_model->hapus_karyawan($id);
        redirect(base_url() . "Admin");
    }
    public function hapus_karyawan_software()
    {
        $id = $this->uri->segment(3);
        $this->load->model('admin_model');
        $this->admin_model->hapus_karyawan($id);
        redirect(base_url() . "Admin/kar_software");
    }
    public function hapus_karyawan_hardware()
    {
        $id = $this->uri->segment(3);
        $this->load->model('admin_model');
        $this->admin_model->hapus_karyawan($id);
        redirect(base_url() . "Admin/kar_hardware");
    }
    public function hapus_karyawan_verifikasi()
    {
        $id = $this->uri->segment(3);
        $this->load->model('admin_model');
        $this->admin_model->hapus_karyawan($id);
        redirect(base_url() . "Admin/kar_verifikasi");
    }
    public function rubah_masalah()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules("nama", "Nama", 'required');
        $this->form_validation->set_rules("nilai", "Nilai", 'required');
        $problem_details = $this->input->post('nama');
        $score = $this->input->post('nilai');
        $id = $this->input->post('id');
        // var_dump($problem_details);
        // die;
        if ($this->form_validation->run() != false) {
            $this->load->model("admin_model");
            $this->admin_model->edit_masalah($id, $problem_details, $score);
            redirect(base_url() . "Admin/");
        } else {
            $this->index();
        }
    }
    public function hapus_problem()
    {
        $id = $this->uri->segment(3);
        $this->load->model('admin_model');
        $this->admin_model->hapus_problem($id);
        redirect(base_url() . "Admin/");
    }
    public function edit_user($id)
    { }
}

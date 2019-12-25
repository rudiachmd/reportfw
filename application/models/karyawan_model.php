<?php
class karyawan_model extends CI_Model
{
    function user()
    {
        $userid = $this->ion_auth->user()->row()->id;
        //$query = $this->db->query("select id,first_name from users where id='$userid'");
        $this->db->select('id,first_name');
        $this->db->from('users');
        $this->db->where('id', $userid);
        $query = $this->db->get();
        return $query;
    }
    function daftar_user_baru()
    {
        //$query = $this->db->query("SELECT * FROM users WHERE active='0'");
        $this->db->select('id,company,first_name,last_name,ktp,address');
        $this->db->from('users');
        $this->db->where('active', 0);

        $query = $this->db->get();
        return $query;
    }
    function data_klien($klien_id)
    {
        $this->db->select('id,first_name,last_name,email,address,ktp,pict_ktp');
        $this->db->from('users');
        $this->db->where('id', $klien_id);

        $query = $this->db->get();
        return $query;
    }

    function verif($id, $active)
    {
        $this->db->where('id', $id);
        $this->db->set('active', $active);
        $this->db->update('users');
    }

    function delete_user($id)
    {
        $this->db->where("id", $id);
        $this->db->delete("users");
    }
}

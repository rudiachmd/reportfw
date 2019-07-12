<?php
class admin_model extends CI_Model
{
    function daftar()
    {
        $query = $this->db->query("select*from users inner join users_groups using (id)");
        return $query;
    }
    function tiket()
    {
        $query = $this->db->query("select*from ticket");
        return $query;
    }
    function masalah()
    {
        $query = $this->db->query("select*from problem");
        return $query;
    }
}

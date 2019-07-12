<?php
class user_model extends CI_Model
{
    function tiket_masuk($data)
    {
        $this->db->insert("ticket", $data);
    }

    function daftar_kategori()
    {
        $query = $this->db->query("SELECT * FROM problem INNER JOIN categories on id=id_problem");
        return $query;
    }
}

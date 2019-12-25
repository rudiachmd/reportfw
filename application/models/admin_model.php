<?php
class admin_model extends CI_Model
{
    function daftar_kar_asking()
    {
        //$query = $this->db->query("SELECT*FROM users_groups A INNER JOIN users B ON A.user_id=B.id INNER JOIN categories C ON A.id_categories=C.id ");
        $this->db->select('B.id,username,name');
        $this->db->from('users_groups A');
        $this->db->join('users B', 'A.user_id=B.id');
        $this->db->join('groups C', 'A.group_id=C.id');
        $this->db->where('C.id', '2');

        $query = $this->db->get();
        return $query;
    }

    function daftar_kar_software()
    {
        //$query = $this->db->query("SELECT*FROM users_groups A INNER JOIN users B ON A.user_id=B.id INNER JOIN categories C ON A.id_categories=C.id ");
        $this->db->select('B.id,username,name');
        $this->db->from('users_groups A');
        $this->db->join('users B', 'A.user_id=B.id');
        $this->db->join('groups C', 'A.group_id=C.id');
        $this->db->where('C.id', '4');

        $query = $this->db->get();
        return $query;
    }

    function daftar_kar_hardware()
    {
        //$query = $this->db->query("SELECT*FROM users_groups A INNER JOIN users B ON A.user_id=B.id INNER JOIN categories C ON A.id_categories=C.id ");
        $this->db->select('B.id,username,name');
        $this->db->from('users_groups A');
        $this->db->join('users B', 'A.user_id=B.id');
        $this->db->join('groups C', 'A.group_id=C.id');
        $this->db->where('C.id', '5');

        $query = $this->db->get();
        return $query;
    }

    function daftar_kar_verifikasi()
    {
        //$query = $this->db->query("SELECT*FROM users_groups A INNER JOIN users B ON A.user_id=B.id INNER JOIN categories C ON A.id_categories=C.id ");
        $this->db->select('B.id,username,name');
        $this->db->from('users_groups A');
        $this->db->join('users B', 'A.user_id=B.id');
        $this->db->join('groups C', 'A.group_id=C.id');
        $this->db->where('C.id', '6');

        $query = $this->db->get();
        return $query;
    }

    function daftar_klien()
    {
        //$query = $this->db->query("SELECT*FROM users_groups A INNER JOIN users B ON A.user_id=B.id WHERE group_id='3'");
        $this->db->select('first_name,birth,address');
        $this->db->from('users_groups A');
        $this->db->join('users B', 'A.user_id=B.id');
        $this->db->where('group_id', '3');
        $this->db->where('active', '1');
        $query = $this->db->get();
        return $query;
    }
    function tiket()
    {
        //$query = $this->db->query("SELECT*FROM ticket A INNER JOIN problem B ON A.id_problem_fk=B.id_problem INNER JOIN users C ON A.id_user=C.id INNER JOIN categories D ON B.id_catogories_fk=D.id");
        $this->db->select('id_ticket,name,first_name,date_time,problem_details');
        $this->db->from('ticket A');
        $this->db->join('problem B', 'A.id_problem_fk=B.id_problem');
        $this->db->join('users C', 'A.id_user_fk=C.id');
        $this->db->join('groups D', 'B.id_groups_fk=D.id');
        $query = $this->db->get();
        return $query;
    }
    function asking()
    {
        //$query = $this->db->query("SELECT*FROM problem A INNER JOIN categories B ON A.id_catogories_fk=B.id WHERE B.id='1'");
        $this->db->select('id_problem,problem_details,score');
        $this->db->from('problem A');
        $this->db->join('groups B', 'A.id_groups_fk=B.id');
        $this->db->where('B.id', '2');
        $query = $this->db->get();
        return $query;
    }
    function software()
    {
        //$query = $this->db->query("SELECT*FROM problem A INNER JOIN categories B ON A.id_catogories_fk=B.id WHERE B.id='2'");
        $this->db->select('id_problem,problem_details,score');
        $this->db->from('problem A');
        $this->db->join('groups B', 'A.id_groups_fk=B.id');
        $this->db->where('B.id', '4');
        $query = $this->db->get();
        return $query;
    }
    function hardware()
    {
        //$query = $this->db->query("SELECT*FROM problem A INNER JOIN categories B ON A.id_catogories_fk=B.id WHERE B.id='3'");
        $this->db->select('id_problem,problem_details,score');
        $this->db->from('problem A');
        $this->db->join('groups B', 'A.id_groups_fk=B.id');
        $this->db->where('B.id', '5');
        $query = $this->db->get();
        return $query;
    }
    function tambah_masalah($data)
    {
        $this->db->insert("problem", $data);
    }
    function edit_masalah($id, $problem_details, $score)
    {
        $this->db->where('id_problem', $id);
        $this->db->set('problem_details', $problem_details);
        $this->db->set('score', $score);
        $this->db->update('problem');
    }
    function hapus_karyawan($id)
    {
        $this->db->where('id', $id);
        $this->db->delete("users");
    }
    function hapus_problem($id)
    {
        $this->db->where('id_problem', $id);
        $this->db->delete("problem");
    }
    function data_masalah($id)
    {
        $this->db->select('id_problem,problem_details,score');
        $this->db->from('problem');
        $this->db->where('id_problem', $id);
        $query = $this->db->get();
        return $query;
    }
}

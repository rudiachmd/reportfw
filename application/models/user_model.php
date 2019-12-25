<?php
class user_model extends CI_Model
{
    function tiket_masuk($data)
    {
        // $query = $this->db->query("SELECT * FROM problem INNER JOIN categories on id=id_problem");
        $this->db->insert("ticket", $data);
    }

    function daftar_kategori()
    {
        //$query = $this->db->query("SELECT * FROM problem INNER JOIN categories on id=id_catogories_fk");
        $this->db->select('id_problem,name,problem_details');
        $this->db->from('problem A');
        $this->db->join('groups B', 'B.id=A.id_groups_fk');

        $query = $this->db->get();
        return $query;
    }

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

    function daftar_tiket()
    {
        $userid = $this->ion_auth->user()->row()->id;
        $this->db->select('id_ticket,name,problem_details,details,date_time,status_tiket');
        $this->db->from('ticket A');
        $this->db->join('problem B', 'A.id_problem_fk=B.id_problem');
        $this->db->join('groups C', 'C.id=B.id_groups_fk');
        $this->db->where('id_user_fk', $userid);
        $this->db->order_by('date_time', 'desc');
        $query = $this->db->get();

        return $query;
    }
    function detail_tiket($id)
    {
        $this->db->select('E.id,id_ticket,name,problem_details,details,date_time,status_tiket,first_name,last_name');
        $this->db->from('ticket A');
        $this->db->join('problem B', 'A.id_problem_fk=B.id_problem');
        $this->db->join('groups C', 'C.id=B.id_groups_fk');
        //$this->db->join('chat D', 'D.id_tiket_fk=A.id_ticket');
        $this->db->join('users E', 'E.id=A.id_user_fk');
        $this->db->where('A.id_ticket', $id);
        $query = $this->db->get();

        return $query;
    }
    function chat($id)
    {
        $this->db->select('first_name,last_name,group_id,message');
        $this->db->from('chat A');
        $this->db->join('ticket B', 'A.id_tiket_fk=B.id_ticket');
        $this->db->join('users C', 'A.id_users_fk=C.id');
        $this->db->join('users_groups D', 'C.id=D.user_id');
        $this->db->where('A.id_tiket_fk', $id);
        $query = $this->db->get();
        return $query;
    }
    function send_chat($data)
    {
        $this->db->insert("chat", $data);
    }
    function change_status($data2, $id_tiket)
    {
        $this->db->where('id_ticket', $id_tiket);
        $this->db->set('status_tiket', $data2);
        $this->db->update("ticket");
    }
    function close($data2, $id_tiket)
    {
        $this->db->where('id_ticket', $id_tiket);
        $this->db->set('status_tiket', $data2);
        $this->db->update("ticket");
    }
}

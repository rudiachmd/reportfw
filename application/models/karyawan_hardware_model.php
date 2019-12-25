<?php
class karyawan_hardware_model extends CI_Model
{
    function user()
    {
        $userid = $this->ion_auth->user()->row()->id;
        //$query = $this->db->query("select id,first_name from users where id='$userid'");
        $this->db->select('id,first_name,last_name');
        $this->db->from('users');
        $this->db->where('id', $userid);
        $query = $this->db->get();
        return $query;
    }
    function daftar_tiket()
    {
        //$query = $this->db->query("SELECT * FROM ticket INNER JOIN users ON id_user=id WHERE id_problem_fk='2' && status_tiket= '0'");
        $this->db->select('id_ticket,first_name,details,date_time');
        $this->db->from('ticket A');
        $this->db->join('users B', 'A.id_user_fk=B.id');
        $this->db->join('problem C', 'A.id_problem_fk=C.id_problem');
        $this->db->where('id_groups_fk', 5);
        $this->db->where('status_tiket', 1);

        $query = $this->db->get();
        return $query;
    }
    function daftar_tiket_xresp()
    {
        //$query = $this->db->query("SELECT * FROM ticket INNER JOIN users ON id_user=id WHERE id_problem_fk='1' && status_tiket= '0'");
        $this->db->select('id_ticket,first_name,details,date_time');
        $this->db->from('ticket A');
        $this->db->join('users B', 'A.id_user_fk=B.id');
        $this->db->join('problem C', 'A.id_problem_fk=C.id_problem');
        $this->db->where('id_groups_fk', 5);
        $this->db->where('status_tiket', 0);

        $query = $this->db->get();
        return $query;
    }
    function daftar_tiket_close()
    {
        $this->db->select('id_ticket,first_name,details,date_time');
        $this->db->from('ticket A');
        $this->db->join('users B', 'A.id_user_fk=B.id');
        $this->db->join('problem C', 'A.id_problem_fk=C.id_problem');
        $this->db->where('id_groups_fk', 5);
        $this->db->where('status_tiket', 2);

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

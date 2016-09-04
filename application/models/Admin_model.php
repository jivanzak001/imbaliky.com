<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_model extends CI_Model
{

    function check_admin($login, $a)
    {
        $this->db->where('username', $login);
        $this->db->where('password', $a);
        $query = $this->db->get('users');

        if ($query->num_rows() > 0) {

            return TRUE;
        } else {
            return FALSE;
        }

    }

    function user_info($login)
    {

        $this->db->where('username', $login);
        $query = $this->db->get('users');

        return $query->row_array();
    }

}
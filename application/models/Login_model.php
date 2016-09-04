<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model
{

    public function register($new)
    {

        $this->db->insert('users', $new);
    }
}
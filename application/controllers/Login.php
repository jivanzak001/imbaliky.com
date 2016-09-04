<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function index()
    {

        $this->load->view('admin/admin_login_view');
    }


    public function insert_login()
    {
        $this->load->helper(array('form', 'url'));
        if (isset($_POST['login'])) {
            $this->load->view('admin/admin_login_view');
            $add['username'] = $this->input->post('username');
            $add['password'] = $this->input->post('password');

            $x = mcrypt_create_iv(22, MCRYPT_DEV_URANDOM);
            $x = base64_encode($x);
            $x = str_replace('+', '.', $x);
            $pp = crypt($add['password'], '$2y$10$' . $x . '$');
            $add['password'] = $pp;
            $this->db->insert('users', $add);
            echo 'ok';
        } else {

            echo 'no';
        }
    }


}

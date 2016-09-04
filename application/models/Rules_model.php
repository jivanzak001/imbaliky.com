<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rules_model extends CI_Model
{

    public $reg_rules = array(

        array(
            'field' => 'User-name',
            'label' => 'User-name',
            'rules' => 'required|min_lenght[4]|xss_clean|alpha_dash'
        ),
        array(
            'field' => 'password',
            'label' => 'Password',
            'rules' => 'required|min_lenght[6]|xss_clean|'
        )

    );

}

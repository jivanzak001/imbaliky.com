<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photo extends CI_Controller
{

    public function index()
    {  $this->load->model('photo_model');
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/photo/index/';
        $config['total_rows'] = $this->db->count_all('photo');
        $config['per_page'] = '50';
        $config['first_link'] = '<';
        $config['last_link'] = '>';
        $config['next_link'] = false;
        $config['prev_link'] = false;

        $this->pagination->initialize($config);



        $data['photo'] = $this->photo_model->get_photo($config['per_page'],$this->uri->segment(3));

        $this->load->view('photo_view', $data);
    }
}


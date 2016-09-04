<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller
{

    public function index()
    {
        $this->load->model('photo_model');
        $data['about_admin'] = $this->photo_model->get_about();
        $this->load->view('about_view', $data);

    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Services extends CI_Controller
{

    public function index()
    {
        $this->load->model('photo_model');
        $data['all_services'] = $this->photo_model->get_services();
        $this->load->view('services_view', $data);

    }
    public function service($id){
        $this->load->model('photo_model');
        $data['service'] = $this->photo_model->row_service($id);
        $this->load->view('service_view', $data);

    }
}
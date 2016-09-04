<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News extends CI_Controller
{

    public function index()
    {
        $this->load->library('pagination');
        $config['base_url'] = base_url().'index.php/news/index/';
        $config['total_rows'] = $this->db->count_all('news');
        $config['per_page'] = '6';
        $config['first_link'] = '<';
        $config['last_link'] = '>';
        $config['next_link'] = false;
        $config['prev_link'] = false;

        $this->pagination->initialize($config);

        $this->load->model('news_model');
        $data['all_news'] = $this->news_model->get_all_news($config['per_page'],$this->uri->segment(3));
        $this->load->view('news_view', $data);
    }
}


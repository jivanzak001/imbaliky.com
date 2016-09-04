<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function index()
    {
        $this->load->model('news_model');
        $this->load->model('photo_model');
        $data['last'] = $this->news_model->get_last_news();

        $data['random'] = $this->news_model->get_random_news();
        $data['photo'] = $this->photo_model->get_random_photo();
        $data['slide'] = $this->photo_model->get_slide();
        $this->load->view('home_view', $data);

    }

    public function blog($id)
    {

        $this->load->model('news_model');
        $data['last'] = $this->news_model->get_blog($id);
        $this->load->view('blog_view', $data);
    }

    public function auth()
    {

        // $this->load->view('auth_view');
    }
}


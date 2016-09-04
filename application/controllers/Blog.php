<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller
{

    public function index($id)
    {

        $this->load->model('news_model');
        $data['last'] = $this->news_model->get_blog($id);
        $this->load->view('blog_view', $data);
    }
//         public function blog($id)
//	{
//       
//                $this->load->model('news_model');
//               $data['last']=  $this->news_model->get_blog($id);
//                $this->load->view('blog_view',$data);
//	}


}
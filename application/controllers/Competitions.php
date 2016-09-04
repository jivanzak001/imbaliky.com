<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Competitions extends CI_Controller
{

    public function index()
    {
        $this->load->model('photo_model');
        $data['photo'] = $this->photo_model->get_competitions('');
        $this->load->view('competitions_view', $data);
    }

    public function images($id)
    {

        $this->load->model('photo_model');
        $data['images'] = $this->photo_model->get_competitions_image($id);
        if ($data['images']) {

            $this->load->view('competitions_image_view', $data);

        } else {

            redirect(base_url());
        }

    }

    public function check_img($id)
    {
        $user_id = $this->session->userdata('user_id');
        $this->load->model('photo_model');
        $result = $this->photo_model->check_img($id, $user_id);
        return $result;
    }

    public function like($id)
    {

        if ($this->session->userdata('user_id')) {
            $this->load->model('photo_model');

            if ($this->check_img($id) == 0) {

                $this->photo_model->like($id);

                $data['img_id'] = $id;
                $data['fb_user_id'] = $this->session->userdata('user_id');
                $this->photo_model->add_user_img($data);
                echo 'ok';

            } else {

                echo 'no';

            }


        }

    }

    public function get_fb_users()
    {

        $this->load->model('photo_model');
        $result = $this->photo_model->get_fb_users();
        echo json_encode($result);

    }

    public function logout()
    {

        $this->session->sess_destroy();
        redirect($_SERVER['HTTP_REFERER']);
    }
}


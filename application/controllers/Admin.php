<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{

    public function index()
    {
        $data['user'] = $this->session->userdata('user');

        if (empty($data['user'])) {
            if ($this->input->post('login')) {

                $login = $this->input->post('username');
                $pswd = $this->input->post('password');
                $x = $this->admin_model->user_info($login);
                $a = crypt($pswd, $x['password']);

                $check = $this->admin_model->check_admin($login, $a);
                if ($check == TRUE) {

                    $data['user_info'] = $this->admin_model->user_info($login);
                    $ses_data = array(
                        'user' => $login
                    );
                    $this->session->set_userdata($ses_data);
                    redirect(base_url() . 'index.php/admin');
                } else {
                    $data['info'] = "Вы не обладаете правами администратора. Либо ввели неверные данные!";
                }
            }

            $this->load->view('admin/admin_login_view');
        } else {
            $this->load->library('pagination');
            $config['base_url'] = base_url().'index.php/admin/index/';
            $config['total_rows'] = $this->db->count_all('news');
            $config['per_page'] = '10';
            $config['first_link'] = '<';
            $config['last_link'] = '>';
            $config['next_link'] = false;
            $config['prev_link'] = false;

            $this->pagination->initialize($config);

            $this->load->model('news_model');
            $data['news_admin'] = $this->news_model->get_all_news($config['per_page'],$this->uri->segment(3));
            $this->load->view('admin/admin_news_view', $data);
        }
    }

    public function logout()
    {

        $this->session->unset_userdata('user');
        redirect('admin');
    }

    public function photo()
    {
        if ($this->session->userdata('user')) {
            $this->load->library('pagination');
            $config['base_url'] = base_url().'index.php/admin/photo';
            $config['total_rows'] = $this->db->count_all('photo');
            $config['per_page'] = '10';
            $config['first_link'] = '<';
            $config['last_link'] = '>';
            $config['next_link'] = false;
            $config['prev_link'] = false;

            $this->pagination->initialize($config);

            $this->load->model('photo_model');
            $data['photo_admin'] = $this->photo_model->get_photo($config['per_page'],$this->uri->segment(3));
            $this->load->view('admin/admin_photo_view', $data);
        } else {
            show_404('page');
        }
    }

    public function slider()
    {
        if ($this->session->userdata('user')) {
            $this->load->model('photo_model');
            $data['slider_admin'] = $this->photo_model->get_slide();
            $this->load->view('admin/admin_slider_view', $data);
        } else {
            show_404('page');
        }
    }

    public function competitions()
    {
        if ($this->session->userdata('user')) {
            $this->load->model('photo_model');
            $data['competitions_admin'] = $this->photo_model->get_competitions('admin');
            $this->load->view('admin/admin_competitions_view', $data);
        } else {
            show_404('page');
        }
    }

    public function add_news()
    {
        $config['upload_path'] = './images/news';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;
        $add['title'] = $this->input->post('title');
        $add['short_text'] = $this->input->post('short_text');
        $add['text'] = $this->input->post('text');

        $add['or'] = $this->input->post('or');
        $add['amis'] = $this->input->post('amis');
        $add['tari'] = $this->input->post('tari');

        $this->load->model('add_model');


        if ($this->session->userdata('user') && $this->input->post('edit_id')) {

            if ($_FILES['userfile']['size'] > 0) {

                $this->load->library('upload', $config);
                $this->upload->do_upload();
                $image_data = $this->upload->data();
                $add['img_name'] = $image_data['file_name'];
            } else {

                $add['img_name'] = $this->input->post('old_image');
            }

            $id = $this->input->post('edit_id');
            $this->add_model->edit_news_model($id, $add);
            redirect('admin');
        } else if ($this->session->userdata('user') && $this->input->post('enter')) {
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $image_data = $this->upload->data();
            $add['img_name'] = $image_data['file_name'];

            $this->add_model->add_news($add);
            redirect('admin');
        } else {
            show_404('page');
        }
    }

    public function add_competitions()
    {
        $config['upload_path'] = './images/competitions';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;
        $this->load->model('add_model');
        $add['title'] = $this->input->post('title');

        $add['description'] = $this->input->post('description');
        $add['date_added'] = $this->input->post('date_added');
        $add['date_end'] = $this->input->post('date_end');
        $add['status'] = 'deactive';

        if ($this->session->userdata('user') && $this->input->post('edit_id')) {
            if ($_FILES['userfile']['size'] > 0) {

                $this->load->library('upload', $config);
                $this->upload->do_upload();
                $image_data = $this->upload->data();
                $add['img_name'] = $image_data['file_name'];
            } else {

                $add['img_name'] = $this->input->post('old_image');
            }

            $id = $this->input->post('edit_id');
            $this->add_model->edit_competitions_model($id, $add);

            redirect('admin/competitions');

        } else if ($this->session->userdata('user') && $this->input->post('enter_competitions')) {
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $image_data = $this->upload->data();
            $add['img_name'] = $image_data['file_name'];

            $this->add_model->add_competitions($add);
            redirect('admin/competitions');
        } else {
            show_404('page');
        }
    }

    public function add_photo()
    {

        $config['upload_path'] = './images/photos';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;
        $this->load->model('add_model');
        $add['title'] = $this->input->post('title');

        if ($this->session->userdata('user') && $this->input->post('edit_id')) {
            if ($_FILES['userfile']['size'] > 0) {

                $this->load->library('upload', $config);
                $this->upload->do_upload();
                $image_data = $this->upload->data();
                $add['img_name'] = $image_data['file_name'];
            } else {

                $add['img_name'] = $this->input->post('old_image');
            }

            $id = $this->input->post('edit_id');
            $this->add_model->edit_photo_model($id, $add);

            redirect('admin/photo');

        } else if ($this->session->userdata('user') && $this->input->post('enter_competitions')) {
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $image_data = $this->upload->data();
            $add['img_name'] = $image_data['file_name'];

            $this->add_model->add_photo($add);
            redirect('admin/photo');
        } else {
            show_404('page');
        }
    }

    public function add_slider()
    {

        $config['upload_path'] = './images/layerslider-gallery/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;
        $this->load->model('add_model');

        if ($this->session->userdata('user') && $this->input->post('edit_id')) {
            if ($_FILES['userfile']['size'] > 0) {

                $this->load->library('upload', $config);
                $this->upload->do_upload();
                $image_data = $this->upload->data();
                $add['img_name'] = $image_data['file_name'];
            } else {

                $add['img_name'] = $this->input->post('old_image');
            }

            $id = $this->input->post('edit_id');
            $this->add_model->edit_slide_model($id, $add);

            redirect('admin/slider');

        } else if ($this->session->userdata('user') && $this->input->post('enter_slider')) {
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $image_data = $this->upload->data();
            $add['img_name'] = $image_data['file_name'];

            $this->add_model->add_slider($add);
            redirect('admin/slider');
        } else {
            show_404('page');
        }

//        if ($this->session->userdata('user') && $this->input->post('enter_slider')) {
//
//            $config['upload_path'] = './images/layerslider-gallery/';
//            $config['allowed_types'] = 'gif|jpg|png';
//            $config['max_size'] = '2000';
//            $config['encrypt_name'] = TRUE;
//            $config['remove_spaces'] = TRUE;
//            $this->load->library('upload', $config);
//            $this->upload->do_upload();
//            $image_data = $this->upload->data();
//
//            $add['img_name'] = $image_data['file_name'];
//
//            $this->load->model('add_model');
//            $this->add_model->add_slider($add);
//            redirect('admin/slider');
//        } else {
//            show_404('page');
//        }
    }

    public function del_news()
    {

        if ($this->session->userdata('user') && $this->input->post('del_news')) {
            $id = $this->input->post('id');
            $this->load->model('add_model');
            $this->load->model('news_model');
            $data['edit'] = $this->news_model->get_blog($id);
            $path_to_file = 'images/news/' . $data['edit']['img_name'];

            unlink($path_to_file);
            $this->add_model->del_news($id);
            redirect('admin');
        } else {
            show_404('page');
        }
    }

    public function del_photo()
    {

        if ($this->session->userdata('user') && $this->input->post('del_photo')) {
            $id = $this->input->post('id');
            $this->load->model('add_model');
            $this->load->model('photo_model');
            $data['edit'] = $this->photo_model->one_photo($id);
            $path_to_file = 'images/photos/' . $data['edit']['img_name'];

            unlink($path_to_file);
            $this->add_model->del_photo($id);
            redirect('admin/photo');
        } else {
            show_404('page');
        }
    }

    public function del_com()
    {

        if ($this->session->userdata('user') && $this->input->post('del_com')) {
            $id = $this->input->post('id');
            $this->load->model('add_model');
            $this->load->model('photo_model');

            $data['edit'] = $this->photo_model->one_competitions($id);
            $path_to_file = 'images/competitions/' . $data['edit']['img_name'];
            unlink($path_to_file);

            $this->add_model->del_com($id);


            redirect('admin/competitions');
        } else {
            show_404('page');
        }
    }

    public function del_comp($id)
    {
        if ($this->session->userdata('user')) {
            $this->load->model('photo_model');
            $this->load->model('add_model');
            $data['edit'] = $this->photo_model->one_comp($id);
            $path_to_file = 'images/competitions/' . $data['edit']['comp_img_name'];
            unlink($path_to_file);

            $this->add_model->del_comp($id);


            redirect($_SERVER['HTTP_REFERER']);
        } else {
            show_404('page');
        }

    }


    public function del_slide()
    {

        if ($this->session->userdata('user') && $this->input->post('del_slide')) {
            $id = $this->input->post('id');
            $this->load->model('add_model');
            $this->load->model('photo_model');
            $data['edit'] = $this->photo_model->one_slide($id);
            $path_to_file = 'images/layerslider-gallery/' . $data['edit']['img_name'];
            unlink($path_to_file);
            $this->add_model->del_slide($id);
            redirect('admin/slider');
        } else {
            show_404('page');
        }
    }

    public function del_competition()
    {
        if ($this->session->userdata('user') && $this->input->post('del_slide')) {

        }
    }

    public function edit_news($id)
    {

        $this->load->model('news_model');
        $data['edit'] = $this->news_model->get_blog($id);
        $data['news_admin'] = $this->news_model->get_all_news('','');
        $this->load->view('admin/admin_news_view', $data);
    }

    public function set_active_competition($id)
    {
        $this->load->model('add_model');
        $this->add_model->set_active_competition($id);
        redirect('admin/competitions');

    }

    public function set_deactive_competition($id)
    {
        $this->load->model('add_model');
        $this->add_model->set_deactive_competition($id);
        redirect('admin/competitions');

    }
    public function set_complete_competition($id)
    {
        $this->load->model('add_model');
        $this->add_model->set_complete_competition($id);
        redirect('admin/competitions');

    }

    public function view_competition($id)
    {
        if (!$id) {

            redirect(base_url() . 'index.php/admin/competitions');
        } else {
            $this->load->model('add_model');
            $data['competition'] = $this->add_model->view_competition($id);
            $this->load->view('admin/view_competition', $data);

        }

    }

    public function add_competition_image()
    {

        $config['upload_path'] = './images/competitions/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;


        $this->load->library('upload', $config);
        $this->upload->do_upload();
        $image_data = $this->upload->data();
        $add['comp_img_name'] = $image_data['file_name'];
        $add['competition_id'] = $this->input->post('competition_id');
        $this->load->model('add_model');
        $this->add_model->add_competition_image($add);
        redirect($_SERVER['HTTP_REFERER']);
    }

    public function edit_competitions($id)
    {

        $this->load->model('photo_model');
        $data['edit'] = $this->photo_model->one_competitions($id);
        $data['competitions_admin'] = $this->photo_model->get_competitions('');
        $this->load->view('admin/admin_competitions_view', $data);
    }

    public function edit_photo($id)
    {

        $this->load->model('photo_model');
        $data['edit'] = $this->photo_model->one_photo($id);
        $data['photo_admin'] = $this->photo_model->get_photo('','');
        $this->load->view('admin/admin_photo_view', $data);
    }

    public function edit_slide($id)
    {

        $this->load->model('photo_model');
        $data['edit'] = $this->photo_model->one_slide($id);
        $data['slider_admin'] = $this->photo_model->get_slide();
        $this->load->view('admin/admin_slider_view', $data);
    }

    public function about()
    {
        if ($this->session->userdata('user')) {
            $this->load->model('photo_model');
            $data['about_admin'] = $this->photo_model->get_about();
            $this->load->view('admin/admin_about_view', $data);
        } else {
            show_404('page');
        }
    }

    public function add_about()
    {

        $add['text'] = $this->input->post('text');

        $this->load->model('add_model');
        $this->add_model->update_about($add);
        redirect('admin/about');


    }

    public function services()
    {
        if ($this->session->userdata('user')) {
            $this->load->model('photo_model');
            $data['all_services'] = $this->photo_model->get_services();
            $this->load->view('admin/admin_services_view', $data);
        } else {
            show_404('page');
        }
    }

    public function add_services()
    {
        $config['upload_path'] = './images/news';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = '2000';
        $config['encrypt_name'] = TRUE;
        $config['remove_spaces'] = TRUE;
        $add['title'] = $this->input->post('title');
        $add['short_text'] = $this->input->post('short_text');
        $add['text'] = $this->input->post('text');
        $this->load->model('add_model');


        if ($this->session->userdata('user') && $this->input->post('edit_id')) {

            if ($_FILES['userfile']['size'] > 0) {

                $this->load->library('upload', $config);
                $this->upload->do_upload();
                $image_data = $this->upload->data();
                $add['img_name'] = $image_data['file_name'];
            } else {
                $add['img_name'] = $this->input->post('old_image');
            }
            $id = $this->input->post('edit_id');
            $this->add_model->edit_service($id, $add);
            redirect('admin/services');
        } else if ($this->session->userdata('user') && $this->input->post('enter')) {
            $this->load->library('upload', $config);
            $this->upload->do_upload();
            $image_data = $this->upload->data();
            $add['img_name'] = $image_data['file_name'];
            $this->add_model->add_service($add);
            redirect('admin/services');
        } else {
            show_404('page');
        }
    }
    public function del_service(){

        if ($this->session->userdata('user') && $this->input->post('del_service')) {
            $id = $this->input->post('id');
            $this->load->model('add_model');
            $this->load->model('photo_model');
            $data['edit'] = $this->photo_model->row_service($id);
            $path_to_file = 'images/news/' . $data['edit']['img_name'];

            unlink($path_to_file);
            $this->add_model->del_service($id);
            redirect('admin/services');
        } else {
            show_404('page');
        }
    }
    public function edit_service($id)
    {
        $this->load->model('photo_model');
        $data['edit'] = $this->photo_model->row_service($id);
        $data['all_services'] = $this->photo_model->get_services();
        $this->load->view('admin/admin_services_view', $data);
    }


}

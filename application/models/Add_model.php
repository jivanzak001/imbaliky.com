<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_model extends CI_Model
{

    public function add_news($add)
    {

        $this->db->insert('news', $add);
    }
    public function add_service($add)
    {

        $this->db->insert('services', $add);
    }

    public function add_competitions($add)
    {

        $this->db->insert('competitions', $add);
    }

    public function add_photo($add)
    {

        $this->db->insert('photo', $add);
    }


    public function add_slider($add)
    {

        $this->db->insert('slide', $add);
    }

    public function del_news($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('news');
    }

    public function del_photo($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('photo');
    }

    public function del_com($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('competitions');
    }

    public function del_slide($id)
    {

        $this->db->where('id', $id);
        $this->db->delete('slide');
    }

    public function edit_news_model($id, $edit)
{

    $this->db->where('id', $id);
    $this->db->update('news', $edit);

}

    public function edit_competitions_model($id, $edit)
    {

        $this->db->where('id', $id);
        $this->db->update('competitions', $edit);

    }

    public function set_active_competition($id)
    {

        $data = array(
            'status' => 'active'
        );
        $this->db->where('id', $id);

        $this->db->update('competitions', $data);
    }

    public function set_deactive_competition($id)
    {

        $data = array(
            'status' => 'deactive'
        );
        $this->db->where('id', $id);

        $this->db->update('competitions', $data);
    }
    public function set_complete_competition($id)
    {

        $data = array(
            'status' => 'complete'
        );
        $this->db->where('id', $id);

        $this->db->update('competitions', $data);
    }
//    public function add_competition_image($id){
//
//        $this->where->('competition_id',$id);
//
//    }
    public function view_competition($id)
    {
        $this->db->select('*');
        $this->db->from('competitions');
        $this->db->join('competitions_image', 'competitions.id = competitions_image.competition_id', 'left');

        $this->db->where('competitions.id', $id);
        $this->db->order_by('competitions_image.likes','desc');
        $query = $this->db->get();
        return $query->result();

//
//        $this->db->where('competition_id',$id);
//        $result = $this->db->get('competitions_image');
//        return $result->result_array();
    }


    public function edit_photo_model($id, $edit)
    {

        $this->db->where('id', $id);
        $this->db->update('photo', $edit);

    }

    public function edit_slide_model($id, $edit)
    {

        $this->db->where('id', $id);
        $this->db->update('slide', $edit);

    }

    public function add_competition_image($add)
    {

        $this->db->insert('competitions_image', $add);
    }

    public function del_competition_image($del)
    {

        $this->db->where('id', $del);
        $this->db->delete('competition_images');
    }

    public function update_about($add)
    {
        $this->db->where('id', 1);
        $this->db->update('about', $add);
    }

    public function update_services($add)
    {
        $this->db->where('id', 1);
        $this->db->update('services', $add);
    }

    public function del_comp($id)
    {
        $this->db->where('comp_img_id', $id);
        $this->db->delete('competitions_image');
    }
    public function del_service($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('services');
    }
    public function edit_service($id, $edit)
    {
        $this->db->where('id', $id);
        $this->db->update('services', $edit);

    }


}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Photo_model extends CI_Model
{

    function get_photo($num,$offset)
    {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('photo',$num,$offset);
        return $query->result_array();
    }

    function get_random_photo()
    {
        $this->db->limit('7');
        $this->db->order_by('id', 'random');
        $query = $this->db->get('photo');
        return $query->result_array();
    }

    function get_competitions($admin)
    {
        if ($admin != 'admin') {

            $this->db->where('status', 'active');
            $this->db->or_where('status', 'complete');
        }
        $this->db->order_by('id', 'desc');


        $query = $this->db->get('competitions');
        return $query->result_array();
    }

    public function get_competitions_image($id)
    {

        $this->db->select('*');
        $this->db->from('competitions');
        $this->db->join('competitions_image', 'competitions.id = competitions_image.competition_id');
        $this->db->where('competitions.status', 'active');
        $this->db->or_where('competitions.status', 'complete');
        $this->db->where('competitions.id', $id);
        $this->db->order_by('competitions_image.likes','desc');
        $query = $this->db->get();
        return $query->result();

    }

    public function like($id)
    {

        $this->db->set('likes', 'likes +1', FALSE);
        $this->db->where('comp_img_id', $id);
        $this->db->update('competitions_image');
    }

    public function check_img($id, $user_id)
    {

        $this->db->where('img_id', $id);
        $this->db->where('fb_user_id', $user_id);
        $query = $this->db->get('likes');

        return $query->num_rows();


    }

    public function get_fb_users()
    {

        $user_id = $this->session->userdata('user_id');
        $this->db->where('fb_user_id', $user_id);
        $query = $this->db->get('likes');
        return $query->result_array();

    }

    public function add_user_img($data)
    {

        $this->db->insert('likes', $data);
    }

    function get_slide()
    {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('slide');
        return $query->result_array();
    }

    public function one_competitions($id)
    {

        $this->db->where('id', $id);
        $query = $this->db->get('competitions');
        return $query->row_array();
    }

    public function one_comp($id)
    {

        $this->db->where('comp_img_id', $id);
        $query = $this->db->get('competitions_image');
        return $query->row_array();
    }

    public function one_photo($id)
    {

        $this->db->where('id', $id);
        $query = $this->db->get('photo');
        return $query->row_array();
    }

    public function one_slide($id)
    {

        $this->db->where('id', $id);
        $query = $this->db->get('slide');
        return $query->row_array();
    }

    function get_about()
    {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('about');
        return $query->row_array();
    }

    public function get_services()
    {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('services');
        return $query->result_array();
    }
    public function row_service($id){
        $this->db->where('id',$id);
        $query = $this->db->get('services');
        return $query->row_array();
    }

}
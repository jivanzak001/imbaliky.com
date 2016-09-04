<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class News_model extends CI_Model
{

    function get_last_news()
    {
        $this->db->limit('2');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('news');
        return $query->result_array();
    }

    function get_all_news($num,$offset)
    {
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('news',$num,$offset);
        return $query->result_array();
    }

    function get_random_news()
    {
        $this->db->limit('3','2');
        $this->db->order_by('id', 'desc');
        $query = $this->db->get('news');
        return $query->result_array();
    }

    public function get_blog($id)
    {

        $this->db->where('id', $id);
        $query = $this->db->get('news');
        return $query->row_array();
    }
}
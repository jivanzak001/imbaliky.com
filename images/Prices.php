<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Prices extends CI_Controller {


	public function index()
	{
				$this->load->library('template');
                $this->load->model('Products_model');
                $data['set_products'] = $this->Products_model->set_products();
                $this->template->template_prices($data);
	}
	public function get_price_list($product_id){
		$this->load->model('Price_model');
		$data = $this->Price_model->get_price_list($product_id);
		echo json_encode($data);

	}
}

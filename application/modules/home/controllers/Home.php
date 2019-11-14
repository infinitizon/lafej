<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller {

	public function index() {
		$this->load->model('Products/Product');
		$data['products'] = $this->Product->findProducts();

		$data['module'] = "home";
		$data['view_file'] = "index";
		// $this->load->view('templates/general',$data);
		// $this->load->module('Templates');
		// $this->Templates->public($data);
		// echo "index: Home";
		echo Modules::run("templates/general", $data);
	}
	
	public function test() {
		echo "Home";
	}
}

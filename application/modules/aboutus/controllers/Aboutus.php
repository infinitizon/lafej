<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aboutus extends MX_Controller {

	public function index() {
        
		$data['module'] = "aboutus";
		$data['view_file'] = "index"; 
		echo Modules::run("templates/general", $data);
	}
}

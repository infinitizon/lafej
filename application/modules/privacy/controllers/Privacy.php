<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Privacy extends MX_Controller {

	public function index($result=array()) {
		
		$data['module'] = "privacy";
		$data['view_file'] = "index"; 
		echo Modules::run("templates/general", $data);
	}

} 
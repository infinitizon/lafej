<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Termsofuse extends MX_Controller {

	public function index($result=array()) {
		
		$data['module'] = "termsofuse";
		$data['view_file'] = "index"; 
		echo Modules::run("templates/general", $data);
	}

} 
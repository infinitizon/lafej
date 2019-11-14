<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends MX_Controller {

	public function index($result=array()) {
		if (is_array($result) && !empty($result))
			$data['result'] = $result;
			
		if(isset($_POST['submit'])){
			$this->load->model('Contact');
			$contact = $this->Contact->populateEntity($_POST);
			$this->load->library('form_validation');
			$this->form_validation->set_rules('ctc_00_nm','Name','required|trim|max_length[150]');
			$this->form_validation->set_rules('ctc_00_eml','Email Address','required|trim|valid_email');
			$this->form_validation->set_rules('ctc_00_msg','Message','required|trim');
			if($this->form_validation->run()){
				unset($_POST['submit']);
				
				$this->load->model('Common');
				$this->Common->setTable('tbl_00_ctc');
				$this->Common->_insert($_POST) ;

				$result = array('success'=>true,'message'=>'Details submitted successfully');
			}else{
				$result = array('success'=>false,'message'=>'Errors occured while processing. Please try again later');
			}

			$data['result'] = $result;
			$data['contact'] = $contact;
		}else {
			$this->load->model('contactus/entity');
			$data['contact'] = $this->entity;
		}

		$data['module'] = "contactus";
		$data['view_file'] = "index"; 
		echo Modules::run("templates/general", $data);
	}

} 
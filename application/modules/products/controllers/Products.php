<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MX_Controller {

	public function index($prd_id=null) {
		$this->load->model('Product');
		if(!isset($prd_id) ) {
			$data['products'] = $this->Product->findProducts();
	
			$data['view_file'] = "products";

		} else {
			$clauses = array('prd_id'=>$prd_id);
			$product= $this->Product->findProducts($clauses);
			$data['product'] = $product->result()[0];
			
			$this->load->model('Files');
			$clauses = array('obj_00_tp'=>fileTypes()['tbl_str_prd'], 'obj_fl_id'=>$prd_id);
			$data['files'] =$this->Files->findAllFiles($clauses);
	
			$data['view_file'] = "index"; 

		}
		$data['module'] = "products";
		echo Modules::run("templates/general", $data);
	}
}


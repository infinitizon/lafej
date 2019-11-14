<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Model{
    
    function insert($data){
        $this->db->insert($this->getTable(), $data);

    }

    
	public function populateEntity($source = array()){
        $this->load->model('Entity');
		foreach($source as $key => $val) {
            $member = 'set'.ucfirst($key);
            if(method_exists($this->Entity, $member))
                $this->Entity->{$member}($val);
        }
        return $this->Entity;
	}
}
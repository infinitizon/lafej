<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Model{
    
    
    function findProducts($where = array()){
        $this->db->select('*');
        $this->db->from('tbl_str_prd p');
        $this->db->join('t_wb_lov l', "p.prd_prc_curr = l.r_k AND l.def_id='CURR-CNV'", 'left');
        $this->db->join('tbl_00_fl f', 'p.prd_id = f.obj_fl_id AND '.fileTypes()['tbl_str_prd']);
		foreach($where as $col=>$value){
			$this->db->where($col, $value);
		}
        
        return $this->db->get();
    }
    function findCurrecies($where = array()){
        $this->db->select('*');
        $this->db->from('t_wb_lov curr');
        $this->db->where('def_id', 'CURR-CNV');
		foreach($where as $col=>$value){
			$this->db->where($col, $value);
		}
        
        return $this->db->get();
    }
}
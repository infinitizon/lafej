<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Files extends CI_Model{
  
  function ìnsert($obj_00_tp, $obj_fl_id, $file_data, $fl_ius_yn){
    $sql = "INSERT INTO tbl_00_fl (obj_00_tp, obj_fl_id, fl_00_nm, fl_00_tp, 
                                    fl_00_ext, fl_00_loc, fl_loc_tmb, fl_00_sz, fl_ius_yn, fl_is_pry) 
                                    VALUES 
                                      (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
    $this->db->query($sql, 
                  array($obj_00_tp, $obj_fl_id, $file_data['file_name'], $file_data['file_type'], $file_data['file_ext']
                  , base_url('assets/images/uploads/').$file_data['file_name']
                  , base_url('assets/images/uploads/thumbs/').$file_data['raw_name'].'_thumb'.$file_data['file_ext']
                  , $file_data['file_size'], $fl_ius_yn, 0)
                    ); 
  }

  function findAllFiles($clauses) {
    $this->db->select('*');
    $this->db->from('tbl_00_fl f');
		foreach($clauses as $col=>$value){
			$this->db->where($col, $value);
		}
    return $this->db->get();
  }

  function _findUserById($usr_id) {
    $this->db->select('*');
    $this->db->from('tbl_01_usr u');
    $this->db->join('tb_00_aut r', 'u.tb_00_aut_id = r.aut_id');
    $this->db->where('u.usr_id', $usr_id);
    $query = $this->db->get();
    if ($query->num_rows() == 1) {
        $row = $query->result()[0];
        return array("success"=>true, "message"=>$row);
    }else {
        return array("success"=>false, "message"=>'Problem Updating user');
    }
  }

	function _update($clauses, $data) {
		foreach($clauses as $col=>$value){
			$this->db->where($col, $value);
		}
		$this->db->update("tbl_01_usr", $data);
  }
  
	function update($clauses, $data) {
		foreach($clauses as $col=>$value){
			$this->db->where($col, $value);
		}
    $this->db->update("tbl_00_fl", $data);
    // echo $this->db->last_query();
	}
}
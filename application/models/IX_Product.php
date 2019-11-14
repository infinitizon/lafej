<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IX_Product extends CI_Model{
    public $prd_id;
    public $tbl_01_usr_id;
    public $tbl_00_cat_cat_id;
    public $prd_00_nm;
    public $prd_old_prc;
    public $prd_00_prc;
    public $prd_prc_curr;
    public $prd_avl_qty;
    public $prd_00_dsc;

    public function setPrdId(String $prd_id){
        $this->prd_id = $prd_id;
    }

    public function getPrdId(){
        return $this->prd_id;
    }
    
    public function setTbl_01_usr_id(String $tbl_01_usr_id){
        $this->tbl_01_usr_id = $tbl_01_usr_id;
    }

    public function getTbl_01_usr_id(){
        return $this->tbl_01_usr_id;
    }
    
    public function setTbl_00_cat_cat_id(String $tbl_00_cat_cat_id){
        $this->tbl_00_cat_cat_id = $tbl_00_cat_cat_id;
    }

    public function getTbl_00_cat_cat_id(){
        return $this->tbl_00_cat_cat_id;
    }

    public function setPrd_00_nm(String $prd_00_nm){
        $this->prd_00_nm = $prd_00_nm;
    }

    public function getCat_Par_Id(){
        return $this->prd_00_nm;
    }

    public function setPrd_old_prc(String $prd_old_prc){
        $this->prd_old_prc = $prd_old_prc;
    }

    public function getPrd_old_prc(){
        return $this->prd_old_prc;
    }

    public function setPrd_00_prc(String $prd_00_prc){
        $this->prd_00_prc = $prd_00_prc;
    }

    public function getPrd_00_prc(){
        return $this->prd_00_prc;
    }

    public function setPrd_prc_curr(String $prd_prc_curr){
        $this->prd_prc_curr = $prd_prc_curr;
    }

    public function getPrd_prc_curr(){
        return $this->prd_prc_curr;
    }

    public function setPrd_avl_qty(String $prd_avl_qty){
        $this->prd_avl_qty = $prd_avl_qty;
    }

    public function getPrd_avl_qty(){
        return $this->prd_avl_qty;
    }

    public function setPrd_00_dsc(String $prd_00_dsc){
        $this->prd_00_dsc = $prd_00_dsc;
    }

    public function getPrd_00_dsc(){
        return $this->prd_00_dsc;
    }
}
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IX_Category extends CI_Model{
    public $cat_id;
    public $cat_00_nm;
    public $cat_00_dsc;
    public $cat_par_id;

    public function setCatId(String $cat_id){
        $this->cat_id = $cat_id;
    }

    public function getCatId(){
        return $this->cat_id;
    }
    
    public function setCat_00_Nm(String $cat_00_nm){
        $this->cat_00_nm = $cat_00_nm;
    }

    public function getCat_00_Nm(){
        return $this->cat_00_nm;
    }
    
    public function setCat_00_Dsc(String $cat_00_dsc){
        $this->cat_00_dsc = $cat_00_dsc;
    }

    public function getCat_00_Dsc(){
        return $this->cat_00_dsc;
    }

    public function setCat_Par_Id(String $cat_par_id){
        $this->cat_par_id = $cat_par_id;
    }

    public function getCat_Par_Id(){
        return $this->cat_par_id;
    }
}
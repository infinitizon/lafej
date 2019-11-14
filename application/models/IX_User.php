<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class IX_User extends CI_Model{
    public $_usr_id;
    public $usr_fst_nm;
    public $usr_mdl_nm;
    public $usr_lst_nm;
    public $usr_eml_add;
    public $usr_phn_no;

    public function setUsrId(String $_usr_id){
        $this->_usr_id = $_usr_id;
    }

    public function getUsrId(){
        return $this->_usr_id;
    }
    
    public function setUsrFstNm(String $usr_fst_nm){
        $this->usr_fst_nm = $usr_fst_nm;
    }

    public function getUsrFstNm(){
        return $this->usr_fst_nm;
    }
    
    public function setUsrMdlNm(String $usr_mdl_nm){
        $this->usr_mdl_nm = $usr_mdl_nm;
    }

    public function getUsrMdlNm(){
        return $this->usr_mdl_nm;
    }

    public function setUsrLstNm(String $usr_lst_nm){
        $this->usr_lst_nm = $usr_lst_nm;
    }

    public function getUsrLstNm(){
        return $this->usr_lst_nm;
    }

    public function setUsrEmlAdd(String $usr_eml_add){
        $this->usr_eml_add = $usr_eml_add;
    }

    public function getUsrEmlAdd(){
        return $this->usr_eml_add;
    }

    public function setUsrPhnNo(String $usr_phn_no){
        $this->usr_phn_no = $usr_phn_no;
    }

    public function getUsrPhnNo(){
        return $this->usr_phn_no;
    }

}
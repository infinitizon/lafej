<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Entity extends CI_Model{

    /** Primary Key of the contact table */
    private $ctc_id;
    /** Name of the contact */
    private $ctc_00_nm;
    /** Email of the contact */
    private $ctc_00_eml;
    /** Message of the contact */
    private $ctc_00_msg;
    /** Message create date */
    private $ctc_crt_dt;
    /** Date message was updated */
    private $ctc_upd_dt;

    public function getCtc_id(){ return $this->ctc_id; }
    
    public function setCtc_id($ctc_id){ $this->ctc_id = $ctc_id ; }
    
    public function getCtc_00_nm(){ return $this->ctc_00_nm; }
    
    public function setCtc_00_nm($ctc_00_nm){ $this->ctc_00_nm = $ctc_00_nm ; }

    public function getCtc_00_eml(){ return $this->ctc_00_eml; }
    
    public function setCtc_00_eml($ctc_00_eml){ $this->ctc_00_eml = $ctc_00_eml ; }

    public function getCtc_00_msg(){ return $this->ctc_00_msg; }
    
    public function setCtc_00_msg($ctc_00_msg){ $this->ctc_00_msg = $ctc_00_msg ; }

    public function getCtc_crt_dt(){ return $this->ctc_crt_dt; }
    
    public function setCtc_crt_dt($ctc_crt_dt){ $this->ctc_crt_dt = $ctc_crt_dt ; }

    public function getCtc_upd_dt(){ return $this->ctc_upd_dt; }
    
    public function setCtc_upd_dt($ctc_upd_dt){ $this->ctc_upd_dt = $ctc_upd_dt ; }
}

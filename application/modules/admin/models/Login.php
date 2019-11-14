<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Model{

    function user_exists($usr_nm, $pwd){
        $this->db->select('*');
        $this->db->from('tbl_01_usr u');
        $this->db->join('tb_00_aut r', 'u.tb_00_aut_id = r.aut_id');
        $this->db->where('u.usr_eml_add', $usr_nm);
        $this->db->where('u.usr_pss_sct', $pwd);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            $row = $query->result()[0];
            return array("success"=>true, "message"=>$row);
        }else {
            return array("success"=>false, "message"=>'Incorrect username or password');
        }
    }
    function o_pending($user){
        $this->db->select('*');
        $this->db->from('tbl_00_ord o');
        $this->db->join('tbl_ord_dtl oi', 'o.ord_id=oi.tbl_00_ord_ord_id');
        $this->db->join('tbl_str_prd p', 'oi.tbl_str_prd_prd_id=p.prd_id', 'left');
        $this->db->join('tbl_00_fl f', 'p.prd_id=f.obj_fl_id', 'lft');
        $this->db->where('o.ord_lov_sta', 1011); //Order staus for user that is still shopping
        $this->db->where('o.tbl_01_usr_usr_id', $user->usr_id);

        // echo $this->db->get_compiled_select();
        $orders = $this->db->get();
        $this->load->library('cart');
        foreach ($orders->result() as $order) {
            $cart_data = array(
                'id'=>$order->products_prod_id,
                'name'=>$order->name,
                'qty'=>$order->quantity,
                'price'=>$order->price,
                'options'=>[
                    'order_id'=>$order->order_id,
                    'order_item_id'=>$order->order_item_id,
                    'file_location'=>$this->input->post('file_location')
                ]
            );
            $this->cart->insert($cart_data);
        }
    }
}
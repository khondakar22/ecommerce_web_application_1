<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of checkout_model
 *
 * @author Riyad
 */
class Checkout_Model extends CI_Model {

    //put your code here

    /* ============= Start Save Customer Info into Shipping Database Table=========== */

    public function save_shipping_info($data) {
        $this->db->insert('tbl_smile_shipping_details', $data);
        $shipping_id = $this->db->insert_id();
        return $shipping_id;
    }

    /* ============= End Save Customer Info into Shipping Database Table=========== */

    public function save_payment_info() {
        $data = array();
        $data['payment_type'] = $this->input->post('payment_method', true);
        $this->db->insert('tbl_smile_payment_details', $data);
        $sdata = array();
        $sdata['payment_id'] = $this->db->insert_id();
        $this->session->set_userdata($sdata);
    }

    public function save_order_info() {
        $data = array();
        $data['smile_customer_id'] = $this->session->userdata('smile_customer_id');
        $data['shipping_id'] = $this->session->userdata('shipping_id');
        $data['payment_id'] = $this->session->userdata('payment_id');
        $data['order_total'] = $this->session->userdata('grand_total');
        $data['order_comments']=$this->input->post('order_comments',true);
        $data['invoice_date']= date('d/m/y');
        $this->db->insert('tbl_smile_order',$data);
        $order_id=$this->db->insert_id();
        
        $sdata=array();
        $sdata['order_id']=$order_id;
        $this->session->set_userdata($sdata);
        
        $contents=$this->cart->contents();
        $oddata=array();
        foreach($contents as $values)
        {
            $oddata['order_id']=$order_id;
            $oddata['smile_product_id']=$values['id'];
           $oddata['order_product_price']=$values['price'];
           $oddata['order_product_name']=$values['name'];
           $oddata['product_sales_quantity']=$values['qty'];
           $this->db->insert('tbl_smile_order_details',$oddata);
     
        }
        
        $sql = "update tbl_smile_add_product, tbl_smile_order_details
                set tbl_smile_add_product.smile_product_qunatity = tbl_smile_add_product.smile_product_qunatity - tbl_smile_order_details.product_sales_quantity 
                where tbl_smile_add_product.smile_product_id = tbl_smile_order_details.smile_product_id
                and tbl_smile_order_details.order_id = '$order_id' ";
        $this->db->query($sql);
    }
    
    public function select_shipping_info($shipping_id)
    {
        $this->db->select('*');
        $this->db->from('tbl_smile_shipping_details');
        $this->db->where('shipping_id',$shipping_id);
        
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }

}

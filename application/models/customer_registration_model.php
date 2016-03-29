<?php


 
class Customer_Registration_Model extends CI_Model {
    //put your code here
     public function save_customer_info($data)
    {
        $this->db->insert('tbl_smile_customer',$data);
        $smile_customer_id=$this->db->insert_id();
        return $smile_customer_id;
    }
    
    public function customer_login_check($data){
       
        $this->db->select('*');
        $this->db->from('tbl_smile_customer');
        $this->db->where('email_address',$data['email_address']);
        $this->db->where('password',$data['password']);
        //$this->db->join('tbl_smile_shipping_details', 'tbl_smile_shipping_details.smile_customer_id = tbl_smile_customer.smile_customer_id','left');
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
}

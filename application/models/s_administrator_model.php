<?php

if ( ! defined('BASEPATH'))
    exit('No direct script access allowed');

class S_Administrator_Model extends CI_Model{
    //put your code here
    
    
    
    
   
         public function admin_login_check($data){
        $this->db->select('*');
        $this->db->from('tbl_smile_admin_user');
        $this->db->where('smile_admin_email_address',$data['smile_admin_email_address']);
        $this->db->where('smile_admin_password',$data['smile_admin_password']);
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
        
    }






    public function save_add_admin_user(){
        $data=array();
        $data['smile_admin_user_name']=$this->input->post('user_name',true);
        $data['smile_admin_email_address']=$this->input->post('email_address',true);
        $data['smile_admin_confirm_password']=$this->input->post('confirm_password',true);
        $data['smile_admin_password']=$this->input->post('password',true);
        $data['smile_admin_access_level']=$this->input->post('access_level',true); 
        $this->db->insert('tbl_smile_admin_user',$data);
        
    }
}

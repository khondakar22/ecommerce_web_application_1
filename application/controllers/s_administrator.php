<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
//session_start();

class S_Administrator extends CI_Controller {
    //put your code here
    
    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id != NULL) {
            redirect('s_s_a');
        }
    }
    
    public function index() {
        $this->load->view('smile_admin/smile_admin_login_page');
    }
     public function check_admin_login(){
       $data=array();
       //$data['admin_email_address']=$_POST['admin_email_address'];
        $data['smile_admin_email_address']=$this->input->post('smile_admin_email_address',true);
        $data['smile_admin_password']=$this->input->post('smile_admin_password',true);
        $result=$this->s_administrator_model->admin_login_check($data);
        
        
        $sdata=array();
       if($result){
           $sdata['admin_id']=$result->smile_admin_user_id;
           $sdata['admin_name']=$result->smile_admin_user_name;
           $sdata['admin_email']=$result->smile_admin_email_address;
           $sdata['access_level']=$result->smile_admin_access_level;
           $sdata['admin_passowrd']=$result->smile_admin_password;
           $sdata['admin_confirm_password']=$result->smile_admin_confirm_password;
           $this->session->set_userdata($sdata);
       redirect('s_s_a'); 
       }
 else {
     
     $sdata['exception']='Your Email or Password Invalid!';
     $this->session->set_userdata($sdata);
     
    redirect('s_administrator');    
}
       
    }
    
    
    
    
    
    
    
}

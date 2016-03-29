<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Customer_Registration extends CI_Controller {
    //put your code here
    
   
    
    public function index(){
        
         $data = array();
        $data['header_category']=$this->welcome_model->select_all_published_header_category();
       $data['header_restoff_category']=$this->welcome_model->select_all_published_header_restoff_category();
        $data['all_menu_category']=$this->welcome_model->select_all_published_menu_category();
        $data['all_sub_menu_category']=$this->welcome_model->select_all_published_sub_menu_category();
        $data['select_logo']=$this->welcome_model->select_all_published_logo();
        $data['smile_master_middle_content'] = $this->load->view('smile_account_registration_login_page',$data,true);
        $data['title']='Smile Registration & Login';
        $this->load->view('smile_master_main_page', $data);
        
    }
    
    
    
    
    
    public function account_registar(){
         
        $data = array();
        $data['header_category']=$this->welcome_model->select_all_published_header_category();
        $data['header_restoff_category']=$this->welcome_model->select_all_published_header_restoff_category();
        $data['all_menu_category']=$this->welcome_model->select_all_published_menu_category();
        $data['all_sub_menu_category']=$this->welcome_model->select_all_published_sub_menu_category();
        $data['select_logo']=$this->welcome_model->select_all_published_logo();
        $data['smile_master_middle_content'] = $this->load->view('smile_customer_account_registration_page',$data,true);
        $data['title']='Smile Registration';
        $this->load->view('smile_master_main_page', $data);
    } 
    
    public function save_customer()
{
    $data=array();
    $data['first_name']= $this->input->post('first_name',true);
    $data['smile_customer_id']= $this->input->post('smile_customer_id',true);
    $data['last_name']= $this->input->post('last_name',true);        
    $data['email_address']= $this->input->post('email_address',true);        
    $data['password']= $this->input->post('password',true);        
    $data['mobile_number']= $this->input->post('mobile_number',true);        
    $data['company_name']= $this->input->post('company_name',true);
    $data['address_01']= $this->input->post('address_01',true);        
    $data['address_02']= $this->input->post('address_02',true);        
    $data['city']= $this->input->post('city',true);        
    $data['country_name']= $this->input->post('country_name',true);
    $data['zip_code5']= $this->input->post('zip_code5',true);
    
    $smile_customer_id=$this->customer_registration_model->save_customer_info($data);
    
   
    
    /*--------------Start Send Account Creation Email------------*/
    $mdata=array();
    $mdata['from_address']='admin@smilemobilebd.com';
    $mdata['admin_full_name']='Smile Mobile Bd';
    $mdata['to_address']=$data['email_address'];
    $mdata['subject']='Smile Mobile Bd - Account Created Successfully';
    $mdata['password']=$this->input->post('password',true);
    $mdata['smile_customer_id']=$smile_customer_id;
    $mdata['last_name']=$this->input->post('last_name',true);
    $this->mailer_model->sendEmail($mdata,'activation_email');
    
    /*--------------End Send Account Creation Email------------*/
    
    redirect('customer_registration/showing_verification_status');
    
    
}

public function showing_verification_status(){
    $data = array();
        $data['header_category']=$this->welcome_model->select_all_published_header_category();
        $data['header_restoff_category']=$this->welcome_model->select_all_published_header_restoff_category();
        $data['all_menu_category']=$this->welcome_model->select_all_published_menu_category();
        $data['all_sub_menu_category']=$this->welcome_model->select_all_published_sub_menu_category();
        $data['select_logo']=$this->welcome_model->select_all_published_logo();
        $data['smile_master_middle_content'] = $this->load->view('smile_sending_customer_verify_message_page',$data,true);
        $data['title']='Smile Verification';
        $this->load->view('smile_master_main_page', $data);
}

public function check_customer_login(){
       $data=array();
       //$data['admin_email_address']=$_POST['admin_email_address'];
        $data['email_address']=$this->input->post('email_address',true);
        $data['password']=$this->input->post('password',true);
        $result=$this->customer_registration_model->customer_login_check($data);
        
        
        $sdata=array();
       if($result){
           
           $sdata['customer_name']=$result->last_name;
           $sdata['smile_customer_id']=$result->smile_customer_id;
           $sdata['activation_status']=$result->activation_status;
          
           $this->session->set_userdata($sdata);
       redirect('welcome'); 
       }
 else {
     
     $sdata['exception']='Your Email or Password Invalid!';
     $this->session->set_userdata($sdata);
     
    redirect('welcome/customer_login');    
}
       
    }
    
     
    
    
   




}

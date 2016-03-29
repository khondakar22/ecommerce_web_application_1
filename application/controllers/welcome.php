<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    /*================== Start Smile Home Page Display===========*/
    
    
    
    
    public function index() {
        $data = array();
        $data['header_category']=$this->welcome_model->select_all_published_header_category();
        $data['header_restoff_category']=$this->welcome_model->select_all_published_header_restoff_category();
        $data['all_menu_category']=$this->welcome_model->select_all_published_menu_category();
        $data['all_sub_menu_category']=$this->welcome_model->select_all_published_sub_menu_category();
        $data['select_logo']=$this->welcome_model->select_all_published_logo();
        $data['select_banner']=$this->welcome_model->select_all_published_banner();
        $data['featured_product']=$this->welcome_model->select_featured_product();
        $data['latest_product']=$this->welcome_model->select_latest_product();
        $data['smile_master_middle_content'] = $this->load->view('smile_master_main_page_middle_content',$data,true);
        $data['title']='Smile Mobile Home';
        $data['slide_show']=1;
        $this->load->view('smile_master_main_page', $data);
    }
    
    /*==================End Smile Home Page Display===========*/
    
    /*================== Start Smile Product Details Page Display===========*/
    
     public function p_d_v($smile_sub_menubar_category_id,$smile_product_id){
        $data = array();
       // $this->load->library('pagination');
        $data['header_category']=$this->welcome_model->select_all_published_header_category();
        $data['header_restoff_category']=$this->welcome_model->select_all_published_header_restoff_category();
        $data['all_menu_category']=$this->welcome_model->select_all_published_menu_category();
        $data['all_sub_menu_category']=$this->welcome_model->select_all_published_sub_menu_category();
        $data['select_logo']=$this->welcome_model->select_all_published_logo();
        //$config['base_url'] = base_url() .'welcome/p_d_v/';
         //$config['total_rows'] = $this->db->get('data')->num_rows();
        //$config['per_page'] = 5;
        //$config['num_links'] = 3;
        //$config['full_tag_open'] = '<div id="pagination">';
        //$config['full_tag_close'] = '</div>';

        //$this->pagination->initialize($config);
        //$data['pagination'] = $this->pagination->create_links();
        
        
        $data['product_by_sub_menu']=$this->welcome_model->select_all_prodcut_by_sub_menu_id(/*$config['per_page'].*/$smile_sub_menubar_category_id/*, $this->uri->segment(3)*/);
        $data['product_info']=$this->welcome_model->select_all_prodcut_by_id(/*$config['per_page'].*/$smile_product_id/*,$this->uri->segment(3)*/);
        $data['comment_info']=$this->welcome_model->select_all_comment_by_id(/*$config['per_page'].*/$smile_product_id/*,$this->uri->segment(3)*/);
       
        $data['smile_master_middle_content'] = $this->load->view('smile_prodcut_details_view_page',$data,true);
        $data['title']='Smile Mobile Product Details';
        $this->load->view('smile_master_main_page', $data);
    } 
    /*================== End Smile Product Details Page Display===========*/
    
    /*================== Start Smile Product view by sub category Page Display===========*/
    public function p_v_s_m($smile_sub_menubar_category_id){
        $data = array();
        $data['header_category']=$this->welcome_model->select_all_published_header_category();
        $data['header_restoff_category']=$this->welcome_model->select_all_published_header_restoff_category();
        $data['all_menu_category']=$this->welcome_model->select_all_published_menu_category();
        $data['all_sub_menu_category']=$this->welcome_model->select_all_published_sub_menu_category();
        $data['select_logo']=$this->welcome_model->select_all_published_logo();
        $data['select_sub_menu_element']=$this->welcome_model->select_sub_menu_element_by_id($smile_sub_menubar_category_id);
        
        $data['product_by_sub_menu']=$this->welcome_model->select_prodcut_by_sub_menu_id($smile_sub_menubar_category_id);
        $data['smile_master_middle_content'] = $this->load->view('smile_product_view_by_sub_category_Page',$data,true);
        $data['title']='Smile Mobile';
        $this->load->view('smile_master_main_page', $data);
    } 
    /*================== End Smile Product view by sub category Page Display===========*/
    
    /*================== Start Smile Page View By Header Category Display===========*/
    public function p_v_b_h_c($smile_header_category_id){
        
        
        
        $data = array();
        $data['header_category']=$this->welcome_model->select_all_published_header_category();
       $data['header_restoff_category']=$this->welcome_model->select_all_published_header_restoff_category();
        $data['all_menu_category']=$this->welcome_model->select_all_published_menu_category();
        $data['all_sub_menu_category']=$this->welcome_model->select_all_published_sub_menu_category();
        $data['select_logo']=$this->welcome_model->select_all_published_logo();
        $data['select_header_category']=$this->welcome_model->select_header_category_by_id_for_about_us_info($smile_header_category_id);
       
        $idata=array();
        $idata['smile_header_category_id']=$smile_header_category_id;
        $this->session->set_userdata($idata);
        
        
        $data['smile_master_middle_content'] = $this->load->view('smile_header_display_page',$data,true);
        $data['title']='Smile Mobile';
        $this->load->view('smile_master_main_page', $data);
    } 
    /*================== End Smile Page View By Header Category Display===========*/
    
      /*================== Start Smile Page View By Header Rest Category Display===========*/
    public function p_v_b_h_r_c($smile_rest_header_id){
        $this->load->library('googlemaps');
       $config= array();
       $config['center']='23.730723,90.412468';
       $this->googlemaps->initialize($config);
       
       $marker=array();
       $marker['position']='23.730723,90.412468';
       $marker['infowindow_content']='6th floor, Sobahan Mansion Purana-palton, Dhaka-1000';
       $this->googlemaps->add_marker($marker);
        
        
        $data = array();
        $data['header_category']=$this->welcome_model->select_all_published_header_category();
       $data['header_restoff_category']=$this->welcome_model->select_all_published_header_restoff_category();
        $data['all_menu_category']=$this->welcome_model->select_all_published_menu_category();
        $data['all_sub_menu_category']=$this->welcome_model->select_all_published_sub_menu_category();
        $data['select_logo']=$this->welcome_model->select_all_published_logo();
        
        $data['select_contact_info_by_id']=$this->welcome_model->select_header_rest_category_for_contact_us_info($smile_rest_header_id);
       
        $rdata=array();
        $rdata['smile_rest_header_id']=$smile_rest_header_id;
        $this->session->set_userdata($rdata);
        
        $data['select_contact_info']=$this->welcome_model->select_company_contact_address();
        $data['map'] = $this->googlemaps->create_map();
        $data['smile_master_middle_content'] = $this->load->view('smile_contact_us_page',$data,true);
        $data['title']='Smile Mobile';
        $this->load->view('smile_master_main_page', $data);
    } 
    /*================== End Smile Page View By Header Rest Category Display===========*/
    
    
    
      /*================== Start Smile Page View By Header Rest Category Display===========*/
    public function p_v_b_m_c($smile_menubar_category_id){
        
        
        
        $data = array();
        $data['header_category']=$this->welcome_model->select_all_published_header_category();
       $data['header_restoff_category']=$this->welcome_model->select_all_published_header_restoff_category();
        $data['all_menu_category']=$this->welcome_model->select_all_published_menu_category();
        $data['all_sub_menu_category']=$this->welcome_model->select_all_published_sub_menu_category();
        $data['select_logo']=$this->welcome_model->select_all_published_logo();
        $data['select_delear_shop_info_by_menu_id']=$this->welcome_model->select_menubar_category_for_delar_shop_info($smile_menubar_category_id);
       
        $mdata=array();
        $mdata['smile_menubar_category_id']=$smile_menubar_category_id;
        $this->session->set_userdata($mdata);
        
        
        $data['smile_master_middle_content'] = $this->load->view('smile_delear_shop_page',$data,true);
        $data['title']='Smile Mobile';
        $this->load->view('smile_master_main_page', $data);
    } 
    /*================== End Smile Page View By Header Rest Category Display===========*/
    
    
    
    
    
    
    
    
    
    
    
    /*================== Start Save Product Comment Add Into Database ===========*/
     public function save_product_comment(){
        $smile_product_id=$this->input->post('smile_product_id',true);
        $this->welcome_model->save_product_comments_info();
        $sdata=array();
        $sdata['message']='Your Comments Successfully Submitted, Please Wait for approval for Post your comments!';
        $this->session->set_userdata($sdata);
        redirect('welcome/p_d_v/'.$smile_product_id);
    }
    
    /*================== End Save Product Comment Add Into Database ===========*/
    
    
    
    
    public function account_registratrion(){
        $data = array();
        $data['header_category']=$this->welcome_model->select_all_published_header_category();
        $data['header_restoff_category']=$this->welcome_model->select_all_published_header_restoff_category();
        $data['all_menu_category']=$this->welcome_model->select_all_published_menu_category();
        $data['all_sub_menu_category']=$this->welcome_model->select_all_published_sub_menu_category();
        $data['select_logo']=$this->welcome_model->select_all_published_logo();
        $data['smile_master_middle_content'] = $this->load->view('smile_account_registration_login_page',$data,true);
        $data['title']='Smile Home';
        $this->load->view('smile_master_main_page', $data);
    } 
    
    
    /*==================Activation User Account==============*/
    public function update_customer_status($id){
        $en_rep_id=str_replace("%F2","/",$id );
           $id=$this->encrypt->decode($en_rep_id);
           //echo $id;
           $this->welcome_model->update_customer_activation_status($id);
           $sdata=array();
           $sdata['message']='Your Account Activated Successfully , You May Login Now';
           $this->session->set_userdata($sdata); 
           $data=array();
        $data['header_category']=$this->welcome_model->select_all_published_header_category();
       $data['header_restoff_category']=$this->welcome_model->select_all_published_header_restoff_category();
        $data['all_menu_category']=$this->welcome_model->select_all_published_menu_category();
        $data['all_sub_menu_category']=$this->welcome_model->select_all_published_sub_menu_category();
        $data['select_logo']=$this->welcome_model->select_all_published_logo();
        $data['smile_master_middle_content'] = $this->load->view('smile_customer_login_page',$data,true);
        $data['title']='Smile Home';
        $this->load->view('smile_master_main_page', $data);
           
    }
    
    public function customer_login(){
        $data=array();
        $data['header_category']=$this->welcome_model->select_all_published_header_category();
        $data['header_restoff_category']=$this->welcome_model->select_all_published_header_restoff_category();
        $data['all_menu_category']=$this->welcome_model->select_all_published_menu_category();
        $data['all_sub_menu_category']=$this->welcome_model->select_all_published_sub_menu_category();
        $data['select_logo']=$this->welcome_model->select_all_published_logo();
        $data['smile_master_middle_content'] = $this->load->view('smile_customer_login_page',$data,true);
        $data['title']='Smile Home';
        $this->load->view('smile_master_main_page', $data);
   }
   
   
   /* ============ Start Customer Logout Function======= */

    public function customer_logout() {

        $this->session->unset_userdata('smile_customer_id');
        $this->session->unset_userdata('customer_name');
        $this->session->unset_userdata('shipping_id');
        $this->session->unset_userdata('payment_id');
        $this->session->unset_userdata('order_id');
        $sdata['message'] = 'You are successfully Logout!';
        $this->session->set_userdata($sdata);
        redirect('welcome');
    }

    /* ============ End customer Logout Function======= */
    
   
    public function shipping_details(){
         $data = array();
       $data['header_category']=$this->welcome_model->select_all_published_header_category();
        $data['header_restoff_category']=$this->welcome_model->select_all_published_header_restoff_category();
        $data['all_menu_category']=$this->welcome_model->select_all_published_menu_category();
        $data['all_sub_menu_category']=$this->welcome_model->select_all_published_sub_menu_category();
        $data['select_logo']=$this->welcome_model->select_all_published_logo();
        $data['smile_master_middle_content'] = $this->load->view('smile_product_shipping_details_page',$data,true);
        $data['title']='Smile Home';
        $this->load->view('smile_master_main_page', $data);
    }
    
    
   
    
    
    public function about_us(){
        $data = array();
       $data['header_category']=$this->welcome_model->select_all_published_header_category();
        $data['header_restoff_category']=$this->welcome_model->select_all_published_header_restoff_category();
        $data['all_menu_category']=$this->welcome_model->select_all_published_menu_category();
        $data['all_sub_menu_category']=$this->welcome_model->select_all_published_sub_menu_category();
        $data['select_logo']=$this->welcome_model->select_all_published_logo();
        $data['select_header_category']=$this->welcome_model->select_header_cat_by_id();
        $data['smile_master_middle_content'] = $this->load->view('smile_about_us_page',$data,true);
        $data['title']='Smile Home';
        $this->load->view('smile_master_main_page', $data);
    } 
    
    public function contact_us(){
        $this->load->library('googlemaps');
       $config= array();
       $config['center']='23.730723,90.412468';
       $this->googlemaps->initialize($config);
       
       $marker=array();
       $marker['position']='23.730723,90.412468';
       $marker['infowindow_content']='6th floor, Sobahan Mansion Purana-palton, Dhaka-1000';
       $this->googlemaps->add_marker($marker);
        
        $data = array();
        $data['header_category']=$this->welcome_model->select_all_published_header_category();
       $data['header_restoff_category']=$this->welcome_model->select_all_published_header_restoff_category();
        $data['all_menu_category']=$this->welcome_model->select_all_published_menu_category();
        $data['all_sub_menu_category']=$this->welcome_model->select_all_published_sub_menu_category();
        $data['select_logo']=$this->welcome_model->select_all_published_logo();
        
        $data['select_contact_info']=$this->welcome_model->select_company_contact_address();
        $data['map'] = $this->googlemaps->create_map();
        $data['smile_master_middle_content'] = $this->load->view('s_contact_info',$data,true);
        $data['title']='Smile Home';
        $this->load->view('smile_master_main_page', $data);
    } 
    
     public function check_out(){
         
        $data = array();
        $data['header_category']=$this->welcome_model->select_all_published_header_category();
        $data['header_restoff_category']=$this->welcome_model->select_all_published_header_restoff_category();
        $data['all_menu_category']=$this->welcome_model->select_all_published_menu_category();
        $data['all_sub_menu_category']=$this->welcome_model->select_all_published_sub_menu_category();
        $data['select_logo']=$this->welcome_model->select_all_published_logo();
        $data['smile_master_middle_content'] = $this->load->view('smile_customer_account_registration_page',$data,true);
        $data['title']='Smile Home';
        $this->load->view('smile_master_main_page', $data);
    } 
    
    
    public function shoping_cart(){
        $data = array();
        $data['header_category']=$this->welcome_model->select_all_published_header_category();
        $data['header_restoff_category']=$this->welcome_model->select_all_published_header_restoff_category();
        $data['all_menu_category']=$this->welcome_model->select_all_published_menu_category();
        $data['all_sub_menu_category']=$this->welcome_model->select_all_published_sub_menu_category();
        $data['select_logo']=$this->welcome_model->select_all_published_logo();
        $data['smile_master_middle_content'] = $this->load->view('smile_shopping_cart_page',$data,true);
        $data['title']='Smile Home';
        $this->load->view('smile_master_main_page', $data);
    }
    
     /*================== Start Admin Registration Email Checking=======*/
    
    public function ajax_email_check($email_address){
         $result=$this->welcome_model->ajax_email_check_info($email_address);
         if($result){
             echo'Already Exists!';
         }
         else {
             echo 'Available';
         }
    } 
     
    /*================== End Admin Registration Email Checking=======*/
    
    
    
   
    

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */
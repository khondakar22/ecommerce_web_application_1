<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of welcome_model
 *
 * @author Riyad
 */
class Welcome_Model extends CI_Model {
    
    //put your code here
    
    /*
     * Start Header Category
     */
    
    /*============= Start Get Out Header First Three Category From Database===========*/
    public function select_all_published_header_category(){
        $this->db->select('*');
        $this->db->from('tbl_smile_header_category');
        $this->db->where('smile_header_cateogry_publication_status',1); 
        //$this->db->limit(3,0);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
     /*============= End Get Out Header First Three Category From Database===========*/
   
    /*============= Start Get Out Header Rest Category From Database===========*/
    public function select_all_published_header_restoff_category(){
        $this->db->select('*');
        $this->db->from('tbl_smile_rest_header_category');
        $this->db->where('smile_rest_header_cateogry_publication_status',1); 
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
   /*  ============= End Get Out Header Rest Category From Database===========*/
    
    /*
     * Start Logo
     */
    /*============= Start Get Logo Information From Database===========*/
    public function select_all_published_logo(){
        $this->db->select('*');
        $this->db->from('tbl_smile_add_logo');
        $this->db->where('smile_logo_publication_status',1); 
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    /*============= End Get Logo Information From Database===========*/
    
     /*============= Start Get Out Menu Category From Database===========*/
    public function select_all_published_menu_category(){
        $this->db->select('*');
        $this->db->from('tbl_smile_menubar_category');
        $this->db->where('smile_menubar_category_publication_status',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
     /*============= End Get Out Menu Category From Database===========*/
  
    /*============= Start Get Out Sub Menu Category From Database===========*/
    public function select_all_published_sub_menu_category(){
        $this->db->select('*');
        $this->db->from(' tbl_smile_sub_menu_bar_category');
        $this->db->where('smile_sub_menubar_category_publication_status',1);
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
     /*============= End Get Out Sub Menu Category From Database===========*/
    
    /*============= Start Get Banner Information From Database===========*/
    public function select_all_published_banner(){
        $this->db->select('*');
        $this->db->from('tbl_smile_add_banner_slider');
        $this->db->where('smile_banner_publication_status',1);
        $this->db->order_by('smile_banner_publication_date','DESC');
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    /*============= End Get Banner Information From Database===========*/
     /*============= Start Get Featured product From Database===========*/
   public function select_featured_product(){
        $this->db->select('*');
  $this->db->from('tbl_smile_add_product');
  $this->db->where('smile_product_publication_status',1);
   $this->db->where('smile_featured_product',1);
   $this->db->order_by('smile_product_id','DESC');
   //$this->db->limit(6);
  $query_result=$this->db->get();
    $result=$query_result->result();
    return $result;
    }
    /*============= End Get Featured Product From Database===========*/
    
    /*============= Start Get Latest product From Database===========*/
   public function select_latest_product(){
        $this->db->select('*');
  $this->db->from('tbl_smile_add_product');
  $this->db->where('smile_product_publication_status',1);
   $this->db->order_by('smile_product_publication_date','DESC');
   $this->db->limit(8);
  $query_result=$this->db->get();
    $result=$query_result->result();
    return $result;
    }
    /*============= End Get Latest Product From Database===========*/

    
    /*============= Start Get All product Details Info From Database===========*/
    public function select_all_prodcut_by_id($smile_product_id/*,$per_page,$offset*/) {
        /* if($offset==NULL)
        {
            $offset=0;
        }*/
       
        $this->db->select('*');
        $this->db->from('tbl_smile_add_product');
         //$this->db->limit($per_page,$offset);
        $this->db->where('smile_product_id',$smile_product_id);
        
        $this->db->join('tbl_smile_sub_menu_bar_category','tbl_smile_add_product.smile_sub_menubar_category_id=tbl_smile_sub_menu_bar_category.smile_sub_menubar_category_id');
        $this->db->join('tbl_smile_menubar_category','tbl_smile_add_product.smile_menubar_category_id=tbl_smile_menubar_category.smile_menubar_category_id');
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    /*============= End Get All product Details Info From Database===========*/
    
    /*============= Start Get  product by Sub Category From Database===========*/
   public function select_prodcut_by_sub_menu_id($smile_sub_menubar_category_id){
        
        
        $this->db->select('*');
        $this->db->from('tbl_smile_add_product');
      
  
  //$this->db->join('tbl_smile_sub_menu_bar_category','tbl_smile_sub_menu_bar_category.smile_sub_menubar_category_id=tbl_smile_add_product.smile_sub_menubar_category_id','left');
  $this->db->where('smile_product_publication_status',1);
  $this->db->where('smile_sub_menubar_category_id',$smile_sub_menubar_category_id);
   $this->db->order_by('smile_product_id','DESC');
  // $this->db->join('tbl_smile_add_product','tbl_smile_sub_menu_bar_category.smile_sub_menubar_category_id=tbl_smile_add_product.smile_sub_menubar_category_id');
  //$this->db->limit(4);
  $query_result=$this->db->get();
    $result=$query_result->result();
    return $result;
    }
    /*============= End Get  Product By Sub Category From Database===========*/
    
    /*============= Start Get  product by Sub Category From Database===========*/
   public function select_all_prodcut_by_sub_menu_id($smile_sub_menubar_category_id/*,$per_page,$offset*/){
        /*if($offset==NULL)
        {
            $offset=0;
        }*/
        
        
        $this->db->select('*');
        $this->db->from('tbl_smile_add_product');
      //$this->db->limit($per_page,$offset);
  
  //$this->db->join('tbl_smile_sub_menu_bar_category','tbl_smile_sub_menu_bar_category.smile_sub_menubar_category_id=tbl_smile_add_product.smile_sub_menubar_category_id','left');
  $this->db->where('smile_product_publication_status',1);
  $this->db->where('smile_sub_menubar_category_id',$smile_sub_menubar_category_id);
   $this->db->order_by('smile_product_id','DESC');
   $this->db->limit(4);
  // $this->db->join('tbl_smile_add_product','tbl_smile_sub_menu_bar_category.smile_sub_menubar_category_id=tbl_smile_add_product.smile_sub_menubar_category_id');
  //$this->db->limit(4);
  $query_result=$this->db->get();
    $result=$query_result->result();
    return $result;
    }
    /*============= End Get  Product By Sub Category From Database===========*/
    
    
    
    
    /*============= Start Get  product by Sub Category & Menu Category From Database===========*/
    
    public function select_sub_menu_element_by_id($smile_sub_menubar_category_id){
        
        $this->db->select('*');
        $this->db->from('tbl_smile_sub_menu_bar_category');
        $this->db->where('smile_sub_menubar_category_id',$smile_sub_menubar_category_id);
        $this->db->where('smile_sub_menubar_category_publication_status',1);
        $query_result=$this->db->get();
    $result=$query_result->row();
    return $result;
    }
    
    /*============= End Get  product by Sub Category & Menu Category From Database===========*/
    
      /*================== Start Save Product Comment Add Into Database ===========*/
    
    public function save_product_comments_info(){
          $data=array();
        $data['smile_comment_description']=$this->input->post('smile_comment_description',true);
        $data['smile_product_id']=$this->input->post('smile_product_id',true);
        $data['smile_comment_user_name']=$this->input->post('smile_comment_user_name',true);
        $data['smile_comment_product_rating_status']=$this->input->post('smile_comment_product_rating_status',true);
        $this->db->insert('tbl_smile_product_comment',$data);
    }
    
    /*================== End Save Product Comment Add Into Database ===========*/
    
    /*============= Start Get All Comments Details Info From Database===========*/
    public function select_all_comment_by_id($smile_product_id) {
        $this->db->select('*');
        $this->db->from('tbl_smile_product_comment');
        $this->db->where('smile_product_id',$smile_product_id);
        $this->db->where('smile_comment_publication_status',1);
        //$this->db->join('tbl_smile_add_product','tbl_smile_product_comment.smile_product_id=tbl_smile_add_product.smile_product_id');        
        $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    /*============= End Get All Comments Details Info From Database===========*/
   
     /*============= Start Updated Customer Activation Info From Database===========*/
    public function update_customer_activation_status($id)
    {
        $this->db->set('activation_status',1);
        $this->db->where('smile_customer_id',$id);
        $this->db->update('tbl_smile_customer');
    }
    
    /*============= End Updated Customer Activation Info From Database===========*/
    
    /*============= Start Get Customer Info From Database===========*/
    public function select_customer_info($customer_id){
        
        $this->db->select('*');
        $this->db->from('tbl_smile_customer');
        $this->db->where('smile_customer_id',$customer_id);
        $query_result=$this->db->get();
    $result=$query_result->row();
    return $result;
    }
     /*============= End Get Customer Info From Database===========*/
    
    public function ajax_email_check_info($email_address){
     $this->db->select('*');
  $this->db->from('tbl_smile_customer');
   $this->db->where('email_address',$email_address);
  $query_result=$this->db->get();
    $result=$query_result->row();
    return $result;
}
    
/*============= Start Get  About Us Page by Header Category From Database===========*/
   public function select_header_category_by_id_for_about_us_info($smile_header_category_id){
        
        
        $this->db->select('*');
        $this->db->from('tbl_smile_add_about_us_page');
      
  
  //$this->db->join('tbl_smile_sub_menu_bar_category','tbl_smile_sub_menu_bar_category.smile_sub_menubar_category_id=tbl_smile_add_product.smile_sub_menubar_category_id','left');
  $this->db->where('smile_page_publication_status',1);
  $this->db->where('smile_header_category_id',$smile_header_category_id);
   
  // $this->db->join('tbl_smile_add_product','tbl_smile_sub_menu_bar_category.smile_sub_menubar_category_id=tbl_smile_add_product.smile_sub_menubar_category_id');
  //$this->db->limit(4);
  $query_result=$this->db->get();
    $result=$query_result->row();
    return $result;
    }
    /*============= End Get  Product By Sub Category From Database===========*/
    
    
    
    
    
    
    
    /*============= Start Get  About Us Page by Header Category From Database===========*/
   public function select_header_rest_category_for_contact_us_info($smile_rest_header_id){
        
        
        $this->db->select('*');
        $this->db->from('tbl_smile_contact_us_page');
      
  
  //$this->db->join('tbl_smile_sub_menu_bar_category','tbl_smile_sub_menu_bar_category.smile_sub_menubar_category_id=tbl_smile_add_product.smile_sub_menubar_category_id','left');
  //$this->db->where('smile_rest_header_cateogry_publication_status',1);
  $this->db->where('smile_rest_header_id',$smile_rest_header_id);
   
  // $this->db->join('tbl_smile_add_product','tbl_smile_sub_menu_bar_category.smile_sub_menubar_category_id=tbl_smile_add_product.smile_sub_menubar_category_id');
  //$this->db->limit(4);
  $query_result=$this->db->get();
    $result=$query_result->row();
    return $result;
    }
    /*============= End Get  Product By Sub Category From Database===========*/
    
    
    /*============= Start Get  About Us Page by Header Category From Database===========*/
   public function select_menubar_category_for_delar_shop_info($smile_menubar_category_id){
        
        
        $this->db->select('*');
        $this->db->from('tbl_smile_menubar_category');
      
  
  //$this->db->join('tbl_smile_sub_menu_bar_category','tbl_smile_sub_menu_bar_category.smile_sub_menubar_category_id=tbl_smile_add_product.smile_sub_menubar_category_id','left');
  //$this->db->where('smile_rest_header_cateogry_publication_status',1);
  $this->db->where('smile_menubar_category_id',$smile_menubar_category_id);
   
  // $this->db->join('tbl_smile_add_product','tbl_smile_sub_menu_bar_category.smile_sub_menubar_category_id=tbl_smile_add_product.smile_sub_menubar_category_id');
  //$this->db->limit(4);
  $query_result=$this->db->get();
    $result=$query_result->row();
    return $result;
    }
    /*============= End Get  Product By Sub Category From Database===========*/
    
    
    /*============= Start Get Out Contact Info From Database===========*/
    public function select_company_contact_address(){
        $this->db->select('*');
        $this->db->from('tbl_smile_contact_us_page');
        $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
     /*============= End Get Out Contact Info From Database===========*/
    
    
    
    
    }

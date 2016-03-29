<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class S_S_A_Model extends CI_Model {

    //put your code here
    
    /*
     * Header Category Part Start
     */

    /* ===========Save Header Category Inforamtion Into Database============== */
    public function save_header_category_info($data) {
       
        $this->db->insert('tbl_smile_header_category', $data);
        $smile_header_category_id = $this->db->insert_id();
        return $smile_header_category_id;
    }

    /* ===========End Header Category Inforamtion Into Database============== */

    /* ===========Start Get Header Category Inforamtion From Database============== */

    public function select_all_published_header_category($per_page,$offset) {
  
        if($offset==NULL)
        {
            $offset=0;
        }
        
        $this->db->select('*');
       $this->db->from('tbl_smile_header_category');
        $this->db->limit($per_page,$offset);
         $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    /* ===========End Get Header Category Inforamtion From Database============== */

    /* ===========Start Unpulished Header Category Into Database============== */

    public function unpublished_header_category_by_id($smile_header_category_id) {
        $this->db->set('smile_header_cateogry_publication_status', 0);
        $this->db->where('smile_header_category_id', $smile_header_category_id);
        $this->db->update('tbl_smile_header_category');
    }

    /* ===========End Unpulished Header Category Into Database============== */

    /* ===========Start pulished Header Category Into Database============== */

    public function published_header_category_by_id($smile_header_category_id) {
        $this->db->set('smile_header_cateogry_publication_status', 1);
        $this->db->where('smile_header_category_id', $smile_header_category_id);
        $this->db->update('tbl_smile_header_category');
    }

    /* ===========End pulished Header Category Into Database============== */

    /* ===========Start Delete Header Category Into Database============== */

    public function delete_header_category_by_id($smile_header_category_id) {
        $this->db->where('smile_header_category_id', $smile_header_category_id);
        $this->db->delete('tbl_smile_header_category');
    }

    /* ===========End Delete Header Category Into Database============== */

    /* ===========Start Get Header Category Information by Id From Database For Edit category============== */

    public function select_edit_header_category_by_id($smile_header_category_id) {

        $this->db->select('*');
        $this->db->from('tbl_smile_header_category');
        $this->db->where('smile_header_category_id', $smile_header_category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    /* ===========End Get Header Category Information by Id From Database For Edit category============== */


    /* ===========Start Update Header Category Information Into Database============== */

    public function update_header_category_info() {

        $data = array();
        $data['smile_header_category_name'] = $this->input->post('smile_header_category_name', true);
        $data['smile_header_category_description'] = $this->input->post('smile_header_category_description', true);
        $data['smile_header_cateogry_publication_status'] = $this->input->post('smile_header_cateogry_publication_status', true);
        $header_category_id = $this->input->post('smile_header_category_id', true);
        $this->db->where('smile_header_category_id', $header_category_id);
        $this->db->update('tbl_smile_header_category',$data);
    }

    /* ===========End Update Header Category Information IntoDatabase============== */
    
    
    /*
     * Start Rest Header Category
     */
    
    /* ===========Save Header Rest Category Inforamtion Into Database============== */
    public function save_header_rest_category_info($data) {
       
        $this->db->insert('tbl_smile_rest_header_category', $data);
        $smile_rest_header_id = $this->db->insert_id();
        return $smile_rest_header_id;
    }

    /* ===========End Header Rest Category Inforamtion Into Database============== */
    
     /* ===========Start Get Header Category Inforamtion From Database============== */

    public function select_all_published_header_rest_category($per_page,$offset) {
  
        if($offset==NULL)
        {
            $offset=0;
        }
        
        $this->db->select('*');
       $this->db->from('tbl_smile_rest_header_category');
        $this->db->limit($per_page,$offset);
         $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    /* ===========End Get Header Category Inforamtion From Database============== */
    
     /* ===========Start Unpulished Header Rest Category Into Database============== */

    public function unpublished_header_rest_category_by_id($smile_rest_header_id) {
        $this->db->set('smile_rest_header_cateogry_publication_status', 0);
        $this->db->where('smile_rest_header_id', $smile_rest_header_id);
        $this->db->update('tbl_smile_rest_header_category');
    }

    /* ===========End Unpulished Header Rest Category Into Database============== */
    
    /* ===========Start pulished Header Rest Category Into Database============== */

    public function published_header_rest_category_by_id($smile_rest_header_id) {
        $this->db->set('smile_rest_header_cateogry_publication_status', 1);
        $this->db->where('smile_rest_header_id', $smile_rest_header_id);
        $this->db->update('tbl_smile_rest_header_category');
    }

    /* ===========End pulished Header Rest Category Into Database============== */
    
    
     /* ===========Start Delete Header Rest Category Into Database============== */

    public function delete_header_rest_category_by_id($smile_rest_header_id) {
        $this->db->where('smile_rest_header_id', $smile_rest_header_id);
        $this->db->delete('tbl_smile_rest_header_category');
    }

    /* ===========End Delete Header Rest Category Into Database============== */
    
    
    
    /* ===========Start Get Header Rest Category Information by Id From Database For Edit category============== */

    public function select_edit_header_rest_category_by_id($smile_rest_header_id) {

        $this->db->select('*');
        $this->db->from('tbl_smile_rest_header_category');
        $this->db->where('smile_rest_header_id', $smile_rest_header_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    /* ===========End Get Header Rest Category Information by Id From Database For Edit category============== */
    
    /* ===========Start Update Header Category Information Into Database============== */

    public function update_header_rest_category_info() {

        $data = array();
        $data['smile_rest_header_category_name'] = $this->input->post('smile_rest_header_category_name', true);
        $data['smile_rest_header_cateogry_description'] = $this->input->post('smile_rest_header_cateogry_description', true);
        $data['smile_rest_header_cateogry_publication_status'] = $this->input->post('smile_rest_header_cateogry_publication_status', true);
        $header_rest_category_id = $this->input->post('smile_rest_header_id', true);
        $this->db->where('smile_rest_header_id', $header_rest_category_id);
        $this->db->update('tbl_smile_rest_header_category',$data);
    }

    /* ===========End Update Header Category Information IntoDatabase============== */
    
    
    /*
     * Start Logo Part
     */
    
    /* ===========Save Logo Inforamtion Into Database============== */
    public function save_logo_info($data) {
        
        $this->db->insert('tbl_smile_add_logo', $data);
    }

    /* ===========End Logo Inforamtion Into Database============== */
    
    /* ===========Start Get Logo Inforamtion From Database============== */

    public function select_all_logo($per_page,$offset) {
        if($offset==NULL)
        {
            $offset=0;
        }
        
        $this->db->select('*');
      $this->db->from('tbl_smile_add_logo');
        $this->db->limit($per_page,$offset);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    /* ===========End Logo Inforamtion From Database============== */
    
    /* ===========Start Unpulished Logo Into Database============== */

    public function unpublished_logo_by_id($smile_logo_id) {
        $this->db->set('smile_logo_publication_status', 0);
        $this->db->where('smile_logo_id', $smile_logo_id);
        $this->db->update('tbl_smile_add_logo');
    }

    /* ===========End Unpulished Logo Into Database============== */
    
    /* ===========Start pulished Logo Into Database============== */

    public function published_logo_by_id($smile_logo_id) {
        $this->db->set('smile_logo_publication_status', 1);
        $this->db->where('smile_logo_id', $smile_logo_id);
        $this->db->update('tbl_smile_add_logo');
    }

    /* ===========End pulished Logo Into Database============== */
    
    /* ===========Start Delete Logo Into Database============== */

    public function delete_logo_by_id($smile_logo_id) {
        $this->db->where('smile_logo_id', $smile_logo_id);
        $this->db->delete('tbl_smile_add_logo');
    }

    /* ===========End Delete Logo Into Database============== */
    
    /*
     * Start Menubar Category par
     */
    
    /* ===========Save Header Category Inforamtion Into Database============== */
    public function save_menu_category_info($data) {
       
        $this->db->insert('tbl_smile_menubar_category', $data);
         $smile_menubar_category_id = $this->db->insert_id();
        return $smile_menubar_category_id;
    }

    /* ===========End Header Category Inforamtion Into Database============== */
    
    /* ===========Start Get Menubar Category Inforamtion From Database============== */

    public function select_all_published_menub_bar_category($per_page,$offset) {
        if($offset==NULL)
        {
            $offset=0;
        }
        
        $this->db->select('*');
      $this->db->from('tbl_smile_menubar_category');
        $this->db->limit($per_page,$offset);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    /* ===========End Get Menubar Category Inforamtion From Database============== */
    
    /* ===========Start Unpulished Menubar Category Into Database============== */

    public function unpublished_menu_bar_category_by_id($smile_menubar_category_id) {
        $this->db->set('smile_menubar_category_publication_status', 0);
        $this->db->where('smile_menubar_category_id', $smile_menubar_category_id);
        $this->db->update('tbl_smile_menubar_category');
    }

    /* ===========End Unpulished Menubar Category Into Database============== */
    
    /* ===========Start pulished Menubar Category Into Database============== */

    public function published_menu_bar_category_by_id($smile_menubar_category_id) {
        $this->db->set('smile_menubar_category_publication_status', 1);
        $this->db->where('smile_menubar_category_id', $smile_menubar_category_id);
        $this->db->update('tbl_smile_menubar_category');
    }

    /* ===========End pulished Menubar Category Into Database============== */
    
    /* ===========Start Delete Menubar Category Into Database============== */

    public function delete_menu_bar_category_by_id($smile_menubar_category_id) {
        $this->db->where('smile_menubar_category_id', $smile_menubar_category_id);
        $this->db->delete('tbl_smile_menubar_category');
    }

    /* ===========End Delete Menubar Category Into Database============== */
    
    /* ===========Start Get Menu Bar Category Information by Id From Database For Edit category============== */

    public function select_edit_menu_bar_category_by_id($smile_menubar_category_id) {

        $this->db->select('*');
        $this->db->from('tbl_smile_menubar_category');
        $this->db->where('smile_menubar_category_id', $smile_menubar_category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    /* ===========End Get Menu Bar Category Information by Id From Database For Edit category============== */
    
    /* ===========Start Update Menu Category Information Into Database============== */

    public function update_menu_category_info() {

        $data = array();
        $data['smile_menubar_category_name'] = $this->input->post('smile_menubar_category_name', true);
        $data['smile_menubar_category_description'] = $this->input->post('smile_menubar_category_description', true);
        $data['smile_menubar_category_publication_status'] = $this->input->post('smile_menubar_category_publication_status', true);
        $menu_category_id = $this->input->post('smile_menubar_category_id', true);
        $this->db->where('smile_menubar_category_id', $menu_category_id);
        $this->db->update('tbl_smile_menubar_category',$data);
    }

    /* ===========End Update Menu Category Information IntoDatabase============== */
    
    /*
     * Start Sub Menu Bar Part
     */
    
    /* ===========Start For Add Sub Menu Page Select published menubar category from menubar database Table============== */
    public function select_all_published_menubar_category(){
        $this->db->select('*');
        $this->db->from('tbl_smile_menubar_category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    /* ===========End For Add Sub Menu Page Select published menubar category from menubar database Table============== */
    
    /* ===========Start Save Sub Menu Category Inforamtion Into Database============== */
    public function save_sub_menu_category_info($data) {
        $data = array();
        $data['smile_menubar_category_id']=$this->input->post('smile_menubar_category_id', true);
        $data['smile_sub_menubar_category_name'] = $this->input->post('smile_sub_menubar_category_name', true);
        $data['smile_sub_menubar_category_description'] = $this->input->post('smile_sub_menubar_category_description', true);
        $data['smile_sub_menubar_category_publication_status'] = $this->input->post('smile_sub_menubar_category_publication_status', true);
        $this->db->insert('tbl_smile_sub_menu_bar_category', $data);
    }
    /* ===========End Sub Men Category Inforamtion Into Database============== */
    
    /* ===========Start For Manage Sub Menu Page Select published submenubar category from submenubar database Table============== */
    public function select_all_published_sub_menu_bar_category($per_page,$offset){
        if($offset==NULL)
        {
            $offset=0;
        }
        
        $this->db->select('*');
      $this->db->from('tbl_smile_menubar_category');
        $this->db->limit($per_page,$offset);
        $this->db->join('tbl_smile_sub_menu_bar_category','tbl_smile_menubar_category.smile_menubar_category_id=tbl_smile_sub_menu_bar_category.smile_menubar_category_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    /* ===========End For Manage Sub Menu Page Select published submenubar category from submenubar database Table============== */
    
    /* ===========Start Unpulished Sub Menu Category Into Database============== */

    public function unpublished_sub_menu_bar_category_by_id($smile_sub_menubar_category_id) {
        $this->db->set('smile_sub_menubar_category_publication_status', 0);
        $this->db->where('smile_sub_menubar_category_id', $smile_sub_menubar_category_id);
        $this->db->update('tbl_smile_sub_menu_bar_category');
    }

    /* ===========End Unpulished Sub Menu Category Into Database============== */
    /* ===========Start pulished Sub Menu Category Into Database============== */

    public function published_sub_menu_bar_category_by_id($smile_sub_menubar_category_id) {
        $this->db->set('smile_sub_menubar_category_publication_status', 1);
        $this->db->where('smile_sub_menubar_category_id', $smile_sub_menubar_category_id);
        $this->db->update('tbl_smile_sub_menu_bar_category');
    }

    /* ===========End pulished Sub Menu Category Into Database============== */
    
     /* ===========Start Delete Sub Menu Category Into Database============== */

    public function delete_sub_menu_bar_category_by_id($smile_sub_menubar_category_id) {
        $this->db->where('smile_sub_menubar_category_id', $smile_sub_menubar_category_id);
        $this->db->delete('tbl_smile_sub_menu_bar_category');
    }

    /* ===========End Delete Sub Menu Category Into Database============== */
    
     /* ===========Start Get Sub Menu Bar Category Information by Id From Database For Edit category============== */

    public function select_edit_sub_menu_bar_category_by_id($smile_sub_menubar_category_id) {

        $this->db->select('*');
        $this->db->from('tbl_smile_sub_menu_bar_category');
        $this->db->where('smile_sub_menubar_category_id', $smile_sub_menubar_category_id);
        $this->db->join('tbl_smile_menubar_category','tbl_smile_sub_menu_bar_category.smile_menubar_category_id=tbl_smile_menubar_category.smile_menubar_category_id');
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    /* ===========End Get Sub Menu Bar Category Information by Id From Database For Edit category============== */
    
    /* ===========Start Update Sub Menu Category Information Into Database============== */

    public function update_sub_menu_category_info() {

        $data = array();
        $data['smile_sub_menubar_category_name'] = $this->input->post('smile_sub_menubar_category_name', true);
        $data['smile_sub_menubar_category_publication_status'] = $this->input->post('smile_sub_menubar_category_publication_status', true);
        $sub_menu_category_id = $this->input->post('smile_sub_menubar_category_id', true);
        $menu_category_id = $this->input->post('smile_menubar_category_id', true);
        $this->db->where('smile_sub_menubar_category_id', $sub_menu_category_id);
        $this->db->where('smile_menubar_category_id', $menu_category_id);
        $this->db->update('tbl_smile_sub_menu_bar_category',$data);
    }

    /* ===========End Update Sub Menu Category Information IntoDatabase============== */
    
    /*
     * Start Add Product
     */
    
     /* ===========Start For Add Sub Menu Page Select published menubar category from menubar database Table============== */
    public function select_all_published_sub_menu_category(){
        $this->db->select('*');
        $this->db->from('tbl_smile_sub_menu_bar_category');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    /* ===========End For Add Sub Menu Page Select published menubar category from menubar database Table============== */
    
  /* ===========Save Product Inforamtion Into Database============== */
    public function save_product_info($data) {
        
        $this->db->insert('tbl_smile_add_product', $data);
    }

    /* ===========End Product Inforamtion Into Database============== */   
    
    /* ===========Start Get Porduct Inforamtion From Database============== */

    public function select_all_product_info($per_page,$offset) {
        if($offset==NULL)
        {
            $offset=0;
        }
        
        $this->db->select('*');
        $this->db->from('tbl_smile_add_product');
        $this->db->limit($per_page,$offset);
        $this->db->order_by('smile_product_id','DESC');
        $this->db->join('tbl_smile_sub_menu_bar_category','tbl_smile_add_product.smile_sub_menubar_category_id=tbl_smile_sub_menu_bar_category.smile_sub_menubar_category_id');  
        
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    /* ===========End Get Product Inforamtion From Database============== */
   
    /* ===========Start Unpulished Product Into Database============== */

    public function unpublished_product_by_id($smile_product_id) {
        $this->db->set('smile_product_publication_status', 0);
        $this->db->where('smile_product_id', $smile_product_id);
        $this->db->update('tbl_smile_add_product');
    }

    /* ===========End Unpulished Product Into Database============== */
    
     /* ===========Start Unpulished Product Into Database============== */

    public function published_product_by_id($smile_product_id) {
        $this->db->set('smile_product_publication_status', 1);
        $this->db->where('smile_product_id', $smile_product_id);
        $this->db->update('tbl_smile_add_product');
    }

    /* ===========End Unpulished Product Into Database============== */
    /* ===========Start Featured Unpulished Product Into Database============== */

    public function unfeatured_product_by_id($smile_product_id) {
        $this->db->set('smile_featured_product', 0);
        $this->db->where('smile_product_id', $smile_product_id);
        $this->db->update('tbl_smile_add_product');
    }

    /* ===========End Unpulished Product Into Database============== */
    
     /* ===========Start Featured Unpulished Product Into Database============== */

    public function featured_product_by_id($smile_product_id) {
        $this->db->set('smile_featured_product', 1);
        $this->db->where('smile_product_id', $smile_product_id);
        $this->db->update('tbl_smile_add_product');
    }

    /* ===========End Unpulished Product Into Database============== */
    
     /* ===========Start Delete Product Into Database============== */

    public function delete_product_info_by_id($smile_product_id) {
        $this->db->where('smile_product_id', $smile_product_id);
        $this->db->delete('tbl_smile_add_product');
    }

    /* ===========End Delete Product Into Database============== */
    
      /* ===========Start Get Sub Menu and Menu Category Information by Id From Database For Edit Product============== */

    public function select_edit_prodcut_by_sub_menu_id($smile_product_id) {

        $this->db->select('*');
        $this->db->from('tbl_smile_add_product');
        $this->db->where('smile_product_id', $smile_product_id);
        $this->db->join('tbl_smile_sub_menu_bar_category','tbl_smile_add_product.smile_sub_menubar_category_id=tbl_smile_sub_menu_bar_category.smile_sub_menubar_category_id');
        $this->db->join('tbl_smile_menubar_category','tbl_smile_add_product.smile_menubar_category_id=tbl_smile_menubar_category.smile_menubar_category_id');
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    /* ===========End Get Sub Menu and Menu Category Information by Id From Database For Edit Product============== */
  
    /* ===========Start Update Product Information Into Database============== */

    public function update_product_info($data) {

        $product_id= $this->input->post('smile_product_id', true);
        $sub_menu_category_id = $this->input->post('smile_sub_menubar_category_id', true);
        $menu_category_id = $this->input->post('smile_menubar_category_id', true);
        $this->db->where('smile_product_id', $product_id);
        $this->db->where('smile_sub_menubar_category_id', $sub_menu_category_id);
        $this->db->where('smile_menubar_category_id', $menu_category_id);
        
        $this->db->update('tbl_smile_add_product',$data);
    }

    /* ===========End Update Product Information IntoDatabase============== */
    
    /*
     * Start Banner Part
     */
    
    /* ===========Save Banner Inforamtion Into Database============== */
    public function save_banner_info($data) {
        
        $this->db->insert('tbl_smile_add_banner_slider', $data);
    }

    /* ===========End Banner Inforamtion Into Database============== */ 
    
    /* ===========Start Get Banner Inforamtion From Database============== */

    public function select_all_banner($per_page,$offset) {
         if($offset==NULL)
        {
            $offset=0;
        }
        
        $this->db->select('*');
        $this->db->from('tbl_smile_add_banner_slider');
        $this->db->limit($per_page,$offset);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    /* ===========End Banner Inforamtion From Database============== */
    
    /* ===========Start Unpulished Banner Into Database============== */

    public function unpublished_banner_by_id($smile_banner_id) {
        $this->db->set('smile_banner_publication_status', 0);
        $this->db->where('smile_banner_id', $smile_banner_id);
        $this->db->update('tbl_smile_add_banner_slider');
    }

    /* ===========End Unpulished Banner Into Database============== */
    
    /* ===========Start pulished Banner Into Database============== */

    public function published_banner_by_id($smile_banner_id) {
        $this->db->set('smile_banner_publication_status', 1);
        $this->db->where('smile_banner_id', $smile_banner_id);
        $this->db->update('tbl_smile_add_banner_slider');
    }

    /* ===========End pulished Banner Into Database============== */
    
    /* ===========Start Delete Banner Into Database============== */

    public function delete_banner_by_id($smile_banner_id) {
        $this->db->where('smile_banner_id', $smile_banner_id);
        $this->db->delete('tbl_smile_add_banner_slider');
    }

    /* ===========End Delete Banner Into Database============== */ 
    
    /*
     * Start About Us Page  Part 
     */
    
    /* ===========Save About Us Page Inforamtion Into Database============== */
    public function save_about_us_info($data) {
        
        $this->db->insert('tbl_smile_add_about_us_page', $data);
    }

    /* ===========End About Us Page Inforamtion Into Database============== */ 
    
     /* ===========Start Get About Us Page Inforamtion From Database============== */

    public function select_all_about_page_info($per_page,$offset) {
        if($offset==NULL)
        {
            $offset=0;
        }
        
        $this->db->select('*');
        $this->db->from('tbl_smile_add_about_us_page');
        $this->db->limit($per_page,$offset);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    /* ===========End About Us Inforamtion From Database============== */
    
    /* ===========Start Unpulished About Us Into Database============== */

    public function unpublished_about_page_by_id($smile_page_info_id) {
        $this->db->set('smile_page_publication_status', 0);
        $this->db->where('smile_page_info_id', $smile_page_info_id);
        $this->db->update('tbl_smile_add_about_us_page');
    }

    /* ===========End Unpulished About Us Into Database============== */
    
    /* ===========Start pulished About Us Into Database============== */

    public function published_about_page_by_id($smile_page_info_id) {
        $this->db->set('smile_page_publication_status', 1);
        $this->db->where('smile_page_info_id', $smile_page_info_id);
        $this->db->update('tbl_smile_add_about_us_page');
    }

    /* ===========End pulished About Us Into Database============== */
    
     /* ===========Start Delete About Us Into Database============== */

    public function delete_about_page_info_by_id($smile_page_info_id) {
       $this->db->where('smile_page_info_id', $smile_page_info_id);
        $this->db->delete('tbl_smile_add_about_us_page');
    }

    /* ===========End Delete About us Into Database============== */ 
    
    /* ===========Start Get About Page Information by Id From Database For Edit About Page============== */

    public function select_edit_about_page_info_by_page_id($smile_page_info_id) {

        $this->db->select('*');
        $this->db->from('tbl_smile_add_about_us_page');
        $this->db->join('tbl_smile_header_category','tbl_smile_add_about_us_page.smile_header_category_id=tbl_smile_header_category.smile_header_category_id');
       $this->db->where('smile_page_info_id', $smile_page_info_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    /* ===========End  Get About Page Information by Id From Database For Edit About Paget============== */
    
    
     /* ===========Start Update About Page Information Into Database============== */

    public function update_about_us_info($data) {

        $page_id= $this->input->post('smile_page_info_id', true);
        $header_id= $this->input->post('smile_header_category_id', true);
        $this->db->where('smile_page_info_id', $page_id);
        $this->db->where('smile_header_category_id', $header_id);
        $this->db->update('tbl_smile_add_about_us_page',$data);
    }

    /* ===========End Update About Us Information IntoDatabase============== */
    
    /*
     * Start Manage Product Comment Part
     */
    
    
     /* ===========Start Get Product Comment Inforamtion From Database============== */

    public function select_product_comment_info($per_page,$offset) {
        if($offset==NULL)
        {
            $offset=0;
        }
        
        $this->db->select('*');
        $this->db->from('tbl_smile_product_comment');
        $this->db->limit($per_page,$offset);
         $this->db->order_by('smile_comment_id','DESC');
        $this->db->join('tbl_smile_add_product','tbl_smile_product_comment.smile_product_id=tbl_smile_add_product.smile_product_id');
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    /* ===========End Product Comment Inforamtion From Database============== */
    
    /* ===========Start Unpulished Product Comments Into Database============== */

    public function unpublished_product_comments_by_id($smile_comment_id) {
        $this->db->set('smile_comment_publication_status', 0);
        $this->db->where('smile_comment_id', $smile_comment_id);
        $this->db->update('tbl_smile_product_comment');
    }

    /* ===========End Unpulished Product Comment Into Database============== */
    
    /* ===========Start pulished Product Comments Into Database============== */

    public function published_product_comments_by_id($smile_comment_id) {
        $this->db->set('smile_comment_publication_status', 1);
        $this->db->where('smile_comment_id', $smile_comment_id);
        $this->db->update('tbl_smile_product_comment');
    }

    /* ===========End pulished Product Comment Into Database============== */
    
     /* ===========Start Delete Product Comment Into Database============== */

    public function delete_product_comments_info_by_id($smile_comment_id) {
       $this->db->where('smile_comment_id', $smile_comment_id);
        $this->db->delete('tbl_smile_product_comment');
    }

    /* ===========End Delete Prodcut Comments Into Database============== */ 
    
    
    public function select_all_order_info($per_page,$offset) {
       if($offset==NULL)
        {
            $offset=0;
        }
        
        $this->db->select('*');
        $this->db->from('tbl_smile_order');
        $this->db->limit($per_page,$offset);
         $this->db->order_by('order_date_time','ASC');
       
       $this->db->join('tbl_smile_customer', 'tbl_smile_customer.smile_customer_id = tbl_smile_order.smile_customer_id','left');
       $this->db->join('tbl_smile_payment_details', 'tbl_smile_payment_details.payment_id = tbl_smile_order.payment_id','left');
       $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
    public function select_order_info_by_id($order_id) {
       $this->db->select('*');
       $this->db->from('tbl_smile_order');
       $this->db->join('tbl_smile_customer', 'tbl_smile_customer.smile_customer_id = tbl_smile_order.smile_customer_id','left');
       $this->db->join('tbl_smile_payment_details', 'tbl_smile_payment_details.payment_id = tbl_smile_order.payment_id','left');
       $this->db->where('order_id',$order_id);
       $query_result=$this->db->get();
        $result=$query_result->row();
        return $result;
    }
    
    public function select_order_detail_by_id($order_id) {
       $this->db->select('*');
       $this->db->from('tbl_smile_order_details');
       $this->db->where('order_id',$order_id);
       $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
  
    
    
  
    
    
    /* ===========Start Update Order Information Into Order Database Table============== */

    public function update_order_info() {

        $data = array();
        $data['order_status'] = $this->input->post('order_status', true);
        $data['order_total'] = $this->input->post('order_total', true);
        $order_id = $this->input->post('order_id', true);
        $this->db->where('order_id', $order_id);
        $this->db->update('tbl_smile_order',$data);
    }

    /* ===========End Update Update Order Information Into Order Database Table============== */
     
    
     /* ===========Start Update Order Information Into Order Database Table============== */

    public function update_payment_info() {

        $data = array();
        $data['payment_status'] = $this->input->post('payment_status', true);
        $payment_id = $this->input->post('payment_id', true);
        $this->db->where('payment_id', $payment_id);
        $this->db->update('tbl_smile_payment_details',$data);
    }

    /* ===========End Update Update Order Information Into Order Database Table============== */
    
    
    
    public function ajax_email_check_info($email_address){
     $this->db->select('*');
  $this->db->from('tbl_smile_admin_user');
   $this->db->where('smile_admin_email_address',$email_address);
  $query_result=$this->db->get();
    $result=$query_result->row();
    return $result;
}

/* ===========Start Get Header Category Inforamtion From Database============== */

    public function select_all_header_category() {
     $this->db->select('*');
       $this->db->from('tbl_smile_header_category');
         $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    /* ===========End Get Header Category Inforamtion From Database============== */

    /* ===========Start Save Contact Inforamtion Into Database============== */
    public function save_company_contact_info($data) {
        $data = array();
        //$data['smile_menubar_category_id']=$this->input->post('smile_menubar_category_id', true);
        $data['smile_contact_address'] = $this->input->post('smile_contact_address', true);
        $data['smile_company_email_address'] = $this->input->post('smile_company_email_address', true);
        $data['smile_contact_address_telephone'] = $this->input->post('smile_contact_address_telephone', true);
        $data['smile_contact_address_fax'] = $this->input->post('smile_contact_address_fax', true);
        $this->db->insert('tbl_smile_contact_us_page', $data);
    }
    /* ===========End Sub Save Contact Inforamtion Into Database============== */
    
/* ===========End Delete Prodcut Comments Into Database============== */ 
    
    
    public function select_all_contact_info($per_page,$offset) {
       if($offset==NULL)
        {
            $offset=0;
        }
        
        $this->db->select('*');
        $this->db->from('tbl_smile_contact_us_page');
        $this->db->limit($per_page,$offset);
       $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    
/* ===========Start Delete Contact us Info Into Database============== */

    public function delete_contact_info_by_id($smile_contact_us_page_id) {
       $this->db->where('smile_contact_us_page_id', $smile_contact_us_page_id);
        $this->db->delete('tbl_smile_contact_us_page');
    }

    /* ===========End Delete Contact Us Into Database============== */ 
    
    /* ===========Start Get Admin Inforamtion From Database============== */

    public function select_all_admin_info($per_page,$offset) {
  
        if($offset==NULL)
        {
            $offset=0;
        }
        
        $this->db->select('*');
       $this->db->from('tbl_smile_admin_user');
        $this->db->limit($per_page,$offset);
         $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    /* ===========End Get Admin Inforamtion From Database============== */
    
    /* ===========Start Normal Admin Into Database============== */

    public function normal_admin_by_id($smile_admin_user_id) {
        $this->db->set('smile_admin_access_level', 0);
        $this->db->where('smile_admin_user_id', $smile_admin_user_id);
        $this->db->update('tbl_smile_admin_user');
    }

    /* ===========End Normal Admin Into Database============== */
    
    /* ===========Start Normal Admin Into Database============== */

    public function supper_admin_by_id($smile_admin_user_id) {
        $this->db->set('smile_admin_access_level', 1);
        $this->db->where('smile_admin_user_id', $smile_admin_user_id);
        $this->db->update('tbl_smile_admin_user');
    }

    /* ===========End Normal Admin Into Database============== */
    
    /* ===========Start Delete Contact us Info Into Database============== */

    public function delete_admin_by_id($smile_admin_user_id) {
       $this->db->where('smile_admin_user_id', $smile_admin_user_id);
        $this->db->delete('tbl_smile_admin_user');
    }

    /* ===========End Delete Contact Us Into Database============== */ 
    
    /* ===========Start Edit Admin Account by Id From Database ============== */

    public function select_edit_admin_account_by_id($smile_admin_user_id) {

        $this->db->select('*');
        $this->db->from('tbl_smile_admin_user');
        $this->db->where('smile_admin_user_id', $smile_admin_user_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    /* ===========End Edit Admin Account by Id From Database ============= */
 
    /* ===========Start Update Header Category Information Into Database============== */

    public function update_admin_full_info() {

        $data = array();
        $data['smile_admin_user_name'] = $this->input->post('smile_admin_user_name', true);
        $data['smile_admin_email_address'] = $this->input->post('smile_admin_email_address', true);
        $data['smile_admin_access_level'] = $this->input->post('smile_admin_access_level', true);
       $data['smile_admin_password'] = $this->input->post('smile_admin_password', true);
       $data['smile_admin_confirm_password'] = $this->input->post('smile_admin_confirm_password', true);
       
        $admin_id = $this->input->post('smile_admin_user_id', true);
        $this->db->where('smile_admin_user_id', $admin_id);
        $this->db->update('tbl_smile_admin_user',$data);
    }

    /* ===========End Update Header Category Information IntoDatabase============== */
    
    
     /* ===========Start Edit Admin Account by Id From Database ============== */

    public function select_edit_admin_password_by_id($smile_admin_user_id) {

        $this->db->select('*');
        $this->db->from('tbl_smile_admin_user');
        $this->db->where('smile_admin_user_id', $smile_admin_user_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    /* ===========End Edit Admin Account by Id From Database ============= */
    
     /* ===========Start Get Admin Inforamtion From Database============== */

    public function select_all_admin_password_info() {
  
       
        
        $this->db->select('*');
       $this->db->from('tbl_smile_admin_user');
        
         $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }

    /* ===========End Get Admin Inforamtion From Database============== */
    
    /*=========================Start Get Customer Account Information from Database===========*/
      public function select_all_customer_info($per_page,$offset) {
       if($offset==NULL)
        {
            $offset=0;
        }
        
        $this->db->select('*');
        $this->db->from('tbl_smile_customer');
        $this->db->limit($per_page,$offset);
       $query_result=$this->db->get();
        $result=$query_result->result();
        return $result;
    }
    /*=========================Start Get Customer Account Information from Database===========*/
     /* ===========Start Delete Customer Account Info Into Database============== */

    public function delete_customer_info_by_id($smile_customer_id) {
       $this->db->where('smile_customer_id', $smile_customer_id);
        $this->db->delete('tbl_smile_customer');
    }

    /* ===========End Delete Customer Account Into Database============== */ 
    
}

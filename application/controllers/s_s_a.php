<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');
//session_start();

class S_S_A extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            redirect('s_administrator');
        }
    }

    /* ============ Start Admin Main Page  Dashboard Display======= */

    public function index() {
        $data = array();
        
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_dashboard_page',' ', true);
        $data['title'] = 'Dashboard';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Main Page  Dashboard Display======= */

    /* ============ Start Admin Logout Function======= */

    public function logout() {

        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $this->session->unset_userdata('admin_email');
        $sdata['message'] = 'You are successfully Logout!';
        $this->session->set_userdata($sdata);
        redirect('s_administrator');
    }

    /* ============ End Admin Logout Function======= */
    
    /*
     * Header Category Part Start
     */
    
    
    /*============== Start Edit admin password Page Display=========*/
    
    
    /*============== End Edit admin password Page Display=========*/
    
    
    
    
    /*============= Start Create Admin Page Display===========*/
    
    
    public function a_r(){
        $data=array();
        $data['admin_main_content']=$this->load->view('smile_admin/smile_admin_registration_middle_content','',true);
        $data['title']='Admin Account Registration';
        $this->load->view('smile_admin/smile_admin_main_page',$data);
    }
    
    /*============= End Create Admin Page Display===========*/
    
    /* ============ Start Manage Admin  Page Display======= */

    public function m_a_a() {
         $data = array();
        /*-------Start Pagination--------------------*/
    $this->load->library('pagination');
    $config['base_url'] = base_url() .'s_s_a/m_a_a/';

    $config['total_rows'] = $this->db->count_all('tbl_smile_admin_user');
    $config['per_page'] = 3;
    //$config['full_tag_open'] = "<ul class='pagination'>";
    //$config['full_tag_close'] = '</ul>';
    $this->pagination->initialize($config);
    $data['all_admin_info'] = $this->s_s_a_model->select_all_admin_info($config['per_page'], $this->uri->segment(3));
       
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_manage_admin_account', $data, true);
        $data['title'] = 'Manage Admin';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Manage Admin Page Display======= */
    /*================== Start Admin Password Display==================*/
    public function m_p(){
        $data = array();
        $data['admin_password_info']= $this->s_s_a_model->select_all_admin_password_info();
        $data['title'] = 'Edit Admin Password';
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_user_edit_password', $data, true);
         $this->load->view('smile_admin/smile_admin_main_page', $data);
        
    }
    
    
    /*================== End Admin Password Display==================*/
    
    
    
    /* ============ Start Edit Admin Acount Page Display======= */

    public function e_a_p($smile_admin_user_id) {
        $data = array();
        //$data['all_admin_info'] = $this->s_s_a_model->select_all_admin_info();
       $data['admin_account_password']=$this->s_s_a_model->select_edit_admin_password_by_id($smile_admin_user_id);
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_edit_password_option', $data, true);
        $data['title'] = 'Edit Admin Password';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Edit Admin Account Page Display======= */
    /* ============ Start Normal Admin Into Database======= */

    public function normal_admin($smile_admin_user_id) {
        $this->s_s_a_model->normal_admin_by_id($smile_admin_user_id);
        redirect('s_s_a/m_a_a');
    }

    /* ============ End Normal Admin Into Database======= */
    /* ============ Start Supper Admin Into Database======= */

    public function supper_admin($smile_admin_user_id) {
        $this->s_s_a_model->supper_admin_by_id($smile_admin_user_id);
        redirect('s_s_a/m_a_a');
    }

    /* ============ End Supper Admin Into Database======= */
    
    /* ============ Start Admin Delete From Database======= */

    public function delete_admin($smile_admin_user_id) {
        $this->s_s_a_model->delete_admin_by_id($smile_admin_user_id);
        redirect('s_s_a/m_a_a');
    }

    /* ============ End Admin Delete From Database======= */
    
    /* ============ Start Edit Admin Acount Page Display======= */

    public function e_a_a($smile_admin_user_id) {
        $data = array();
       $data['admin_account_info']=$this->s_s_a_model->select_edit_admin_account_by_id($smile_admin_user_id);
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_user_edit_page', $data, true);
        $data['title'] = 'Edit Admin Account';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Edit Admin Account Page Display======= */
    
    /* ============ Start Update Admin Info Into Database======= */

    public function update_admin_info(){
        $this->s_s_a_model->update_admin_full_info();
        
         $access_level= $this->session->userdata('access_level');
         if($access_level==1)
             {
         
         redirect('s_s_a/m_a_a');}
 else {
     $data = array();
      
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_mobile_admin_logout_page','', true);
        $data['title'] = 'Logout Option';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
 }
         
    }

    /* ============ End Update Admin Info Into Database======= */
    
    
    
    /*=================== Add Admin User in Database============*/
     public function add_admin_user(){
       $this->s_administrator_model->save_add_admin_user();
       $sdata=array();
       $sdata['message']='You Can Login Now!';
        $this->session->set_userdata($sdata);
        redirect('s_administrator');
        
    }
    
    /*=================== Add Admin User in Database============*/
    

    /* ============ Start Admin Add Header Category Page Display======= */

    public function a_h_c() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_add_header_category', '', true);
        $data['title'] = 'Add Header Category';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Add Header Category Page Display======= */

    /* ============Start Save Header Category Into Database======= */

    public function save_header_category() {
         $data = array();
        $data['smile_header_category_name'] = $this->input->post('smile_header_category_name', true);
        $data['smile_header_category_description'] = $this->input->post('smile_header_category_description', true);
        $data['smile_header_cateogry_publication_status'] = $this->input->post('smile_header_cateogry_publication_status', true);
        $smile_header_category_id=$this->s_s_a_model->save_header_category_info($data);
        $idata=array();
        $idata['smile_header_category_id']=$smile_header_category_id;
        $this->session->set_userdata($idata);
        
        $sdata = array();
       
        $sdata['message'] = 'Save  Header Category Successfully!';
        $this->session->set_userdata($sdata);
        redirect('s_s_a/a_h_c');
    }

    /* ============ End Save Header Category Into Database======= */

    /* ============ Start Admin Manage Header Category  Page Display======= */

    public function m_h_c() {
        $data = array();
        /*-------Start Pagination--------------------*/
    $this->load->library('pagination');
    $config['base_url'] = base_url() .'s_s_a/m_h_c/';

    $config['total_rows'] = $this->db->count_all('tbl_smile_header_category');
    $config['per_page'] = 3;
    //$config['full_tag_open'] = "<ul class='pagination'>";
    //$config['full_tag_close'] = '</ul>';
    $this->pagination->initialize($config);
    $data['all_header_category'] = $this->s_s_a_model->select_all_published_header_category($config['per_page'], $this->uri->segment(3));
        
       // $data['all_header_category'] = $this->s_s_a_model->select_all_published_header_category();
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_manage_header_category_page', $data, true);
        $data['title'] = 'Manage Header Category';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Header Category  manage Page Display======= */

    /* ============ Start Header Unpulished Category Into Database======= */

    public function unpublished_header_category($smile_header_category_id) {
        $this->s_s_a_model->unpublished_header_category_by_id($smile_header_category_id);
        redirect('s_s_a/m_h_c');
    }

    /* ============ End Header Unpulished Category Into Database======= */

    /* ============ Start Header pulished Category Into Database======= */

    public function published_header_category($smile_header_category_id) {
        $this->s_s_a_model->published_header_category_by_id($smile_header_category_id);
        redirect('s_s_a/m_h_c');
    }

    /* ============ End Header pulished Category Into Database======= */

    /* ============ Start Header Delete Category From Database======= */

    public function delete_header_category($smile_header_category_id) {
        $this->s_s_a_model->delete_header_category_by_id($smile_header_category_id);
        redirect('s_s_a/m_h_c');
    }

    /* ============ End Header Delete Category From Database======= */

    /* ============ Start Edit Header Category Page Display======= */

    public function e_h_c($smile_header_category_id) {
        $data = array();
       $data['header_cat_info']=$this->s_s_a_model->select_edit_header_category_by_id($smile_header_category_id);
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_edit_header_category_page', $data, true);
        $data['title'] = 'Edit Header Category';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Edit Header Category Page Display======= */
    
    /* ============ Start Update Header Category Into Database======= */

    public function update_header_category(){
        $this->s_s_a_model->update_header_category_info();
        redirect('s_s_a/m_h_c');
    }

    /* ============ End Update Header Category Into Database======= */
    
    
    /*
     * Start Rest Header Category
     */
    
    /* ============ Start Admin Add Rest Header Category Page Display======= */

    public function a_r_h_c() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_add_rest_header_category_page', '', true);
        $data['title'] = 'Add Rest Header Category';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Add Rest Header Category Page Display======= */
    
    /* ============Start Save Header Rest Category Into Database======= */

    public function save_header_rest_category() {
         $data = array();
        $data['smile_rest_header_category_name'] = $this->input->post('smile_rest_header_category_name', true);
        $data['smile_rest_header_cateogry_description'] = $this->input->post('smile_rest_header_cateogry_description', true);
        $data['smile_rest_header_cateogry_publication_status'] = $this->input->post('smile_rest_header_cateogry_publication_status', true);
        $smile_rest_header_id=$this->s_s_a_model->save_header_rest_category_info($data);
        $rdata=array();
        $rdata['smile_rest_header_id']=$smile_rest_header_id;
        $this->session->set_userdata($rdata);
        
        $sdata = array();
       
        $sdata['message'] = 'Save  Header Rest Category Successfully!';
        $this->session->set_userdata($sdata);
        redirect('s_s_a/a_r_h_c');
    }

    /* ============ End Save Header Rest Category Into Database======= */
     /* ============ Start Admin Manage Header Rest Category  Page Display======= */

    public function m_h_r_c() {
        $data = array();
        /*-------Start Pagination--------------------*/
    $this->load->library('pagination');
    $config['base_url'] = base_url() .'s_s_a/m_h_r_c/';

    $config['total_rows'] = $this->db->count_all('tbl_smile_rest_header_category');
    $config['per_page'] = 3;
    //$config['full_tag_open'] = "<ul class='pagination'>";
    //$config['full_tag_close'] = '</ul>';
    $this->pagination->initialize($config);
    $data['all_header_rest_category'] = $this->s_s_a_model->select_all_published_header_rest_category($config['per_page'], $this->uri->segment(3));
        
       // $data['all_header_category'] = $this->s_s_a_model->select_all_published_header_category();
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_manage_rest_header_category_page', $data, true);
        $data['title'] = 'Manage Header Rest Category';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Header Rest Category  manage Page Display======= */
     /* ============ Start Header Unpulished Rest Category Into Database======= */

    public function unpublished_header_rest_category($smile_rest_header_id) {
        $this->s_s_a_model->unpublished_header_rest_category_by_id($smile_rest_header_id);
        redirect('s_s_a/m_h_r_c');
    }

    /* ============ End Header Unpulished Rest Category Into Database======= */
    
    /* ============ Start Header pulished Rest Category Into Database======= */

    public function published_header_rest_category($smile_rest_header_id) {
        $this->s_s_a_model->published_header_rest_category_by_id($smile_rest_header_id);
        redirect('s_s_a/m_h_r_c');
    }

    /* ============ End Header pulished Rest Category Into Database======= */
    
    /* ============ Start Header Delete Rest Category From Database======= */

    public function delete_header_rest_category($smile_rest_header_id) {
        $this->s_s_a_model->delete_header_rest_category_by_id($smile_rest_header_id);
        redirect('s_s_a/m_h_r_c');
    }

    /* ============ End Header Delete Rest Category From Database======= */
    
    
    /* ============ Start Edit Header Rest Category Page Display======= */

    public function e_h_r_c($smile_rest_header_id) {
        $data = array();
       $data['header_rest_cat_info']=$this->s_s_a_model->select_edit_header_rest_category_by_id($smile_rest_header_id);
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_edit_header_rest_category_page', $data, true);
        $data['title'] = 'Edit Header Rest Category';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Edit Header Rest Category Page Display======= */
    
    /* ============ Start Update Header Rest Category Into Database======= */

    public function update_header_rest_category(){
        $this->s_s_a_model->update_header_rest_category_info();
        redirect('s_s_a/m_h_r_c');
    }

    /* ============ End Update Header Rest Category Into Database======= */
    
    

    /*
     * Logo Part Start
     */
    

    /* ============ Start Admin Add Logo Page Display======= */

    public function a_l() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_add_logo_page', '', true);
        $data['title'] = 'Add Logo';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Add Logo Page Display======= */
    
    /* ============Start Save Logo Into Database======= */

    public function save_logo() {
        
        $data = array();
        $data['smile_logo_name'] = $this->input->post('smile_logo_name', true);
        $data['smile_logo_publication_status'] = $this->input->post('smile_logo_publication_status', true);
        
        /*
         * Start Logo Image Upload
         */
        $config['upload_path'] = 'image/logo/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
                  $error=''; 
                  $fdata=array();
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('smile_logo_image'))
		{
			$error = $this->upload->display_errors();

			echo $error;
                        exit();
		}
		else
		{
			$fdata =  $this->upload->data();
                        $data['smile_logo_image']=$config['upload_path'].$fdata['file_name'];
                        
		}
        /*
         * End Logo Image Upload
         */
        
        
        $this->s_s_a_model->save_logo_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Logo Successfully!';
        $this->session->set_userdata($sdata);
        redirect('s_s_a/a_l');
    }

    /* ============ End Save Logo Into Database======= */


    /* ============ Start Admin Manage Logo Page Display======= */

    public function m_l() {
        $data = array();
         $this->load->library('pagination');
    $config['base_url'] = base_url() .'s_s_a/m_l/';

    $config['total_rows'] = $this->db->count_all('tbl_smile_add_logo');
    $config['per_page'] = 3;
    //$config['full_tag_open'] = "<ul class='pagination'>";
    //$config['full_tag_close'] = '</ul>';
    $this->pagination->initialize($config);
    $data['all_logo_item'] = $this->s_s_a_model->select_all_logo($config['per_page'], $this->uri->segment(3));
        
        //$data['all_logo_item'] = $this->s_s_a_model->select_all_logo();
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_manage_logo_page',$data, true);
        $data['title'] = 'Manage Logo';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Manage Logo Page Display======= */
    
    /* ============ Start Logo Unpulished Into Database======= */

    public function unpublished_logo($smile_logo_id) {
        $this->s_s_a_model->unpublished_logo_by_id($smile_logo_id);
        redirect('s_s_a/m_l');
    }

    /* ============ End Logo Unpulished  Into Database======= */
    
    /* ============ Start Logo pulished Into Database======= */

    public function published_logo($smile_logo_id) {
        $this->s_s_a_model->published_logo_by_id($smile_logo_id);
        redirect('s_s_a/m_l');
    }

    /* ============ End Header pulished Category Into Database======= */
    
    /* ============ Start Logo Delete  From Database======= */

    public function delete_logo($smile_logo_id) {
        $this->s_s_a_model->delete_logo_by_id($smile_logo_id);
        redirect('s_s_a/m_l');
    }

    /* ============ End Logo Delete  From Database======= */
    
    /*
     * Start Menubar Category Part
     */
    
    /* ============ Start Admin Add Menubar Category Page Display======= */

    public function a_m_b_c() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_add_menu_bar_category_page', '', true);
        $data['title'] = 'Add Menubar Category';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Add Menubar Category Page Display======= */
    
    /* ============Start Save Header Category Into Database======= */

    public function save_menu_category() {
         $data = array();
        $data['smile_menubar_category_name'] = $this->input->post('smile_menubar_category_name', true);
        $data['smile_menubar_category_description'] = $this->input->post('smile_menubar_category_description', true);
        $data['smile_menubar_category_publication_status'] = $this->input->post('smile_menubar_category_publication_status', true);
        
        $smile_menubar_category_id=$this->s_s_a_model->save_menu_category_info($data);
        $mdata=array();
        $mdata['smile_menubar_category_id']=$smile_menubar_category_id;
        $this->session->set_userdata($mdata);
        
        
        
        $sdata = array();
        $sdata['message'] = 'Save Menubar Category Successfully!';
        $this->session->set_userdata($sdata);
        redirect('s_s_a/a_m_b_c');
    }

    /* ============ End Save Header Category Into Database======= */
    
    
    /* ============ Start Admin Manage Menu Bar Category  Page Display======= */

    public function m_m_b_c() {
        $data = array();
         $this->load->library('pagination');
    $config['base_url'] = base_url() .'s_s_a/m_m_b_c/';

    $config['total_rows'] = $this->db->count_all('tbl_smile_menubar_category');
    $config['per_page'] = 3;
    //$config['full_tag_open'] = "<ul class='pagination'>";
    //$config['full_tag_close'] = '</ul>';
    $this->pagination->initialize($config);
    $data['all_menubar_category'] = $this->s_s_a_model->select_all_published_menub_bar_category($config['per_page'], $this->uri->segment(3));
        
        //$data['all_menubar_category'] = $this->s_s_a_model->select_all_published_menub_bar_category();
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_manage_menu_bar_category_page', $data, true);
        $data['title'] = 'Manage Header Category';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Manage Menu Bar Category  Page Display======= */
    
      /* ============ Start MenuBar Unpulished Into Database======= */

    public function unpublished_menu_bar_category($smile_menubar_category_id) {
        $this->s_s_a_model->unpublished_menu_bar_category_by_id($smile_menubar_category_id);
        redirect('s_s_a/m_m_b_c');
    }

    /* ============ End Menubar Unpublished Category Into Database======= */
    
    /* ============ Start MenuBar pulished Into Database======= */

    public function published_menu_bar_category($smile_menubar_category_id) {
        $this->s_s_a_model->published_menu_bar_category_by_id($smile_menubar_category_id);
        redirect('s_s_a/m_m_b_c');
    }

    /* ============ End Menubar Published Category Into Database======= */
    
    /* ============ Start Menubar Delete  From Database======= */

    public function delete_menu_bar_category($smile_menubar_category_id) {
        $this->s_s_a_model->delete_menu_bar_category_by_id($smile_menubar_category_id);
        redirect('s_s_a/m_m_b_c');
    }

    /* ============ End Menubar Delete  From Database======= */
    
    /* ============ Start Edit Menu Bar Category Page Display======= */

    public function e_m_b_c($smile_menubar_category_id) {
        $data = array();
       $data['menu_bar_cat_info']=$this->s_s_a_model->select_edit_menu_bar_category_by_id($smile_menubar_category_id);
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_edit_menu_bar_category_page', $data, true);
        $data['title'] = 'Edit Menu Bar Category';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Edit Menu Bar Category Page Display======= */
    
    /* ============ Start Update Menu Category Into Database======= */

    public function update_menu_category(){
        $this->s_s_a_model->update_menu_category_info();
        redirect('s_s_a/m_m_b_c');
    }

    /* ============ End Update Menu Category Into Database======= */
    
    /*
     * Start Sub Menu Bar Category Part
     */
    /* ============ Start Admin Add Sub Menubar Category Page Display======= */

    public function a_s_m_b_c() {
        $data = array();
        $data['all_published_menubar_category']= $this->s_s_a_model->select_all_published_menubar_category();
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_add_sub_menubar_category_page',$data, true);
        $data['title'] = 'Add Sub Menu Bar Category';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Add Menubar Category Page Display======= */
    
    /* ============Start Save Sub Menu Category Into Database======= */

    public function save_sub_menu_category() {
        $data=array();
        $this->s_s_a_model->save_sub_menu_category_info($data);
        $sdata = array();
        $sdata['message'] = 'Save  Sub Menu Category Successfully!';
        $this->session->set_userdata($sdata);
        redirect('s_s_a/a_s_m_b_c');
    }

    /* ============ End Save Sub Menu Category Into Database======= */
    
     /* ============ Start Admin Manage Sub Menu Bar Category  Page Display======= */

    public function m_s_m_b_c() {
        $data = array();
        $this->load->library('pagination');
    $config['base_url'] = base_url() .'s_s_a/m_s_m_b_c/';

    $config['total_rows'] = $this->db->count_all('tbl_smile_menubar_category');
    $config['per_page'] = 3;
    //$config['full_tag_open'] = "<ul class='pagination'>";
    //$config['full_tag_close'] = '</ul>';
    $this->pagination->initialize($config);
    $data['select_all_sub_menu'] = $this->s_s_a_model->select_all_published_sub_menu_bar_category($config['per_page'], $this->uri->segment(3));
        
        
       // $data['select_all_sub_menu'] = $this->s_s_a_model->select_all_published_sub_menu_bar_category();
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_manage_sub_menu_category_page', $data, true);
        $data['title'] = 'Manage Sub Menu Category';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Manage Sub Menu Bar Category  Page Display======= */
    
     /* ============ Start Sub Menu  Unpulished Into Database======= */

    public function unpublished_sub_menu_bar_category($smile_sub_menubar_category_id) {
        $this->s_s_a_model->unpublished_sub_menu_bar_category_by_id($smile_sub_menubar_category_id);
        redirect('s_s_a/m_s_m_b_c');
    }

    /* ============ End Sub Menu Unpublished Category Into Database======= */
    /* ============ Start Sub Menu  pulished Into Database======= */

    public function published_sub_menu_bar_category($smile_sub_menubar_category_id) {
        $this->s_s_a_model->published_sub_menu_bar_category_by_id($smile_sub_menubar_category_id);
        redirect('s_s_a/m_s_m_b_c');
    }

    /* ============ End Sub Menu Unpublished Category Into Database======= */
    
    /* ============ Start Sub Menubar Delete  From Database======= */

    public function delete_sub_menu_bar_category($smile_sub_menubar_category_id) {
        $this->s_s_a_model->delete_sub_menu_bar_category_by_id($smile_sub_menubar_category_id);
        redirect('s_s_a/m_s_m_b_c');
    }

    /* ============ End Sub Menubar Delete  From Database======= */
    
     /* ============ Start Edit Menu Bar Category Page Display======= */

    public function e_s_m_b_c($smile_sub_menubar_category_id) {
        $data = array();
       $data['sub_menu_bar_cat_info']=$this->s_s_a_model->select_edit_sub_menu_bar_category_by_id($smile_sub_menubar_category_id);
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_edit_sub_menu_bar_category_page', $data, true);
        $data['title'] = 'Edit Sub Menu Bar Category';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Edit Menu Bar Category Page Display======= */
    
    /* ============ Start Update Sub Menu Category Into Database======= */

    public function update_sub_menu_category(){
        $this->s_s_a_model->update_sub_menu_category_info();
        redirect('s_s_a/m_s_m_b_c');
    }

    /* ============ End Update Sub Menu Category Into Database======= */
    
    /*
     * Start Add Product Page
     */
    
     /* ============ Start Admin  Add Product Page Display======= */

    public function a_p() {
        $data = array();
        $data['all_published_main_menu']= $this->s_s_a_model->select_all_published_menubar_category();
        $data['all_published_sub_menu']= $this->s_s_a_model->select_all_published_sub_menu_category();
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_add_product_page',$data, true);
        $data['title'] = 'Add Product Category';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Add Product Page Display======= */
    
    /* ============Start Save Logo Into Database======= */

    public function save_product() {
        
        $data = array();
        $data['smile_product_id'] = $this->input->post('smile_product_id', true);
        $data['smile_menubar_category_id'] = $this->input->post('smile_menubar_category_id', true);
        $data['smile_sub_menubar_category_id'] = $this->input->post('smile_sub_menubar_category_id', true);
        $data['smile_product_name'] = $this->input->post('smile_product_name', true);
        $data['smile_product_description'] = $this->input->post('smile_product_description', true);
        $data['smile_product_price'] = $this->input->post('smile_product_price', true);
        $data['smile_product_qunatity'] = $this->input->post('smile_product_qunatity', true);
        $data['smile_product_model_name'] = $this->input->post('smile_product_model_name', true);
        $data['smile_product_publication_status'] = $this->input->post('smile_product_publication_status', true);
        $data['smile_featured_product'] = $this->input->post('smile_featured_product', true);
        $data['smile_product_publisher_name'] = $this->session->userdata('admin_name');
        
        
        /*
         * Start Logo Image Upload
         */
        $config['upload_path'] = 'image/product_image/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100000';
		$config['max_width']  = '2000';
		$config['max_height']  = '1500';
                  $error=''; 
                  $fdata=array();
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('smile_product_image'))
		{
			$error = $this->upload->display_errors();

			echo $error;
                        exit();
		}
		else
		{
			$fdata =  $this->upload->data();
                        $data['smile_product_image']=$config['upload_path'].$fdata['file_name'];
                        
		}
        /*
         * End Logo Image Upload
         */
        
        
        $this->s_s_a_model->save_product_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Product Successfully!';
        $this->session->set_userdata($sdata);
        redirect('s_s_a/a_p');
    }

    /* ============ End Save Product Into Database======= */
    
    
    /* ============ Start Admin Manage Product  Page Display======= */

    public function m_p_p() {
        $data=array();
    /*-------Start Pagination--------------------*/
    $this->load->library('pagination');
    $config['base_url'] = base_url() .'s_s_a/m_p_p/';

    $config['total_rows'] = $this->db->count_all('tbl_smile_add_product');
    $config['per_page'] = 8;
    //$config['full_tag_open'] = "<ul class='pagination'>";
    //$config['full_tag_close'] = '</ul>';
    $this->pagination->initialize($config);
    $data['select_all_product_info'] = $this->s_s_a_model->select_all_product_info($config['per_page'], $this->uri->segment(3));
        
        
        //$data['select_all_product_info'] = $this->s_s_a_model->select_all_product_info();
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_manage_product_page', $data, true);
        $data['title'] = 'Manage Prodcut';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Manage Product  Page Display======= */
    
    /* ============ Start Product  Unpulished Into Database======= */

    public function unpublished_product($smile_product_id) {
        $this->s_s_a_model->unpublished_product_by_id($smile_product_id);
        redirect('s_s_a/m_p_p');
    }

    /* ============ End Product Unpublished Category Into Database======= */
    
    /* ============ Start Product  pulished Into Database======= */

    public function published_product($smile_product_id) {
        $this->s_s_a_model->published_product_by_id($smile_product_id);
        redirect('s_s_a/m_p_p');
    }

    /* ============ End Product published Category Into Database======= */
    /* ============ Start Featured Product  Unpulished Into Database======= */

    public function unfeatured_product($smile_product_id) {
        $this->s_s_a_model->unfeatured_product_by_id($smile_product_id);
        redirect('s_s_a/m_p_p');
    }

    /* ============ End Featured Product Unpublished Category Into Database======= */
    
    /* ============ Start Featured Product  pulished Into Database======= */

    public function featured_product($smile_product_id) {
        $this->s_s_a_model->featured_product_by_id($smile_product_id);
        redirect('s_s_a/m_p_p');
    }

    /* ============ End Featured Product published Category Into Database======= */
    
    /* ============ Start Product Delete  From Database======= */

    public function delete_product_info($smile_product_id) {
        $this->s_s_a_model->delete_product_info_by_id($smile_product_id);
        redirect('s_s_a/m_p_p');
    }

    /* ============ End Product Delete  From Database======= */
    
     /* ============ Start Edit Product Page Display======= */

    public function e_p_p($smile_product_id) {
        $data = array();
       $data['select_prodcut_by_sub_men_id']=$this->s_s_a_model->select_edit_prodcut_by_sub_menu_id($smile_product_id);
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_edit_product_page', $data, true);
        $data['title'] = 'Edit Sub Menu Bar Category';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Edit Product Page Display======= */
    
 /* ============ Start Update Product Into Database======= */

    public function updat_product(){
        $data = array();
        $data['smile_product_name'] = $this->input->post('smile_product_name', true);
        $data['smile_product_description'] = $this->input->post('smile_product_description', true);
        $data['smile_product_price'] = $this->input->post('smile_product_price', true);
        $data['smile_product_qunatity'] = $this->input->post('smile_product_qunatity', true);
        $data['smile_product_model_name'] = $this->input->post('smile_product_model_name', true);
        $data['smile_product_publication_status'] = $this->input->post('smile_product_publication_status', true);
        $data['smile_featured_product'] = $this->input->post('smile_featured_product', true);
        
        
         /*
         * Start Logo Image Upload
         */
        $config['upload_path'] = 'image/update_product_image/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100000';
		$config['max_width']  = '2000';
		$config['max_height']  = '1500';
                  $error=''; 
                  $fdata=array();
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('smile_product_image'))
		{
			$error = $this->upload->display_errors();

			echo $error;
                        exit();
		}
		else
		{
			$fdata =  $this->upload->data();
                        $data['smile_product_image']=$config['upload_path'].$fdata['file_name'];
                        
		}
        /*
         * End Logo Image Upload
         */
        
        
        
        $this->s_s_a_model->update_product_info($data);
        redirect('s_s_a/m_p_p');
    }

        /* ============ End Update Product Into Database======= */
    
    /*
     * Start Banner Slider Part
     */
    
     /* ============ Start Admin Add Banner Slider Page Display======= */

    public function a_b_s() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_add_banner_slider_page', '', true);
        $data['title'] = 'Add Banner Slider';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Add Banner Slider Page Display======= */
    
    
    /* ============Start Save Banner Into Database======= */

    public function save_banner() {
        
        $data = array();
        $data['smile_banner_name'] = $this->input->post('smile_banner_name', true);
        $data['smile_banner_publication_status'] = $this->input->post('smile_banner_publication_status', true);
        
        /*
         * Start Logo Image Upload
         */
        $config['upload_path'] = 'image/banner_slider/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
                  $error=''; 
                  $fdata=array();
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('smile_banner_image'))
		{
			$error = $this->upload->display_errors();

			echo $error;
                        exit();
		}
		else
		{
			$fdata =  $this->upload->data();
                        $data['smile_banner_image']=$config['upload_path'].$fdata['file_name'];
                        
		}
        /*
         * End Logo Image Upload
         */
        
        
        $this->s_s_a_model->save_banner_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Banner Successfully!';
        $this->session->set_userdata($sdata);
        redirect('s_s_a/a_b_s');
    }

    /* ============ End Save Banner Into Database======= */
    
    /* ============ Start Admin Manage Banner Page Display======= */

    public function m_b_s() {
        $data = array();
        $this->load->library('pagination');
    $config['base_url'] = base_url() .'s_s_a/m_b_s/';

    $config['total_rows'] = $this->db->count_all('tbl_smile_add_banner_slider');
    $config['per_page'] = 3;
    //$config['full_tag_open'] = "<ul class='pagination'>";
    //$config['full_tag_close'] = '</ul>';
    $this->pagination->initialize($config);
    $data['all_banner_item'] = $this->s_s_a_model->select_all_banner($config['per_page'], $this->uri->segment(3));
        
        
        
       // $data['all_banner_item'] = $this->s_s_a_model->select_all_banner();
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_manage_banner_slider_page',$data, true);
        $data['title'] = 'Manage Banner';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Manage Banner Page Display======= */
    
    /* ============ Start Banner Unpulished Into Database======= */

    public function unpublished_banner($smile_banner_id) {
        $this->s_s_a_model->unpublished_banner_by_id($smile_banner_id);
        redirect('s_s_a/m_b_s');
    }

    /* ============ End Banner Unpulished  Into Database======= */
    
    /* ============ Start Banner pulished Into Database======= */

    public function published_banner($smile_banner_id) {
        $this->s_s_a_model->published_banner_by_id($smile_banner_id);
        redirect('s_s_a/m_b_s');
    }

    /* ============ End Banner pulished Category Into Database======= */
    
    /* ============ Start Banner Delete  From Database======= */

    public function delete_banner($smile_banner_id) {
        $this->s_s_a_model->delete_banner_by_id($smile_banner_id);
        redirect('s_s_a/m_b_s');
    }

    /* ============ End Banner Delete  From Database======= */
    
   /*
    * Start Add About us Page Part
    */ 
    
    /* ============ Start Admin Add About Page Display======= */

    public function a_u_p() {
        $data = array();
        $data['all_header_menu']= $this->s_s_a_model->select_all_header_category();
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_add_about_us_page',$data, true);
        $data['title'] = 'Add About Us Page Information';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Add About Us Page Display======= */
    
    /* ============Start Save About Us page Into Database======= */

    public function save_about() {
        
         $data = array();
         $data['smile_header_category_id'] = $this->input->post('smile_header_category_id', true);
        $data['smile_page_big_heading'] = $this->input->post('smile_page_big_heading', true);
        $data['smile_page_small_heading'] = $this->input->post('smile_page_small_heading', true);
         $data['smile_page_small_heading_first_title'] = $this->input->post('smile_page_small_heading_first_title', true);
         $data['smile_page_small_heading_second_title'] = $this->input->post('smile_page_small_heading_second_title', true);
         $data['smile_page_big_heading_first_image_first_description'] = $this->input->post('smile_page_big_heading_first_image_first_description', true);
         $data['smile_page_big_heading_second_image_second_description'] = $this->input->post('smile_page_big_heading_second_image_second_description', true);
         $data['smile_page_small_heading_first_title_first_description'] = $this->input->post('smile_page_small_heading_first_title_first_description', true);
         $data['smile_page_small_heading_second_title_second_description'] = $this->input->post('smile_page_small_heading_second_title_second_description', true);     
        $data['smile_page_small_heading_third_title'] = $this->input->post('smile_page_small_heading_third_title', true);
       $data['smile_page_small_heading_fourth_title'] = $this->input->post('smile_page_small_heading_fourth_title', true);
       $data['smile_page_small_heading_third_title_third_description'] = $this->input->post('smile_page_small_heading_third_title_third_description', true);
       $data['smile_page_small_heading_fourth_title_fourth_description'] = $this->input->post('smile_page_small_heading_fourth_title_fourth_description', true);
       
        
        $data['smile_page_publication_status'] = $this->input->post('smile_page_publication_status', true);
       
        
        /*
         * Start Logo Image Upload
         */
        $config['upload_path'] = 'image/about_us_image/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
                  $error=''; 
                  $fdata=array();
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('smile_about_image'))
		{
			$error = $this->upload->display_errors();

			echo $error;
                        exit();
		}
		else
		{
			$fdata =  $this->upload->data();
                        $data['smile_about_image']=$config['upload_path'].$fdata['file_name'];
                        
		}
        /*
         * End Logo Image Upload
         */
                
                 /*
         * Start Logo Image Upload
         */
        $config['upload_path'] = 'image/about_us_image/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100000';
		$config['max_width']  = '1024';
		$config['max_height']  = '768';
                  $error=''; 
                  $fdata=array();
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('smile_heading_image'))
		{
			$error = $this->upload->display_errors();

			echo $error;
                        exit();
		}
		else
		{
			$fdata =  $this->upload->data();
                        $data['smile_heading_image']=$config['upload_path'].$fdata['file_name'];
                        
		}
        /*
         * End Logo Image Upload
         */
                
        
        
        $this->s_s_a_model->save_about_us_info($data);
        $sdata = array();
        $sdata['message'] = 'Save About Page Info Success Fully!';
        $this->session->set_userdata($sdata);
        redirect('s_s_a/a_u_p');
    }

    /* ============ End Save About Us Page Into Database======= */
    
    /* ============ Start Admin Manage About Us Page Display======= */

    public function m_a_u_p() {
        $data = array();
        $this->load->library('pagination');
    $config['base_url'] = base_url() .'s_s_a/m_a_u_p/';

    $config['total_rows'] = $this->db->count_all('tbl_smile_add_about_us_page');
    $config['per_page'] = 3;
    //$config['full_tag_open'] = "<ul class='pagination'>";
    //$config['full_tag_close'] = '</ul>';
    $this->pagination->initialize($config);
    $data['all_about_page_info'] = $this->s_s_a_model->select_all_about_page_info($config['per_page'], $this->uri->segment(3));
        
        
        //$data['all_about_page_info'] = $this->s_s_a_model->select_all_about_page_info();
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_manage_about_us_page',$data, true);
        $data['title'] = 'Manage Banner';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Manage About Us Page Display======= */
    
    /* ============ Start About Us Page Unpulished Into Database======= */

    public function unpublished_about_page($smile_page_info_id) {
        $this->s_s_a_model->unpublished_about_page_by_id($smile_page_info_id);
        redirect('s_s_a/m_a_u_p');
    }

    /* ============ End About Us Unpulished  Into Database======= */
     /* ============ Start About Us Page pulished Into Database======= */

    public function published_about_page($smile_page_info_id) {
        $this->s_s_a_model->published_about_page_by_id($smile_page_info_id);
        redirect('s_s_a/m_a_u_p');
    }

    /* ============ End About Us pulished  Into Database======= */
   
    /* ============ Start About Us Delete  From Database======= */

    public function delete_about_page_info($smile_page_info_id) {
        $this->s_s_a_model->delete_about_page_info_by_id($smile_page_info_id);
        redirect('s_s_a/m_a_u_p');
    }

    /* ============ End About Us Delete  From Database======= */
    
    
    /* ============ Start Edit About Us Page Display======= */

    public function e_a_u_p($smile_page_info_id) {
        $data = array();
       $data['select_about_page_info_by_page_id']=$this->s_s_a_model->select_edit_about_page_info_by_page_id($smile_page_info_id);
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_edit_about_us_page', $data, true);
        $data['title'] = 'Edit Sub Menu Bar Category';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Edit About Us Page Display======= */
    
    
    /* ============Start Update About Us page Into Database======= */

    public function update_about_us() {
        
         $data = array();
        $data['smile_page_big_heading'] = $this->input->post('smile_page_big_heading', true);
        $data['smile_page_small_heading'] = $this->input->post('smile_page_small_heading', true);
         $data['smile_page_small_heading_first_title'] = $this->input->post('smile_page_small_heading_first_title', true);
         $data['smile_page_small_heading_second_title'] = $this->input->post('smile_page_small_heading_second_title', true);
         $data['smile_page_big_heading_first_image_first_description'] = $this->input->post('smile_page_big_heading_first_image_first_description', true);
         $data['smile_page_big_heading_second_image_second_description'] = $this->input->post('smile_page_big_heading_second_image_second_description', true);
         $data['smile_page_small_heading_first_title_first_description'] = $this->input->post('smile_page_small_heading_first_title_first_description', true);
         $data['smile_page_small_heading_second_title_second_description'] = $this->input->post('smile_page_small_heading_second_title_second_description', true);     
        $data['smile_page_publication_status'] = $this->input->post('smile_page_publication_status', true);
      
        /*
         * Start Logo Image Upload
         */
        $config['upload_path'] = 'image/update_about_us_page/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100000';
		$config['max_width']  = '2028';
		$config['max_height']  = '1504';
                  $error=''; 
                  $fdata=array();
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('smile_about_image'))
		{
			$error = $this->upload->display_errors();

			echo $error;
                        exit();
		}
		else
		{
			$fdata =  $this->upload->data();
                        $data['smile_about_image']=$config['upload_path'].$fdata['file_name'];
                        
		}
        /*
         * End Logo Image Upload
         */
                
                 /*
         * Start Logo Image Upload
         */
        $config['upload_path'] = 'image/update_about_us_page/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '100000';
		$config['max_width']  = '2028';
		$config['max_height']  = '1504';
                  $error=''; 
                  $fdata=array();
		$this->load->library('upload', $config);

		if ( ! $this->upload->do_upload('smile_heading_image'))
		{
			$error = $this->upload->display_errors();

			echo $error;
                        exit();
		}
		else
		{
			$fdata =  $this->upload->data();
                        $data['smile_heading_image']=$config['upload_path'].$fdata['file_name'];
                        
		}
        /*
         * End Logo Image Upload
         */
                
        
        
        $this->s_s_a_model->update_about_us_info($data);
        redirect('s_s_a/m_a_u_p');
    }

    /* ============ End Update About Us Page Into Database======= */
    
    
    
    /*
     * Start Manage Product Comment Part
     */
    
    /* ============ Start Admin Manage Product Page Display======= */

    public function m_p_c() {
        $data = array();
        $this->load->library('pagination');
    $config['base_url'] = base_url() .'s_s_a/m_p_c/';

    $config['total_rows'] = $this->db->count_all('tbl_smile_add_about_us_page');
    $config['per_page'] = 8;
    //$config['full_tag_open'] = "<ul class='pagination'>";
    //$config['full_tag_close'] = '</ul>';
    $this->pagination->initialize($config);
    $data['all_product_comment'] = $this->s_s_a_model->select_product_comment_info($config['per_page'], $this->uri->segment(3));
        
        
        
        //$data['all_product_comment'] = $this->s_s_a_model->select_product_comment_info();
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_manage_product_comment_page',$data, true);
        $data['title'] = 'Manage Banner';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Manage Product Page Display======= */
    
    /* ============ Start Product Comment Unpulished Into Database======= */

    public function unpublished_product_comments($smile_comment_id) {
        $this->s_s_a_model->unpublished_product_comments_by_id($smile_comment_id);
        redirect('s_s_a/m_p_c');
    }

    /* ============ End Product Comment Unpulished Into Database======= */
    /* ============ Start Product Comment pulished Into Database======= */

    public function published_product_comments($smile_comment_id) {
        $this->s_s_a_model->published_product_comments_by_id($smile_comment_id);
        redirect('s_s_a/m_p_c');
    }

    /* ============ End Product Comment Unpulished Into Database======= */
    
    /* ============ Start Product Comment Delete  From Database======= */

    public function delete_product_comments($smile_comment_id) {
        $this->s_s_a_model->delete_product_comments_info_by_id($smile_comment_id);
        redirect('s_s_a/m_p_c');
    }

    /* ============ End Product Comment Delete  From Database======= */
    /*
     * Start Order Part
     */
    
    /* ============ Start Admin Manage Order Page Display======= */

    public function m_o() {
        $data = array();
        $this->load->library('pagination');
    $config['base_url'] = base_url() .'s_s_a/m_o/';

    $config['total_rows'] = $this->db->count_all('tbl_smile_order');
    $config['per_page'] = 8;
    //$config['full_tag_open'] = "<ul class='pagination'>";
    //$config['full_tag_close'] = '</ul>';
    $this->pagination->initialize($config);
    
    $data['all_order'] = $this->s_s_a_model->select_all_order_info($config['per_page'], $this->uri->segment(3));
        
        
        //$data['all_order'] = $this->s_s_a_model->select_all_order_info();
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_manage_order_page',$data, true);
        $data['title'] = 'Manage Order';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Manage Order Page Display======= */
    
    /* ============ Start Invoice View Page Display======= */
     public function view_invoice($order_id) {
        $data=array();
        $data['order_info']= $this->s_s_a_model->select_order_info_by_id($order_id);
        $customer_id=$data['order_info']->smile_customer_id;
        $shipping_id=$data['order_info']->shipping_id;
        $data['customer_info']=$this->welcome_model->select_customer_info($customer_id);
        $data['shipping_info']=$this->checkout_model->select_shipping_info($shipping_id);
        $data['order_detail_info']= $this->s_s_a_model->select_order_detail_by_id($order_id);

        $data['from_address'] = 'admin@smilemobilebd.com';
        $data['admin_full_name'] = 'Smile Mobile Bd';
        $data['to_address'] = $data['customer_info']->email_address;
        $data['subject'] = 'Smile - Order Invoice';
        $this->load->view('smile_admin/smile_admin_invoice_page',$data);
    }
    /* ============ End Invoice View Page Display======= */
    
    
    /* ============ Start Edit Order Page Display======= */

    public function e_o_p($order_id) {
        $data = array();
       
       $data['order_info_details']=$this->s_s_a_model->select_order_info_by_id($order_id);
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_edit_order_info_page', $data, true);
        $data['title'] = 'Edit Order Page';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Edit Order Page Display======= */
    
    
    /*============ Start Update Order Function==========*/
    
    public function update_order(){
        $this->s_s_a_model->update_order_info();
         $this->s_s_a_model->update_payment_info();
         redirect('s_s_a/m_o');
        
    }
    /*============ Start Update Order Function==========*/
    
    /*================== Start Admin Registration Email Checking=======*/
    
    public function ajax_email_check($email_address){
         $result=$this->s_s_a_model->ajax_email_check_info($email_address);
         if($result){
             echo'Already Exists!';
         }
         else {
             echo 'Available';
         }
    } 
     
    /*================== End Admin Registration Email Checking=======*/
 
    /* ============ Start Admin Add Contact Us Page Display======= */

    public function a_c_u() {
        $data = array();
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_add_contact_us_page', '', true);
        $data['title'] = 'Add Contact us Page';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Add Contact Us Page Display======= */
    
    
    /* ============Start Save Contact Info Into Database======= */

    public function save_contact_info() {
       $data=array();
        $this->s_s_a_model->save_company_contact_info($data);
        $sdata = array();
        $sdata['message'] = 'Save  Contact Information Successfully!';
        $this->session->set_userdata($sdata);
        redirect('s_s_a/a_c_u');
    }

    /* ============ End  Save Contact Info Into Database======= */
    
    /* ============ Start Admin Manage Contact us Page Display======= */

    public function m_c_u_i() {
        $data = array();
        $this->load->library('pagination');
    $config['base_url'] = base_url() .'s_s_a/m_c_u_i/';

    $config['total_rows'] = $this->db->count_all('tbl_smile_contact_us_page');
    $config['per_page'] = 8;
    //$config['full_tag_open'] = "<ul class='pagination'>";
    //$config['full_tag_close'] = '</ul>';
    $this->pagination->initialize($config);
    
    $data['all_contact_info'] = $this->s_s_a_model->select_all_contact_info($config['per_page'], $this->uri->segment(3));
        
        
        //$data['all_order'] = $this->s_s_a_model->select_all_order_info();
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_manage_contact_us',$data, true);
        $data['title'] = 'Manage Contact Us';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Manage Order Page Display======= */
    
    /* ============ Start Product Comment Delete  From Database======= */

    public function delete_contact($smile_contact_us_page_id) {
        $this->s_s_a_model->delete_contact_info_by_id($smile_contact_us_page_id);
        redirect('s_s_a/m_c_u_i');
    }

    /* ============ End Product Comment Delete  From Database======= */
    
     /* ============ Start Admin Manage Customer Account Page Display======= */

    public function m_c_a_p() {
        $data = array();
        $this->load->library('pagination');
    $config['base_url'] = base_url() .'s_s_a/m_c_a_p/';

    $config['total_rows'] = $this->db->count_all('tbl_smile_customer');
    $config['per_page'] = 8;
    //$config['full_tag_open'] = "<ul class='pagination'>";
    //$config['full_tag_close'] = '</ul>';
    $this->pagination->initialize($config);
    
    $data['all_customer_info'] = $this->s_s_a_model->select_all_customer_info($config['per_page'], $this->uri->segment(3));
        
        
        //$data['all_order'] = $this->s_s_a_model->select_all_order_info();
        $data['admin_main_content'] = $this->load->view('smile_admin/smile_admin_manage_customer_account',$data, true);
        $data['title'] = 'Manage Customer Account';
        $this->load->view('smile_admin/smile_admin_main_page', $data);
    }

    /* ============ End Admin Manage Customer Accountr Page Display======= */
    
    /* ============ Start Customer Account Delete  From Database======= */

    public function delete_customer_info($smile_customer_id) {
        $this->s_s_a_model->delete_customer_info_by_id($smile_customer_id);
        redirect('s_s_a/m_c_a_p');
    }

    /* ============ End Customer Account Delete  From Database======= */
    
    
}

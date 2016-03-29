<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Checkout extends CI_Controller {

    //put your code here

    public function __construct() {
        parent::__construct();
        $customer_id = $this->session->userdata('smile_customer_id');
        if ($customer_id == NULL) {
            redirect('customer_registration');
        }
    }

    public function index() {


        $customer_id = $this->session->userdata('smile_customer_id');
        $shipping_id = $this->session->userdata('shipping_id');

        if ($customer_id != NULL && $shipping_id == NULL) {
            $data = array();
            $data['header_category'] = $this->welcome_model->select_all_published_header_category();
           $data['header_restoff_category'] = $this->welcome_model->select_all_published_header_restoff_category();
            $data['all_menu_category'] = $this->welcome_model->select_all_published_menu_category();
            $data['all_sub_menu_category'] = $this->welcome_model->select_all_published_sub_menu_category();
            $data['select_logo'] = $this->welcome_model->select_all_published_logo();
            $data['smile_master_middle_content'] = $this->load->view('smile_product_shipping_details_page', $data, true);
            $data['title'] = 'Smile Delivery Information';
            $this->load->view('smile_master_main_page', $data);
        } elseif ($customer_id != NULL && $shipping_id != NULL) {
            redirect('checkout/show_payment_form');
        }
    }

    public function save_shipping() {

        $customer_id = $this->session->userdata('smile_customer_id');

        $data = array();
        $data['smile_customer_id'] = $customer_id;
        $data['shipping_name'] = $this->input->post('shipping_name', true);
        $data['shipping_email_address'] = $this->input->post('shipping_email_address', true);
        $data['company'] = $this->input->post('company', true);
        $data['mobile_no'] = $this->input->post('mobile_no', true);
        $data['address'] = $this->input->post('address', true);
        $data['shipping_city'] = $this->input->post('shipping_city', true);
        $data['shipping_country'] = $this->input->post('shipping_country', true);
        $data['postal_code'] = $this->input->post('postal_code', true);
        $shipping_id = $this->checkout_model->save_shipping_info($data);




        $sdata = array();
        $sdata['shipping_id'] = $shipping_id;
        $sdata['shipping_address']= $data['address'];
         $sdata['shipping_city']= $data['shipping_city'];
        $sdata['shipping_postal_code']= $data['postal_code'];
        $this->session->set_userdata($sdata);
        redirect('checkout/show_payment_form');
    }

    public function shipping_same_as_registration($customer_id) {
        $customer_info = $this->welcome_model->select_customer_info($customer_id);
        $data = array();
        $data['smile_customer_id'] = $customer_id;
        $data['shipping_name'] = $customer_info->first_name . ' ' . $customer_info->last_name;
        $data['shipping_email_address'] = $customer_info->email_address;
        $data['company'] = $customer_info->company_name;
        $data['address'] = $customer_info->address_01;
        $data['mobile_no'] = $customer_info->mobile_number;
        $data['shipping_city'] = $customer_info->city;
        $data['postal_code'] = $customer_info->zip_code5;
        $data['shipping_country'] = $customer_info->country_name;
        $shipping_id = $this->checkout_model->save_shipping_info($data);
        $sdata = array();
        $sdata['shipping_id'] = $shipping_id;
        $sdata['shipping_address']= $data['address'];
         $sdata['shipping_city']= $data['shipping_city'];
        $sdata['shipping_postal_code']= $data['postal_code'];
        
        $this->session->set_userdata($sdata);
        redirect('checkout/show_payment_form');
    }

    public function show_payment_form() {
        $data = array();
        $data['header_category'] = $this->welcome_model->select_all_published_header_category();
       $data['header_restoff_category'] = $this->welcome_model->select_all_published_header_restoff_category();
        $data['all_menu_category'] = $this->welcome_model->select_all_published_menu_category();
        $data['all_sub_menu_category'] = $this->welcome_model->select_all_published_sub_menu_category();
        $data['select_logo'] = $this->welcome_model->select_all_published_logo();
        $data['smile_master_middle_content'] = $this->load->view('smile_product_payment_method_page', $data, true);
        $data['title'] = 'Smile Shipping Method';
        $this->load->view('smile_master_main_page', $data);
    }

    public function confirm_order() {
        $payment_method = $this->input->post('payment_method', true);
        if ($payment_method == 'cash_on_delivery') {
            $this->checkout_model->save_payment_info();
            $this->checkout_model->save_order_info();

            /* ==========Send Customer Invoice====== */

            $mdata = array();
            $customer_id = $this->session->userdata('smile_customer_id');
            $shipping_id = $this->session->userdata('shipping_id');
            $mdata['customer_info'] = $this->welcome_model->select_customer_info($customer_id);
            $mdata['shipping_info'] = $this->checkout_model->select_shipping_info($shipping_id);

            $mdata['from_address'] = 'admin@smilemobilebd.com';
            $mdata['admin_full_name'] = 'Smile Mobile Bd';
            $mdata['to_address'] = $mdata['customer_info']->email_address;
            $mdata['subject'] = 'Smile Mobile Bd - Order Invoice';
            $this->mailer_model->sendEmail($mdata,'invoice');
            $mobile_no= '88'.$mdata['customer_info']->mobile_number;
            $this->load->model('sms_api_model');
            $customer_name=$mdata['customer_info']->first_name.' '.$mdata['customer_info']->last_name;
            $message="Dear $customer_name, <br/> Your order Successfully Placed.Please check your email for details. your order total BDT :".$this->cart->total();
            $this->sms_api_model->Sender("121.241.242.114","8080","talh-demo","demo12","smilemobile","$message","$mobile_no","2","1");
            $this->sms_api_model->Submit ();
            redirect('checkout/order_complete');
            

            /* ==========Send Customer Invoice====== */
        } else if ($payment_method == 'pay_pal') {
         
            $this->checkout_model->save_payment_info();
            $this->checkout_model->save_order_info();
            

            /* ==========Send Customer Invoice====== */

            $mdata = array();
            $customer_id = $this->session->userdata('smile_customer_id');
            $shipping_id = $this->session->userdata('shipping_id');
            $mdata['customer_info'] = $this->welcome_model->select_customer_info($customer_id);
            $mdata['shipping_info'] = $this->checkout_model->select_shipping_info($shipping_id);

            $mdata['from_address'] = 'admin@smilemobilebd.com';
            $mdata['admin_full_name'] = 'Smile Mobile Bd';
            $mdata['to_address'] = $mdata['customer_info']->email_address;
            $mdata['subject'] = 'Smile Mobile Bd - Order Invoice';
            $this->mailer_model->sendEmail($mdata,'invoice');
            redirect('checkout/paypal_page');
        }
    }
    
    public function paypal_page(){
        $this->load->view('smile_payment_method_paypal_api');
    }
    
    public function order_complete(){
         $data = array();
        $data['header_category'] = $this->welcome_model->select_all_published_header_category();
        $data['header_restoff_category'] = $this->welcome_model->select_all_published_header_restoff_category();
        $data['all_menu_category'] = $this->welcome_model->select_all_published_menu_category();
        $data['all_sub_menu_category'] = $this->welcome_model->select_all_published_sub_menu_category();
        $data['select_logo'] = $this->welcome_model->select_all_published_logo();
        $data['smile_master_middle_content'] = $this->load->view('smile_order_complete_page', $data, true);
        $data['title'] = 'Smile Shipping Method';
        $this->load->view('smile_master_main_page', $data);
   
    }

}

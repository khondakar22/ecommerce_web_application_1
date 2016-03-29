<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Cart extends CI_Controller {

    //put your code here

    public function add_to_cart() {
        $smile_product_id = $this->input->post('smile_product_id', true);
        $qty = $this->input->post('qty', true);

        $product_info = $this->welcome_model->select_all_prodcut_by_id($smile_product_id);

        $data = array(
            'id' => $product_info->smile_product_id,
            'qty' => $qty,
            'price' => $product_info->smile_product_price,
            'name' => $product_info->smile_product_name,
            'image' => $product_info->smile_product_image
        );
        $this->cart->insert($data);
        redirect('cart/show_cart');
    }

    public function update_cart() {
        $qty = $this->input->post('qty', true);
        $rowid = $this->input->post('rowid', true);

        $data = array(
            'rowid' => $rowid,
            'qty' => $qty
        );

        $this->cart->update($data);
        redirect('cart/show_cart');
    }

    public function remove($rowid) {
        $data = array(
            'rowid' => $rowid,
            'qty' => 0
        );
        $this->cart->update($data);
        redirect('cart/show_cart');
    }

    public function show_cart() {
        $data = array();
        $data['header_category'] = $this->welcome_model->select_all_published_header_category();
        $data['header_restoff_category'] = $this->welcome_model->select_all_published_header_restoff_category();
        $data['all_menu_category'] = $this->welcome_model->select_all_published_menu_category();
        $data['all_sub_menu_category'] = $this->welcome_model->select_all_published_sub_menu_category();
        $data['select_logo'] = $this->welcome_model->select_all_published_logo();
        $data['smile_master_middle_content'] = $this->load->view('smile_shopping_cart_page', $data, true);
        $data['title'] = 'Smile Cart';
        $this->load->view('smile_master_main_page', $data);
    }

}

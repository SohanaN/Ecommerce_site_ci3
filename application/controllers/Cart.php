<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

//     library from user guide shopping cart class
    public function __construct() {
        parent::__construct();
        $this->load->library('cart');
    }

//    cart page
    public function add_to_cart() {
//        echo 'cart';
//        exit();
        $qty = $this->input->post('qty');
        $product_id = $this->input->post('product_id');
//        echo $qty . '</br>';
//        echo $product_id;
//        exit();
        $product_info = $this->welcome_model->select_product_by_product_id($product_id);
//        echo '<pre>';
//        print_r($product_info);
//        exit();
//
//        user guide shopping cart class
        $data = array(
            'id' => $product_info->product_id,
            'qty' => $qty,
            'price' => $product_info->product_new_price,
            'name' => $product_info->product_name,
            'options' => array('image' => $product_info->product_image)
        );

        $this->cart->insert($data);
        redirect('cart/cart_details');
    }

//    cart page
    public function cart_details() {
//        echo 'cart_details';
        $data = array();
        // dynamic title
        $data['title'] = "Cart Details";
//        $data['all_published_product_info_by_category'] = $this->welcome_model->all_published_product_info_by_category($category_id);
        $data['all_featured_image'] = $this->welcome_model->all_featured_image();
        $data['main_content'] = $this->load->view('pages/cart', $data, true);
        $this->load->view('master', $data);
    }

//    cart page
    public function update_cart($row_id) {
        $qty = $this->input->post('qty');
        $row_id = $this->input->post('rowid');
//        echo $qty . '</br>';
//        echo $row_id;
//        exit();
//Updating The Cart (https://codeigniter.com/userguide3/libraries/cart.html)
        $data = array(
            'rowid' => $row_id,
            'qty' => $qty
        );

        $this->cart->update($data);
        redirect('cart/cart_details');
    }

}

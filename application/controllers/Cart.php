<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {

    public function add_to_cart() {
//        echo 'cart';
//        exit();
        $qty = $this->input->post('qty');
        $product_id = $this->input->post('product_id');
//        echo $qty . '</br>';
//        echo $product_id;
//        exit();
        redirect('cart/cart_details');
    }

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

}

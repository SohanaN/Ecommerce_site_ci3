<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

    public function index() {
        $data = array();
        // first parameter page er location
        // second parameter array hoy jodi kono data pass korte hoy noito '' blank rakte hoy
        // third parameter true dile page er code return hoy
        $data['all_published_product_info'] = $this->welcome_model->all_published_product_info();
        $data['all_featured_image'] = $this->welcome_model->all_featured_image();
        $data['main_content'] = $this->load->view('pages/home_content', $data, true);
        $this->load->view('master', $data);
    }

    //  show product category wise in homepage
    public function category_product($category_id) {
//        echo $category_id;
//        exit();
        $data = array();
        $data['all_published_product_info_by_category'] = $this->welcome_model->all_published_product_info_by_category($category_id);
        $data['all_featured_image'] = $this->welcome_model->all_featured_image();
        $data['main_content'] = $this->load->view('pages/category_product', $data, true);
        $this->load->view('master', $data);
    }

    public function checkout() {
        $data = array();
        $data['all_featured_image'] = $this->welcome_model->all_featured_image();
        $data['main_content'] = $this->load->view('pages/checkout', $data, true);
        $this->load->view('master', $data);
    }

//    product_details page
    public function product_details($product_id) {
//        echo 'product_details';
//        echo $product_id;
//        exit();
        $data['product_info'] = $this->welcome_model->select_product_by_product_id($product_id);
        $data['all_featured_image'] = $this->welcome_model->all_featured_image();
        $data['main_content'] = $this->load->view('pages/product_details', $data, true);
        $this->load->view('master', $data);
    }

}

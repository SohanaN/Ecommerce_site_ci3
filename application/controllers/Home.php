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

    public function checkout() {
        $data = array();
        $data['main_content'] = $this->load->view('pages/checkout', '', true);
        $this->load->view('master', $data);
    }

}

<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Super_admin extends CI_Controller {

    //put your code here
    public function __construct() {
        parent::__construct();
        $this->load->model('super_admin_model');
        $admin_id = $this->session->userdata('admin_id');
        if ($admin_id == NULL) {
            redirect('dashboard');
        }
    }

//dashboard
    public function index() {
        $data = array();
        $data['admin_main_conten'] = $this->load->view('admin/pages/dashboard', '', true);
        $this->load->view('admin/admin_master', $data);
    }

//    Add category
    public function add_category() {
        $data = array();
        $data['admin_main_conten'] = $this->load->view('admin/pages/add_category', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_category() {
        $this->super_admin_model->save_category_info();
        $sdata = array();
        $sdata['message'] = "Save category info successfully";
        $this->session->set_userdata($sdata);
        redirect('add-category');
    }

    public function manage_category() {
        $data = array();
        $data['all_category_info'] = $this->super_admin_model->all_category_info();
        $data['admin_main_conten'] = $this->load->view('admin/pages/manage_category', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function unpublish_category($category_id) {
//        echo $category_id;
        $this->super_admin_model->unpublish_category_info($category_id);
        redirect('manage-category');
    }

    public function publish_category($category_id) {
//        echo $category_id;
        $this->super_admin_model->publish_category_info($category_id);
        redirect('manage-category');
    }

//    delete category

    public function delete_category($category_id) {
//        echo $category_id;
        $this->super_admin_model->delete_category_info($category_id);
        redirect('manage-category');
    }

//    ..........................................
//    ..........................................
//    Manufacture
    public function add_manufacture() {
        $data = array();
        $data['admin_main_conten'] = $this->load->view('admin/pages/add_manufacture', '', true);
        $this->load->view('admin/admin_master', $data);
    }

    public function save_manufacture() {
        $this->super_admin_model->save_manufacture_info();
        $sdata = array();
        $sdata['message'] = "Save manufacture info successfully";
        $this->session->set_userdata($sdata);
        redirect('add-manufacture');
    }

    public function manage_manufacture() {
        $data = array();
        $data['all_manufacture_info'] = $this->super_admin_model->all_manufacture_info();
        $data['admin_main_conten'] = $this->load->view('admin/pages/manage_manufacture', $data, true);
        $this->load->view('admin/admin_master', $data);
    }

    public function unpublish_manufacture($manufacture_id) {
//        echo $category_id;
        $this->super_admin_model->unpublish_manufacture_info($manufacture_id);
        redirect('manage-manufacture');
    }

    public function publish_manufacture($manufacture_id) {
//        echo $category_id;
        $this->super_admin_model->publish_manufacture_info($manufacture_id);
        redirect('manage-manufacture');
    }

//    delete manufacture

    public function delete_manufacture($manufacture_id) {
//        echo $category_id;
        $this->super_admin_model->delete_manufacture_info($manufacture_id);
        redirect('manage-manufacture');
    }

//    ........................................
//    ........................................

    public function logout() {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $sdata = array();
        $sdata['message'] = "logout successfully";
        $this->session->set_userdata($sdata);
        redirect('abcd');
    }

}

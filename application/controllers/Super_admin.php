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

    public function delete_category($category_id) {
//        echo $category_id;
        $this->super_admin_model->delete_category_info($category_id);
        redirect('manage-category');
    }

    public function logout() {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $sdata = array();
        $sdata['message'] = "logout successfully";
        $this->session->set_userdata($sdata);
        redirect('abcd');
    }

}

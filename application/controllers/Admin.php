<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function index() {
        $this->load->view('admin/admin_login');
    }

    public function admin_login_check() {
        $email_address = $this->input->post('email_address', true);
        $password = $this->input->post('password', true);
//        echo $email_address . '----------' . $password;
//        exit();
        $this->load->model('admin_model');
        $result = $this->admin_model->check_admin_login_info($email_address, $password);

//        echo '<pre>';
//        print_r($result);
//        exit();

        $sdata = array();
        if ($result) {
//            $this->load->view('admin/admin_master');
            $sdata['admin_id'] = $result->admin_id;
            $sdata['admin_name'] = $result->admin_name;
            $this->session->set_userdata($sdata);
            redirect('/dashboard');
        } else {
            $sdata['message'] = "user id or pass invalide!";
            $this->session->set_userdata($sdata);
            redirect('abcd');
        }
    }

}

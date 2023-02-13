<?php

class Super_admin_model extends CI_Model {

    //add category data in dashboard page add_category file
    public function save_category_info() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->db->insert('tbl_category', $data);
    }

//show category in home page master file
    public function select_all_published_category() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $category_info = $query_result->result();
//        echo '<pre>';
//        print_r($category_info);
//        exit();
        return $category_info;
    }

//..........................................
//    Category
//..........................................
//
    //show category data in dashboard page manage_category file
    public function all_category_info() {
        $this->db->select('*');
        $this->db->from('tbl_category');

        $query_result = $this->db->get();
        $category_info = $query_result->result();
//        echo '<pre>';
//        print_r($category_info);
//        exit();
        return $category_info;
    }

// in dashboard page manage_category file
    public function unpublish_category_info($category_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

// in dashboard page manage_category file
    public function publish_category_info($category_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

//    delete category in dashboard page manage_category file
    public function delete_category_info($category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->delete('tbl_category');
    }

// for edit category
//
//    get & show category data in dashboard page manage_category file
    public function select_category_by_id($category_id) {
        //        echo $category_id;
//        exit();
//
        $this->db->select('*');
        $this->db->from('tbl_category');

        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
//        echo '<pre>';
//        print_r($result);
//        exit();
        return $result;
    }

// for edit category
    //    change & update category data in dashboard page edit_category file
    public function update_category_info() {
        $data = array();
        $category_id = $this->input->post('category_id', true);
//        echo $category_id;
//        exit();
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category', $data);
    }

//..........................................
//   Manufacture
//..........................................
//
    //add manufacture data in dashboard page add_manufacture file
    public function save_manufacture_info() {
        $data = array();
        $data['manufacture_name'] = $this->input->post('manufacture_name', true);
        $data['manufacture_description'] = $this->input->post('manufacture_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->db->insert('tbl_manufacture', $data);
    }

    //show manufacture data in dashboard page manage_manufacture file
    public function all_manufacture_info() {
        $this->db->select('*');
        $this->db->from('tbl_manufacture');

        $query_result = $this->db->get();
        $manufacture_info = $query_result->result();
//        echo '<pre>';
//        print_r($manufacture_info);
//        exit();
        return $manufacture_info;
    }

// in dashboard page manage_manufacture file
    public function unpublish_manufacture_info($manufacture_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('manufacture_id', $manufacture_id);
        $this->db->update('tbl_manufacture');
    }

// in dashboard page manage_manufacture file
    public function publish_manufacture_info($manufacture_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('manufacture_id', $manufacture_id);
        $this->db->update('tbl_manufacture');
    }

//    delete manufacture data in dashboard page manage_manufacture file

    public function delete_manufacture_info($manufacture_id) {
        $this->db->where('manufacture_id', $manufacture_id);
        $this->db->delete('tbl_manufacture');
    }

//    show manufacture in home page home_content file
    public function select_all_published_manufacture() {
        $this->db->select('*');
        $this->db->from('tbl_manufacture');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $manufacture_info = $query_result->result();
//        echo '<pre>';
//        print_r($manufacture_info);
//        exit();
        return $manufacture_info;
    }

// for edit manufacture
//
//    get & show manufacture data in dashboard page manage_manufacture file
    public function select_manufacture_by_id($manufacture_id) {
        //        echo $manufacture_id;
//        exit();
//
        $this->db->select('*');
        $this->db->from('tbl_manufacture');

        $this->db->where('manufacture_id', $manufacture_id);
        $query_result = $this->db->get();
        $result = $query_result->row();
//        echo '<pre>';
//        print_r($result);
//        exit();
        return $result;
    }

// for edit manufacture
    //    change & update manufacture data in dashboard page edit_manufacture file
    public function update_manufacture_info() {
        $data = array();
        $manufacture_id = $this->input->post('manufacture_id', true);
//        echo $manufacture_id;
//        exit();
        $data['manufacture_name'] = $this->input->post('manufacture_name', true);
        $data['manufacture_description'] = $this->input->post('manufacture_description', true);
        $this->db->where('manufacture_id', $manufacture_id);
        $this->db->update('tbl_manufacture', $data);
    }

//..........................................
//   Product
//..........................................
//
    //add category data in dashboard page add_product file
    public function select_all_published_category_info() {
        $this->db->select('*');
        $this->db->from('tbl_category');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
//        echo '<pre>';
//        print_r($result);
//        exit();
        return $result;
    }

    //add manufacture data in dashboard page add_product file
    public function select_all_published_manufacture_info() {
        $this->db->select('*');
        $this->db->from('tbl_manufacture');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $result = $query_result->result();
//        echo '<pre>';
//        print_r($result);
//        exit();
        return $result;
    }

//add product data in dashboard page add_product file
    public function save_product_info() {
        $data = array();
        $data['product_name'] = $this->input->post('product_name', true);
        $data['category_id'] = $this->input->post('category_id', true);
        $data['manufacture_id'] = $this->input->post('manufacture_id', true);
        $data['product_short_description'] = $this->input->post('product_short_description', true);
        $data['product_long_description'] = $this->input->post('product_long_description', true);
        $data['product_price'] = $this->input->post('product_price', true);
        $data['product_new_price'] = $this->input->post('product_new_price', true);
        $data['product_quantity'] = $this->input->post('product_quantity', true);
//        $data['is_featured'] = $this->input->post('is_featured', true);
//        if ($is_featured == 'on') {
//$is_featured
//        } else {
//
//        }
        $data['product_image'] = $this->input->post('product_image', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->db->insert('tbl_product', $data);
    }

}

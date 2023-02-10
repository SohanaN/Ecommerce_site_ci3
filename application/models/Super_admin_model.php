<?php

class Super_admin_model extends CI_Model {

    public function save_category_info() {
        $data = array();
        $data['category_name'] = $this->input->post('category_name', true);
        $data['category_description'] = $this->input->post('category_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->db->insert('tbl_category', $data);
    }

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

    //    manage category
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

    public function unpublish_category_info($category_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

    public function publish_category_info($category_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('category_id', $category_id);
        $this->db->update('tbl_category');
    }

//    delete category
    public function delete_category_info($category_id) {
        $this->db->where('category_id', $category_id);
        $this->db->delete('tbl_category');
    }

//.............................................................
//...............................................................
// Manufacture
    public function save_manufacture_info() {
        $data = array();
        $data['manufacture_name'] = $this->input->post('manufacture_name', true);
        $data['manufacture_description'] = $this->input->post('manufacture_description', true);
        $data['publication_status'] = $this->input->post('publication_status', true);
        $this->db->insert('tbl_manufacture', $data);
    }

//manage

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

    public function unpublish_manufacture_info($manufacture_id) {
        $this->db->set('publication_status', 0);
        $this->db->where('manufacture_id', $manufacture_id);
        $this->db->update('tbl_manufacture');
    }

    public function publish_manufacture_info($manufacture_id) {
        $this->db->set('publication_status', 1);
        $this->db->where('manufacture_id', $manufacture_id);
        $this->db->update('tbl_manufacture');
    }

}

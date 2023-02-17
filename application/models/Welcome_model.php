<?php

class Welcome_model extends CI_Model {

    public function all_published_product_info() {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status', 1);
        $query_result = $this->db->get();
        $product_info = $query_result->result();
//        echo '<pre>';
//        print_r($product_info);
//        exit();
        return $product_info;
    }

//    for Slider in home page
    public function all_featured_image() {
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('is_featured', 1);
        $query_result = $this->db->get();
        $all_featured = $query_result->result();
//        echo '<pre>';
//        print_r($product_info);
//        exit();
        return $all_featured;
    }

    //  show product category wise in homepage
    public function all_published_product_info_by_category($category_id) {
//        echo $category_id;
//        exit();
        $this->db->select('*');
        $this->db->from('tbl_product');
        $this->db->where('publication_status', 1);
        $this->db->where('category_id', $category_id);
        $query_result = $this->db->get();
        $product_info = $query_result->result();
//        echo '<pre>';
//        print_r($product_info);
//        exit();
        return $product_info;
    }

//    product_details page
    public function select_product_by_product_id($product_id) {
//        echo 'product_details';
//        echo $product_id;
//        exit();
//
//        joining query
        $this->db->select('tbl_product.*,tbl_manufacture.manufacture_name');
        $this->db->from('tbl_product');
        $this->db->join('tbl_manufacture', 'tbl_manufacture.manufacture_id=tbl_product.manufacture_id');
        $this->db->where('product_id', $product_id);
        $query_result = $this->db->get();
        $product_info = $query_result->row();
//        echo '<pre>';
//        print_r($product_info);
//        exit();
        return $product_info;
    }

}

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

}

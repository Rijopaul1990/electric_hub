<?php
class Product_M extends CI_Model{
    function __construct(){
        parent::__construct();
        $this->load->database();
    }

    function saveCategory($data = NULL){
        $this->db->insert('category', $data);
        return true;
    }
    
    function getAllCategory(){
       $this->db->select('*')
                ->from('category');
       $query = $this->db->get();
       return $query->result();
    }

    function saveSubCategory($data = NULL){
        $this->db->insert('sub_category', $data);
        return true;
    }

    function categoryJson($cat_id){
        $this->db->select('*')
                 ->from('sub_category')
                 ->where('cat_id', $cat_id);
        $query = $this->db->get();
        return $query->result();
    }
}
?>
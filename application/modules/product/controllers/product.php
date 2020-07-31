<?php
class Product extends My_Controller{
    function __construct(){
        parent::__construct();
    }

    function manageProduct(){
        $session = $this->session->userdata('session_data');
        $data['user_name'] = $session['user_name'];
        $data['title'] = "Manage Products";
        $data['button_view'] = 'product/manage_product_buttons';
        $data['content_view'] = 'product/manage_products';
        $this->template->main_template($data);
    }

    function addCategory(){
        $session = $this->session->userdata('session_data');
        $data['user_name'] = $session['user_name'];
        $data['title'] = "Add Category";
        $data['button_view'] = 'product/manage_product_buttons';
        $data['content_view'] = 'product/add_category';
        $this->template->main_template($data);
    }

    function addSubCategory(){
        $session = $this->session->userdata('session_data');
        $data['user_name'] = $session['user_name'];
        $data['title'] = "Add Subcategory";
        $data['button_view'] = 'product/manage_product_buttons';
        $data['content_view'] = 'product/add_subcategory';
        $this->template->main_template($data);
    }

    function addProduct(){
        $session = $this->session->userdata('session_data');
        $data['user_name'] = $session['user_name'];
        $data['title'] = "Add Product";
        $data['button_view'] = 'product/manage_product_buttons';
        $data['content_view'] = 'product/add_product';
        $this->template->main_template($data);
    }
}  
?>
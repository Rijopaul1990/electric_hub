<?php
    class LoginC extends My_Controller{
        public function __construct(){
            parent::__construct();
            $this->load->helper('url');
        }
        public function index(){
            echo "test";
            // $this->load->view('includes/header');
            // $this->load->view('login');
            // $this->load->view('includes/footer');
        }
    }
?>
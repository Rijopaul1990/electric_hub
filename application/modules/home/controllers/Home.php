<?php
class Home extends My_Controller{
    function __construct(){
        parent::__construct();
    }
    function login(){
        $data['content_view'] = 'home/login_template_v';
        $this->template->sample_template($data);
    }
    function index(){
        $data['content_view'] = 'home/home_v';
        $this->template->sample_template($data);
    }
    function about(){
        //echo "about";
        $data['content_view'] = 'home/about_v';
        $this->template->sample_template($data);
    }
}
?>
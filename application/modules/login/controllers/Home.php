<?php
class Home extends My_Controller{
    function __construct(){
        parent::__construct();
    }
    function index(){
        $data['content_view'] = 'home/home_v';
        $this->Template->sample_template($data);
    }
    function about(){
        $data['content_view'] = 'home/about_v';
        $this->Template->sample_template($data);
    }
}
?>
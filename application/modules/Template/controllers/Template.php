<?php
class Template extends My_Controller{
    function __construct(){
        parent::__construct();
    }
    function sample_template($data = NULL){
        $this->load->view('Template/sample_template_v.php', $data);
    }
    function login_template($data = NULL){
        $this->load->view('Template/login_template_v.php', $data);
    }
}
?>
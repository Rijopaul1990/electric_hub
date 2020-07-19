<?php
class Register extends My_Controller{
    function __construct(){
        parent::__construct();
    }

    function userRegistrationTemView(){
        $data['content_view'] = 'register/user_register_template';
        $this->template->sample_template($data);
    }
}
?>
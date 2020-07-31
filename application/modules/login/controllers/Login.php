<?php
class Login extends My_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('Login_M');
    }
    function login(){
        if($_SERVER['REQUEST_METHOD'] != 'POST'){
            $data['content_view'] = 'login/login_template';
            $this->template->login_template($data); 
        } else {
            $userName = $this->input->post('user_name');
            $password = $this->input->post('password');
            if($data = $this->Login_M->checkLogin($userName,$password)){
                $session_data = array(
                    'user_name' => $data->user_name,
                    'password' => $data->password
                );
                $this->session->set_userdata('session_data', $session_data);
                return redirect('Dashboard/viewDashBoard');
            } else {
                $alert = '<div class="alert alert-danger alert-dismissible">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <strong>Failed!</strong> login
                            </div>';
                $this->session->set_flashdata('login_failed', $alert);
                return redirect('Home');
            }
        }
        
    }
}
?>
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct() {
			parent::__construct();
            $this->load->helper('url');
            $this->load->model("Login_model","Login");
    }

    public function show_Login(){
        $this->load->view("view_login");
    }

    public function checkLogin(){
        $user = $this->input->post('txtusername');
        $pass = $this->input->post('txtpassword');
        
        $this->Login->checkLogin($user,$pass);

        if( $this->Login->checkLogin($user,$pass) == true){
            $this->load->view('menu');
        }else{
            $this->load->view('user');
        }
    }

    public function register(){
        $user = $this->input->post('txtusername');
        $pass = sha1(md5($this->input->post('txtpassword')));
        $status = $this->input->post('statususer');
        $name = $this->input->post('txtfname');
        $lname = $this->input->post('txtlname');
        $this->Login->register($user,$pass,$status,$name,$lname);
        // $this->load->view('view_Login');
    }
    
    public function show_register(){
        $this->load->view('view_register');
    }



            
}
?>
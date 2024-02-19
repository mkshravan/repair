<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Login extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model');
        // User login status 
        
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn');
        
    }

    function index()
    {
        if($this->isUserLoggedIn){ 
            $data['users'] = $this->Login_model->get_all_users();        
            redirect('admin/dashboard'); 
            $this->load->view('layouts/main',$data);
        }else{ 
            $this->load->view('login');
        } 
    }
    
    function login(){
        $data = array(); 
        // Get messages from the session 
        if($this->session->userdata('success_msg')){ 
            $data['success_msg'] = $this->session->userdata('success_msg'); 
            $this->session->unset_userdata('success_msg'); 
        } 
        if($this->session->userdata('error_msg')){ 
            $data['error_msg'] = $this->session->userdata('error_msg'); 
            $this->session->unset_userdata('error_msg'); 
        }
        // If login request submitted 
        if($this->input->post('loginSubmit')){
            $this->form_validation->set_rules('email', 'Email', 'required'); 
            $this->form_validation->set_rules('password', 'password', 'required'); 
             
            if($this->form_validation->run() == true){ 
                $con = array(  
                        'email'=> $this->input->post('email'), 
                        'password' => md5($this->input->post('password')),
                        // 'password' => $this->input->post('password'), 
                        'status' => 1 
                    ); 
                $checkLogin = $this->Login_model->login($con); 
                //print_r($checkLogin);
                if($checkLogin){ 
                    $this->session->set_userdata('isUserLoggedIn', TRUE); 
                    $this->session->set_userdata('userId', $checkLogin['id']); 
                    $this->session->set_userdata('name', $checkLogin['name']);
                    $this->session->set_userdata('username', $checkLogin['username']);
                    $this->session->set_userdata('roles', $checkLogin['roles']);
                    redirect('admin/dashboard'); 
                }else{ 
                    $data['error_msg'] = 'Wrong email or password, please try again.'; 
                } 
            }else{ 
                $data['error_msg'] = 'Please fill all the mandatory fields.'; 
            } 
        }
        // Load view 
        
        if($this->isUserLoggedIn){         
            redirect('admin/dashboard');
        }else{ 
            redirect('admin/login/index'); 
        }  
    }

    
     function logout(){ 
        $this->session->unset_userdata('isUserLoggedIn'); 
        $this->session->unset_userdata('userId'); 
        $this->session->sess_destroy(); 
        redirect('admin'); 
    } 
}

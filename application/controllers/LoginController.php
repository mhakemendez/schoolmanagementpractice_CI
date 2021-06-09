<?php

    class LoginController extends CI_Controller
    
    {
        function __construct()
        
        {

            parent::__construct();
            $this->load->library('form_validation');
            $this->load->helper('form');
            $this->load->model('LoginModel');

        }

        public function index()
        
        {

            $this->load->view('layouts/header');
            $this->load->view('login');
            $this->load->view('layouts/footer');

        }

       

        public function verify()

        {

            $this->form_validation->set_rules('last_name', 'Email', 'required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'required');

            if ($this->form_validation->run() == FALSE)
                {
                    $this->load->view('layouts/header');
                    $this->load->view('login');
                    $this->load->view('layouts/footer');
                }
                else
                {
                    $login = $this->LoginModel->validate();
                    if ($login) {
                        redirect('DashboardController');
                    }else{
                        redirect('LoginController');
                    }
                }

        }
    
    }

?>
<?php

    class Dashboardcontroller extends CI_Controller
    
    {
        function __construct()
        
        {

            parent::__construct();
            $this->load->library('form_validation');
            $this->load->helper('form');
            $this->load->model('StudentModel');

        }

        public function index()
        
        {

            $this->load->view('layouts/header');
            $this->load->view('dashboard');
            $this->load->view('layouts/footer');

        }

        public function showAdd()

        {

            $this->load->view('layouts/header');
            $this->load->view('newstudent');
            $this->load->view('layouts/footer');

        }

        public function addStudent()

        {

            $this->form_validation->set_rules('last_name', 'Last Name', 'required');
            $this->form_validation->set_rules('first_name', 'First Name', 'required');
            $this->form_validation->set_rules('course', 'Course', 'required');
            $this->form_validation->set_rules('college', 'College', 'required');

            if ($this->form_validation->run() == FALSE){

                // $this->StudentModel->save();
                // redirect('DashboardController');
                $this->load->view('layouts/header');
                $this->load->view('newstudent');
                $this->load->view('layouts/footer');

            }

            else{
                echo "true";
            }
            

        }

        

        
    
    }

?>
<?php

    class StudentModel extends CI_Model

    {

        public function save()

        {

            $data = array(
                'last_name' => $this->input->post('last_name'),
                'first_name' => $this->input->post('first_name'),
                'middle_name' => $this->input->post('middle_name'),
                'course' => $this->input->post('course'),
                'college' => $this->input->post('college')
            );

            $this->db->insert('students_table',$data);

        }

    }

?>
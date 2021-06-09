<?php

    class LoginModel extends CI_Model

    {

        public function validate()

        {

            $data = array(
                'email' => $this->input->post('email'),
                'password' => $this->input->post('password')
            );

            return $this->db->get_where('users_table',$data)->row();

        }

    }

?>
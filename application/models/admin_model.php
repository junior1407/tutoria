<?php

class Admin_model extends CI_Model{
    function login(){

        $email = $this->input->post('email');
       $senha = $this->input->post('senha');
        echo $senha;
    }






}
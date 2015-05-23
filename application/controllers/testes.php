<?php

class Testes extends CI_Controller{

   function index(){
    echo "pegou";
}
    function cadastro(){
        $this->load->helper('form');
        echo "tEla de cadastro";
        $this->load->view('tela_cadastro');
    }
}

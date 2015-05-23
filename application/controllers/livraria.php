<?php
class Livraria extends CI_Controller{

    public function index(){
         $this->load->model('livros_model');
        $data= $this->livros_model->getAll();
    }
}
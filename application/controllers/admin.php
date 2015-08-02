<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('questao_model');
        $this->load->library('form_validation');

    }
    public function index()
    {

      $this->load->view('admin/login_page');
        //&this->load->view
    }}
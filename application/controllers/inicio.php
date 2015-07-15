<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inicio extends CI_Controller {

    public function __construct(){
        parent::__construct();
        $this->load->helper('url');
        $this->load->model('questao_model');
        $this->load->library('form_validation');

    }
	public function index()
	{
		$this->load->view('template/header');
        $this->load->view('template/footer');
	}
    public function exibirtudo(){
        $this->load->view('template/header');
        $data['records'] = $this->questao_model->getAll();

        $this->load->view('simulado', $data);
        $this->load->view('template/footer');
    }

    public function cadastro(){
        $this->load->view('cadastro_questao');
}
    public function processar(){
        $data= array(

        );
       $this->questao_model->cadastrar();
/*
        $prova= $this->input->post('prova');
        $ano=$this->input->post('ano');
        $enunciado= $this->input->post('enunciado');
        $link1=$this->input->post('link1');
        $link2=$this->input->post('link2');
        $link2=$this->input->post('a');
        $link2=$this->input->post('linka');
        $link2=$this->input->post('b');
        $link2=$this->input->post('linkb');
        $link2=$this->input->post('c');
        $link2=$this->input->post('linkc');
        $link2=$this->input->post('d');
        $link2=$this->input->post('linkd');
        $link2=$this->input->post('e');
        $link2=$this->input->post('linke');
*/




    }

/* End of file inicio.php */
/* Location: ./application/controllers/inicio.php */
}
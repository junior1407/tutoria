<?php
/**
 * Created by PhpStorm.
 * User: DESKTOP
 * Date: 30/04/2015
 * Time: 21:27
 */

class Site extends CI_Controller {
    public function __construct(){

        parent::__construct();
        $this->load->helper('form');
        $this->load->model('questao_model');
        $this->load->library('session');

        $this->load->helper('url');
        $this->load->library('geradorquestao');
    }
    public function index(){
        $this->load->view('escolha');


    }

    public function aprender(){
        $this->load->view('repopulate');
    }

    public function submeter()
    {
       echo '<h1>'.current_url().'</h1>';

        /*var_dump($_POST);

         $variavel = $this->input->post("sample");
         var_dump($variavel);

         $variavel = $this->input->post("valdir");
         var_dump($variavel);

         $variavel = $this->input->post("2");
         var_dump($variavel);
 *//*
        if (($this->input->post('1'))==true){
            echo 'a resposta da 1 questao foi '.$this->input->post('1');
        }
*/
        for ($i = 0; $i < ($this->input->post('num')); $i++) {
            $id_questao = $this->input->post($i);
            $alternativa_marcada = $this->input->post('quest' . $id_questao);
            $alternativa_certa = $this->questao_model->obterResposta($id_questao);
            if ($alternativa_marcada == $alternativa_certa) {
                echo 'Você acertou a questão a questão ' . ($i + 1).'<br>';
            }
            else{
                echo 'Você errou a questão ' . ($i + 1).', a alternativa correta era '.$alternativa_certa.
                    ' e você marcou '.$alternativa_marcada.' .<br>';
            }


        }

    }
    public function resultado()
    {


        $data = array();
        for ($i = 0; $i < ($this->input->post('num')); $i++) {
            $id_questao = $this->input->post($i);
            $alternativa_marcada = $this->input->post('quest' . $id_questao);
            $alternativa_certa = $this->questao_model->obterResposta($id_questao);
            $data[] = array(
                'id_questao' => $id_questao,
                'marcada' =>$alternativa_marcada,
                'certa' => $alternativa_certa,
            //Isso será mandado pra view de correção. Mesma página já marcada.
            );}

        $resultado['records']= $data;
        $this->load->view('resultado',$resultado);


                    //pegar id das questoes, alternativa marcada, alternativa certa. Gerar uma view nova chamada resultado com tudo.
                     //
                }
                        /*
                         *
                         * data['navs'] = array( array(  'name'    =>  'one',
                                                         'link'    =>  'linkone'),

                                                 array(  'name'    =>  'two',
                                                         'link'    =>  'linktwo')
                                                );
        $this->load->view('adminView', $data);
        Then in your view:

        foreach($navs as $n){
          echo "<li><a href='{$n['link']}'>{$n['name']}</a></li>";
        }


                    )


                }

            }

        /*/









    public function gerar(){

        $this->load->model('questao_model');
        $data['records'] =  $this->questao_model->getAll();
        $this->load->view('questao_jorge', $data);
          //Carrega uma view
    }


    public function teste(){
        $this->load->helper('form');
        $this->load->helper('url');
        $this->load->model('grande_area_model');
        $data['records'] = $this->grande_area_model->getAll();
        $this->load->view('index', $data);
    }

    function envia_dados(){
       $this->load->library('form_validation');
        $this->form_validation->set_rules('area','Area','required|valid_email');
        if ($this->form_validation->run() == FALSE)
        {
            $this->load->view('index');
        }
        else
        {
            echo "SUCESSO";
        }

       // $this->load->model('grande_area_model');
    }

}
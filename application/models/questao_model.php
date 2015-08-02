<?php
/**
 * Created by PhpStorm.
 * User: junior
 * Date: 06/07/2015
 * Time: 20:29
 */

class Questao_model extends CI_Model{

    function cadastrar(){

        $prova= $this->input->post('prova');
        $ano=$this->input->post('ano');
        $id_assunto=$this->input->post('id_assunto');
        $correta=$this->input->post('correta');
        $enunciado= $this->input->post('enunciado');
        $link1=$this->input->post('link1');
        $link2=$this->input->post('link2');
        if (!empty($link1)) {
            $link1 = '<br> <img src="' . $link1 . '" width="350" class="img-responsive" style="float:left">';
            $enunciado = $enunciado . $link1;
        }
            if (!empty($link2)){
                $enunciado= $enunciado.'<img src="'.$link2.'" width="350" class="img-responsive" style="float:left">';
        }
        $a=$this->input->post('a');
        $linka= $this->input->post('linka');
        if(!empty($linka)) {
            $a = $a . '<img src="' .$linka . '" width="150" class="img-responsive" style="display:inline-block">';
        }
        $b=$this->input->post('b');
        $linkb= $this->input->post('linkb');
        if(!empty($linkb)) {
            $b = $b . '<img src="' . $linkb . '" width="150" class="img-responsive" style="display:inline-block">';
        }
        $c=$this->input->post('c');
        $linkc= $this->input->post('linkc');
        if (!empty($linkc)){
            $c=$c.'<img src="'.$linkc.'" width="150" class="img-responsive" style="display:inline-block">';
        }

        $d=$this->input->post('d');
        $linkd= $this->input->post('linkd');
        if (!empty($linkd)){
            $d=$d.'<img src="'.$linkd.'" width="150" class="img-responsive" style="display:inline-block">';
        }

        $e=$this->input->post('e');
        $linke= $this->input->post('linke');
        if(!empty($linke)){
            $e=$e.'<img src="'.$linke.'" width="150" class="img-responsive" style="display:inline-block">';
        }


        $data= [
            'enunciado' => $enunciado,
            'a' => $a,
            'b' => $b,
            'c' => $c,
            'd' => $d,
            'e' => $e,
            'id_assunto'=> $id_assunto,
            'prova' => $prova,
            'ano' => $ano,
            'correta' => $correta,
        ];
        $this->db->insert('questao2',$data);
    }

    function getAll(){
        $q = $this->db->get('questao2');
        if ($q->num_rows() > 0 ){
            foreach($q->result() as $row){
                $data[] = $row;

            }
            return $data;
        }
    }

    function deleteById(int $id){

            $this->db->delete('questao2', array('id' => $id));
    }




} 
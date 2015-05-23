<?php

class Questao_model extends CI_Model{

/*
    function getAll(){

        $q = $this->db->query('select * from questao'); //$q = $this->db->get('user');
         if ($q->num_rows() >0){
            foreach($q -> result() as $row){
                $data [] = $row;
            }
            return $data;
        }
        }
    }
*
 */

    function teste(){
        echo "TESTE";
    }
    function getAll(){
        $q = $this->db->get('questao');
        if ($q->num_rows() >0){
            foreach($q -> result() as $row){
                $row->prova=strtoupper($row->prova);
                $data [] = $row;
            }
            return $data;
        }
        }


    function getByIdNome($id=0,$nome){

        $sql = "select * from questao where id=? and nome = ?";
        $q = $this->db->query($sql,array($id, $nome));
        if ($q->num_rows() >0){
            foreach($q -> result() as $row){
                $data [] = $row;
            }
            return $data;
        }
    }
    function getById($id){

        $sql = "select * from questao where id=?";
        $q = $this->db->query($sql,array($id));
        if ($q->num_rows() >0){
            $row = $q -> result()[0];
            $row->prova=strtoupper($row->prova);
            return $row;

        }
    }
    function obterResposta($id=0){

        $sql = "select * from questao where id=?";
        $q = $this->db->query($sql,$id);
            return $q->result()[0]->correta;
        }




    function comparar($var1,$var2){
        if ((strcmp($var1,$var2))==0){
            return true;
        }
        else{
            return false;
        }
    }





}
?>

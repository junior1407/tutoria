<?php

class Alunos_model extends CI_Model{



    function getAll(){

        $q = $this->db->query('select * from user'); //$q = $this->db->get('user');
        if ($q->num_rows() >0){
            foreach($q -> result() as $row){
                $data [] = $row;
            }
            return $data;
        }




    }

}
?>
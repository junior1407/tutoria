<?php
http://stackoverflow.com/questions/16266512/cant-get-post-data-in-codeigniter-controller
class Grande_area_model extends CI_Model{
	function getAll(){
		$q = $this->db->query('select * from grande_area');
        foreach($q->result() as $row){
            $data[] = $row;
        }
        return $data;
	}
    function  inserir(){
   // $nome = %this->input->post('ome');
}
 


	}
?>
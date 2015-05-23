<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Geradorquestao{

    public function __construct()
    {

        $CI =& get_instance();
        $CI->load->helper('form');


    }

    public function geraAlternativa($value,$row,$marcada,$certa ){

        $id = $row->id;
        $conteudo = $row->$value;
        $checked = false;
        $acertou = 'alternativa-errada';
        if ($value==$certa){
            $acertou='alternativa-certa';
        }



        $data =array(
             'value'=>$value,
             'name' =>'quest'.$id,

         );
        if ($marcada==$value){
            $data['checked'] ='checked';
        }

        echo '<div class="'.$acertou.'">';
        echo $value.')'.form_radio($data);
        echo $conteudo;
        echo '</div>';

    }

    public function isCerta($var1, $var2){
        if ($var1!=$var2){
            return 'questao-errada';

        }
        else{
            return 'questao-certa';
        }
    }






}


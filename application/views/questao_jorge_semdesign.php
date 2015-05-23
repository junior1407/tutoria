
<html>
<head>
    <title> test </title> </head>
<body>
<?php
echo form_open('site/submeter/');



echo form_hidden('num',count($records));
$contador=0;
foreach($records as $row) {

    echo form_hidden($contador,$row->id);
    echo ucfirst($row->prova).'-'.$row->ano.'<br>';
    echo $row->enunciado;
    echo '<br>';
    echo form_radio('quest'.$row->id,'a'); echo $row->a;echo '<br>';
    echo form_rado('quest'.$row->id,'b'); echo $row->b;echo '<br>';
    echo form_radio('quest'.$row->id,'c'); echo $row->c;echo '<br>';
    echo form_radio('quest'.$row->id,'d'); echo $row->d;echo '<br>';
    echo form_radio('quest'.$row->id,'e'); echo $row->e;echo '<br>';
    echo '<br>';
    $contador++;
}



echo form_submit('submit','Submit');





echo form_close();





?>
</body>
</html>

<html>
<head>
    <title> test </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('css/style.css') ?>" >
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>

<body>
<?php
//echo form_open('site/submeter/');
echo form_open('site/resultado/');


echo form_hidden('num',count($records));
$contador=0;
echo '<h1>Questionário</h1>';
foreach($records as $row) {


?>

    <div class="questao">
     <?php   echo form_hidden($contador,$row->id);?>
		<div class="nome-questao">

      <?php echo sprintf('%02d',($contador+1)).' - '.$row->prova.'-'.$row->ano;    ?>
		</div>
        <div class="enunciado">
            <?php echo $row->enunciado; ?>
        </div>

        <div class="alternativas">


            <?php
           $data= array(
               'name' => 'quest'.$row->id,
               'value' => 'a',
               'required' => 'true',

           );
            echo 'a)'.form_radio($data); echo $row->a;echo '<br>';
            echo 'b)'.form_radio('quest'.$row->id,'b'); echo $row->b;echo '<br>';
            echo 'c)'.form_radio('quest'.$row->id,'c'); echo $row->c;echo '<br>';
            echo 'd)'.form_radio('quest'.$row->id,'d'); echo $row->d;echo '<br>';
            echo 'e)'.form_radio('quest'.$row->id,'e'); echo $row->e;echo '<br>';
            $contador++;

            ?>


        </div>
	</div>










<?PHP

}







echo form_submit('submit','Submit');





echo form_close();





?>
</body>
</html>
<html>
<head>
	<title></title>
</head>
<body>






<br>
fim
<br><br><br>
           <?php
           echo form_open('site/envia_dados');
           $opcoes = array(
               'bola' => 'Bolinha',
               'cao' => 'cachorro',


           );
          echo form_dropdown('grande_area',$opcoes,'bola');
           echo form_input();






           echo form_submit('gerar', 'Gerar');
       /*    $lista= [];
           foreach($records as $r) {
               $lista[$r->id] = $r->nome;
           }
           echo form_dropdown('options',$lista,'teste       ','Options');
             echo "<br><br>";
         */  echo form_close();

           ?>

</body>
</html>

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


echo form_hidden('num',count($records));
$contador=0;
echo '<h1>Resultado</h1>';

foreach($records as $r){

$row = $this->questao_model->getById($r['id_questao']);


?>

<?php
    $certa=$this->geradorquestao->isCerta($r['marcada'], $r['certa']);

echo '<div class="questao '.$certa.'">';

    ?>
    <?php echo form_hidden($contador, $row->id); ?>
    <div class="nome-questao">
        <?php echo sprintf('%02d', ($contador + 1)) . ' - ' . $row->prova . '-' . $row->ano; ?>
    </div>
    <div class="enunciado">
        <?php echo $row->enunciado; ?>
    </div>

    <div class="alternativas">

        <?php
        $this->geradorquestao->geraAlternativa("a", $row, $r['marcada'], $r['certa']);
        echo '<br>';
        $this->geradorquestao->geraAlternativa("b", $row, $r['marcada'], $r['certa']);
        echo '<br>';
        $this->geradorquestao->geraAlternativa("c", $row, $r['marcada'], $r['certa']);
        echo '<br>';
        $this->geradorquestao->geraAlternativa("d", $row, $r['marcada'], $r['certa']);
        echo '<br>';
        $this->geradorquestao->geraAlternativa("e", $row, $r['marcada'], $r['certa']);
        $contador++;
        ?>
    </div>
    </div>

   <?php } ?>




        </div>

        <br>



















</body>
</html>
<html>
<head>
    <title> test </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('css/font-awesome.css') ?>" >

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

</head>
<body>
    <div class= "container">
        <legend>Escolha dos conteúdos</legend>
        <div class="menu">
            <?php
            echo form_open('site/processarDados');?>
            <div class="escolha-conteudo">
                <input type="checkbox" name="assunto[]" value="1">Aritmética
            </div>
            <div class="escolha-conteudo">
                <input type="checkbox" name="assunto[]" value="2">Álgebra
            </div>
            <div class="escolha-conteudo">
                <input type="checkbox" name="assunto[]" value="3">Geometria
            </div>
            <div class="escolha-conteudo">
                <input type="checkbox" name="assunto[]" value="4">Geometria Analítica
            </div>
            <div class="escolha-conteudo">
                <input type="checkbox" name="assunto[]" value="5">Porcentagem
            </div>
            <div class="escolha-conteudo">
                <input type="checkbox" name="assunto[]" value="6">Trigonometria
            </div>
            <button class="btn btn-primary" type="submit" class="">Começar!  <i class="fa fa-pencil"></i></button>
            </div>

            <?php
            echo form_close();
            ?>
</div>
</body>
</html>

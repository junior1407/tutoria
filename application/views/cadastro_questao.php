<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Agency Template</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>




<!-- FOOTER -->
<div class="container">
    <div class="row">

        <div class="jumbotron">
            <div class="row text-center">

                <h2>Cadastro de Questão</h2>



                <form action="http://localhost/definitivo/inicio/processar" method="post" class="text-center" accept-charset="utf-8">

                    <div class="form-group">
                        <div class ="form-inline">

                            <label> Prova </label>
                            <input type="text" class="form-control" placeholder="Prova" name="prova">
                            <label> Ano </label>
                            <input type="text" maxlength="4" size="4" class="form-control" name="ano" placeholder="Ano">
                            <label> ID Assunto </label>
                            <input type="text" class="form-control"  name="id_assunto" placeholder="ID do assunto">
                            <label> Correta? </label>
                            <input type="text" class="form-control"  size='1' maxlength="1" name="correta">
                        </div>
                        <label> Enunciado </label>
                        <textarea class="form-control" rows="5" name="enunciado"> </textarea>
                        Há imagem no enunciado? <input type="checkbox" value="sim">
                        <br>
                        <div class="form-inline">
                            <input type="text" class="form-control"  name="link1" placeholder="link da imagem 1">
                            <input type="text" class="form-control"  name="link2" placeholder="link da imagem 2">


                        </div>
                        <br>
                        <label> Alternativas </label>
                        <input type="text" class="form-control" name="a" placeholder="Alternativa A">
                        <input type="text" class="form-control" name="linka" placeholder="Link A">
                        <input type="text" class="form-control" name="b" placeholder="Alternativa B">
                        <input type="text" class="form-control" name="linkb" placeholder="Link B">
                        <input type="text" class="form-control" name="c" placeholder="Alternativa C">
                        <input type="text" class="form-control" name="linkc" placeholder="Link C">
                        <input type="text" class="form-control" name="d" placeholder="Alternativa D">
                        <input type="text" class="form-control" name="linkd" placeholder="Link D">
                        <input type="text" class="form-control" name="e" placeholder="Alternativa E">
                        <input type="text" class="form-control" name="linke" placeholder="Link E">
                        <label> Resposta Correta </label>
                        <select class="form-control">
                            <option>A</option>
                            <option>B</option>
                            <option>C</option>
                            <option>D</option>
                            <option>E</option>
                        </select>


                    </div>
                    <button type="submit" class="btn btn-primary btn-lg" style=" margin-top: 10px;"> Enviar</button>
                </form>
                <!-- END CONTACT FORM -->
            </div>


        </div>
    </div>
</div>

<!-- / FOOTER -->

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="Insere/js/jquery.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="Insere/js/bootstrap.js"></script>
</body>
</html>

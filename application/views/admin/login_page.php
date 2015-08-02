<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Acesso ao Sistema</title>

    <!-- Bootstrap core CSS -->

    <link rel="stylesheet" href="<?php echo base_url('css/bootstrap.min.css') ?>" >
    <link rel="stylesheet" href="<?php echo base_url('css/estilos.css') ?>" >
    <!-- Custom styles for this template -->


<body>

<div class="container">

    <form class="form-signin">

        <h2 class="form-signin-heading">Área Administrativa</h2>
        <label for="inputEmail" class="sr-only">Endereço de Email</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Endereço de Email" name="email" required autofocus>
        <label for="inputPassword" class="sr-only">Senha</label>
        <input type="password" id="inputPassword" class="form-control" name="senha" placeholder="Senha" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Lembrar-me
            </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
    </form>

</div>


</body>
</html>

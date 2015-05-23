<html>
<head>
	<title>TEste</title>
	<meta charset="utf-8">
	<style type="text/css">
body{
    color: #333333;
    font-family: "Lucida Sans Unicode", "Lucida Grande",sans-serif;
}
.enunciado{
	max-width: 300px;
	border: dashed;
	float: left;
	margin-right: 20px;

}
	</style>


</head>
<body>
	<div>
     	<h1>Enem(2014) - 150<br><?php var_dump($records); ?></h1>
     	<div class="enunciado">
             <?php 
            foreach ($records as $row){ 
                echo $row->enunciado;
                ?>
     	</div>
     	<div class ="alternativas">
           
     		a) = <?php echo $row->a;   ?>;<br>
     		b) = <?php echo $row->b; ?>;<br>
     		c) = <?php echo $row->c; ?>;<br>
     		d) = <?php echo $row->d; ?>;<br>
     		e) = <?php echo $row->e;} ?>;<br>

     	</div>
	</div>
</body>
</html>
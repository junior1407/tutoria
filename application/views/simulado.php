

<?php foreach ($records as $row){
    echo '<h1> OIII </h1>';

}

?>
<div class="well"> <span class="label label-primary">Questão  01 </span>

   <?php echo $row->enunciado;?>
    <p style="clear:both">
        <label>
            <input type="radio" name="RadioGroup1" value="a">
            a) <?php echo $row->a;?>

        </label> <br>
        <label>
            <input type="radio" name="RadioGroup1" value="b">
            b) <?php echo $row->b;?>

        </label><br>
        <label>
            <input type="radio" name="RadioGroup1" value="c">
            c) <?php echo $row->c;?>

        </label>  <br>
        <label>
            <input type="radio" name="RadioGroup1" value="d">
            d) <?php echo $row->d;?>

        </label><br>
        <label>
            <input type="radio" name="RadioGroup1" value="e">
            e) <?php echo $row->e;?>

        </label> <br>

    </p>

</div>

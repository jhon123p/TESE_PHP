<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QUESTAO 2</title>
</head>
<body>
    <form method="post">
        <label> SEJA MUITO BEM VINDO !! INFORME SUA IDADE</label>
        <input type="text" name="idade">
        <input type="submit" value="enviar">
    </form>

    <?php
        if(isset($_POST['enviar'])){
            $idade = $_POST['idade'];
        }
        if ($idade >= 18 and $idade <= 67){
            echo "parabens sua idade ja e sufuciente para doar";
        }
    ?>

</body>
</html>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> T5 </title>
</head>
<body>
    <form method="post">
        <label> QUAL O VALOR DO SEU PRODUTO..?? </label>
        <input type="text" name="valor" id="">
        <input type="submit" value="verificar">
    </form>

    <?php
        if(isset($_POST['verificar'])){
            $valor = $_POST['valor'];
    } 
    if ($valor >= 20){
        $resul = $valor * (45 / 100);
        echo $resul;
    }else{
        $resul = $valor * (30 / 100);
        echo $resul;
    }
    ?>

</body>
</html>
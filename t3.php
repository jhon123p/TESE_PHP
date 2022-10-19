<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label> INFORME OS NUMEROS QUE SERAO USADOS</label>
        <input type="number" name="n1" id="">
        <input type="number" name="n2" id="">
        <input type="submit" value="calcular">
    </form>

    <?php

    if(isset($_POST['calcular'])){
        $send = $_POST['n1'];
        $send2 = $_POST['n2'];
    }

    if($send / $send2 == 0){
        echo 'esses numeros sao diviseveis';
    }else{
        echo 'error';
    }

    ?>

</body>
</html>
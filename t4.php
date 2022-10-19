<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label> DE QUAL NUMERO VS GOSTARIA DE DESCOBRIR SUA RAIZ QUADRADA</label>
        <input type="number" name="n1" id="">
        <input type="submit" value="check">
    </form>
    <?php
    if(isset($_POST['check'])){
        $cast = $_POST['n1'];
    }
    if($cast > 0){
        echo sqrt($cast);
    }
    ?>
</body>
</html>
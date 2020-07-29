
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Quatro</title>
</head>
<body>
    <form action="" method="get">
        Valor da tabuada: <input type="text" name="n">
        <input type="submit" value="Rodar esse treco">
    </form>
</body>
</html>
<?php
    if($_GET){
        $n = intval($_GET['n']);
        echo "Tabuada do $n:<br><br>";
        for($i = 1; $i <= 10; $i++){
            $resp = $i *$n;
            
            echo "$i - $resp <br>";
        }
    }
?>
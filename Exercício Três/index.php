<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício Três</title>
</head>
<body>
    <form action="" method="GET">
        Preço: <input type="text"name="preco"><br>
        Código: <input type="text"name="codigo"><br>
        <input type="submit" value="Rodar"><br><br>
    </form>
    <?php
        if($_GET){
            $preco = str_replace(',','.',$_GET['preco']); /*função que transforma vírgula em ponto,
            para que seja possível realizar opeçõess matemáticas.*/
            $codigo =$_GET['codigo'];
            if($codigo == 1){
                $desconto = $preco*0.15;
                $precoFinal = str_replace('.',',',$preco-$desconto);
                $preco = str_replace('.',',',$preco);
                $desconto = str_replace('.',',',$desconto);
                echo "Pagamento à vista em dinheiro ou cheque<br>Preço inicial: R$$preco  <br>Desconto: R$$desconto<br>Preço Final: R$$precoFinal";
            }else if($codigo == 2){
                $desconto = $preco*0.10;
                $precoFinal = str_replace('.',',',$preco-$desconto);
                $preco = str_replace('.',',',$preco);
                $desconto = str_replace('.',',',$desconto);
                echo "Pagamento à vista no cartão de crédito<br>Preço inicial: R$$preco  <br>Desconto: R$$desconto<br>Preço Final: R$$precoFinal";
            }else if($codigo == 3){
                $preco = str_replace('.',',',$preco);
                echo "Pagamento em duas vezes no cartão <br>Preço Final: R$$preco";
            }else if($codigo == 4){
                $juros = $preco*0.10;
                $precoFinal = str_replace('.',',',$preco+$juros);
                $preco = str_replace('.',',',$preco);
                $juros = str_replace('.',',',$juros);
                echo "Pagamento em três vezes no cartão<br>Preço inicial: R$$preco  <br>Juros: R$$juros<br>Preço Final: R$$precoFinal";
            }else{
                echo "O código informado está incorreto!";
            }
        }
    ?>
</body>
</html>
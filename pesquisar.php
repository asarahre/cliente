<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pesquisar resultado </title>
</head>
<body  style="text-align: center; background-color: #34333433; flex:1;">
    


<?php
    include("conexao.php");

    $pesquisar=$_POST['pesquisar'];

    $resultado="SELECT * FROM cadastro WHERE nome LIKE '%$pesquisar%' LIMIT 5";
    $resultado_professor=mysqli_query($conexao, $resultado);

    while($rows_professor=mysqli_fetch_array($resultado_professor)){
        ?>
<h2> Resultado <h2>
<div style="color: black;
	text-align: center;
	font-weight:400;
	font-size: 16px;" >
     <?php   
        echo "Nome: ".$rows_professor['nome']."<br>";
        echo "CPF: ".$rows_professor['cpf']."<br>";
        echo "Email: ".$rows_professor['email']."<br>";
        echo "Data: ".$rows_professor['data']."<br>";
        echo "Estado Civil: ".$rows_professor['estado']."<br>";
        echo "<br>";
    }
    ?>
</div>
</body>
</html>
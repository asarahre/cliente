<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <title>Professores cadastrados</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
    <?php 
        include("conexao.php");
        
        $sql="SELECT * FROM cadastro";
        $resultado=mysqli_query($conexao, $sql);
// É possivel ulizar a tg do php quebrando o codio, utilizando isso podemos ter um site com estlio e funcionalidades
        if(mysqli_num_rows($resultado)>0){
            echo "<table class='table'>
                  <tr>
                  <th>CPF</th>
                  <th>Nome</th>
                  <th>Email</th>
                  <th>Data  -  Hora</th>
                  <th>Estado Civil</th>
                  </tr>";
            while($row=mysqli_fetch_assoc($resultado)){
                echo "<tr><td>".$row['cpf']."</td>";
                echo "<td>".$row['nome']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['data']."</td>";
                echo "<td>".$row['estado']."</td> </tr>";
                
            }
            echo "</table>";
        }
        else{
            echo "Zero Resultado";
        }
        mysqli_close($conexao);
    ?>
</body>
</html>
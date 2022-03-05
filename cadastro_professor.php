<?php
    include("conexao.php");
    date_default_timezone_set('America/Porto_Velho');
    $cpf=$_POST['cpf'];
    $nome=$_POST['nome'];
    $email=$_POST['email'];
    $data= date('Y-m-d H:i:s');
    $estado=$_POST['estado'];
  
    $sql="INSERT INTO cadastro (cpf, nome, email, data, estado)
        VALUES ('$cpf', '$nome', '$email', '$data', '$estado')";
    if(mysqli_query($conexao, $sql)){
        echo "<h1>Professor cadastrado com sucesso</h1>";
        echo "<a href='cadastro_professor.html'>Cadastrar novo professor?</a><br>";
        echo "<a href='index.html'>Página inicial</a>";
    }
    else{
        echo "Error: ".$sql."<br>".mysqli_error($conexao);
    }
    mysqli_close($conexao);
?>
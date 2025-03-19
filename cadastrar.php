<?php
    include_once('conexao.php');
    
    $nome = $_POST['nome'];
    $idade = $_POST['idade'];
    $sexo = $_POST['sexo'];
    $telefone = $_POST['telefone'];

    $insere = mysqli_query($conexao, "INSERT INTO paciente (nome, idade, sexo, telefone) 
                                      VALUES ('$nome', '$idade', '$sexo', '$telefone')") 
              or die("Erro ao inserir o Paciente");

    header("Location: inicial.html");
?>
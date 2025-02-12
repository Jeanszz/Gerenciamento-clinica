<?php
    include_once('conexao.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $paciente_id = $_POST['paciente_id'];
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];
        $sexo = $_POST['sexo'];
        $telefone = $_POST['telefone'];

        // Atualiza os dados do paciente no banco de dados
        $atualiza = mysqli_query($conexao, "UPDATE paciente 
                                           SET nome = '$nome', idade = '$idade', sexo = '$sexo', telefone = '$telefone'
                                           WHERE id_paciente = '$paciente_id'") 
                     or die("Erro ao atualizar o Paciente");

       
    }
    header("Location: inicial.html");
    
?>
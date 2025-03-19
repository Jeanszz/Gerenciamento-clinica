<?php
include_once('conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Capturando dados do formulário
    $nome_paciente = $_POST['nome_paciente'];
    $nome_medico = $_POST['nome_medico'];
    $data_agendamento = $_POST['data_agendamento'];
    $hora_agendamento = $_POST['hora_agendamento'];
    $status_agendamento = $_POST['status_agendamento'];

    // Buscar ID do paciente pelo nome
    $result_paciente = mysqli_query($conexao, "SELECT id_paciente FROM paciente WHERE nome = '$nome_paciente'");
    $row_paciente = mysqli_fetch_assoc($result_paciente);
    $id_paciente = $row_paciente['id_paciente'];

    // Buscar ID do médico pelo nome
    $result_medico = mysqli_query($conexao, "SELECT id_medico FROM medico WHERE nome = '$nome_medico'");
    $row_medico = mysqli_fetch_assoc($result_medico);
    $id_medico = $row_medico['id_medico'];

    // Inserir dados na tabela de agendamento
    $sql = "INSERT INTO agendar (id_paciente, id_medico, data_agendamento, hora_agendamento, status_agendamento)
            VALUES ('$id_paciente', '$id_medico', '$data_agendamento', '$hora_agendamento', '$status_agendamento')";

    if (mysqli_query($conexao, $sql)) {
        echo "Agendamento realizado com sucesso!";
    } else {
        echo "Erro ao agendar: " . mysqli_error($conexao);
    }

    // Fechar a conexão
    mysqli_close($conexao);
} else {
    // Se alguém acessar este arquivo diretamente sem um envio de formulário, redirecione para a página do formulário
    header("Location: agendar.html");
    exit();
}
?>
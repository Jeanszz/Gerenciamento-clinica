<!DOCTYPE html>
<html lang="pt-br">

 <head>
	<!-- referenciando linguagem -->
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="content-language" content="pt-br" />
    <meta name="robots" content="index, follow"/>
    <!-- referenciando estlização -->
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    

	<title>Visualizar</title>

 </head>

<body>
   <!-- Header de cabeçalho com icone -->
<header class="main_header container">        
    <div class="content">
    
        <div class="main_header_logo">
            <a href="img/logo.png" target="_blank"><img src="img/visualizar.png" alt="logo.png" title="imagem"/></a>
        </div>
    
    </div>
</header>

<main class="main_content container">
        
    <section class="section_visualizar">
        
        <div class="content">
            
            <h1 class="section_title"> Menu Visualizar</h1>
            
            <div class="box-artigo">
                
                <nav class="menu">
                  
                    <ul>
                  
                    <li><a href="inicial.html"  class="ativo">Home</a></li>
                        <li><a href="cadastrar.html">Cadastrar</a></li>
                        <li><a href="gerenciar.php" >Editar</a></li>
                        <li><a href="agendar.html" >Agendar</a></li>
                        <li><a href="visualizar.php" >Visualizar</a></li>
                        <li><a href="index.html" >Sair</a></li>
                  
                    </ul>

                </nav>

            </div><!--Box Artigo-->


        <div class="clear"></div>
       
        <?php
include_once('conexao.php');

$select = mysqli_query($conexao, "SELECT paciente.nome as paciente, medico.nome as medico, medico.especialidade as especialidade, agendar.data_agendamento as data, agendar.hora_agendamento as hora, agendar.status_agendamento as status
FROM agendar
INNER JOIN paciente ON (agendar.id_paciente = paciente.id_paciente)
INNER JOIN medico ON (agendar.id_medico = medico.id_medico);");

while ($resultado = mysqli_fetch_array($select)) {
?>
<style>
    /* estlilizando tabela de consulta */
    .tabela {
        border-collapse: collapse;
        width: 100%;
        border: 2px solid #ddd;
    }

    .tabela td {
        border: 1px solid #ddd;
        padding: 4px;
        text-align: left;
    }

    .tabela h1 {
        font-size: 20px;
        color: #333;
    }

    .tabela h2 {
        font-size: 16px;
        color: #777;
    }
</style>
    <div class="consulta">
        <table class="tabela"> 
             
            
        <tr>
        <td><h1>Nome do Paciente:</h1></td>
        <td><h2><?php echo $resultado['paciente']; ?></h2></td>
        </tr>
        <tr>
        <td><h1>Nome do médico:</h1></td>
        <td><h2><?php echo $resultado['medico']; ?></h2></td>
        </tr>
        <tr>
        <td><h1>Especialidade do médico:</h1></td>
        <td><h2><?php echo $resultado['especialidade']; ?></h2></td>
        </tr>
        <tr>
        <td><h1>Data da consulta:</h1></td>
        <td><h2><?php echo $resultado['data']; ?></h2></td>
        </tr>
        <tr>
        <td><h1>Hora da consulta:</h1></td>
        <td><h2><?php echo $resultado['hora']; ?></h2></td>
        </tr>
        <tr>
        <td><h1>Status da consulta:</h1></td>
        <td><h2><?php echo $resultado['status']; ?></h2></td>
        </tr>
        </table>
    </div>
    <hr>

<?php
}
?>
</form>
    </div>
    </section><!--FECHA BOX HTML-->


</main>

    </div>
</body>
</html>
<?php
    include_once('conexao.php');

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $nome = $_POST['nome_paciente'];

        // Consulta para buscar o paciente pelo nome
        $consulta = mysqli_query($conexao, "SELECT * FROM paciente WHERE nome LIKE '%$nome%'");

        if ($consulta) {
            // Exibir resultados e formulário de edição
            while ($paciente = mysqli_fetch_assoc($consulta)) {
?>
<html lang="pt-br">

 <head>
	
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
    <![endif]-->       

	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/fonts-icones.css">

	<title>Mostrar Paciente</title>

 </head>

<body>
    
<header class="main_header container">        
    <div class="content">
    
        <div class="main_header_logo">
            <a href="" target="_blank"><img src="" alt="logo.png" title="Loop Nerd"/></a>
        </div>
    
    </div>
</header>

<main class="main_content container">
        
    <section class="section-seu-codigo container">
        
        <div class="content">
            
            <h1 class="section_title"><i class="icon icon-code"></i> Clinica Medica</h1>
            
            <div class="box-artigo">
                
                <nav class="menu">
                  
                    <ul>
                  
                        
                       
                    <li><a href="index.html"  class="ativo">Home</a></li>
                        <li><a href="cadastrar.html">Cadastrar</a></li>
                        <li><a href="gerenciar.php" >Editar</a></li>
                        <li><a href="agendar.html" >Agendar</a></li>
                        <li><a href="visualizar.html" >Visualizar</a></li>
                        <li><a href="sair.html" >Sair</a></li>
                    </ul>

                </nav>

            </div><!--Box Artigo-->


        <div class="clear"></div>
<form action="editar_paciente.php" method="post">
                        <label for="nome">Nome do Paciente:</label>
                        <input type="text" name="nome" value="<?php echo $paciente['nome']; ?>" required>

                        <label for="idade">Idade:</label>
                        <input type="text" name="idade" value="<?php echo $paciente['idade']; ?>">

                        <label for="sexo">Sexo:</label>
                        <input type="text" name="sexo" value="<?php echo $paciente['sexo']; ?>">

                        <label for="telefone">Telefone:</label>
                        <input type="text" name="telefone" value="<?php echo $paciente['telefone']; ?>">

                        <!-- Adicione outros campos conforme necessário -->

                        <input type="hidden" name="paciente_id" value="<?php echo $paciente['id_paciente']; ?>">
                        <button type="submit" style="width: 100%;
                                               background-color: #614caf;
                                               color: white;
                                               padding: 10px 15px;
                                               border: none;
                                               border-radius: 5px;">
                    Salvar Alteraçoes
                </button>
                    </form>        
</div>
    </section><!--FECHA BOX HTML-->


</main>

<footer class="main_footer container">
    <div class="main_footer_copy">

       
    
    </div>
</footer>

<script src="js/jquery.js"></script>
<script src="js/script.js"></script>
</body>
</html>
<?php
            }
        } else {
            echo "Erro na consulta: " . mysqli_error($conexao);
        }
    }
?>
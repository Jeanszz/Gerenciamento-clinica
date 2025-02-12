

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
    <link rel="stylesheet" type="text/css" href="css/fonts-icones.css">
    

	<title>Gerenciar</title>

 </head>

<body>
   
<header class="main_header container">        
    <div class="content">
    
        <div class="main_header_logo">
            <a href="img/logo.png" target="_blank"><img src="img/logo.png" alt="logo.png" title="imagem"/></a>
        </div>
    
    </div>
</header>

<main class="main_content container">
        
    <section class="section-seu-codigo container">
        
        <div class="content">
            
            <h1 class="section_title"><i class="icon icon-code"></i> Menu Gerenciar</h1>
            
            <div class="box-artigo">
                
                <nav class="menu">
                  
                    <ul>
                  
                    <li><a href="inicial.html"  class="ativo">Home</a></li>
                        <li><a href="cadastrar.html">Cadastrar</a></li>
                        <li><a href="gerenciar.php" >Editar</a></li>
                        <li><a href="agendar.html" >Agendar</a></li>
                        <li><a href="visualizar.html" >Visualizar</a></li>
                        <li><a href="sair.html" >Sair</a></li>
                  
                    </ul>

                </nav>

            </div><!--Box Artigo-->


        <div class="clear"></div>
       
        <form action="mostrar_paciente.php" method="post">
    <label for="nome_paciente">Digite o nome do paciente</label>
    <?php
    include_once('conexao.php');

    $select = mysqli_query($conexao, "SELECT id_paciente as id, nome as nome FROM paciente;");

    echo "<input list='nomes_pacientes' name='nome_paciente' id='nome_paciente' required>";
    echo "<datalist id='nomes_pacientes'>";

    while ($resultado = mysqli_fetch_array($select)) {
        echo "<option value='" . $resultado['nome'] . "'>";
    }

    echo "</datalist>";
    ?>
    <button type="submit" style="width: 100%;
                                   background-color: #614caf;
                                   color: white;
                                   padding: 10px 15px;
                                   border: none;
                                   border-radius: 5px;">
        Buscar
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


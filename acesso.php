<!DOCTYPE html>

<?php
// REVISADO - OK

// verifica os parâmetros de configuração de conexão com o Servidor e BD

include_once("conexao.php");
?>

<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <title>Login</title>
        <script language="javascript">
            function sucesso(){
                               setTimeout("window.location='inicial.html'", 1500);
                              }
            function failed(){
                              setTimeout("window.location='aviso.html'", 2000);
                             }
        </script>
    </head>
    <body bgcolor = 'white'>
        <?php

            // variáveis que recebem os dados do formulário

            $login = $_POST['login'];
            $senha = $_POST['senha'];

            // query que realiza a consulta no BD para verificar usuário e senha

            $consulta = mysqli_query($conexao,"SELECT Login login, Senha senha 
                                               FROM usuario WHERE Login = '$login' AND Senha = '$senha'")
                                               or die (mysqli_error($conexao));

            $linhas = mysqli_num_rows($consulta);


            // verifica se foi encontrado algum resultado (registro)
            
            if($linhas == 0){
                             echo"<br><br><br><br><br><br><p align = 'center'>Por favor aguarde&hellip;</p>";
                             echo"<script language='javascript'>failed()</script>";
                            } 
              else {
	            session_start();
                    $_SESSION["login"]=$_POST["login"];
                    $_SESSION["senha"]=$_POST["senha"];
                    echo" <br><br><br><br><br><br> <p align = 'center'>Por favor aguarde&hellip;</p>";
                    echo"<script language='javascript'>sucesso()</script>";
                   }
        ?>
    </body> 
</html>
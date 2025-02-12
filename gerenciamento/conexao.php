<?php
   
   // declarando variaveis
   
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "clinica";
   
   // criar conexao com o servidor
   
   $conexao = new mysqli($servername, $username, $password, $dbname);

   if($conexao->connect_error){
             die("Falha na conexão com o BD:" . $conexao->connect_error);
   }
  
?>
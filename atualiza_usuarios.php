<?php
  include ("conexao.php");//dar visão de outro arquivo php

   $id = $_POST["id"];
   $nome = $_POST["nome"];
   $email = $_POST["email"];
   $login = $_POST["login"];
   $senha = $_POST["senha"];
   

   $sql = "UPDATE USUARIO SET 
				NOME='$nome' , 
				EMAIL='$email', 
				LOGIN='$login', 
				SENHA='$senha' 
			WHERE ID = $id";   
  
   
   if  (mysqli_query ($conexao_bd, $sql)){ //RETORNA VERDEIRO SE CONSEGUIU CONECTAR E EXECUTAR SQL NO BANCO
        header ("location: lista_usuarios.php");
   }
   else{
       echo "Erro: ".$sql;
   }
  

  
?>
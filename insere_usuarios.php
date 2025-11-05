<?php
  include ("conexao.php");//dar visão de outro arquivo php

   $nome = $_POST["nome"];
   $email = $_POST["email"];
   $login = $_POST["login"];
   $senha = $_POST["senha"];
   

   $sql = "INSERT INTO USUARIO (NOME, EMAIL, LOGIN, SENHA) 
           VALUES ('$nome', '$email', '$login', ' $senha')";  
  
   
   if  (mysqli_query ($conexao_bd, $sql)){ //RETORNA VERDEIRO SE CONSEGUIU CONECTAR E EXECUTAR SQL NO BANCO
       header ("location: lista_usuarios.php");
   }
   else{
    echo "Erro: ".$sql;
   }
  

  
?>
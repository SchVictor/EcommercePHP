<?php
   include ("conexao.php");//dar visão de outro arquivo php
 
   $id = $_GET["id"];

   $sql = "DELETE FROM USUARIO WHERE ID =  $id ";   
   
   if  (mysqli_query ($conexao_bd, $sql)){ //RETORNA VERDEIRO SE CONSEGUIU CONECTAR E EXECUTAR SQL NO BANCO
      header ("location: lista_usuarios.php");
    }
    else{
      echo "Erro:: ".$sql;
     }
   
?>
   
<?php
   include ("conexao.php");//dar visão de outro arquivo php
 
   $id = $_GET["id"];
   
   $sql = "SELECT * FROM USUARIO WHERE ID = '$id'";  
   //pesquisa em banco query (caminho da conexao e o comando SQL)
   
   $result= mysqli_query ($conexao_bd, $sql); //sempre existe algum retorno se o sql encontrou algum resultado
   if (mysqli_num_rows($result) > 0){ 
      $registro= mysqli_fetch_assoc($result); //guarda o primeiro (possivelmente unico)    registro 
    }  
    else{
      header ("location: lista_usuarios.php");
    }
  ?>

<html>
 <head>
    <title>Cadastro de usuários</title>
 </head>
 <body>

   <form action="atualiza_usuarios.php" method="POST">
       <input type="hidden"  name= "id" value= "<?=$registro["ID"]?>"/><br>
        Nome<br> 
        <input type="text" name= "nome" value= "<?=$registro["NOME"]?>"/><br>
        Email<br> 
        <input type="text" name= "email" value= "<?=$registro["EMAIL"]?>"/><br>
        Login<br> 
        <input type="text" name= "login" value= "<?=$registro["LOGIN"]?>"/><br>
        Senha<br>
        <input type="password" name= "senha" value= "<?=$registro["SENHA"]?>"/><br>
        <input type="submit"  value= "Alterar"/><br>
   </form>    

 </body>




</html>
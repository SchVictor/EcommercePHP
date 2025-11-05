<html>
 <head>
    <title>ECommerce</title>
 </head>
 <body>
     Lista de usuários

     <table border=1>      
        <tr>
              <th>ID</th>
              <th>NOME</th>
              <th>EMAIL</th>
              <th>LOGIN</th>
              
        </tr>
        <?php 
           include ("conexao.php");//trazemos novamente o arquivo de conexão com o banco de dados, para que possamos acessar as informações do banco de dados, nesse caso, a tabela USUÁRIO

           session_start(); //obrigatorio para acessar variaveis de sessão

           $sql = "SELECT * FROM USUARIO";     //criamos uma variável $sql que recebe uma string com o comando SQL que queremos executar, nesse caso, um select que busca todos os dados da tabela USUÁRIO.
           //aqui, o comando SQL é armazenado em uma variável, que depois será passada como parâmetro para a função mysqli_query, que executa o comando SQL no banco de dados.            
           $result = mysqli_query ($conexao_bd, $sql); //usamos a função mysqli_query para executar a consulta no banco de dados, passando como parâmetros a conexão com o banco de dados ($conexao_bd) e a consulta SQL ($sql). O resultado da consulta é armazenado na variável $result.
           if (mysqli_num_rows($result)>0){//se o número de linhas retornadas for maior que zero, ou seja, se existem usuários cadastrados no banco de dados, ele entra no bloco de código para exibir os dados.

             while ($registro = mysqli_fetch_assoc($result)){//usamos a função mysqli_fetch_assoc para transformar o resultado da consulta em um array, onde cada coluna da tabela se torna uma chave do array.
        ?>
            <tr>
                <th><?=$registro["ID"]?></th>
                <th><?=$registro["NOME"]?></th>
                <th><?=$registro["EMAIL"]?></th>
                <th><?=$registro["LOGIN"]?></th> 
                <th><a href="excluir_usuarios.php?id=<?=$registro["ID"]?>">Excluir</a></th>  
                <th><a href="atualiza_usuarios_form.php?id=<?=$registro["ID"]?>">Editar</a></th>       
             </tr>
                      
       <?php 
             }
  //aqui, percorremos cada registro retornado pelo banco de dados e exibimos os dados em uma linha da tabela HTML.        
          }
        ?>    
     </table>
     <BR>
     <a href="insere_usuarios_form.php">Novo usuário</a>


 </body>

</html>
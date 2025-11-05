<html>
 <head>
    <title>Cadastro de produtos</title>
 </head>
 <body>
  

   <form action="../controller/Produto_Controller.php" method="POST">
        Codigo<br> 
        <input type="text" name= "codigo" value= ""/><br>
        Descrição<br> 
        <input type="text" name= "descricao" value= ""/><br>
        Unidade de Medida<br> 
        <input type="text" name= "un_medida" value= ""/><br>
        Valor<br> 
        <input type="text" name= "valor" value= ""/><br>
        Estoque<br> 
        <input type="text" name= "estoque" value= ""/><br>
        Ficha Tecnica<br> 
        <input type="text" name= "ficha_tecnica" value= ""/><br>       
        
        <input type="submit"  value= "Cadastrar Produto"/><br>
   </form>    

   
  <!-- o formulário envia os dados pelo método POST ao Produto_controler para o mesmo manipular -->

 </body>




</html>
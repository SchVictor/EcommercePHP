<html>
 <head>
    <title>Edição de produtos</title>
 </head>
 <body>
  <?php
      include '../controller/Produto_Controller.php';// aqui trazemos o arquivo controller que contém a lógica de negócio para acessar os dados dos produtos. 
      $id= $_GET["id"]; //recebemos o id do produto que queremos editar através do método GET, que é passado na URL quando clicamos no link de edição de um produto.
      $produto_controller = new Produto_Controller(); //instanciamos a classe Produto_Controller, que é responsável por gerenciar as operações relacionadas aos produtos, como buscar um produto específico pelo ID.
      $produto= $produto_controller->getProduto($id); //chamamos o método getProduto() da classe Produto_Controller, passando o ID do produto como parâmetro. Esse método retorna um objeto Produto que contém as informações do produto que queremos editar.
  ?>

   <form action="../controller/Produto_Controller.php" method="POST"> <!--  -->
        <input type="hidden" name= "id" value= "<?=$produto->getId()?>"/><br>
        Codigo<br> 
        <input type="text" name= "codigo" value= "<?=$produto->getCodigo()?>"/><br>
        Descrição<br> 
        <input type="text" name= "descricao" value= "<?=$produto->getDescricao()?>"/><br>
        Unidade de Medida<br> 
        <input type="text" name= "un_medida" value= "<?=$produto->getUn_medida()?>"/><br>
        Valor<br> 
        <input type="text" name= "valor" value= "<?=$produto->getValor()?>"/><br>
        Estoque<br> 
        <input type="text" name= "estoque" value= "<?=$produto->getEstoque()?>"/><br>
        Ficha Tecnica<br> 
        <input type="text" name= "ficha_tecnica" value= "<?=$produto->getFicha_tecnica()?>"/><br>              
        <input type="submit"  value= "Salvar"/><br> <!-- os echos com os gets trazem os valores armazenados e translocados para os métodos de acesso do arquivo Produto_Controler.php. detalhe no campo id, que tem o type hidden, este fica invisível ao usuário, porém é essencial para aplicar as modificações  -->
   </form>    

   
  

 </body>




</html>
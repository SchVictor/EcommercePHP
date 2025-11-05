<html>
 <head>
    <title>ECommerce</title>
 </head>
 <body>
     Lista de produtos
     |<table border=1>      
        <tr>              
              <th>CODIGO</th>
              <th>DESCRIÇÃO</th>
              <th>UN MEDIDA</th>
              <th>VALOR</th>              
        </tr>     

        <!-- formação da tabela de exibição -->

     <?php 
           include '../controller/Produto_Controller.php'; //aqui trazemos dessa vez, um arquivo diferente, o arquivo controller que contém a lógica de negócio para acessar os dados dos produtos.   
           session_start(); //obrigatorio para acessar variaveis de sessão      
           $produto_controller = new Produto_Controller(); //
             //instanciamos a classe Produto_Controller, que é responsável por gerenciar as operações relacionadas aos produtos, como buscar todos os produtos cadastrados no banco de dados.
           $listaProdutos = $produto_controller->getProdutoAll();//chamamos o método getProdutoAll() da classe Produto_Controller, que retorna uma lista de objetos Produto, representando todos os produtos cadastrados no banco de dados.       


          if (count ($listaProdutos)> 0){//
                  //verificamos se a lista de produtos retornada contém algum produto, ou seja, se o número de produtos é maior que zero.
                  
                  //se houver produtos, entramos no bloco de código para exibir os dados de cada produto em uma linha da tabela HTML.
            foreach ($listaProdutos as $produto){  //
                  //usamos um loop foreach para percorrer cada objeto Produto na lista de produtos. Cada objeto Produto contém informações sobre um produto específico, como código, descrição, unidade de medida e valor.
             
      ?>
            <tr>
                <th><?=$produto->getCodigo()?></th>
                <th><?=$produto->getDescricao()?></th>
                <th><?=$produto->getUn_medida()?></th>
                <th><?=$produto->getValor()//utiliza metodos gets criados no produto_controller?></th>
                <th><a href="../controller/Produto_Controller.php?deleteid=<?=$produto->getId()?>">Excluir</a></th>  
                <th><a href="../view/ProdutoEditView.php?id=<?=$produto->getId()?>">Editar</a></th>  
                
                            
             </tr>
             
         
       <?php 
             }

          }
        ?>    
     </table>
     <BR>
     <a href="ProdutoCadastroView.php">Novo produto</a>


 </body>

</html>
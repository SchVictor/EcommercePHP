<?php  
  require '../model/dao/Produto_DAO.php'; // Requisita o arquivo Produto_DAO.php, que contém a classe de Acesso a Dados para Produtos.
  require '../model/entities/Produto.php'; // Requisita o arquivo Produto.php, que contém a classe de Entidade Produto.



/******************************************************************************* */
   // Declaração da classe Produto_Controller.
   // Esta classe gerencia o fluxo de dados para operações relacionadas a produtos.
   class Produto_Controller{
      private Produto_DAO $produto_DAO;   
      private array  $listaProdutos; 








    // Método construtor da classe.
    // É executado automaticamente quando um novo objeto Produto_Controller é instanciado.
      public function __construct() {        
         $this->produto_DAO = new Produto_DAO();
       // Cria uma nova instância da classe Produto_DAO e a atribui à propriedade $produto_DAO.
        // Isso prepara o controller para usar os métodos de acesso a dados de Produto_DAO.
      }
 

      // Método público para obter um único produto pelo seu ID.
      // Recebe um $id como parâmetro.
     public function getProduto($id) {  
       $produto = $this->produto_DAO->getProduto($id);   
       return $produto;
       // Chama o método getProduto() da instância de Produto_DAO, passando o $id.
       // O DAO irá buscar o produto no banco de dados.
     }

      // Método público para obter todos os produtos.
     public function getProdutoAll() {  
      $this->listaProdutos = $this->produto_DAO->getAllProdutos();     
      return $this->listaProdutos;
      // Chama o método getAllProdutos() da instância de Produto_DAO.
      // O DAO irá buscar todos os produtos no banco de dados.
    }
      // Método público para inserir um novo produto.
      // Recebe um array $dados contendo as informações do produto
      public function insertProduto($dados) {             
         $produto = new Produto(); // Cria uma nova instância da entidade Produto
         $produto->setCodigo($dados["codigo"]);// Define os atributos do objeto Produto usando os valores do array $dados
         $produto->setDescricao($dados["descricao"]);
         $produto->setUn_medida($dados["un_medida"]);
         $produto->setValor($dados["valor"]);
         $produto->setEstoque($dados["estoque"]);
         $produto->setFicha_tecnica ($dados["ficha_tecnica"]);
         $this->produto_DAO->insertProduto($produto);  // Chama o método insertProduto() da instância de Produto_DAO, passando o objeto Produto preenchido. O DAO irá persistir o novo produto no banco de dados.
       
      } 

      // Método público para atualizar um produto existente.Recebe um array $dados contendo as informações atualizadas do produto
      function updateProduto($dados) {             
         $produto = new Produto(); // Cria uma nova instância da entidade Produto.
         $produto->setId($dados["id"]);
         $produto->setCodigo($dados["codigo"]);
         $produto->setDescricao($dados["descricao"]);
         $produto->setUn_medida($dados["un_medida"]);
         $produto->setValor($dados["valor"]);
         $produto->setEstoque($dados["estoque"]);
         $produto->setFicha_tecnica ($dados["ficha_tecnica"]);
         $this->produto_DAO->updateProduto($produto); // Chama o método updateProduto() da instância de Produto_DAO, passando o objeto Produto preenchido.         
      }

      public function deleteProduto($id) {  
         $this->produto_DAO->deleteProduto($id);  // apenas chama o método deleteProduto() da instância de Produto_DAO, passando o $id do produto a ser excluído
      }



  }
  /************************************************************************************************************** */
  
  $produto_controller = new Produto_Controller;  //aqui instanciamos a classe Produto_Controller, que é responsável por gerenciar as operações relacionadas aos produtos, como buscar um produto específico pelo ID, inserir, atualizar e deletar produtos, é uma ponte entre a camada de apresentação (view) e a camada de acesso a dados (DAO).


  //Teste para verificar qual é o metodo que chamou esse arquivo
  if($_SERVER['REQUEST_METHOD'] == 'POST') { // aqui é onde vai decorrer a chamada se houver um *request* POST     
   if  (isset($_POST['id'])){
      $produto_controller->updateProduto($_POST); //se for post, automaticamente é uma atualização de produto, pois o id já foi definido no formulário de edição do produto, então chamamos o método updateProduto() da classe Produto_Controller, passando os dados do produto que foram enviados pelo formulário.
   }
   else{
      $produto_controller->insertProduto($_POST);// se não for post, então é uma inserção de produto, pois o id não foi definido no formulário de edição do produto, então chamamos o método insertProduto() da classe Produto_Controller, passando os dados do produto que foram enviados pelo formulário.
   }
   header ("location: ../view/ProdutoView.php");

 }

 if ($_SERVER['REQUEST_METHOD'] == 'GET'){ //se for GET, então é uma requisição para buscar um produto específico ou listar todos os produtos
       if  (isset($_GET['id'])){ //se existe um parâmetro 'id' na URL, significa que estamos buscando um produto específico
         $id = $_GET['id'];
         $produto_controller->getProduto($id);
       }
       else if  (isset($_GET['deleteid'])){ //se existe um parâmetro 'deleteid' na URL, significa que estamos deletando um produto específico
         $id = $_GET['deleteid'];
         $produto_controller->deleteProduto($id);
         header ("location: ../view/ProdutoView.php"); //leva de volta para a lista de produtos após a exclusão
       }
       else{
        $produto_controller->getProdutoAll();   // se não existe nenhum parâmetro na URL, significa que estamos listando todos os produtos
       }
 }
?>
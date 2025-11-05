<?php
  // classe que representa a entidade Produto, representa o banco de dados, pode-se criar o mesmo para cliente.
  class Produto{
     private $id;
     private $codigo;
     private $descricao;
     private $un_medida;
     private $valor;
     private $estoque;
     private $ficha_tecnica;
    
	//declaração de método construtor (opcional)
     public function __construct() {        
         $this->valor = 0;
       
      }
    // Declaração dos métodos de acesso (getters e setters) para cada atributo da classe Produto.
    public function getId() {
      return $this->id;
    }

    public function getCodigo() {
        return $this->codigo;
    }

    public function getDescricao() {
        return $this->descricao;
    }

    public function getUn_medida() {
        return $this->un_medida;
    }

    public function getValor() {
        return $this->valor;
    }

    public function getEstoque() {
        return $this->estoque;
    }

    public function getFicha_tecnica() {
        return $this->ficha_tecnica;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setCodigo($codigo) {
        $this->codigo = $codigo;
    }

    public function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    public function setUn_medida($un_medida) {
        $this->un_medida = $un_medida;
    }

    public function setValor($valor) {
        $this->valor = $valor;
    }

    public function setEstoque($estoque) {
        $this->estoque = $estoque;
    }

    public function setFicha_tecnica($ficha_tecnica) {
        $this->ficha_tecnica = $ficha_tecnica;
    }

   }

?>
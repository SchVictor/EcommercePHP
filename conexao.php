<?php
	$servidor_bd = "localhost:3306"; //ou 127.0.0.1:3306
	$usuario_bd = "root"; 
	$senha_bd = "root";
	$nome_bd = "banco_vendas";
	
	//criação da conexão
	$conexao_bd = new mysqli($servidor_bd, 
							 $usuario_bd,
							 $senha_bd,
							 $nome_bd ) 
				  or die ("Probrema na conexão");
				  //mysqli: MySQL Improved Extension, classe extensão do PHP para acessar o MySQL
	//aqui é onde é feito a ligação do programa com o banco de dados, criamos váriaveis locais para armazenar valores que precisamos passar como parâmetro ao objeto mysqli. 
	
?>
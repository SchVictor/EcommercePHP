<?php
	include ("conexao.php"); //acesso ao banco de dados
	session_start(); //inicicio de sessão

	$login = $_POST["usuario"]; //captura dos dados do formulário
	$senha = $_POST["senha"];
	
	$sql = "SELECT NOME FROM USUARIO 
			WHERE LOGIN = '$login' AND SENHA = '$senha'"; // realiza a verificação de usuário cadastrado, por meio de uma consulta (select) no banco de dados referenciado.
	$result = mysqli_query($conexao_bd, $sql); //Realiza isso por meio de atribuição de uma string com os comandos SQL, essa string é adicionada como parâmetro a função "mysli_query" que também carrega o parâmetro $conexão_bd para referenciar a conexão feita por meio de instância de objeto no arquivo conexão.php.
	if (mysqli_num_rows($result) > 0){ //se retorno é maior que 0
		$_SESSION['logado'] = true;
		header ("location: index.php");
	}
	else{
		unset($_SESSION['logado']);//excluir variavel de sessão
		header ("location: login.html");
	}
	//Depois, verifica se as linhas do banco de dados são maiores que zero, por meio da propriedade "mysli_num_rows" com parâmetro $result que carrega a conexão com o banco de dados ($conexão_bd)
?>
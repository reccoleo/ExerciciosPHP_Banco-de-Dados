
	/*
	3- Faça uma conexao com o banco de dados e insira dados no banco de dados atraves de um form HTML.

	Exercicio feito por Leonardo Pereira Recco
	*/

<?php

	//Aqui configuramos a data e a hora do Brasil
	date_default_timezone_set('America/Sao_Paulo');

	$pdo = new PDO('mysql:host=localhost;dbname=phpbd','root','');

	echo "Conexao estabelecida com sucesso! <br>";

	//Agora vamos pegar os dados do banco de dados
	if(isset($_POST['acao'])){
		$nome = $_POST['nome'];
		$sobrenome=$_POST['sobrenome'];
		$registro=date('Y-m-d H:i:s'); //Aqui vai receber a hora e a data de agora

	//Aqui nesses ? serao substituidos pelas variaveis no $sql->execute(variaveis aqui dentro);
	$sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,?,?,?)");

	//Com isso estamos executando o codigo php acima no banco de dados e de forma totalmente segura
	$sql->execute(array($nome,$sobrenome,$registro));

	echo "Dados inseridos com sucesso! <br>";
	}

?>

<!DOCTYPE>
<html>
<head>
	<title>Inserir dados no banco de dados</title>
</head>
<body>
	<form method="post">
		<input type="text" name="nome" required/>
		<input type="text" name="sobrenome" required/>
		<input type="submit" name="acao" value="Enviar" />
	</form>
</body>
</html>
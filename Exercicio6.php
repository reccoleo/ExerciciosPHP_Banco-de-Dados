
	/*
	6- Faça uma conexao com o banco de dados e delete os dados do banco de dados com segurança.

	Exercicio feito por Leonardo Pereira Recco
	*/

<?php

	/*Delete com PDO Protegido contra ataques - vamos apagar um dado com PDO*/

	//Para ter mais protecao aos dados, coloque ? no PDO->PREPARE e passe o valor para o $SQL->EXECUTE($VARIAVEL);

	//Abre a conexao com o banco de dados
	$pdo = new PDO('mysql:host=localhost;dbname=phpbd','root','');

	echo "Conexao estabelecida com sucesso! <br>";

	$id = 7;

	//Colocando um ? no valor para protecao dos dados
	$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");

	//Passando o valor protegido e deve estar dentro de um array
	if($sql->execute(array($id))){
		echo "Os dados foram apagados com sucesso!";
	}else{
		echo "Ops! Aconteceu um erro!";
	}

?>
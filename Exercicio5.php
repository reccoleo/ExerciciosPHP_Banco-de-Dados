
	/*
	5- Faça uma conexao com o banco de dados e delete os dados do banco de dados.

	Exercicio feito por Leonardo Pereira Recco
	*/

<?php

	/*Delete com PDO - vamos apagar um dado com PDO*/

	//Abre a conexao com o banco de dados
	$pdo = new PDO('mysql:host=localhost;dbname=phpbd','root','');

	echo "Conexao estabelecida com sucesso! <br>";

	$sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=5");

	if($sql->execute()){
		echo "Os dados foram apagados com sucesso!";
	}else{
		echo "Ops! Aconteceu um erro!";
	}

?>
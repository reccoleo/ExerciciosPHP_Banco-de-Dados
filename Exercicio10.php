
	/*
	10- Faça um SELECT e use o GROUP BY e retorne o resultado com FOREACH.

	Exercicio feito por Leonardo Pereira Recco
	*/

<?php

	$pdo = new PDO('mysql:host=localhost; dbname=projeto1','root','');
	$sql = $pdo->prepare("SELECT * FROM clientes GROUP BY cargo");
	//O $sql->execute vem sempre antes do $sql->fetchAll
	$sql->execute();
	$clientes = $sql->fetchAll();

	//Acessamos os valores do banco de dados com o nome do campo como em uma posicao de um vetor
	foreach($clientes as $key => $valor){
		echo "O Cliente ".$valor['nome']." ocupa o cargo numero ".$valor['cargo'];
		echo "<br>";
	}

?>
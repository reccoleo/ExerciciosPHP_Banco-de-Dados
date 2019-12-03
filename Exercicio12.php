
	/*
	12- Faça um SELECT e use o GROUP BY e use tambem o ORDER BY no cargo e retorne o resultado com FOREACH.

	Exercicio feito por Leonardo Pereira Recco
	*/
<?php

	/*Group, Order e Limit*/

	//ORDER BY - Ele vai ordenar conforme o campo que colocamos nele, nome, cargo, id

	$pdo = new PDO('mysql:host=localhost; dbname=projeto1','root','');
	$sql = $pdo->prepare("SELECT * FROM clientes GROUP BY cargo ORDER BY cargo");
	//O $sql->execute vem sempre antes do $sql->fetchAll
	$sql->execute();
	$clientes = $sql->fetchAll();

	foreach($clientes as $key => $valor){
		echo "O Cliente ".$valor['nome']." ocupa o cargo numero ".$valor['cargo'];
		echo "<br>";
	}

?>

	/*
	11- Faça um SELECT e use o GROUP BY e use tambem o LIMIT igual a 3 e retorne o resultado com FOREACH.

	Exercicio feito por Leonardo Pereira Recco
	*/

<?php

	//LIMIT - Ele vai limitar as saidas a 3 como definido no LIMIT

	$pdo = new PDO('mysql:host=localhost; dbname=projeto1','root','');
	$sql = $pdo->prepare("SELECT * FROM clientes LIMIT 3");
	//O $sql->execute vem sempre antes do $sql->fetchAll
	$sql->execute();
	$clientes = $sql->fetchAll();

	foreach($clientes as $key => $valor){
		echo "O Cliente ".$valor['nome']." ocupa o cargo numero ".$valor['cargo'];
		echo "<br>";
	}

?>
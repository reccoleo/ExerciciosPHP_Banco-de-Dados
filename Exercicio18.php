
	/*
	18- Faça uma programa que mostre as tabelas do banco de dados.

	Exercicio feito por Leonardo Pereira Recco
	*/
<?php

	$pdo = new PDO('mysql:host=localhost;dbname=projeto3','root','');

	//Esse comando vai returnar as as tabelas que existem no nosso banco de dados.
	$tabela = $pdo->query("SHOW TABLES");

	$tables = $tables->fetchAll();

	echo "<pre>";
	print_r($tables);
	echo "</pre>";

?>

	/*
	2- Faça uma conexao com o banco de dados e insira dados no banco de dados.

	Exercicio feito por Leonardo Pereira Recco
	*/

<?php

$pdo = new PDO('mysql:host=localhost;dbname=phpbd','root','');

echo "Conexao estabelecida com sucesso!";

$sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null,'Leonardo','Rico','2019-09-22 11:18:04')");

$sql->execute();

echo "Dados inseridos com sucesso! <br>";

?>

	/*
	13- Faça uma pesquisa no banco de dados utilizando o LIKE.

	Exercicio feito por Leonardo Pereira Recco
	*/
<?php

	$pdo = new PDO('mysql:host=localhost; dbname=projeto2','root','');

	$sql = $pdo->prepare("SELECT * FROM clientes WHERE sobrenome LIKE '%pir%' ");

	$sql->execute();

	$clientes = $sql->fetchAll();

	echo "Estou procurando pelo sobrenome que contenha 'pir'.<br><br>";

	foreach($clientes as $key => $val){
		echo $val['nome']." = ".$val['sobrenome']."<br>";
	}

?>
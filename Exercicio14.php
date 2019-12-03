
	/*
	14- Faça uma pesquisa no banco de dados utilizando o IN.

	Exercicio feito por Leonardo Pereira Recco
	*/
<?php

	$pdo = new PDO('mysql:host=localhost; dbname=projeto2','root','');

	//Aqui usamos o IN para dizer que queremos os clientes com id igual a 1,2 e 3
	$sql = $pdo->prepare("SELECT * FROM clientes WHERE id IN (1,2,3) ");

	$sql->execute();

	$clientes = $sql->fetchAll();

	echo "Estou procurando pelo id com 1 2 3 usando o IN.<br><br>";


	foreach($clientes as $key => $val){
		echo $val['id']." = ".$val['nome']."<br>";
	}


?>
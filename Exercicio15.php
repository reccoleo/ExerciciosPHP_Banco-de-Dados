
	/*
	15- Faça uma pesquisa no banco de dados utilizando o BETWEEN.

	Exercicio feito por Leonardo Pereira Recco
	*/
<?php

	$pdo = new PDO('mysql:host=localhost; dbname=projeto2','root','');

	//Aqui usamos o BETWEEN para dizer que queremos os clientes com id igual a 1,2 e 3
	$sql = $pdo->prepare("SELECT * FROM clientes WHERE id BETWEEN 1 AND 3");

	$sql->execute();

	$clientes = $sql->fetchAll();

	echo "Estou procurando pelo id entre 1 e 3 usando o BETWEEN.<br><br>";

	foreach($clientes as $key => $val){
		echo $val['id']." = ".$val['nome']."<br>";
	}
?>
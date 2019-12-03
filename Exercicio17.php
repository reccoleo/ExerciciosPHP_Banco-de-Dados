
	/*
	17- Faça uma pesquisa no banco de dados utilizando o conceito de SUBQUERIES.

	Exercicio feito por Leonardo Pereira Recco
	*/
<?php

	$pdo = new PDO('mysql:host=localhost; dbname=projeto2','root','');

	//Aqui vamos atribuir a condicao um outro SELECT o resultado vai ser comparado com a condicao do primeiro SELECT	
	$sql = $pdo->prepare("SELECT * FROM posts WHERE categoria = (SELECT id FROM categoria WHERE nome = 'comedia')");

	$sql->execute();

	$clientes = $sql->fetchAll();

	echo "Filmes de Comedia. <br><br>";

	foreach($clientes as $key => $val){
		echo $val['id']." = ".$val['titulo']."<br>";
	}

?>
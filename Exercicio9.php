
	/*
	9- Faça uma conexao com o banco de dados e faça um SELECT com INNER JOIN e retorne o resultado com FOREACH.

	Exercicio feito por Leonardo Pereira Recco
	*/

<?php

	//Abre a conexao com o banco de dados
	$pdo = new PDO('mysql:host=localhost;dbname=phpbd','root','');

	echo "Conexao estabelecida com sucesso! <br><br>";

	//Juntamos as duas tabelas e todos os dados serao retornados
	$sql = $pdo->prepare("SELECT * FROM `posts` INNER JOIN `categoria`");
	
	//Passando o codigo sql para o banco de dados
	$sql->execute();

	//Variavel qua vai pegar os dados da nossa consulta sql do banco de dados
	$info = $sql->fetchAll();

	//Aqui sera mostrado todos os dados como um array na tela
	foreach($info as $key => $valor){
		echo 'Titulo '.$valor['titulo'];
		echo '<br>';
		echo 'Conteudo '.$valor['conteudo'];
		echo '<hr>';
	}

?>

	/*
	8- Faça uma conexao com o banco de dados e faça um SELECT no banco de dados para retornar um valor e o id=2 e mostrar na tela.

	Exercicio feito por Leonardo Pereira Recco
	*/

<?php

	//Abre a conexao com o banco de dados
	$pdo = new PDO('mysql:host=localhost;dbname=phpbd','root','');

	echo "Conexao estabelecida com sucesso! <br><br>";

	//Codigo sql contendo o select para todas os posts
	$sql = $pdo->prepare("SELECT * FROM posts WHERE categoria = 2");
	
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
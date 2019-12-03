
	/*
	4- Faça uma conexao com o banco de dados e atualize os dados do banco de dados.

	Exercicio feito por Leonardo Pereira Recco
	*/

<?php

	/*UPDATE e condicoes*/

	//Abri a conexao com o banco de dados
	$pdo = new PDO('mysql:host=localhost;dbname=phpbd','root','');

	echo "Conexao estabelecida com sucesso! <br>";

	$id = 5;

	//Agora vamos atualizar o cadastro de um de nossos clientes
	//Colocamos o UPDATE e o nome da tabela, SET com os valores atualizados e a condicao que indica o lugar a ser alterado
	//E agora também colocamos o AND que coloca mais uma comparacao

	$sql = $pdo->prepare("UPDATE `clientes` SET nome='Thiago',sobrenome='Henrique' WHERE id=$id AND nome='Carlos'");

	if($sql->execute()){
		echo "Atualizacao feita com sucesso!";
	}else{
		echo "Ops, algo deu errado!";
	}

?>
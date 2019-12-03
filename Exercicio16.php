
	/*
	16- Faça uma pesquisa no banco de dados utilizando o HAVING.

	Exercicio feito por Leonardo Pereira Recco
	*/
<?php

	$pdo = new PDO('mysql:host=localhost; dbname=projeto2','root','');

	//Aqui usamos o HAVING depois do GROUP BY para pegar quem tem id maior que 3
	$sql = $pdo->prepare("SELECT * FROM cliente GROUP BY id HAVING id > 3");

	$sql->execute();

	$clientes = $sql->fetchAll();

	echo "Aqui usamos o HAVING depois do GROUP BY para pegar quem tem id maior que 3. <br><br>";

	foreach($clientes as $key => $val){
		echo $val['id']." = ".$val['nome']."<br>";
	}

?>
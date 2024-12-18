

<!-- VAMOS CRIAR NOSSO ARQUIVO DE CONEXÃO : connection.php (dentro da pasta config) / vai conter única e exclusivamente a nossa conexão -->


<?php

	// Vamos criar algumas variáveis com conteúdo de dados que vamos colocar na conexão 

	$host = "localhost";                             // localhost
	$dbname = "agenda";								 // agenda
	$user = "root";									 // root
	$pass = "";										 // pass de password (senha) que deixarei vazio


	try {                                                                                 

		$conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);                 

		// Vamos ativar o modo de ERRO 

		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);               

	} catch(PDOException $e) {

		// ERRO na conexão

		$error = $e->getMessage();

		echo "Erro: $error";

	}  




?>



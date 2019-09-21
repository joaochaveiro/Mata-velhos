	<?php
	if(!(isset($_SESSION['login_user']) && $_SESSION['login_user'] !="") || !(isset($_SESSION['login_cod']) && $_SESSION['login_cod'] !="") || !(isset($_SESSION['login_desc']) && $_SESSION['login_desc'] !="") || !(isset($_SESSION['instituicao']) && $_SESSION['instituicao'] !="")|| !(isset($_SESSION['imagem']) && $_SESSION['imagem'] !="") || !(isset($_SESSION["cliente"]) && $_SESSION["cliente"] !="")){
	}
		session_start();


	$servername = "localhost";
	$username = "root";
	$password = "root";
	$bd = "senioreye";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $bd);
	$conn->set_charset("utf8");
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
		echo "Não ligou a base de dados";
	} 

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
	header('Access-Control-Allow-Headers: Origin, Contente-Type, X-Auth-Token');
	?>
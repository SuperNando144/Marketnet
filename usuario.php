<?php
	try {
	  $conn = new PDO('mysql:host=localhost;dbname=test', 'root', '');
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}
	//Questão 3
	if (isset($_GET['id'])) {
		$data = $conn->query('SELECT * FROM usuario WHERE id = ' . $_GET['id']);
	    foreach($data as $row) {
	        print_r($row);
	    }
	}else{
		echo "Parametro nao enviado!";
	}
?>
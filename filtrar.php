<?php
	try {
	  $conn = new PDO('mysql:host=localhost;dbname=test', 'root', '');
	    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
	    echo 'ERROR: ' . $e->getMessage();
	}

	//Questão 4
	if (isset($_GET['p'])) {
	    $filtro = 5;
	    $filtro2 = ($filtro * $_GET['p']) - $filtro;
		$data = $conn->query('SELECT * FROM usuario LIMIT '. $filtro . ' OFFSET ' . $filtro2);
	    foreach($data as $row) {
	        print_r($row);
	    }
	}else{
		echo "Parametro nao enviado!";
	}
?>
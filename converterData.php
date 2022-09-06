<?php
	//Questão 2
	$date_regex = '/(0[1-9]|1[012])[- \/.](0[1-9]|[12][0-9]|3[01])[- \/.](19|20)\d\d/';
	if (isset($_GET['data'])) {
		if(preg_match($date_regex, $_GET['data'])) {
	        $dataConvertida = date('Y-m-d', strtotime(str_replace('/', '-', $_GET['data'])));
	        $hoje = date('Y-m-d');
	        $datetime1 = date_create($dataConvertida);
	        $datetime2 = date_create($hoje);
	        $interval = (array) date_diff($datetime1, $datetime2);
        echo $interval['days'];
		}else{
			echo "Data no formato incorreto. Deve ser dd/mm/aaaa.";
		}
	}else{
		echo "Parametro não enviado!";
	}

?>
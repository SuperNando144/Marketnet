<?php
	class myDate
	{
		public static function toAmerican($data)
		{
		    return date('Y-m-d', strtotime(str_replace('/', '-', $data)));
		}

		public static function toggle($data)
		{
			if (preg_match('/^[0-9]{1,2}\/[0-9]{1,2}\/[0-9]{4}$/', $data)) {
				return date('Y-m-d', strtotime(str_replace('/', '-', $data)));
			}elseif (preg_match("/^[0-9]{4}-(0[1-9]|1[0-2])-(0[1-9]|[1-2][0-9]|3[0-1])$/", $data)) {
				return date("d/m/Y", strtotime($data));
			}else{
				echo "Formato de data inválido";
			}
		}
	}

	//Questão 5
	echo myDate::toAmerican('25/08/1995');

	//Questão 6
	echo myDate::toggle('25/08/1995');
	echo myDate::toggle('1995-08-25');
?>
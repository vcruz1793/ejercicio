<?php 

	
	function get_promedio(){
		$calificacion_1 = $_POST['calificacion_1'];
		$calificacion_2 = $_POST['calificacion_2'];
		$calificacion_3 = $_POST['calificacion_3'];
		$calificacion_4 = $_POST['calificacion_4'];
		$calificacion_5 = $_POST['calificacion_5'];
		$promedio = (
			$calificacion_1+
			$calificacion_2+
			$calificacion_3+
			$calificacion_4+
			$calificacion_5
			)/5;
		
		echo "Tu promedio es: $promedio<br>";
		# Condicionales IF ANIDADAS
		
		if($promedio>=6 && $promedio <7):
			echo 'ESTAS APROBADO pero no te daran beca';
		elseif($promedio>=7 && $promedio <8):
			echo 'ESTAS APROBADO pero no te daran beca solo un incentivo de 100 pesos';
		elseif($promedio>=8 && $promedio <=10):
			echo 'ESTAS APROBADO accedes a beca';
		else:
			echo "ESTAS REPROBADO D:";
		endif;
	}


	function get_grados(){
		$sonidos = $_POST['sonidos'];
		$grados  = $_POST['grados'];

		$total = ($sonidos/4) + 40;
		if($grados=='celcius'):
			# Conversión de grados fahrenheit a Celcius
			# Buscar función capaz de hacer
			# comparaciones entre cadenas de 
			# caracteres
			$total = '';
		endif;
		echo "La temperatura en grados $grados es: $total";

	}

	function get_sueldo_total(){
		$categoria = $_POST['categoria'];
		$sueldo = $_POST['sueldo'];
		$sueldo_total = 0; //inicializar
		#si categoria es 1 aumentar a 15%
		#si categoria es 2 aumentar a 10%
		#si categoria es 3 aumentar a 8%
		#si categoria es 4 aumentar a 7%
		# DEVELOP TESTING STAGING | PRODUCCION
		if($categoria=='categoria_1'):
			$sueldo_total = $sueldo * 1.15;
		elseif($categoria=='categoria_2'):
			$sueldo_total = $sueldo * 1.10;
		elseif($categoria=='categoria_3'):
			$sueldo_total = $sueldo * 1.08;
		elseif($categoria=='categoria_4'):
			$sueldo_total = $sueldo * 1.07;
		else:
			echo "No existe la categoría, no hay aumento de sueldo";
		endif;
		
		switch ($categoria):
			case 'categoria_1':
				$sueldo_total = $sueldo * 1.15;
				break;
			case 'categoria_2':
				$sueldo_total = $sueldo * 1.10;
				break;
			case 'categoria_3':
				$sueldo_total = $sueldo * 1.08;
				break;
			case 'categoria_4':
				$sueldo_total = $sueldo * 1.07;
				break;												
			default:
				echo "No existe la categoría, no hay aumento de sueldo";
				break;
		endswitch;
		echo "El sueldo total es: $sueldo_total";
	}


	function get_orden(){
		$numero_a = $_POST['numero_a'];
		$numero_b = $_POST['numero_b'];
		$numero_c = $_POST['numero_c'];
		$numero_d = $_POST['numero_d'];

		$orden_final = ''; //cadena vacia 
		# sentencias selectivas Multiples y anidadas
		if($numero_a > $numero_b):
			if($numero_a > $numero_c):
				if($numero_b > $numero_c):
					$orden_final = "A=$numero_a, B=$numero_b, C=$numero_c";
				else:
					$orden_final = "A=$numero_a, C=$numero_c, B=$numero_b";
				endif;
			else:
				$orden_final = "C=$numero_c, A=$numero_a, B=$numero_b";
			endif;
		else:
			if($numero_b > $numero_c):
				if ($numero_a > $numero_c):
					$orden_final = "B=$numero_b, A=$numero_a, C=$numero_c";
				else:
					$orden_final = "B=$numero_b, C=$numero_c, A=$numero_a";
				endif;
			else:
				$orden_final = "C=$numero_c, B=$numero_b, A=$numero_a";
			endif;
		endif;
		() / 
		* mod
		+ - 
		echo "El orden calculado es: $orden_final";
		
	}

	# get_promedio();
	# get_grados();
	#echo "<pre>";
	#print_r($_POST);
	#echo "</pre>";
	# get_sueldo_total();
	 
	get_orden(); 
	
?>
<html>
	<head>
		<title>API REST - Ejemplos Simples</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	</head>
	<body>
	<a href="/api-rest/simple">(←Volver)</a> | 
	<strong>API REST - Ejemplos Simples - PHP</strong><BR /><BR />
	<?php
		$apiUrl = 'https://mindicador.cl/api';
		//Es necesario tener habilitada la directiva allow_url_fopen para usar file_get_contents
		if ( ini_get('allow_url_fopen') ) {
			$json = file_get_contents($apiUrl);
		} else {
			//De otra forma utilizamos cURL
			$curl = curl_init($apiUrl);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$json = curl_exec($curl);
			curl_close($curl);
		}
		 
		$dailyIndicators = json_decode($json);
		echo '  * El valor actual de la UF es $' . $dailyIndicators->uf->valor . '<BR />';
		echo '  * El valor actual del Dólar observado es $' . $dailyIndicators->dolar->valor . '<BR />';
		echo '  * El valor actual del Dólar acuerdo es $' . $dailyIndicators->dolar_intercambio->valor . '<BR />';
		echo '  * El valor actual del Euro es $' . $dailyIndicators->euro->valor . '<BR />';
		echo '  * El valor actual del IPC es ' . $dailyIndicators->ipc->valor . '<BR />';
		echo '  * El valor actual de la UTM es $' . $dailyIndicators->utm->valor . '<BR />';
		echo '  * El valor actual del IVP es $' . $dailyIndicators->ivp->valor . '<BR />';
		echo '  * El valor actual del Imacec es ' . $dailyIndicators->imacec->valor . '<BR />';
	?>
</body>
</html>
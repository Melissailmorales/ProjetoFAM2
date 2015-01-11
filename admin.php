<html>
<head>

</head>
<body>
	<?php
		$html = "";
		session_start();
		if((isset ($_SESSION['login'])) and (isset ($_SESSION['senha'])) and (isset ($_SESSION['permissao'])) and ($_SESSION['permissao'] == 1)){
			$html .= "<a href='content/admCadEventos.php'>Cadastrar Evento</a>";
		}else{
		$html = "Voce não tem permissão para acessar esta página";
		}

		echo $html;
	?>
</body>
</html>
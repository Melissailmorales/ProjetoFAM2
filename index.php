<!DOCTYPE html>
<html lang="pt-br" >
<head>
    <title>FORMACAO DE AGENTES MULTIPLICADORES</title>
    
    <meta charset="utf-8">
    
    <link rel="stylesheet" type="text/css" href="css/css.css" media="screen"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
</head>
<body>
    <?php include 'content/login.php'; ?>
    
	<?php include 'content/menu.php'; ?>
	
	<div class="social_button">
		<a href="http://youtube.com" class="button_click1"><img src="images/youtube.png" alt="Youtube"></a>
		<a href="http://twitter.com" class="button_click1"><img src="images/twitter.png" alt="Twitter"></a>
		<a href="http://facebook.com" class="button_click1"><img src="images/facebook.png" alt="Facebook"></a>
	</div>
	
	<div id="corpo">
	
		<div id="conteudo">  			
			<?php 
				$pagina = (isset($_GET['pag'])) ? $_GET['pag'] : null;

				if ($pagina == "home")
					include "content/home.php";
				else if ($pagina == "cadastro")
					include "content/cadastro.html";
				else if ($pagina == "eventos")
					include "content/eventos.php";
				else if ($pagina == "informacoes")
					include "content/informacoes.php";
				else if ($pagina == "quemsomos")
					include "content/quemsomos.php";
				else if ($pagina == "servicos")
					include "content/servicos.php";
				else
					include 'content/home.php';      
			?>
		</div>
		
			
		<?php include 'content/lateral.php'; ?>
	</div>	
	
	<div id="espacamento" style="width: 1024px; height 16px; clear: both;"></div>
	
	<?php include 'content/rodape.php'; ?>

</body>
</html>
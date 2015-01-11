<!DOCTYPE html>

<?php require_once '../class/config.class.php'; ?>

<html lang="pt-br" >
<head>
    <title>FORMACAO DE AGENTES MULTIPLICADORES</title>
    
    <meta charset="utf-8">
    
    <link rel="stylesheet" type="text/css" href="../css/css.css" media="screen"/>
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
</head>
<body>
<div id="Slide">
    <?php
		$id = $_GET['evento'];
	
		$imagens = new Config();
		
		$rs = $imagens->executarQuery("SELECT nome, descricao FROM imagens WHERE idEvento=$id");
				
		$html = "";
		
		while($row = mysql_fetch_object($rs)){
			$html .= "<a href='#' class='trs'>";	
			$html .= "<img src='../images/eventos/$row->nome' style='width:550px; height:280px;' alt='$row->descricao'> ";	
			$html .= "</a>";	
		}		
	?>
    <figure>
        <span class="trs next"></span>
        <span class="trs prev"></span>

        <div id="slider">
            <center>
				<?php echo $html; ?>
            </center>	
        </div>

        <figcaption></figcaption>
    </figure>

    <script type="text/javascript">
        function setaImagem() {
            var settings = {
                primeiraImg: function() {
                    elemento = document.querySelector("#slider a:first-child");
                    elemento.classList.add("ativo");
                    this.legenda(elemento);
                },
                ultimaImg: function() {
                    elemento = document.querySelector("#slider a:last-child");
                    elemento.classList.add("ativo");
                    this.legenda(elemento);
                },
                slide: function() {
                    elemento = document.querySelector(".ativo");
                    if (elemento.nextElementSibling) {
                        elemento.nextElementSibling.classList.add("ativo");
                        settings.legenda(elemento.nextElementSibling);
                        elemento.classList.remove("ativo");
                    } else {
                        elemento.classList.remove("ativo");
                        settings.primeiraImg();
                    }

                },
                proximo: function() {
                    clearInterval(intervalo);
                    elemento = document.querySelector(".ativo");

                    if (elemento.nextElementSibling) {
                        elemento.nextElementSibling.classList.add("ativo");
                        settings.legenda(elemento.nextElementSibling);
                        elemento.classList.remove("ativo");
                    } else {
                        elemento.classList.remove("ativo");
                        settings.primeiraImg();
                    }
                    intervalo = setInterval(settings.slide, 4000);
                },
                anterior: function() {
                    clearInterval(intervalo);
                    elemento = document.querySelector(".ativo");
                    if (elemento.previousElementSibling) {
                        elemento.previousElementSibling.classList.add("ativo");
                        settings.legenda(elemento.previousElementSibling);
                        elemento.classList.remove("ativo");
                    } else {
                        elemento.classList.remove("ativo");
                        settings.ultimaImg();
                    }
                    intervalo = setInterval(settings.slide, 4000);
                },
                legenda: function(obj) {
                    var legenda = obj.querySelector("img").getAttribute("alt");
                    document.querySelector("figcaption").innerHTML = legenda;
                }
            };
            //chama o slide
            settings.primeiraImg();
            //chama a legenda
            settings.legenda(elemento);
            //chama o slide à um determinado tempo
            var intervalo = setInterval(settings.slide, 4000);
            document.querySelector(".next").addEventListener("click", settings.proximo, false);
            document.querySelector(".prev").addEventListener("click", settings.anterior, false);
        }
        window.addEventListener("load", setaImagem, false);
    </script>
</div>
</body>
</html>
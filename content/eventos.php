<?php require_once 'class/evento.class.php'; ?>

<div id="texto">
    <h2>  				
        EVENTOS			
    </h2>
    
    <p align="Justify">
        <?php
            $eventos = new Evento();
            
            $rs = $eventos->executarQuery("SELECT eventos. idEvento, eventos.titulo, eventos.idCapa, imagens.nome FROM eventos INNER JOIN imagens ON imagens.idImagem=eventos.idCapa");
			//$rs = $eventos->executarQuery("SELECT * from eventos");
			
            $html = "";
			
			if ($rs) {
				$i = 0;
				while($row = mysql_fetch_object($rs))
				{
					$valores[$i][0] = $row->idEvento;
					$valores[$i][1] = $row->titulo;
					$valores[$i][2] = $row->idCapa;
					$valores[$i][3] = $row->nome;
					
					$i++;
				}  
				
				$html .= "<table id='tabelaCelulas' border=1 style='diplay: inline'><tr>";
				
				$colunas = 0;
				
				for($i = 0; $i < mysql_num_rows($rs); $i++){					
					$html .= "<td>";
					$html .= "<table id ='tabelaEventos' border=1><tr><td>";
					$html .= "<a href='content/slideEventos.php?evento=".$valores[$i][0]."'><img class='listaEvento' src='images/eventos/".$valores[$i][3]."' style='width: 128px; height= 64px;'></a></td></tr>";
					$html .= "<tr><td>".$valores[$i][1]."</td></tr></table></td>";
					if($colunas >= 3){
						$html .= "</tr><tr>";
					}					
					$colunas++;
				}
				
				$html .= "</tr></table>";
				
			} else {
				$html .= "<label>Nenhum evento foi cadastrado até o momento.</label>";
			}
			echo $html;
        ?>
    </p>
</div>
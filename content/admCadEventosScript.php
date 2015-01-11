<?php require '../class/config.class.php';
    
    $nomeEvento = $_POST['nomeEvento'];
	$capaEvento = $_POST['capa'];
	echo $nomeEvento;
	for($i = 0; $i < count($_POST['slides']); $i++){
		$img[$i] = $_POST['slides'][$i];
	}

	
    //$idEv = $_POST['cmbEvento'];
        
    $cad = new Config();
    
    //$v = $cad->checkString($_POST);
    
    //if($v != true){
	for($i = 0; $i < count($img); $i++){
        $cad->executarQuery("INSERT INTO imagens (idEvento, nome, descricao) VALUES (-1, '".$img[$i]."', '')");   
	}
	
	$rs = $cad->executarQuery("SELECT idImagem FROM imagens WHERE nome='$capaEvento'");
	
	$imagem = -1;
	while($row = mysql_fetch_object($rs)){
		$imagem = $row->idImagem;
		$cad->executarQuery("INSERT INTO eventos (titulo, idCapa) VALUES ('".$nomeEvento."', $row->idImagem)");   
	}
	
	$rs = $cad->executarQuery("SELECT idEvento FROM eventos WHERE idCapa=$imagem");
	
	while($row = mysql_fetch_object($rs)){
		$cad->executarQuery("UPDATE imagens SET idEvento = $row->idEvento WHERE idEvento= -1");
	}
    //} else {
        //SQL INJECTION PROBABLY...
    //}
    // */
?>
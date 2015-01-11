<?php
    require '../Class/usuario.class.php';
    
    session_start();
    
    $login = $_POST['email'];
    $senha = $_POST['password'];
    
    $loginClass = new Usuario();
    
    $rs = $loginClass->executarQuery("SELECT * FROM usuarios WHERE login='$login' and senha='$senha'");
    
	$permissao = 0;
	
    if (mysql_num_rows($rs) > 0) {
		while($row = mysql_fetch_object($rs))
		{
			$_SESSION['login'] = $row->nome;
			$permissao = $row->permissao;
		}  
        $_SESSION['permissao'] = $permissao;
        $_SESSION['senha'] = $senha;
		
		if($permissao == 1)
			header('location:../admin.php');
		else
			header('location:../index.php?login=ok');
    } else {
        unset($_SESSION['login']);
        unset($_SESSION['senha']);
        session_destroy();
        
        header('location:../index.php?login=not');    
    }
?>

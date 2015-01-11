<div id="login">
	<form action="content/loginScript.php" method="POST">
		<img src="images/user.png" class="loginImg">
		<input type="text" name="email" id="email" placeholder="E-mail" required>
		<img src="images/key.png" class="loginImg">
		<input type="password" name="password" id="password" placeholder="Senha" required>
		<input type="hidden" name="acao" value="logar">
		<button>Entrar</button>
		<?php
			$html = "";
			session_start();
			if((isset ($_SESSION['login'])) and (isset ($_SESSION['senha']))){
				$html .= "Bem-vindo, ";
				$html .= "<label style='color: #008800; font-size: 13px'>";
				$html .= $_SESSION['login'];
				$html .= "</label>!";
				$html .= "<a href='content/logoff.php' style='margin-left:32px;'>Logoff!</a>";
			}else{
				$html .= "<label style='color: #FFFFFF; font-size: 13px'>Você já é cadastrado? <a href='index.php?pag=cadastro'>Faça seu cadastro!</a></label>";
			}

			echo $html;
		?>
	</form>
</div>
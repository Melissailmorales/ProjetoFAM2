<?php require '../Class/usuario.class.php'; ?>

<html>
<head>

</head>
<body>
    <form action="admCadEventosScript.php" method="POST" accept-charset="utf-8">
        Nome do Evento: <input type="text" name="nomeEvento"><br>
		Capa: <input type="file" name="capa">
		Imagens: <input name="slides[]" type=file multiple>

        <input type="submit" value="Enviar">
    </form>   
</body>
</html>
<?php
if(isset($_POST['nome'])) {
	$nome = $_POST['nome'];
	file_put_contents("teste.txt", $nome, FILE_APPEND);

	header("Location: index.php"); // isso faz o redirecionamento para o index
}
?>
<form method="POST">
	<input type="text" name="nome">
	<input type="submit" value="Enviar">
</form>
<?php
include_once('config.php');

if (isset($_POST['submit'])) {
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL); //verifica se o email está correto
	$result = mysqli_query($conexao, "INSERT INTO formulario(nome,email,telefone) VALUES ('$nome','$email','$telefone')");
    header ("Location: index.php");
}
?>

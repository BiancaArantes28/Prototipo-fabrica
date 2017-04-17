<?php

require_once 'banco.php';

session_start();

$usuario = buscaUsuario($conexao, $_POST["email"], $_POST["senha"]);

#if($usuario == null) {
#	header("Location: index.php");
#} else {
	$_SESSION["success"] = "Usuário logado com sucesso.";
	$_SESSION["usuario_logado"] = $email;
	header("Location: aluno/home_aluno.php");
#}
die();

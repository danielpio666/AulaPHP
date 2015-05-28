<?php
	session_start();
	require_once "conexao.php";
	$conect   = conexaoDB();
	
	$usuario  = $_POST['usuario'];
	$senha    = $_POST['senha'];
	
	$check    = 0;	
	$chk_txt  = "SELECT * FROM usuarios WHERE usu_login = '".$usuario."'";
	$chk_exe  = $conect->query($chk_txt)->fetchAll();

	foreach ($chk_exe as $row) {
		if (password_verify($senha, $row[2])) {   // Função foi refeita mas infelismente não funciona ja pesquisei na internet e nao existe nada que me mostre o porque do erro !!!
			$_SESSION['check'] = 1;
			$_SESSION['usuario_on'] = $row[1];
			echo "<script>window.location.href='painel';</script>";
		} else {
			echo "<script>alert('Senha Incorreta!!!'); window.location.href='login';</script>";
			break;
		}
	}
	echo "<script>alert('Usuario Incorreto!!!'); window.location.href='login';</script>";
?>
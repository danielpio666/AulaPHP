<?php
	session_start();
	require_once "conexao.php";
	$conect   = conexaoDB();
	
	$usuario  = $_POST['usuario'];
	$senha    = md5($_POST['senha']);
	
	$chk_txt  = "SELECT * FROM usuarios WHERE usu_login = '".$usuario."' AND usu_senha = '".$senha."'";
	$chk_exe  = $conect->query($chk_txt);
	$chkresul = $chk_exe->fetchColumn();
	$check    = 0;
	
	if ($chkresul == 0) {
		$check = 0;
		echo "<script>alert('Usuario ou Senha Incorretos!!!'); window.location.href='login';</script>";
		break;
	} else {
		$_SESSION['check'] = 1;
		foreach ($chk_exe as $row) {
			$_SESSION['usuario_on'] = $row['usu_login'];
		}
		echo "<script>window.location.href='painel';</script>";
		break;
	}
?>
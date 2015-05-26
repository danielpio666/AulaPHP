<?php
	// Inicializa uma sessão.
	// Se você está usando session_name("something"), não esqueça!
	session_start();
	// Eliminar todas as variáveis de sessão.
	session_unset();
	// Finalmente, destruição da sessão.
	session_destroy();
	echo "<script language='JavaScript'>parent.location.href = 'home';</script>";
?>
<?php
	if ($pag == "home") {
		include "home.php";
	} elseif ($pag == "empresa") {	
		include "empresa.php";
	} elseif ($pag == "produtos") {	
		include "produtos.php";
	} elseif ($pag == "servicos") {	
		include "servicos.php";
	} elseif ($pag == "contato") {	
		include "contato.php";
	} elseif ($pag == "enviar") {	
		include "enviar.php";
	} else {
		echo "<script>window.location.href='index.php?pagina=home';</script>";
	}
?>
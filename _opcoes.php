<?php

if (is_file($pag.'.php')) {
	$paginas = array('home','empresa','servicos','produtos','contato','enviar','404');
	if(in_array($pag, $paginas)) {
    	include $pag.".php";
	} else {
		header('Location: 404');
		exit(0);
	}
}  else {
		header('Location: 404');
		exit(0);
}

?>

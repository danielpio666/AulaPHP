<?php
$atual     = (!isset($_GET['pagina']) ? 'home' : $_GET['pagina']);
$permissao = array('home','empresa','servicos','produtos','contato','enviar','404','pesquisa','login','painel');
if (substr_count($atual, '!') > 0 ) {
	$atual  = explode('!', $atual);
	$pagina = (file_exists($atual[0].'.php') && in_array($atual[0], $permissao) ? $atual[0].'.php' : '404' );
	$op     = $atual[1];
	$codigo = $atual[2];
} else {
	$pagina = (file_exists($atual.'.php') && in_array($atual, $permissao) ? $atual.'.php' : '404' );
	$op     = 'CON';
	$codigo = '';
}

include $pagina;
?>

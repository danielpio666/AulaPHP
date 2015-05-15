<?php
$paginas = array('home','empresa','servicos','produtos','contato','enviar','404','pesquisa');
if (is_file($pag.'.php') && in_array($pag, $paginas)) {
    include $pag.".php";
} else {
    include "404.php";
}
?>

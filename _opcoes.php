<?php
$paginas = array('home','empresa','servicos','produtos','contato','enviar');
if(in_array($pag, $paginas))
    include $pag.".php";
else 
    include "404.php";
?>
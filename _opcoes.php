<?php
$paginas = array('home','empresa','servicos','produtos','contato','enviar');
if(in_array($pag, $paginas))
    include $pag.".php";
else 
    echo "<script>window.location.href='index.php?pagina=home';</script>";
?>
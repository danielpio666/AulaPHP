<?php
	date_default_timezone_set('America/Sao_Paulo');
	$pag = (!isset($_GET['pagina']) ? 'home' : $_GET['pagina']);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<meta name="description" content="Curso PHP fase 1" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Curso Fase 1</title>
<link rel="stylesheet" href="css/bootstrap.css" />
<link rel="stylesheet" href="css/estilo.css" />

<script type="text/javascript" src="js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>

</head>

<body>
	<nav role="navigation" class="navbar navbar-default navbar-inverse">   	
    	<div class="navbar-header">
            <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                <span class="sr-only">Menu Responsivo</span> 
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a href="#" class="navbar-brand">Fase 1</a>
		</div>                
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <? if($pag == 'home') 		{ ?> class="active" <? } ?>><a href="index.php?pagina=home">Home</a></li>
                <li <? if($pag == 'empresa') 	{ ?> class="active" <? } ?>><a href="index.php?pagina=empresa">Empresa</a></li>
                <li <? if($pag == 'produtos') 	{ ?> class="active" <? } ?>><a href="index.php?pagina=produtos">Produtos</a></li>
                <li <? if($pag == 'servicos') 	{ ?> class="active" <? } ?>><a href="index.php?pagina=servicos">Serviços</a></li>
                <li <? if($pag == 'contato') 	{ ?> class="active" <? } ?>><a href="index.php?pagina=contato">Contato</a></li>
            </ul>
        </div>
    </nav>
    
    <ol class="breadcrumb">
    	<li><a href="index.php?pagina=home">Home</a>
        <li class="active"><?=strtoupper($pag)?></li>  
    </ol>
    
    <div class="offset3 span6">
        <? include "_opcoes.php"; ?>
    </div>

	<nav class="navbar navbar-fixed-bottom">
    	<div class="navbar-default" align="center">
        	<span class="col-lg-12">
	           	&bull; Todos os Diretos Reservados &bull; <?=date('Y')?> &bull;
            </span>
        </div>
    </nav>

</body>
</html>

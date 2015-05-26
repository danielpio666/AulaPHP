<?php
	require_once "conexao.php";
	$conect = conexaoDB();
	date_default_timezone_set('America/Sao_Paulo');
	$pag = (!isset($_GET['pagina']) ? 'home' : $_GET['pagina']);
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<meta name="description" content="Curso PHP fase 1" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Curso Fase 2</title>
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
            <a href="#" class="navbar-brand">Fase 4</a>
		</div>                
        <div id="navbarCollapse" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li <? if($pag == 'home') 		{ ?> class="active" <? } ?>><a href="home">Home</a></li>
                <li <? if($pag == 'empresa') 	{ ?> class="active" <? } ?>><a href="empresa">Empresa</a></li>
                <li <? if($pag == 'produtos') 	{ ?> class="active" <? } ?>><a href="produtos">Produtos</a></li>
                <li <? if($pag == 'servicos') 	{ ?> class="active" <? } ?>><a href="servicos">Serviços</a></li>
                <li <? if($pag == 'contato') 	{ ?> class="active" <? } ?>><a href="contato">Contato</a></li>
                <li <? if($pag == 'login') 		{ ?> class="active" <? } ?>><a href="login">Area Restrita</a></li>
            </ul>
        
            <form class="navbar-form navbar-left" role="search" action="pesquisa" method="post">
              <div class="form-group">
                <input type="text" class="form-control" placeholder="Procurar" name="txt_search" >
              </div>
              <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
            </form>
        </div>
    </nav>
    
    <ol class="breadcrumb">
    	<li><a href="home">Home</a>
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

<span class="col-lg-6  col-lg-offset-3">
<h2>Servi&ccedil;os</h2>

<div class="panel panel-default">
  <div class="panel-body">
    <?
	$info = $conect->query("SELECT * FROM paginas WHERE pag_modulo = 'SERVICOS'")->fetchAll();
	foreach ($info as $txt){
	    echo $txt[2];
	}
    ?>
  </div>
</div>
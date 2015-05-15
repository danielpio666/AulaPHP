<span class="col-lg-6  col-lg-offset-3">
<h2>Home</h2>

<div class="panel panel-default">
  <div class="panel-body">
    <?
	$texto = $_POST['txt_search'];

	$info = $conect->query("SELECT * FROM paginas WHERE pag_conteudo LIKE '%".$texto."%'")->fetchAll();
	echo "Resultado da consulta por [ <strong> $texto </strong> ] <hr>";
	
	foreach ($info as $txt){
		echo "<p><a href='".strtolower($txt[1])."'>Pagina -> ".strtoupper($txt[1])."</a></p>";
	}
    ?>
  </div>
</div>
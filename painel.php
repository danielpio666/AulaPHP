<?php
	session_start();
	if (!isset($_SESSION['check']) or $_SESSION['check'] <> 1) {
		echo "<script>alert('Usuario sem permissao!!!'); window.location.href='login';</script>";
		break;
	}
?>	

<span class="col-lg-6  col-lg-offset-3">
<h2>Area Restrita</h2><a href="page_logoff.php">[ Logout ]</a>


<? if ($op == 'CON') { ?>
<table class="table table-striped">
	<tr>
		<th width="5%" align="center">ID</th>
		<th width="85%" align="center">Pagina</th>
		<th width="10%" align="center">Alterar</th>
	</tr>
	<?
	$pag_txt  = "SELECT * FROM paginas";
	$pag_exe  = $conect->query($pag_txt)->fetchAll();
	foreach ($pag_exe as $pgrow){
		echo "<tr>
				<td>".$pgrow['0']."</td>
				<td>".$pgrow['1']."</td>
				<td>
					<a href='painel!ALT!".$pgrow['0']."' title='Alterar' alt='Alterar'><span class='glyphicon glyphicon-pencil' aria-hidden='true'></span></a>
				</td>
			</tr>";
	}
	?>
</table>
<? } elseif ($op == 'ALT') { 
	
	$mod_txt  = "SELECT * FROM paginas WHERE pag_id = '".$codigo."'";
	$mod_exe  = $conect->query($mod_txt)->fetchAll();
	foreach ($mod_exe as $pgmod) { ?>
	
		<script src="//cdn.ckeditor.com/4.4.7/standard/ckeditor.js"></script>

		<form class="form-horizontal" method="post" action="painel!GRV!<?=$codigo?>">
			<div class="form-group"></div>
			<div class="form-group">
				<label for="pag_in" class="col-sm-1 control-label">Pagina</label>
				<div class="col-sm-12">
					<input type="text" class="form-control" id="pag_in" placeholder="Pagina" value="<?=$pgmod[1]?>" readonly>
				</div>
			</div>
			<div class="form-group">
				<label for="pag_text" class="col-sm-1 control-label">Texto</label>
				<div class="col-sm-12">
					<textarea class="form-control" rows="10" name="texto" id="texto"><?=$pgmod[2]?></textarea>
					<script>
						CKEDITOR.replace( 'texto' );
					</script>
				</div>
			</div>
			<div class="form-group">
				<div class="col-sm-12">
					<button type="submit" class="btn btn-default">
						<span class="glyphicon glyphicon-floppy-disk" aria-hidden="true"></span> 
						Gravar
					</button>
					<button type="button" class="btn btn-default" style="cursor:pointer" onClick="window.location.href='painel' ">
						<span class="glyphicon glyphicon-arrow-left" aria-hidden="true"></span> 
						Voltar
					</button>
				</div>
			</div>
		</form>	
	<? }        
   	} elseif ($op == 'GRV') { 
		$texto = $_POST['texto'];
		
		$grv_exe = $conect->prepare('UPDATE paginas SET pag_conteudo = :txt WHERE pag_id = :id');
		$grv_exe->bindValue(":txt", $texto);
		$grv_exe->bindValue(":id", $codigo);
		$grv_exe->execute();
		
		echo "<script>alert('Dados Gravados com Sucesso!!!');window.location.href='painel';</script>";
		
 	} ?>

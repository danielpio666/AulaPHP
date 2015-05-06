<span class="col-lg-6  col-lg-offset-3">
<h2>Contato</h2>

<form name="frm_contato" id="frm_contato" method="post" action="enviar">

	<div class="form-group">
    	<label for="iNome">Name</label>
    	<input type="text" class="form-control" id="iNome" name="iNome" placeholder="Digite seu nome">
  	</div>
	<div class="form-group">
        <label for="iEmail">E-mail</label>
        <input type="email" class="form-control" id="iEmail" name="iEmail" placeholder="Digite seu email">
  	</div>
    <div class="form-group">
    	<label for="iAssunto">Assunto</label>
    	<input type="text" class="form-control" id="iAssunto" name="iAssunto" placeholder="Assunto">
  	</div>
    <div class="form-group">
    	<label for="iMensagem">Mensagem</label>
    	<textarea class="form-control" rows="3" id="iMensagem" name="iMensagem" placeholder="Mensagem"></textarea>
  	</div>
    
  	<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span> Enviar</button>
</form>
</span>
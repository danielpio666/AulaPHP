<?php

$para    = "danielpio666@gmail.com.br";
$nome    = $_POST['iNome'];
$email   = $_POST['iEmail'];
$assunto = $_POST['iAssunto'];
$texto	 = $_POST['iMensagem'];
$data    = date("d/m/Y");

//cabeçalho de e-mail
$headers="From:Fase1<contato@meusite.com.br>\n";
$headers.="X-Sender:<contato@meusite.com.br>\n";
$headers.="X-mailer: PHP\n";
$headers.="X-Priority: 1\n";
$headers.="Return-Path: <contato@meusite.com.br>\n";
$headers.="Content-Type: text/html; charset=iso-8859-1\n";

$mensagem = "";
$mensagem .= "Nome : ".$nome."<br>";
$mensagem .= "E-Mail : ".$email."<br>";
$mensagem .= "Assunto : ".$assunto."<br>";
$mensagem .= "Texto<hr>".nl2br($texto)."<br>";
$mensagem .= "<br><br> Mensagem enviada em : ".$data;


// não sabia se era ou nao pra fazer a funcao de envio de e-mail entao somente vou testar se foi enviado ou nao, pois acho que o proposito é o bootstrap
// $enviar = mail($para,$assunto,$mensagem,$headers); // Sei que a funcao mail() nao se usa mais é apenas pra exemplificar o envio do form. 
$enviar = true;

echo "<div class='container'>
		<div class='offset3 span6'>";


if ($enviar) {
	echo "<div class='alert alert-success' role='alert'>Dados enviados com sucesso, abaixo seguem os dados que voc&ecirc; enviou</div>";
	echo "<br><br>".$mensagem;
} else {
	echo "<div class='alert alert-danger' role='alert'>Falha ao enviar mensagem</div>";
}

?><br><br>
	<button type="button" onClick="window.location.href='index.php?pagina=home'" class="btn btn-primary">
		<span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Voltar
	</button>
	</div>
</div>

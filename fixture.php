<?php

require_once "conexao.php";

echo "Arquivo de Fixture...<br><br>";
echo "..:: Conectando ao Banco de Dados ::..";

$conect = conexaoDB();

echo "OK! <br>";

echo "..:: Criando Tabela Paginas ::..";

$tab_txt = "CREATE TABLE IF NOT EXISTS paginas (
		       	pag_id int(11) NOT NULL AUTO_INCREMENT,
		       	pag_modulo varchar(10) NOT NULL,
  				pag_conteudo text,
  			PRIMARY KEY (pag_id))";

$conect->query($tab_txt);
echo "OK! <br>";

echo "..:: Criando Tabela Usuarios ::..";

$tab_txt = "CREATE TABLE IF NOT EXISTS usuarios (
		       	usu_id int(11) NOT NULL AUTO_INCREMENT,
		       	usu_login varchar(10) NOT NULL,
  				usu_senha varchar(60),
  			PRIMARY KEY (usu_id))";

$conect->query($tab_txt);
echo "OK! <br>";


echo "..:: Limpando a Tabela Paginas ::..";
$conect->query("TRUNCATE TABLE paginas");
echo "OK! <br>";

echo "..:: Limpando a Tabela Usuarios ::..";
$conect->query("TRUNCATE TABLE usuarios");
echo "OK! <br>";


echo "..:: Inserindo dados na Tabela Paginas ::..";

$pag_modulo   = "HOME";
$pag_conteudo = "Pagina home, texto de exemplo : para mim as horas são curtas e os dias pequenos. por mais longas que sejam as horas e maiores que sejam dos dias, não são suficientes para satisfazer a vontade que sinto de estar sempre com você.";
$grv_exe = $conect->prepare('INSERT INTO paginas (pag_modulo, pag_conteudo) VALUES (:mod, :txt)');
$grv_exe->bindValue(":mod", $pag_modulo);
$grv_exe->bindValue(":txt", $pag_conteudo);
$grv_exe->execute();

$pag_modulo   = "EMPRESA";
$pag_conteudo = "Pagina empresa, texto de exemplo  : Eu moro na rua da saudade, que faz esquina com a rua da espera. Longas horas, dias intermináveis e noites que nunca acabam, esperando pra te ver chegar sorrindo e cheia de abraços ternos, com aquele carinho e aquela segurança que só nos teus braços eu encontro.";
$grv_exe = $conect->prepare('INSERT INTO paginas (pag_modulo, pag_conteudo) VALUES (:mod, :txt)');
$grv_exe->bindValue(":mod", $pag_modulo);
$grv_exe->bindValue(":txt", $pag_conteudo);
$grv_exe->execute();

$pag_modulo   = "PRODUTOS";
$pag_conteudo = "Pagina produtos, texto de exemplo  : adoro nossas longas horas de conversas, nossas trocas de olhares, dedos que se entrelaçam como que por acaso, e sorrisos que contagiam, junto as lágrimas tão sinceras, quase se pedi: me cuida, porém nada falamos, no entanto fazemos isso. nossos segredos não conto pra ninguém.";
$grv_exe = $conect->prepare('INSERT INTO paginas (pag_modulo, pag_conteudo) VALUES (:mod, :txt)');
$grv_exe->bindValue(":mod", $pag_modulo);
$grv_exe->bindValue(":txt", $pag_conteudo);
$grv_exe->execute();

$pag_modulo   = "SERVICOS";
$pag_conteudo = "Pagina serviços, texto de exemplo  : eu quero que você volte e me leve para casa para longe destas longas noites solitárias estou tentando te alcançar, você está sentindo também ? será que o sentimento parece tão certo ?";
$grv_exe = $conect->prepare('INSERT INTO paginas (pag_modulo, pag_conteudo) VALUES (:mod, :txt)');
$grv_exe->bindValue(":mod", $pag_modulo);
$grv_exe->bindValue(":txt", $pag_conteudo);
$grv_exe->execute();

echo "OK! <br>";

echo "..:: Inserindo dados na Tabela Usuarios ::..";

$txt_login   = "admin";
$txt_senha   = password_hash('admin', PASSWORD_DEFAULT);
$grv_exe = $conect->prepare('INSERT INTO usuarios (usu_login, usu_senha) VALUES (:lgn, :psw)');
$grv_exe->bindValue(":lgn", $txt_login);
$grv_exe->bindValue(":psw", $txt_senha);
$grv_exe->execute();

echo "OK! <br>";
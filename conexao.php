<?php

function conexaoDB() {

	try {

        $config = require_once('config.php');

        if(! isset($config['db'])) {
            throw new \InvalidArgumentException("Configuração do Banco de Dados não existe !");
        }

        $host   = (isset($config['db']['host'])     ? $config['db']['host']     : null );
        $dbname = (isset($config['db']['dbname'])   ? $config['db']['dbname']   : null );
        $user   = (isset($config['db']['user'])     ? $config['db']['user']     : null );
        $passwr = (isset($config['db']['password']) ? $config['db']['password'] : null );

        $txt_conect = "mysql:host=".$host.";dbname=".$dbname;
		

        return new \PDO($txt_conect, $user , $passwr);


		} catch(\PDOException $e) {
			echo $e->getMessage()."\n";
			echo $e->getTraceAsString()."\n";
		}
}


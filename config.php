<?php 
// error_reporting(0);
	require __DIR__ . '/vendor/autoload.php';

/*CONSTANTES*/
	$pasta_instalacao = 'projeto1';
	$dominio = $_SERVER['SERVER_NAME'];
	$protocolo = stripos($_SERVER['SERVER_PROTOCOL'],'https') === true ? 'https://' : 'http://';
	$url_principal = $protocolo . $dominio;
	$caminho_dominio = $url_principal . '/' . $pasta_instalacao;
	
	define("CAMINHO_DOMNIO",$caminho_dominio);
	define('JQUERY','<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>');
/*MAILER*/
	define('MAIL_HOST','smtp.gmail.com');
	define('MAIL_USER_NAME','kaioangelino@gmail.com');
	define('MAIL_PASS','kaioiak99');
	define('MAIL_FROM','kaioangelino@gmail.com	');
	define('MAIL_FROM_NAME','Kaio');
	define('MAIL_SUBJECT','#');

	$banco = 'local';

	switch ($banco) {
		case 'local':
			define('HOST','localhost');
			define('DB_NAME','landing_page');
			define('USER_NAME','root');
			define('PASSWORD','');
			session_start();
			break;
		
		case 'homologacao':
			// define('HOST','NANANAN');
			// define('DB_NAME','NANANAN');
			// define('USER_NAME','NANANAN');
			// define('PASSWORD','NANANAN');
			session_start();
			break;

		case 'producao':
			// define('HOST','NANANAN');
			// define('DB_NAME','NANANAN');
			// define('USER_NAME','NANANAN');
			// define('PASSWORD','NANANAN');
			session_start();
			break;
	}
 ?>
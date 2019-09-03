<?php 
	namespace App\Controller;
	/**
	 * @var $conn
	 */
	class MainDao
	{
		private $host = HOST;
		private $banco = DB_NAME;
		private $username = USER_NAME;
		private $password = PASSWORD;
		public  $conn;

		public function __construct()
		{
			# code...
			$this->getConnection();
		}

		public function getConnection()
		{
			$this->conn = NULL;
			try {
				$this->conn = new \PDO("mysql:host=" . $this->host . ";dbname=" . $this->banco, $this->username, $this->password, array(\PDO::ATTR_PERSISTENT => true));
				$this->conn->query("SET NAMES 'utf8'");
				$this->conn->query('SET character_set_connection=utf8');
				$this->conn->query('SET character_set_client=utf8');
				$this->conn->query('SET character_set_results=utf8');

				// $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass, array(PDO::ATTR_PERSISTENT => true));
			} catch (\PDOException $e) {

				print "Error!: " . $e->getMessage() . "<br/>";
    			die();
			}
			return $this->conn;
		}
		public function dataHora()
		{
			date_default_timezone_set('America/Sao_Paulo');
			$data = date("Y-m-d H:i:s");
			return $data;
		}
		public static function enviaEmail($nome, $email, $token, $senhaTmp, $subject, $tipo_email, $dados = '')
		{
			try {
				// include_once 'vendor/phpmailer/phpmailer/src/PHPMailer.php';
				$mail = new \PHPMailer\PHPMailer\PHPMailer();
				$mail->CharSet = 'UTF-8';
				$mail->IsSMTP(); //tell the class to use SMTP
				$mail->Host = MAIL_HOST; // SMTP servidor
				$mail->SMTPAuth = true; // enable SMTP authentication
				$mail->Username = MAIL_USER_NAME;  // SMTP  usu�rio
				$mail->Password = MAIL_PASS;  // SMTP senha
				$mail->SMTPSecure = 'TLS';
				$mail->Port = 587; //SMTP porta (as mais utilizadas s�o '25' e '587'
				 
				$mail->IsSendmail();  
				 
				$mail->AddReplyTo($email, $nome); //Responder para..
				$mail->From = MAIL_FROM; //e-mail fornecido pelo cliente
				$mail->FromName   = MAIL_FROM_NAME; //nome fornecido pelo cliente
				
				$mail->IsHTML(true); // send as HTML
				$mail->Subject  = $subject; //Assunto
				 
				$mail->AddAddress($email, $nome); 
				$mail->WordWrap   = 80; // set word wrap
				switch ($tipo_email) {
					case 'email_cadastro_de_usuario':
						$formulario = self::email_cadastro_de_usuario($nome,$token,$senhaTmp,$dados);
						break;
					
					case 'email_erro_de_cadastro':
						$formulario = self::email_erro_de_cadastro($nome,$token,$senhaTmp,$dados);
						break;
					case 'email_recuperar_senha':
						$formulario = self::email_recuperar_senha($nome,$token,$senhaTmp,$dados);
					break;
				}
				
				
				$mail->MsgHTML($formulario);
				 
				 
				$resultado = $mail->Send();
				return $resultado;
			} catch (Exception $e) {
				return $resultado . '<';
			}
		}
		public static function email_cadastro_de_usuario($nome, $token, $senhaTmp, $dados = '')
		{
			$codHtml = '
			Clica nesse link para confirmar seu e-mail!<br>

			<a href="'.CAMINHO_DOMNIO.'obrigado?tk='.token.'"">Clique Aqui!</a>';
			return $codHtml;
		}

	}
?>
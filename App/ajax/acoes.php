<?php

use App\Controller\MainDao;

require '../../config.php';
	if(isset($_POST)):
		switch ($_POST['acao']) {
			case 'enviar_dados':
			$usu_model = new App\Controller\Usu_usuarioModel();
			$usu_ctrl = new App\Controller\Usu_usuarioController();
			$main_dao = new App\Controller\MainDao();

			$usu_model->set_usu_id(NULL);
			$usu_model->set_usu_nome($_POST['home_nome']);
			$usu_model->set_usu_email($_POST['home_email']);
			$usu_model->set_usu_whatsapp($_POST['home_whatsapp']);
			$usu_model->set_usu_token('lkjg2hkjh4lkj423h4523542jkl352kj35hl2k3j5h23');
			$usu_model->set_usu_status('I');
			$data = $main_dao->data();
			$usu_model->set_usu_data($data);
			$usu_model->set_usu_data_atlz($data);

//Cadastro de Usuário			
			$result = $usu_ctrl->usu_usuarioCreate($usu_model);
//Envio de Email
			MainDao->enviaEmail($usu_model->get_usu_nome(),$usu_model->get_usu_email(),
								$usu_model->get_usu_token(),
								'',"Cadastro realizado com sucesso",'email_cadastro_de_usuario',"");
				if ($result) {
					echo 1;
				}else{
					echo 0;
				}
				break;
			
			case 'ACAO_2':
				echo 'SEU CÓDIGO AQUI';
				
				break;
		}

	else:


	endif;
 ?>
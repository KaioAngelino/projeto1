<?php 
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


			$usu_model->set_usu_token();
			$usu_model->set_usu_status($_POST['I']);
			$data = $main_dao->data();
			$usu_model->set_usu_data($_POST[$data]);
			$usu_model->set_usu_data_atlz($_POST[$data]);

			$result = $usu_ctrl->usu_usuarioCreate($usu_model);
				var_dump($result);
				break;
			
			case 'ACAO_2':
				echo 'SEU CÓDIGO AQUI';
				
				break;
		}

	else:


	endif;
 ?>
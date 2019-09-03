<?php

if (isset($_GET['tk'])) {
	$usu_model = new App\Controller\Usu_usuarioModel();;
	$usu_ctrl = new App\Controller\Usu_usuarioController();
	$mainDao = new App\Controller\MainDao();

	$usu_model->set_usu_token($_GET['tk']);
	$result = $usu_ctrl->usu_usuarioReadByToken($usu_model);

	if ($result !=NULL) {
		$usu_model->set_usu_status('A');
		$usu_model->set_usu_id($result['usu_id']);
		$usu_ctrl->usu_usuarioUpdateStatusByToken($usu_model);
	}
}


$smarty = new SmartyBC();
$smarty->setTemplateDir('App/View');
$smarty->display('obrigado.html');
?>
<?php

if (isset($_GET['tk'])) {
	$usu_model = new App\Controller\Usu_usuarioModel();;
	$usu_ctrl = new App\Controller\Usu_usuarioController();
	$usu_model->set_usu_token($_GET['tk']);
	$result = $usu_ctrl->usu_usuarioReadByToken($usu_model);
	$nome = $result['usu_nome'];

}else{
	$nome = '';
}
	

	/*if ($result !=NULL) {
		$usu_model->set_usu_status('A');
		$usu_model->set_usu_id($result['usu_id']);
		$usu_ctrl->usu_usuarioUpdateStatusByToken($usu_model);
	}*/



$smarty = new SmartyBC();
$smarty->setTemplateDir('App/View');
$smarty->assign('NOME',$nome);
$smarty->display('obrigado.html');
?>
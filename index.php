<?php 

	require __DIR__ . '/config.php';
	$bootstrap = BOOTSTRAP;
	$smarty = new SmartyBC();
	$smarty->setTemplateDir('App/View');
	$smarty->assign('BOOTSTRAP',$bootstrap);
	$smarty->display('index.html');
 ?>
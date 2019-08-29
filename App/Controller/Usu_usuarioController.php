<?php 
namespace App\Controller;
class Usu_usuarioController 
{ 
	private $model;
	private $dao;
	public function __construct()
	{ 
		$this->model = new Usu_usuarioModel();
		$this->dao = new Usu_usuarioDao();
	} 
	public function usu_usuarioCreate(Usu_usuarioModel $obj) 
	{ 
		return $this->dao->usu_usuarioCreate($obj); 
	} 
	public function usu_usuarioRead(Usu_usuarioModel $obj) 
	{ 
		return $this->dao->usu_usuarioRead($obj); 
	} 
	public function usu_usuarioReadById(Usu_usuarioModel $obj) 
	{ 
		return $this->dao->usu_usuarioReadById($obj); 
	} 
	public function usu_usuarioUpdate(Usu_usuarioModel $obj) 
	{ 
		return $this->dao->usu_usuarioUpdate($obj); 
	} 
	public function usu_usuarioDelete(Usu_usuarioModel $obj) 
	{ 
		return $this->dao->usu_usuarioDelete($obj); 
	} 
} 

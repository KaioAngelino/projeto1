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
	public function usu_usuarioReadByToken(Usu_usuarioModel  $obj){
		return $this->dao->usu_usuarioReadByToken($obj); 
	} 
	public function usu_usuarioUpdateStatusByToken(Usu_usuarioModel  $obj){
		return $this->dao->usu_usuarioUpdateStatusByToken($obj); 
	}
	public function hash($password){
		return $this->dao->hash($password);
	}
	public function verify($password, $hash){
		return $this->dao->password_verify($password, $hash);
	}
} 

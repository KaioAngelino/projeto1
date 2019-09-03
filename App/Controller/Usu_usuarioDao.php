<?php

namespace App\Controller;

class Usu_usuarioDao extends MainDao
{
	public function usu_usuarioCreate(Usu_usuarioModel  $obj)
	{
		try {
			$this->conn->beginTransaction();
			$usu_id		= $obj->get_usu_id();
			$usu_nome		= $obj->get_usu_nome();
			$usu_email		= $obj->get_usu_email();
			$usu_whatsapp		= $obj->get_usu_whatsapp();
			$usu_token		= $obj->get_usu_token();
			$usu_status		= $obj->get_usu_status();
			$usu_data		= $obj->get_usu_data();
			$usu_data_atlz		= $obj->get_usu_data_atlz();
			$query = 'INSERT INTO usu_usuario ( usu_id,usu_nome,usu_email,usu_whatsapp,usu_token,usu_status,usu_data,usu_data_atlz ) VALUES ( :usu_id,:usu_nome,:usu_email,:usu_whatsapp,:usu_token,:usu_status,:usu_data,:usu_data_atlz ); ';
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(':usu_id', $usu_id, \PDO::PARAM_STR);
			$stmt->bindParam(':usu_nome', $usu_nome, \PDO::PARAM_STR);
			$stmt->bindParam(':usu_email', $usu_email, \PDO::PARAM_STR);
			$stmt->bindParam(':usu_whatsapp', $usu_whatsapp, \PDO::PARAM_STR);
			$stmt->bindParam(':usu_token', $usu_token, \PDO::PARAM_STR);
			$stmt->bindParam(':usu_status', $usu_status, \PDO::PARAM_STR);
			$stmt->bindParam(':usu_data', $usu_data, \PDO::PARAM_STR);
			$stmt->bindParam(':usu_data_atlz', $usu_data_atlz, \PDO::PARAM_STR);
			if ($stmt->execute()) :
				$this->conn->commit();
				return true;
			else :
				$this->conn->rollback();
				return false;
			endif;
		} catch (Exception $e) {
			$this->conn->rollback();
			return false;
		}
	}
	public function usu_usuarioRead(Usu_usuarioModel  $obj)
	{
		try {
			$this->conn->beginTransaction();
			$query = 'SELECT usu_id,usu_nome,usu_email,usu_whatsapp,usu_token,usu_status,usu_data,usu_data_atlz FROM usu_usuario';
			$stmt = $this->conn->prepare($query);
			$stmt->execute();
			$array = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			if ($array != NULL) :
				$this->conn->commit();
				return $array;
			else :
				$this->conn->rollback();
				return false;
			endif;
		} catch (Exception $e) {
			$this->conn->rollback();
			return false;
		}
	}
	public function usu_usuarioReadById(Usu_usuarioModel  $obj)
	{
		try {
			$this->conn->beginTransaction();
			$usu_id		= $obj->get_usu_id();
			$query = 'SELECT usu_id,usu_nome,usu_email,usu_whatsapp,usu_token,usu_status,usu_data,usu_data_atlz FROM usu_usuario WHERE usu_id = :usu_id';
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(':usu_id', $usu_id, \PDO::PARAM_STR);
			$stmt->execute();
			$array = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			if ($array != NULL) {
				$this->conn->commit();
				return $array;
			} else {
				$this->conn->rollback();
				return false;
			}
		} catch (Exception $e) {
			$this->conn->rollback();
			return false;
		}
	}
	public function usu_usuarioUpdate(Usu_usuarioModel  $obj)
	{
		try {
			$this->conn->beginTransaction();
			$usu_id		= $obj->get_usu_id();
			$usu_nome		= $obj->get_usu_nome();
			$usu_email		= $obj->get_usu_email();
			$usu_whatsapp		= $obj->get_usu_whatsapp();
			$usu_token		= $obj->get_usu_token();
			$usu_status		= $obj->get_usu_status();
			$usu_data		= $obj->get_usu_data();
			$usu_data_atlz		= $obj->get_usu_data_atlz();
			$query = 'UPDATE usu_usuario SET usu_id = :usu_id,usu_nome = :usu_nome,usu_email = :usu_email,usu_whatsapp = :usu_whatsapp,usu_token = :usu_token,usu_status = :usu_status,usu_data = :usu_data,usu_data_atlz = :usu_data_atlz WHERE usu_id = :usu_id';
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(':usu_id', $usu_id, \PDO::PARAM_STR);
			$stmt->bindParam(':usu_nome', $usu_nome, \PDO::PARAM_STR);
			$stmt->bindParam(':usu_email', $usu_email, \PDO::PARAM_STR);
			$stmt->bindParam(':usu_whatsapp', $usu_whatsapp, \PDO::PARAM_STR);
			$stmt->bindParam(':usu_token', $usu_token, \PDO::PARAM_STR);
			$stmt->bindParam(':usu_status', $usu_status, \PDO::PARAM_STR);
			$stmt->bindParam(':usu_data', $usu_data, \PDO::PARAM_STR);
			$stmt->bindParam(':usu_data_atlz', $usu_data_atlz, \PDO::PARAM_STR);
			if ($stmt->execute()) {
				$this->conn->commit();
				return true;
			} else {
				$this->conn->rollback();
				return false;
			}
		} catch (Exception $e) {
			$this->conn->rollback();
			return false;
		}
	}
	public function usu_usuarioUpdateStatusById(Usu_usuarioModel  $obj)
	{
		try {
			$this->conn->beginTransaction();
			$usu_id		= $obj->get_usu_id();
			$usu_status		= $obj->get_usu_status();
		
			$query = 'UPDATE usu_usuario SET usu_id = :usu_id,usu_status = :usu_status 
			WHERE usu_id = :usu_id';
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(':usu_id', $usu_id, \PDO::PARAM_STR);
			$stmt->bindParam(':usu_status', $usu_status, \PDO::PARAM_STR);
			if ($stmt->execute()) {
				$this->conn->commit();
				return true;
			} else {
				$this->conn->rollback();
				return false;
			}
		} catch (Exception $e) {
			$this->conn->rollback();
			return false;
		}
	}
	public function usu_usuarioDelete(Usu_usuarioModel  $obj)
	{
		try {
			$this->conn->beginTransaction();
			$usu_id		= $obj->get_usu_id();
			$query = 'DELETE FROM usu_usuario WHERE usu_id = :usu_id';
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(':usu_id', $usu_id, \PDO::PARAM_STR);
			if ($stmt->execute()) {
				$this->conn->commit();
				return true;
			} else {
				$this->conn->rollback();
				return false;
			}
		} catch (Exception $e) {
			$this->conn->rollback();
			return false;
		}
	}
	public function usu_usuarioReadByToken(Usu_usuarioModel  $obj)
	{
		try {
			$this->conn->beginTransaction();
			$usu_token		= $obj->get_usu_token();
			$query = 'SELECT usu_id,usu_nome,usu_email,usu_whatsapp,usu_token,usu_status,usu_data,usu_data_atlz FROM usu_usuario WHERE usu_token = :usu_token';
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(':usu_token', $usu_token, \PDO::PARAM_STR);
			$stmt->execute();
			$array = $stmt->fetchAll(\PDO::FETCH_ASSOC);
			if ($array != NULL) {
				$this->conn->commit();
				return $array[0];
			} else {
				$this->conn->rollback();
				return false;
			}
		} catch (Exception $e) {
			$this->conn->rollback();
			return false;
		}
	}
}

<?php 
namespace App\Controller;
class ExemploDao extends MainDao
{
	public function __construct()
	{
		parent::__construct();

	}
	public function exemploCreate(DigitalModel $obj)
	{
		try {
			$this->conn->beginTransaction();
			$campo_id 			= $obj->get_campo_id();
			
			$query = 'INSERT INTO exemplo (campo_id) VALUES (:campo_id)' ;

			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(':campo_id',$campo_id,\PDO::PARAM_STR);
			
			if($stmt->execute())
			{
				$this->conn->commit();
				return 1;

			}else{
				$this->conn->rollback();
				return 0;
			}
			
		} catch (Exception $e) {
			$this->conn->rollback();
			return false;
		}

	}

	public function exemploRead()
	{
		try {
			$this->conn->beginTransaction();

			$query = 'SELECT campo_id FROM exemplo ';
			$stmt = $this->conn->prepare($query);

			$stmt->execute();
			$array = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			if($array != NULL)
			{
				$this->conn->commit();
				return $array;
			}else
			{
				$this->conn->rollback();
				return 0;
			}
		} catch (Exception $e) {
			$this->conn->rollback();
			return 0;
		}	
	}

	public function exemploReadById(DigitalModel $obj)
	{
		try {
			$this->conn->beginTransaction();
			$dig_id 	= $obj->getDig_id(); 

			$query = 'SELECT campo_id FROM exemplo 
			WHERE campo_id = :campo_id';
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(':campo_id',$campo_id,\PDO::PARAM_STR);
			$stmt->execute();
			$array = $stmt->fetchAll(\PDO::FETCH_ASSOC);

			if($array != NULL)
			{
				$this->conn->commit();
				return $array;
			}else
			{
				$this->conn->rollback();
				return 0;
			}
		} catch (Exception $e) {
			$this->conn->rollback();
			return 0;
		}	
	}
	
	public function exemploUpdate(DigitalModel $obj)
	{
		try {
			$this->conn->beginTransaction();
			$campo_id 			= $obj->get_campo_id();
			
			$query = 'UPDATE exemplo  SET  campo_id = :campo_id	WHERE campo_id = :campo_id '; 
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(':campo_id',$campo_id,\PDO::PARAM_STR);
			
			if($stmt->execute())
			{
				$this->conn->commit();
				return true;

			}else{
				$this->conn->rollback();
				return false;
			}
		} catch (Exception $e) {
			$this->conn->rollback();
			return false;
		}

	}
	public function exemploDelete(DigitalModel $obj)
	{
		try {
			$this->conn->beginTransaction();
			$campo_id 			= $obj->get_campo_id();

			$query = 'DELETE FROM exemplo WHERE campo_id = :campo_id';
			$stmt = $this->conn->prepare($query);
			$stmt->bindParam(':campo_id',$campo_id,\PDO::PARAM_STR);
			if($stmt->execute())
			{
				$this->conn->commit();
				return 1;
			}else
			{
				$this->conn->rollback();
				return 0;
			}
		} catch (Exception $e) {
			$this->conn->rollback();
			return 0;
		}
	}
	
}
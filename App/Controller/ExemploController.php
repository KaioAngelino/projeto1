<?php
	namespace App\Controller;
	class ExemploController
	{
		private $model;
	 	private $dao;

		public function __construct()
		{
			$this->model = new ExemploModel();
			$this->dao 	= new ExemploDao();
		}

		public function exemploCreate(ExemploModel $obj) 
		{
			return $this->dao->exemploCreate($obj);
		}
		public function exemploRead()
		{
			return $this->dao->exemploRead();
		}
		public function exemploReadById(ExemploModel $obj)
		{
			return $this->dao->exemploReadById($obj);
		}
		public function exemploUpdate(ExemploModel $obj)
		{
			return $this->dao->exemploUpdate($obj);
		}
		public function exemploDelete(ExemploModel $obj)
		{
			return $this->dao->exemploDelete($obj);
		}
		
		
	}
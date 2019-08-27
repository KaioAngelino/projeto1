<?php 

	namespace App\Controller;
	/**
	 * 
	 */
	class ExemploModel
	{
		
		private $campo_id;

		// get setters

		public function get_campo_id()
		{
			return $this->campo_id;

		}
		public function set_campo_id($campo_id)
		{
			$this->campo_id = $campo_id;

		}
	}
?>
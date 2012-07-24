<?php
	class Blaherdex
	{
		private $objDatabase;
		
		public function __construct(PDO $objDatabase)
		{
			$this->objDatabase=$objDatabase;
			
			echo 'test';
		}
	}
?>
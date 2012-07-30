<?php
	class Blaherdex
	{
		private $objDatabase, $objYQL;
		
		public function __construct(PDO $objDatabase)
		{
			$this->objDatabase=$objDatabase;
			$this->objYQL=new YQL();
			
			echo 'test';
			
			$var=$this->objYQL->query
			(
				'SELECT *
					FROM yahoo.finance.quotes
					WHERE symbol IN ("YHOO","AAPL","GOOG","MSFT")
				;'
			);var_dump($var);
		}
	}
?>
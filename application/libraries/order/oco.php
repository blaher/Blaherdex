<?php
	require_once('application/libraries/stockorder.php');

	class OCO
	{
		public $stop, $limit;
		
		public function __construct($strStock)
		{
			$this->stop=new StockOrder($strStock);
			$this->stop->type='Stop Limit';
			$this->stop->duration='GTC';
			$this->stop->transaction='STC';
			
			$this->limit=new StockOrder($strStock);
			$this->limit->type='Limit';
			$this->limit->duration='GTC';
			$this->limit->transaction='STC';
		}
	}
?>
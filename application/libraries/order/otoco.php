<?php
	require_once('application/libraries/stockorder.php');

	class OTOCO
	{
		public $buy, $stop, $limit;
		
		public function __construct($strStock)
		{
			$this->buy=new StockOrder($strStock);
			$this->buy->type='Limit';
			$this->buy->duration='GTC';
			$this->buy->transaction='BTO';
			
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
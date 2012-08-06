<?php
	require_once('application/libraries/yql.php');

	class Stock
	{
		protected $data;
		
		public function __construct($strStock)
		{
			$objYQL=new YQL
			(
				'SELECT Symbol, StockExchange, Name, Open, PreviousClose,
						Ask, AskRealtime, Bid, BidRealtime,
						DividendShare, ExDividendDate, DividendYield,
						YearLow, YearHigh, HighLimit, LowLimit
					FROM yahoo.finance.quotes
					WHERE symbol="'.$strStock.'"
				'
			);
			$objYQL->execute();
			$this->data=$objYQL->fetchAll();
			$this->data=$this->data->quote;
		}
		
		public function __get($name)
		{
			if ($name=='Bid')
			{
				if (!$this->data->{$name})
				{
					return floatval($this->data->BidRealtime);
				}
				
				return floatval($this->data->{$name});
			}
			else if ($name=='Ask')
			{
				if (!$this->data->{$name})
				{
					return floatval($this->data->AskRealtime);
				}
				
				return floatval($this->data->{$name});
			}
			
			return $this->data->{$name};
		}
	}
?>
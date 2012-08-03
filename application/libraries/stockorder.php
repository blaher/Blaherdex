<?php
	class StockOrder
	{
		protected $data;

		public function __construct($strStock)
		{
			$this->data=array
			(
				'stock'=>$strStock,
				'price'=>0,
				'limit'=>0,
				'type'=>'',
				'duration'=>'',
				'transaction'=>'',
				'qty'=>0
			);
		}
		
		public function __get($name)
		{
			return $this->data[$name];
		}
		
		public function __set($name, $value)
		{
			if (isset($this->data[$name]) && $name!='stock')
			{
				switch ($name)
				{
					case 'price':
						if (is_float($value) || is_integer($value))
						{
							$this->data[$name]=$value;
							return true;
						}
					case 'limit':
						if (is_float($value) || is_integer($value))
						{
							$this->data[$name]=$value;
							return true;
						}
					case 'type':
						if
						(
							strtolower($value)=='market'
							|| strtolower($value)=='limit'
							|| strtolower($value)=='stop'
							|| strtolower($value)=='stop limit'
						)
						{
							$this->data[$name]=$value;
							return true;
						}
					case 'duration':
						if
						(
							strtolower($value)=='day'
							|| strtolower($value)=='gtc'
							|| strtolower($value)=='ioc'
						)
						{
							$this->data[$name]=$value;
							return true;
						}
					case 'transaction':
						if
						(
							strtolower($value)=='bto'
							|| strtolower($value)=='stc'
						)
						{
							$this->data[$name]=$value;
							return true;
						}
					case 'qty':
						if (is_integer($value) && $value>0)
						{
							$this->data[$name]=$value;
							return true;
						}
				}
			}
			return false;
		}
	}
?>
<?php
	class Order_model extends CI_Model
	{
		public function __construct(){}
		
		public function OTOCO
		(
			$strStock,
			$fltLimit,
			$fltStopMargin,
			$fltLimitMargin,
			$fltCommission
		)
		{
			$aryOTOCO=array
			(
				'buy'=>array
				(
					'stock'=>$strStock,
					'price'=>0,
					'type'=>'Limit',
					'duration'=>'GTC',
					'transaction'=>'BTO',
					'qty'=>0
				),
				'stop'=>array
				(
					'stock'=>$strStock,
					'price'=>0,
					'type'=>'Stop',
					'duration'=>'GTC',
					'transaction'=>'STC',
					'qty'=>0
				),
				'limit'=>array
				(
					'stock'=>$strStock,
					'price'=>0,
					'type'=>'Limit',
					'duration'=>'GTC',
					'transaction'=>'STC',
					'qty'=>0
				)
			);
			
			//START get stock price
			$fltStockPrice=12.78;
			//END get stock price
			$aryOTOCO['buy']['price']=$fltStockPrice;
			
			$intStockCount=floor($fltLimit/$fltStockPrice);
			$aryOTOCO['buy']['qty']=$intStockCount;
			$aryOTOCO['stop']['qty']=$intStockCount-1;
			
			$aryOTOCO['stop']['price']=floor
			(
				($fltStockPrice*(1-$fltStopMargin))*100
			)/100;
			unset($fltStockPrice);
			$fltPrice=ceil
			(
				(
					(
						($fltLimit*(1+$fltLimitMargin))+(2*$fltCommission)
					)/$intStockCount
				)*100
			)/100;
			$aryOTOCO['limit']['price']=$fltPrice;
			
			for
			(
				$i=1; $fltLimit<($fltPrice*$intStockCount)-($fltPrice*$i); $i++
			){}
			$i--;
			if ($i==$intStockCount)
			{
				$i=0;
			}
			$aryOTOCO['limit']['qty']=$i;
			unset($intStockCount, $fltPrice, $i);
			
			return $aryOTOCO;
		}
		
		public function OCO
		(
			$strStock,
			$fltLimit,
			$fltStopMargin,
			$fltLimitMargin,
			$fltCommission
		)
		{
			return 'happy days';
		}
	}
?>
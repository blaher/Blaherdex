<?php
	require_once('application/libraries/order/oco.php');
	require_once('application/libraries/order/otoco.php');

	class Order_model extends CI_Model
	{
		public function OTOCO
		(
			$strStock,
			$fltLimit,
			$fltStopMargin,
			$fltLimitMargin,
			$fltCommission
		)
		{
			$objOTOCO=new OTOCO($strStock);
			
			//START get stock price
			$fltStockPrice=12.78;
			//END get stock price
			$objOTOCO->buy->price=$fltStockPrice;
			
			$intStockCount=floor($fltLimit/$fltStockPrice);
			$objOTOCO->buy->qty=$intStockCount;
			$objOTOCO->stop->qty=$intStockCount-1;
			
			$fltPrice=floor
			(
				($fltStockPrice*(1-$fltStopMargin))*100
			)/100;
			$objOTOCO->stop->price=$fltPrice;
			$objOTOCO->stop->limit=floor($fltPrice*0.9*100)/100;
			unset($fltStockPrice);
			
			$fltPrice=ceil
			(
				(
					(
						($fltLimit*(1+$fltLimitMargin))+(2*$fltCommission)
					)/$intStockCount
				)*100
			)/100;
			$objOTOCO->limit->price=$fltPrice;
			
			for
			(
				$i=1; $fltLimit<($fltPrice*$intStockCount)-($fltPrice*$i); $i++
			){}
			$i--;
			if ($i==$intStockCount)
			{
				$i=0;
			}
			$objOTOCO->limit->qty=$i;
			unset($intStockCount, $fltPrice, $i);
			
			return $objOTOCO;
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
			$objOCO=new OTOCO($strStock);
			
			//TODO: Order_Model->OCO()
			
			return $objOCO;
		}
	}
?>
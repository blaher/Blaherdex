<?php
	require_once('application/libraries/order/oco.php');
	require_once('application/libraries/order/otoco.php');
	require_once('application/libraries/stock.php');

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

			$objStock=new Stock($strStock);
			$fltStockPrice=$objStock->Ask;
			$objOTOCO->buy->price=$fltStockPrice;
			
			$intStockCount=(int)floor($fltLimit/$fltStockPrice);
			if (!$intStockCount)
			{
				$intStockCount=1;
			}
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
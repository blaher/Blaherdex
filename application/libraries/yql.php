<?php
	require_once('application/libraries/rest.php');

	class YQL
	{
		private $objRest;
		
		public function __construct($strQuery)
		{
			$strURL
				='http://query.yahooapis.com/v1/public/yql?q='
					.urlencode($strQuery)
					.'&diagnostics=true'
					.'&env=http%3A%2F%2Fdatatables.org%2Falltables.env'
			;
			
			$this->objRest=new RestRequest($strURL);
		}
		
		public function execute()
		{
			$this->objRest->execute();
		}
		
		public function fetchAll()
		{
			$objJSON=json_decode($this->objRest->getResponseBody());
			$objResults=$objJSON->query->results;
			unset($objJSON);
			
			return $objResults;
		}
	}
?>
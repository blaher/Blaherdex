<?php
	class YQL
	{
		public function __construct()
		{
			// Do I need to do anything here?
		}
		
		public function query($strQuery)
		{
			$strURL
				='http://query.yahooapis.com/v1/public/yql?q='
					.urlencode($strQuery)
					.'&diagnostics=true'
					.'&env=http%3A%2F%2Fdatatables.org%2Falltables.env'
			;
			
			return $strURL;
		}
	}
?>
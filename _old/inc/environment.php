<?php
	include ('config.php');

	function __autoload($strClass)
	{
		include('lib/'.strtolower($strClass).'.php');
	}

	$objDB=new PDO
	(
		'mysql:host='.$database['host'].';dbname='.$database['database'],
		$database['user'],
		$database['password']
	);
	unset($database);

	$objBlaherdex=new Blaherdex($objDB);
?>
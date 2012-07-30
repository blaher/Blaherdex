<?php
	include('application/libraries/basepath.php');
	
	class Order extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			echo 'Order page';
		}
	}
?>
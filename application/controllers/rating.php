<?php
	include('application/libraries/basepath.php');
	
	class Rating extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			echo 'Rating page';
		}
	}
?>
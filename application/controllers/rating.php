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
			$this->load->view('rating/index', $data);
		}
	}
?>
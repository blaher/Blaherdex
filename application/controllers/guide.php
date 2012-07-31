<?php
	include('application/libraries/basepath.php');
	
	class Guide extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}
		
		public function index()
		{
			$this->load->view('guide/index', $data);
		}
	}
?>
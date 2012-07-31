<?php
	include('application/libraries/basepath.php');
	
	class Blaherdex extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$data['title']='BlaherDex - Stock Ratings, Trading Tools, and Financial Savings Guide';
			
			$this->load->view('blaherdex/index', $data);
		}
	}
?>
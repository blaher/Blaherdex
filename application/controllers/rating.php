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
			$data=array();
			$data['title']='BlaherDex - Rating Index';
			$data['description']='';
			$data['keywords']='';
			$data['heading']='Rating Index';
			
			$this->load->view('rating/index', $data);
		}
	}
?>
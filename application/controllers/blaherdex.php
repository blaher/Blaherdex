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
			$data=array();
			$data['title']='BlaherDex - Stock Ratings, Trading Tools, and Financial Savings Guide';
			$data['description']='';
			$data['keywords']='blaherdex, stock, index, trading, ratings, prices, financial, saving, tools, guide';
			$data['heading']='Welcome to the Blaherdex!';
			
			$this->load->view('blaherdex/index', $data);
		}
	}
?>
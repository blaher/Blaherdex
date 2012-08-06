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
		
		public function about()
		{
			$data=array();
			$data['title']='BlaherDex - About the BlaherDex';
			$data['description']='';
			$data['keywords']='about';
			$data['heading']='About the BlaherDex';
			
			$this->load->view('blaherdex/about', $data);
		}
		
		public function affiliates()
		{
			$data=array();
			$data['title']='BlaherDex - Listed Affiliates';
			$data['description']='';
			$data['keywords']='affiliate';
			$data['heading']='Affliates';
			
			$this->load->view('blaherdex/affiliates', $data);
		}
		
		public function disclaimer()
		{
			$data=array();
			$data['title']='BlaherDex - Disclaimer and Legal Information';
			$data['description']='';
			$data['keywords']='disclaimer, legal';
			$data['heading']='Disclaimer and Legal Information';
			
			$this->load->view('blaherdex/disclaimer', $data);
		}
	}
?>
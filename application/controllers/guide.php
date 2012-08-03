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
			$data=array();
			$data['title']='BlaherDex - Guide';
			$data['description']='';
			$data['keywords']='';
			$data['heading']='Guide';

			$this->load->view('guide/index', $data);
		}
	}
?>
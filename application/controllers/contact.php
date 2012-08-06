<?php
	include('application/libraries/basepath.php');
	
	class Contact extends CI_Controller
	{
		public function __construct()
		{
			parent::__construct();
		}

		public function index()
		{
			$data=array();
			$data['title']='BlaherDex - Contact the BlaherDex';
			$data['description']='';
			$data['keywords']='contact';
			$data['heading']='Contact BlaherDex';
			
			$this->load->view('contact/index', $data);
		}
		
		public function process()
		{
			$this->load->model('contact_model');
			$this->load->helper('url');
			
			if ($this->contact_model->process())
			{
				redirect('/contact/thankyou');
			}
			else
			{
				redirect('/contact/failed');
			}
		}
		
		public function thankyou()
		{
			$data=array();
			$data['title']='BlaherDex - Thank You';
			$data['description']='';
			$data['keywords']='contact';
			$data['heading']='Thank You for contacting BlaherDex';
			
			$this->load->view('contact/thankyou', $data);
		}
		
		public function failed()
		{
			$data=array();
			$data['title']='BlaherDex - Contact Message Failed';
			$data['description']='';
			$data['keywords']='contact';
			$data['heading']='Failed';
			
			$this->load->view('contact/failed', $data);
		}
	}
?>
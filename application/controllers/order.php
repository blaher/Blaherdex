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
			$this->load->model('order_model');
			$aryOTOCO=$this->order_model->OTOCO('GOOG', 500, 0.2, 0.2, 3.95);
			var_dump($aryOTOCO);
			
			$this->load->view('order/index');
		}
		
		public function start()
		{
			$this->load->model('order_model');
			$aryOTOCO=$this->order_model->OTOCO('GOOG', 500, 0.2, 0.2, 3.95);
			var_dump($aryOTOCO);
			
			$this->load->view('order/index');
		}
		
		public function existing()
		{
			$this->load->model('order_model');
			$aryOCO=$this->order_model->OCO('GOOG', 500, 0.2, 0.2, 3.95);
			var_dump($aryOCO);
			
			$this->load->view('order/index');
		}
	}
?>
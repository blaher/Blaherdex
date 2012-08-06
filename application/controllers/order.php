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
			$data=array();
			$data['title']='BlaherDex - Stock Advanced Ordering Tool';
			$data['description']='';
			$data['keywords']='blaherdex, stock, order, otoco, oco, advanced, tool';
			$data['heading']='Stock Advanced Ordering Tool';
			
			$this->load->view('order/index', $data);
		}
		
		public function start()
		{
			$data=array();
			$data['title']='BlaherDex - OTOCO Order';
			$data['description']='';
			$data['keywords']='otoco, order';
			$data['heading']='OTOCO Order';
			
			$this->load->model('order_model');
			$fltLoss=floatval($_GET['loss'])/100;
			$fltGain=floatval($_GET['gain'])/100;
			$objOTOCO=$this->order_model->OTOCO
			(
				$_GET['stock'],
				$_GET['limit'],
				$fltLoss,
				$fltGain,
				$_GET['commission']
			);
			unset($fltLoss, $fltGain);
			$data['order']=$objOTOCO;
			
			$this->load->view('order/start', $data);
		}
		
		public function existing()
		{
			$data=array();
			$data['title']='BlaherDex - OCO Order';
			$data['description']='';
			$data['keywords']='oco, order';
			$data['heading']='OCO Order';
			
			$this->load->model('order_model');
			$objOCO=$this->order_model->OCO('GOOG', 500, 0.2, 0.2, 3.95);
			
			$this->load->view('order/existing', $data);
		}
	}
?>
<?php 
if (!defined('BASEPATH')) exit('No direct script access allowed');

	class Dashbroard extends CI_Controller
	{

		private $auth;

		public function __construct()
		{
			parent::__construct();
			// $this->auth = $this->cms_authentication->check();

		}


		public function index()
		{
		
			$data['data']['_list_mes']= $this->db->from('cms_mes')->get()->result_array();			
			$data['template'] ='mes/index';
			$this->load->view('layout/index',isset($data)? $data :null);

		}

		public function cms_vsell_import()
		{	

			$this->load->view('mes/insert-list', isset($data) ? $data : null );

			
		}

	}





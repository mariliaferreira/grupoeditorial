<?php
class fluxo extends CI_Controller
	{
		function cab()
			{
				$this->load->view("header/header");
			}
		function index()
			{
				$this->cab();
			}
	}

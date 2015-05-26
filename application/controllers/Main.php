<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {
	
	function __construct() {
		global $db_public;

		parent::__construct();
		$this -> load -> library('form_validation');
		$this -> load -> database();
		$this -> load -> helper('form');
		//$this -> load -> helper('form_sisdoc');
		$this -> load -> helper('url');
		$this -> lang -> load("app", "portuguese");
		$this -> load -> library('session');
		$db_public = 'brapci_public.';
	}
		
	public function index() {
		$this->load->model("baskets");
		
		$this -> load -> view('header/header');
		
		
		/* Logica */
		$data['basket'] = $this->baskets->show();
		
		$this -> load -> view('header/cab',$data);
		
		$this -> load -> view('banners/banner',$data);
		$this -> load -> view('banners/vitrini',$data);
		$this -> load -> view('banners/promocao',$data);
		
		$this -> lang -> line('hello');
		
		$this -> load -> view('header/footer',$data);
	}

}

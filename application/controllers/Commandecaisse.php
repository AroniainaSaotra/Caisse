<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Accueil extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
	}

	public function listeFinProd()
	{
		$this->load->model('Produit');
		$c=new Produit();
		$c=$c->categorieNouriturre();
		$data=array();
		$data["prod"]=$c;
		$data['vue']='commandecaisse.php';
		$this->load->view('template',$data);
	}	
	
}

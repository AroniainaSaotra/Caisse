<?php
class Produit extends CI_Controller{
	function _construct(){

		parent::_construct();
		$this->load->model('ProduitModel');
	}
	function index(){
		$this->load->view('listProd');
	}
	function show() {
		$data= $this->ProduitModel->produitList();
		echo json_encode($data);
	}
	function insert() {
		$data  = $this->ProduitModel->insertProduit();
		echo json_encode($data);
	}

	function update() {
		$data  = $this->ProduitModel->updateProduit();
		echo json_encode($data);
	}

	function delete() {
		$data  = $this->ProduitModel->deleteProduit();
		echo json_encode($data);
	}
}
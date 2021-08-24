<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('BaseController.php');

class Achat extends BaseController {

	public function __construct()
	{
		parent::__construct();
	}

    public function saisie(){ 
		$this->load->model('Produit');
		$this->load->model('DetailsAchat');
	
		$caisse=$this->session->userdata('idCaisse');
		$dt=$this->DetailsAchat->listeAchat($caisse);
		$produit=$this->Produit->listeProduit();

		$data=array();
		$data['idCaisse']=$caisse;
		$data['achat']=$dt;
		$data['produit']=$produit;
		$data['vue']='saisie.php';

		$this->load->view('template',$data);

	}

	public function commande(){
		$this->load->model('Achat');
		$this->load->model('DetailsAchat');
		$this->load->model('Produit');
		$idPro=$this->input->post("produit");
		$nb=$this->input->post("nombre");
		$idCaisse=$this->session->userdata('idCaisse');
		$a=new Achat();
		$a->setIdCaisse($idCaisse);
		$a->setIdProduit($idPro);
		$a->setQuantite($nb);
		$a->insert();

		$d=new DetailsAchat();
		$d=$d->listeAchat($idCaisse);
		$p=new Produit();
		$produit=$p->listeProduit();
		
		$data=array();
        $data['idCaisse']=$idCaisse;
		$data['produit']=$produit;
		$data['achat']=$d;
		$data['vue']='saisie.php';
		$this->load->view('template',$data);
	}

	public function changerCaisse(){
		$this->load->model('Caisse');
		$c=new Caisse();
		$c=$c->listeCaisse();
		$data=array();
		$data["caisse"]=$c;
		$data['vue']='accueil.php';
		$this->session->unset_userdata('idCaisse');
		$this->load->view('template',$data);
	}
	
}

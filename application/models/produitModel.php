<?php
class ProduitModel extends CI_Model{
	function produitList() {
		$req= $this->db->get('produit');
		return $req->result();
	}

	function insereProduit(){
		$data = array(
			'nomProduit' => $this->input->post('nomProduit');
			'categorie' => $this->input->post('categorie');
			'prix' => $this->input->post('prix');
			'quantiteStock' => $this->input->post('quantiteStock');
		);
		$result= $this->db->insert('produit',$data);
		return $result;
	}

	function updateProduit() {
		$idProduit= $this->input->post('idProduit');
		$nomProduit = $this->input->post('nomProduit');
		$categorie = $this->input->post('categorie');
		$prix = $this->input->post('prix');
		$quantiteStock = $this->input->post('quantiteStock');
		$this->db->set('nomProduit', $nomProduit);
		$this->db->set('categorie', $categorie);
		$this->db->set('prix', $prix);
		$this->db->set('quantiteStock', $quantiteStock);
		$result = $this->db->update('produit');
	}

	function deleteProduit() {
		$idProduit= $this->input->post('idProduit');
		$this->db->where('id',$id);
		$result= $this->db->delete('produit');
	}
}
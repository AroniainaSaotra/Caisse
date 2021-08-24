<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
    // require('Mere.php');
    class Achat extends CI_Model{
        private $id;
        private $idCaisse;
        private $idProduit;
        private $quantite;
        private $dateAchat;

        public function insert(){
            $cur='curdate()';
            $req=('insert into achat (idCaisse,idProduit,quantite,dateAchat) VALUES ('.$this->getIdCaisse().','.$this->getIdProduit().','.$this->getQuantite().','.$cur.')');
            $this->db->query($req);
        }
        
        public function getId() { 
            return $this->id; 
        } 

        public function setId($id) {  
            $this->id = $id; 
        } 

        public function getIdCaisse() { 
            return $this->idCaisse; 
        } 

        public function setIdCaisse($idCaisse) {  
            $this->idCaisse = $idCaisse; 
        } 

      

        public function getQuantite() { 
            return $this->quantite; 
        } 

        public function setQuantite($quantite) {  
            $this->quantite = $quantite; 
        } 

        public function getDateAchat() { 
            return $this->dateAchat; 
        } 

        public function setDateAchat($dateAchat) {  
            $this->dateAchat = $dateAchat; 
        } 
    

        public function getIdProduit() { 
            return $this->idProduit; 
        } 

        public function setIdProduit($idProduit) {  
            $this->idProduit = $idProduit; 
        } 
}
?>
<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
    // require('Mere.php');
    class Achat extends CI_Model{
        private $idAchat;
        private $idCaisse;
        private $idProduit;
        private $quantiteAchat;
        private $dateAchat;

        public function insert(){
            $cur='curdate()';
            $req=('insert into achat (idCaisse,idProduit,quantite,dateAchat) VALUES ('.$this->getIdCaisse().','.$this->getIdProduit().','.$this->getQuantiteAchat().','.$cur.')');
            $this->db->query($req);
        }
        
        public function getIdAchat() { 
            return $this->idAchat; 
        } 

        public function setIdAchat($id) {  
            $this->idAchat = $id; 
        } 

        public function getIdCaisse() { 
            return $this->idCaisse; 
        } 

        public function setIdCaisse($idCaisse) {  
            $this->idCaisse = $idCaisse; 
        } 

      

        public function getQuantiteAchat() { 
            return $this->quantiteAchat; 
        } 

        public function setQuantiteAchat($quantite) {  
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
<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
    // require('Mere.php');
    class Produit extends CI_Model{
        private $idProduit;
        private $nomProduit;
        private $categorie;
        private $prix;
        private $quantiteStock;

        function listeProduit(){
            $query= $this->db->query('SELECT *FROM produit');
            $tab=array();
            $i=0;
            foreach($query->result_array() as $row){
                $p=new Produit();
                $p->setIdProduit($row['id']);
                $p->setNomProduit($row['nom']);
                $p->setPrix($row['prix']);
                $p->setQuantiteStock($row['stock']);
                $tab[$i]=$p;
                $i++;
            }
            return $tab;
        }

        /**
         * Get the value of id
         */
        public function getIdProduit()
        {
                return $this->idProduit;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */
        public function setIdProduit($id)
        {
                $this->idProduit = $id;

                return $this;
        }

        /**
         * Get the value of nom
         */
        public function getNomProduit()
        {
                return $this->nomProduit;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */
        public function setNomProduit($nom)
        {
                $this->nomProduit = $nom;

                return $this;
        }

        /**
         * Get the value of prix
         */
        public function getPrix()
        {
                return $this->prix;
        }

        /**
         * Set the value of prix
         *
         * @return  self
         */
        public function setPrix($prix)
        {
                $this->prix = $prix;

                return $this;
        }

        /**
         * Get the value of stock
         */
        public function getQuantiteStock()
        {
                return $this->stock;
        }

        /**
         * Set the value of stock
         *
         * @return  self
         */
        public function setQuantiteStock($stock)
        {
                $this->quantiteStock = $stock;

                return $this;
        }
    }

	
?>
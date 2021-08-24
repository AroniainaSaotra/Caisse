<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
    class DetailsAchat extends CI_Model{
        private $idCaisse;
        private $nomProduit;
        private $prix;
        private $quantiteAchat;
        private $montant;

        public function listeAchat($idCaisse){
        $sql="SELECT * FROM detailsAchat where idCaisse= %s ";
        $sql=sprintf($sql,$this->db->escape($idCaisse));
            $query= $this->db->query($sql);
            $tab=array();
            foreach($query->result_array() as $row){
                $a=new DetailsAchat;
                $a->setIdCaisse($row['idCaisse']);
                $a->setNomProduit($row['nom']);
                $a->setPrix($row['prix']);
                $a->setQuantiteAchat($row['quantite']);
                $a->setMontant($row['montant']);
                $tab[]=$a;
            }
            return $tab;
        }

        /**
         * Get the value of idCaisse
         */
        public function getIdCaisse()
        {
                return $this->idCaisse;
        }

        /**
         * Set the value of idCaisse
         *
         * @return  self
         */
        public function setIdCaisse($idCaisse)
        {
                $this->idCaisse = $idCaisse;

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
         * Get the value of quantite
         */
        public function getQuantiteAchat()
        {
                return $this->quantiteAchat;
        }

        /**
         * Set the value of quantite
         *
         * @return  self
         */
        public function setQuantiteAchat($quantite)
        {
                $this->quantiteAchat = $quantite;

                return $this;
        }

        /**
         * Get the value of montant
         */
        public function getMontant()
        {
                return $this->montant;
        }

        /**
         * Set the value of montant
         *
         * @return  self
         */
        public function setMontant($montant)
        {
                $this->montant = $montant;

                return $this;
        }
    }
?>
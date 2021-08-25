<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
    // require('Mere.php');
    class Produit extends CI_Model{
        private $id;
        private $nom;
        private $categorie;
        private $prix;
        private $images;
        private $stock;

        function listeProduit(){
            $query= $this->db->query('SELECT *FROM produit');
            $tab=array();
            $i=0;
            foreach($query->result_array() as $row){
                $p=new Produit();
                $p->setId($row['id']);
                $p->setCategorie($row['categorie']);
                $p->setNom($row['nom']);
                $p->setPrix($row['prix']);
                $p->setImages($row['images']);
                $p->setStock($row['stock']);
                $tab[$i]=$p;
                $i++;
            }
            return $tab;
        }

        function categorieNouriturre(){
                $query= $this->db->query('SELECT * FROM produit where categorie=Nouriturre');
                return $query->result_array();
        }

        function categorieJouet(){
                $query= $this->db->query('SELECT * FROM produit where categorie=Jouets');
                return $query->result_array();
        }

        function categorieTechnologie(){
                $query= $this->db->query('SELECT * FROM produit where categorie=Technologies');
                return $query->result_array();

        }
        function listeNomProd()
        {
                $req=$this->db->query('SELECT nom FROM produit where categorie=Nourriturre');
                return $req->result_array();
        }
        function listePrix()
        {
                $req=$this->db->query('SELECT prix FROM produit where categorie=Nourriturre');
                return $req->result_array();
        }
        function listeImage(){
                $req=$this->db->query('SELECT images FROM produit where categorie=Nourriturre');
                return $req->result_array();
        }
       

        /**
         * Get the value of id
         */
        public function getId()
        {
                return $this->id;
        }

        /**
         * Set the value of id
         *
         * @return  self
         */
        public function setId($id)
        {
                $this->id = $id;

                return $this;
        }

        /**
         * Get the value of nom
         */
        public function getNom()
        {
                return $this->nom;
        }

        /**
         * Set the value of nom
         *
         * @return  self
         */
        public function setNom($nom)
        {
                $this->nom = $nom;

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
        public function getStock()
        {
                return $this->stock;
        }

        /**
         * Set the value of stock
         *
         * @return  self
         */
        public function setStock($stock)
        {
                $this->stock = $stock;

                return $this;
        }

        public function getImages()
        {
                return $this->images;
        }

        public function setImages($im)
        {
                $this->images = $im;
        }

        public function getCategorie()
        {
                return $this->categorie;
        }

        public function setCategorie($cat)
        {
                $this->categorie = $cat;
        }
    }

	
?>
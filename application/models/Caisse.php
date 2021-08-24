<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
    // require('Mere.php');
    class Caisse extends CI_Model{
        private $id;
        private $numero;

        public function getId() { 
            return $this->id; 
        } 

        public function setId($id) {  
            $this->id = $id; 
        } 

        public function getNumero() { 
            return $this->numero; 
        } 

        public function setNumero($numero) {  
            $this->numero = $numero; 
        } 

        public function listeCaisse(){
            $query= $this->db->query('SELECT *FROM caisse');
            $tab=array();
            $i=0;
            foreach($query->result_array() as $row){
                $c=new Caisse();
                $c->setId($row['id']);
                $c->setNumero($row['numero']);
                $tab[$i]=$c;
                $i++;
            }
            return $tab;
        }
    }
?>
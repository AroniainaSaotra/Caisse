<?php if(! defined('BASEPATH')) exit('No direct script access allowed');
    // require('Mere.php');
    class Caisse extends CI_Model{
        private $idCaisse;
        private $numeroCaisse;

        public function getIdCaisse() { 
            return $this->idCaisse; 
        } 

        public function setIdCaisse($id) {  
            $this->idCaisse = $id; 
        } 

        public function getNumeroCaisse() { 
            return $this->numeroCaisse; 
        } 

        public function setNumeroCaisse($numero) {  
            $this->numero = $numero; 
        } 

        public function listeCaisse(){
            $query= $this->db->query('SELECT *FROM caisse');
            $tab=array();
            $i=0;
            foreach($query->result_array() as $row){
                $c=new Caisse();
                $c->setIdCaisse($row['id']);
                $c->setNumeroCaisse($row['numero']);
                $tab[$i]=$c;
                $i++;
            }
            return $tab;
        }
    }
?>
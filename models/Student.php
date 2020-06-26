<?php
class Student implements IStudent {
    private $matricule;
    private $nom;
    private $prenom;
    private $email;
    private $tel;
    private $datNaiss;
  

    public function __construct($tab=null){
        if($tab!= null){
            $this->initialize($tab);
        }
    }
        public function initialize($tab){
            $this->matricule= $tab['matricule'];
            $this->nom= $tab['nom'];
            $this->prenom= $tab['prenom'];
            $this->email= $tab['email'];
            $this->tel= $tab['tel'];
            $this->datNaiss= $tab['datNaiss'];
           
        }
}
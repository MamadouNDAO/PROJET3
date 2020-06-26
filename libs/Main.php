<?php
class Main {

    private $pdo= null;
    private $className;
    private function getConnexion(){

        if($this->pdo==null){
            try{
                $this->pdo = new PDO ("mysql: host=localhost; dbname=?", "root", "");
            }catch(PDOException $e){
                die("Erreur de Connexion". $e->getMessage());
            }
        }
    }
    private function closeConnexion(){
        if($this->pdo !=null){
            $this->pdo= null;
        }
    }

    public function executeSelect($req){

        $this->getConnexion();
        $result= $this->pdo->query($req);
        $tab=[];
        foreach($result as $value){
            $tab[]= new $this->className($value);
        }
        return $tab;
        $this->closeConnexion();
    }
    public function executeUpdate($req){
        $this->getConnexion();
        $row= $this->pdo->exec($req);
        return $row;
        $this->closeConnexion();
    }

}
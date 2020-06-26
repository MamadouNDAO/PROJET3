<?php
class RoomDao extends Main {

    public function __construct(){
        $this->className="Room";
    }

    public function add($object){
       $req = "Insert";
       return $this->executeUpdate($req)!=0;
     
    }
}
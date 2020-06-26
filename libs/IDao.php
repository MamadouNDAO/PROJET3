<?php
interface IDao{
    public function add($obj);
    public function update($obj);
    public function delete($matricule);
    public function findAll();
    public function findByMatricule($matricule);
}
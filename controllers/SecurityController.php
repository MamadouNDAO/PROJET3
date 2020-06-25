<?php
class SecurityController{
    public function index(){
        $pathLayout="./views/layout/default.php";
        ob_start();
        require_once($pathLayout);
    }
}
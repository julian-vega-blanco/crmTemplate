<?php
require_once("../Config/db.php");
require_once("../Config/Conectar.php");

class RegistroUser extends Conectar{

    private $id;
    private $idCamper;
    private $email;
    private $username;
    private $password;


    public function __construct($id="0", $idCamper="0", $email="", $username="", $dbCnx=""){

    $this->id = $id;
    $this->idCamper = $idCamper;
    $this->email = $email;
    $this->username = $username;
    $this->password = $password;
    parent::__construct($dbCnx);
}

public function setId($id){
$this->id = $id;
}

public function getId(){
return $this->id;
}

public function setIdCamper($idCamper){
$this->idCamper = $idCamper;
}
    
public function getIdCamper(){
return $this->idCamper;
}

public function setEmail($email){
$this->email = $email;
}

public function getEmail(){
return $this->email;
}

public function setUsername($username){
$this->username = $username;
}
    
public function getUsername(){
return $this->username;
}

public function setPassword($password){
$this->password = $password;
}
        
public function getPassword(){
return $this->password;
}




}







































?>
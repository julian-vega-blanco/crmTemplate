<?php

require_once("../Config/db.php");
require_once("../Config/conectar.php");

class estudiante extends Conectar{
    private $id;
    private $nombres;
    private $direccion;
    private $logros;

    public function __construct($id= 0, $nombres="", $direccion="", $logros= "", $dbCnx=""){

        $this ->id = $id;
        $this -> nombres = $nombres;
        $this -> direccion= $direccion;
        $this -> logros = $logros;
        parent:: __construct($dbCnx);

        

       // $this->dbCnx = new PDO(DB_TYPE.":host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PWD, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC] );
    }

    //getter
    public function setId($id){
        $this ->id = $id;
    }

    public function getId(){
        return $this -> id;
    }

    public function setNombres($nombres){
        $this ->nombres = $nombres;
    }

    public function getNombres(){
        return $this -> nombre;
    }

    public function setDireccion($direccion){
        $this-> direccion = $direccion;
    }

    public function getDireccion(){
        return $this -> direccion;
    }

    public function setLogros($logros){
        $this ->logros =$logros;
    }

    public function getLogros(){
        return $this -> logros;
    }

    public function insertData(){
        try {
            $stm =$this-> dbCnx -> prepare("INSERT INTO campers(nombres, direccion, logros, skills, review, ser, ingles, especialidad) values(?,?,?,?,?,?,?,?)");
    
            $stm-> execute([$this->nombres, $this->direccion, $this->logros]);
          
        } catch (Exception $e) {
            return $e->getMessage();
        }

    }

    public function obtainAll(){
        try {
            $stm =$this-> dbCnx -> prepare("SELECT * FROM campers");
            $stm -> execute();
            return $stm->fetchAll();
        } catch (Exception $e) {
            return $e->getMessage();
        }
    }


    public function delete(){
        try {
            $stm =$this-> dbCnx -> prepare("DELETE FROM campers WHERE id = ?");
            $stm->execute([$this->id]);
            return $stm-> fetchAll();
            echo "<script>alert('registro eliminado');document.location='estudiantes.php'</script>";
        } catch (Exception $error) {
            return $error->getMessage();
        }
    }


}

?>
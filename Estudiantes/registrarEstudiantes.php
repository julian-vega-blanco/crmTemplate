<?php
ini_set("display_errors", 1);
ini_set("display_startup_errors", 1);
error_reporting(E_ALL);

if(isset($_POST["guardar"])){
    require_once("estudiantes.php");

    $config = new estudiantes();

    $config -> setNombres($_POST ["nombres"]);
    $config -> setDireccion($_POST["direccion"]);
    $config -> setLogros($_POST["logros"]);
    $config -> setSkills($_POST["skills"]);
    $config -> setReview($_POST["review"]);
    $config -> setSer($_POST["ser"]);
    $config -> setIngles($_POST["ingles"]);
    $config -> setEspecialidad($_POST["especialidad"]);


    $config-> insertData(); 

    echo "<script> alert('Datos almacenados correct');document.location= 'estudiantes.php'</script>";
}

?>
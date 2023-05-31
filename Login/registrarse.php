<?php

if(isset($_POST['registrarse'])){
    require_once $_POST('RegistroUser.php');

    $registrar -> setIdcamper(2);

    $registrar ->setEmail($_POST['email']);
    
}




?>
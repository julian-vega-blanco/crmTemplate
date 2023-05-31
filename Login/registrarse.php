<?php

if(isset($_POST['registrarse'])){
    require_once('registroUser.php');

    $registrar = new registroUser();

    $registrar -> setIdcamper(3);

    $registrar ->setEmail($_POST['email']);

    $registrar ->setUsername($_POST['username']);

    $registrar ->setPassword($_POST['password']);
  
    
$registrar->insertData();
echo "<script> alert('Usuario registrado');document.location= 'loginRegister.php'</script>";
}

?>
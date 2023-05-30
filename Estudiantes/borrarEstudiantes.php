<?php

require_once ("estudiantes.php");

$record = new estudiantes();

if (isset($_GET['id'])&& isset($_GET['req'])){
    if($_GET['req'] =="delete"){
        $record-> setId($_GET['id']);
        $record-> delete();
        echo "<script>alert('Dato Borrado');document.location='estudiantes.php'</script>";
    }
}

?>
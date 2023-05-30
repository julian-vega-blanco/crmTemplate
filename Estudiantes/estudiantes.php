<?php
/* ini_set("display_errors", 1);

ini_set("display_startup_errors", 1);

error_reporting(E_ALL); */

require_once("config.php");
$data = new estudiantes();

$all = $data->obtainAll();

?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página </title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">


  <link rel="stylesheet" type="text/css" href="css/estudiantes.css">

</head>

<body>
  <div class="contenedor">

    <div class="parte-izquierda">

      <div class="perfil">
        <h3 style="margin-bottom: 2rem;">Camper Skills.</h3>
        <img src="images/Diseño sin título.png" alt="" class="imagenPerfil">
        <h3>Maicol Estrada</h3>
      </div>
      <div class="menus">
        <a href="/Home/home.php" style="display: flex;gap:2px;">
          <i class="bi bi-house-door"> </i>
          <h3 style="margin: 0px;">Home</h3>
        </a>
        <a href="estudiantes.php" style="display: flex;gap:1px;">
          <i class="bi bi-people"></i>
          <h3 style="margin: 0px;font-weight: 800;">Estudiantes</h3>
        </a>
       


      </div>
    </div>

    <div class="parte-media">
      <div style="display: flex; justify-content: space-between;">
        <h2>Estudiantes</h2>
        <button class="btn-m" data-bs-toggle="modal" data-bs-target="#registrarEstudiantes"><i class="bi bi-person-add " style="color: rgb(255, 255, 255);" ></i></button>
      </div>
      <div class="menuTabla contenedor2">
        <table class="table table-custom ">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">NOMBRES</th>
              <th scope="col">DIRECCION</th>
              <th scope="col">LOGROS</th>
              <th scope="col">SKILLS</th>
              <th scope="col">REVIEW</th>
              <th scope="col">SER</th>
              <th scope="col">INGLÉS</th>
              <th scope="col">ESPECIALIDAD</th>
              <th scope="col">BORRAR</th>
            </tr>
          </thead>
          <tbody class="" id="tabla">

            <!-- ///////Llenado DInamico desde la Base de Datos -->
         
          <?php
          foreach ($all as $key => $val){
          ?>
          <tr>
            <td><?php echo $val ['id']?></td>
            <td><?php echo $val ['nombres']?></td>
            <td><?php echo $val ['direccion']?></td>
            <td><?php echo $val ['logros']?></td>
            <td><?php echo $val ['skills']?></td>
            <td><?php echo $val ['review']?></td>
            <td><?php echo $val ['ser']?></td>
            <td><?php echo $val ['ingles']?></td>
            <td><?php echo $val ['especialidad']?></td>
            <td>
              <a class="btn btn-danger" href="borrarEstudiantes.php?id=<?=$val['id']?>&req=delete">Borrar</a>
            </td>
          </tr>
            <?php } ?>
          </tbody>
        
        </table>

      </div>


    </div>

    <div class="parte-derecho " id="detalles">
      <h3>Detalle Estudiantes</h3>
      <p>Cargando...</p>
       <!-- ///////Generando la grafica -->

    </div>





    <!-- /////////Modal de registro de nuevo estuiante //////////-->
    <div class="modal fade" id="registrarEstudiantes" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true" style="backdrop-filter: blur(5px)">
      <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable" >
        <div class="modal-content" >
          <div class="modal-header" >
            <h1 class="modal-title fs-5" id="exampleModalLabel">Nuevo Estudiante</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body" style="background-color: rgb(231, 253, 246);">
            <form class="col d-flex flex-wrap" action="registrarEstudiantes.php" method="post">
              <div class="mb-1 col-12">
                <label for="nombres" class="form-label">Nombres</label>
                <input 
                  type="text"
                  id="nombres"
                  name="nombres"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="direccion" class="form-label">Direccion</label>
                <input 
                  type="text"
                  id="direccion"
                  name="direccion"
                  class="form-control"  
                />
              </div>

              <div class="mb-1 col-12">
                <label for="logros" class="form-label">Logros</label>
                <input 
                  type="text"
                  id="logros"
                  name="logros"
                  class="form-control"  
                 
                />
              </div>

              <div class="mb-1 col-6 pl-1 pr-1">
                <label for="skills" class="form-label">Skills</label>
                <input 
                  type="number"
                  id="skills"
                  name="skills"
                  class="form-control"  
                 
                />
              </div>

              <div class="mb-1 col-6 pl-1 pr-1">
                <label for="review" class="form-label">Review</label>
                <input 
                  type="number"
                  id="review"
                  name="review"
                  class="form-control"  
                 
                />
              </div>

              <div class="mb-1 col-12 pl-1 pr-1" >
              <label for="ser" class="form-label">Ser</label>
                <select name="ser" id="ser" class="form-control">
                  <option value="Angie">Angie</option>
                  <option value="Vanessa">Vanessa</option>
                </select>

              </div>

              <div class="mb-1 col-12 pl-1 pr-1" >
              <label for="ingles" class="form-label">Inglés</label>
                <select name="ingles" id="ingles" class="form-control">
                  <option value="Fabio">Fabio</option>
                  <option value="Diego">Diego</option>
                </select>

              </div>

              <div class="mb-1 col-12 pl-1 pr-1" >
              <label for="especialidad" class="form-label">Especialidad</label>
                <select name="especialidad" id="especialidad" class="form-control">
                  <option value="PHP">PHP</option>
                  <option value="JavaScript">Javascript</option>
                  <option value="HTML">Html</option>
                  <option value="CSS">CSS</option>
                  <option value="PYTHON">Python</option>
                </select>

              </div>

              

              <div class=" col-12 m-2">
                <input type="submit" class="btn btn-primary" value="guardar" name="guardar"/>
              </div>
            </form>  
         </div>       
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"></script>


</body>

</html>
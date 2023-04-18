<!DOCTYPE html>
<html lang="en">
<head>
    <link href="css/estilo.css" rel="stylesheet" type="text/css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid"> <img src="img/logo.png" class="logo"><a class="navbar-brand" href="#">TT Finder</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"> <a class="nav-link active" aria-current="page" href="index.html">Inicio</a> </li>
        <li class="nav-item"> <a class="nav-link" href="pagina_2.php">Pagina 2</a> </li>
            </ul>
          </div>
        </div>
      </nav>  
      <br>
<div class="container-1">

  <div class="row">
    <div class="col-md-12"> <br>
    </div>
  </div>
  <br>
  <div class="container">
  <div class="row">
    <div class="col-md-6">
          <a href="formulario.html" target="_blank">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4"> <img src="img/img4.png" class="img-fluid rounded-start" alt="..." style="max-height: 311px;"> </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Formulario seleccion</h5>
                    <p class="card-text">Aqui podras encontrar acceso al  formulario de inscripcion para que tu proceso de seleccion y contratacion se pueda llevar seguimneto.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
          </a>
    </div>
    <div class="col-md-6">
            <div class="card mb-3">
              <div class="row g-0">
                <div class="col-md-4"> <img src="img/img5.png" class="img-fluid rounded-start" alt="..." style="max-height: 311px;"> </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title"> 10 mejores Sofware de seleccion</h5>
                    <p class="card-text"><a href="https://www.softwaredoit.es/recursos-humanos/software-seleccion-personal.html">Aqui</a> encontraras acceso a las paginas mas conocidas acerca de procesos de seleccion y contratacion</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
    </div>
    <div class="col-md-6">
            <div class="card mb-3" style="max-width: 540px;">
              <div class="row g-0">
                <div class="col-md-4"> <img src="img/img6.jpg" class="img-fluid rounded-start" alt="..." style="max-height: 311px;"> </div>
                <div class="col-md-8">
                  <div class="card-body">
                    <h5 class="card-title">Ofertas de empleo</h5>
                    <p class="card-text">En este apartado encontraras las mejores páginas de referencia para encontrar ofertas laborales.
                      <ul class="vinetas"> 
                        <li><a href="https://www.elempleo.com/co/ofertas-empleo?gclid=CjwKCAjw__ihBhADEiwAXEazJhUcTcZefkvTyeOCN-Ipzb7SO1pDRGdDjLb5s10hYm8K_B_GTFLmhRoCtVsQAvD_BwE">El empleo</a></li>
                        <li><a href="https://co.computrabajo.com/">Computrbajo</a></li>
                        <li><a href="https://co.linkedin.com/">LinkedIn</a></li> 
                    </ul>
                    </p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                  </div>
                </div>
              </div>
            </div>
    </div>
    <div class="col-md-6">
      <div class="card mb-3" style="max-width: 540px;">
        <div class="row g-0">
          <div class="col-md-4"> <img src="img/img7.png" class="img-fluid rounded-start" alt="..." style="max-height: 311px;"> </div>
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Algunos tips...</h5>
              <p class="card-text">Podrias ver algunas sugerencias sobre lo que debes tener en cuenta cuando apliques al proceso de reclutamiento.
                <ul class="vinetas"> 
                  <li><a href="https://hotmart.com/es/blog/encontrar-trabajo">Clic aqui</a></li>
              </ul>
              </p>
              <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>
      </div>
</div>
   </div>
   <div class="row">
    <div class="card">
      <div class="card-body">
    <table class="table">
  <thead>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Genero</th>
      <th scope="col">Orientacion</th>
      <th scope="col">Telefono</th>
      <th scope="col">Acciones</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "datos";
    
    // Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    
    // Check connection
    if (!$conn) {
      die("Connection failed: " . mysqli_connect_error());
    }

    
    $sql = "SELECT * FROM `informacion`;";
    
    $result = mysqli_query($conn, $sql);

    while($row = mysqli_fetch_assoc($result)){

    
    
    ?>
    <tr>
      <td><?php echo $row["nombre"]; ?></td>
      <td><?php echo $row["genero"]; ?></td>
      <td><?php echo $row["orienacion"]; ?></td>
      <td><?php echo $row["telefono"]; ?></td>
      <td><form action="editarregistro.php" method="get"><input type="hidden" name="editar" value="<?php echo $row["id"]; ?>"><button type="submit" class="btn btn-warning">Editar</button> </form><form action="eliminar.php" method="get"><input type="hidden" name="eliminar" value="<?php echo $row["id"]; ?>"><button type="submit" class="btn btn-danger">Eliminar</button> </form></td>
    </tr>

    <?php 
    }
    ?>
  </tbody>
</table>
</div>
</div>
   </div>
  </div>
</div>


<footer class="bd-footer py-4 py-md-5 mt-5 bg-body-tertiary">
  <div class="container py-4 py-md-5 px-4 px-md-3 text-body-secondary">
    <div class="row">
      <div class="col-lg-4 mb-3">
        <h5>Redes Sociales</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#">Facebook</a></li>
          <li class="mb-2"><a href="#">Twitter</a></li>
          <li class="mb-2"><a href="#">Instagram</a></li>
          <li class="mb-2"><a href="#">Snapchat</a></li>
        </ul>
      </div>
      <div class="col-lg-4 mb-3">
        <h5>Enlaces rapidos</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="index.html">Inicio</a></li>
          <li class="mb-2"><a href="#">Pagina 2</a></li>
        </ul>
      </div>
      <div class="col-lg-4 mb-3">
        <h5>Enlaces de interés</h5>
        <ul class="list-unstyled">
          <li class="mb-2"><a href="#">Enlace de interés 1</a></li>
          <li class="mb-2"><a href="#">Enlace de interés 2</a></li>
          <li class="mb-2"><a href="#">Enlace de interés 3</a></li>
          <li class="mb-2"><a href="#">Enlace de interés 4</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>
<!--Bootstrap js--> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
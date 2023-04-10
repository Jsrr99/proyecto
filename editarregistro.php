<?php $id = $_GET["editar"]; ?>
<!DOCTYPE html>
<html lang="es">

<head>
  <link href="css/estilo.css" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid"> <img src="img/logo.png" class="logo"><a class="navbar-brand" href="#">TT Finder</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span
          class="navbar-toggler-icon"></span> </button>
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
    <br>
    <div class="row">
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

    
    $sql = "SELECT * FROM `informacion` WHERE id = '".$id."' ;";
    
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($result);

    ?>
      <div class="col-md-12">
        <h3>Editar registro</h3>
        <form action="editar.php" method="post">
        <input type="hidden" name="id" value="<?php echo $id; ?>">
          <div class="col-md-12">
            <label for="exampleInputEmail1" class="form-label">Nombre completo</label>
            <input type="text" class="form-control" placeholder="Tu nombre" name="nombre" value="<?php echo $row["nombre"]; ?>" required>
          </div>
          <br>
          <div class="col-md-12">
            <label for="exampleInputEmail1" class="form-label">Contraseña</label>
            <input type="password" class="form-control" placeholder="Tu contraseña" name="password" value="<?php echo $row["password"]; ?>"
              required>
            </div>
            <br>
            <?php
            $checkedf = "";
            $checkedm = "";
             if($row["genero"] == "femenino"){
                $checkedf = "checked";
             }else if($row["genero"] == "masculino"){
                $checkedm = "checked";
             }else{
                $checkedf = "";
                $checkedm = ""; 
             }
            ?>
          <div class="col-md-12">
            <label for="exampleInputEmail1" class="form-label">Genero</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="genero" id="femenino" value="femenino" <?php echo $checkedf; ?> required>
              <label class="form-check-label" for="flexRadioDefault1">
                Femenino
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="genero" id="masculino" value="masculino" <?php echo $checkedm; ?> required>
              <label class="masculino" for="masculino">
                Masculino
              </label>
            </div>
          </div>
          <br>
          <div class="col-md-12">
            <label for="exampleInputEmail1" class="form-label">Correo Electronico</label>
            <input type="text" class="form-control" placeholder="Tu correo" name="email" value="<?php echo $row["correo"]; ?>" required>
          </div>
          <br>
          <div class="col-md-12">
            <label for="exampleInputEmail1" class="form-label">Orientacion</label>
            <select class="form-select" name="orientacion" aria-label="Default select example">
              <option>seleccione... </option>
              <option <?php if($row["orienacion"] == 'abogado') echo"selected"; ?> value="abogado">Abogado</option>
              <option <?php if($row["orienacion"] == 'administrativo-secretaria') echo"selected"; ?> value="administrativo-secretaria">Administrativo - Secretaria</option>
              <option <?php if($row["orienacion"] == 'animador-actor-artista') echo"selected"; ?> value="animador-actor-artista">Animador - Actor - Artista</option>
              <option <?php if($row["orienacion"] == 'call center-aencion al clientes') echo"selected"; ?> value="call center-aencion al clientes">Call center - Atención al Cliente</option>
              <option <?php if($row["orienacion"] == 'comercial-vendedor') echo"selected"; ?> value="comercial-vendedor">Comercial - Vendedor</option>
              <option <?php if($row["orienacion"] == 'contruccion-obrero') echo"selected"; ?> value="contruccion-obrero">Construcción - Obrero</option>
              <option <?php if($row["orienacion"] == 'contador-finanzas') echo"selected"; ?> value="contador-finanzas">Contador - Finanzas</option>
              <option <?php if($row["orienacion"] == 'informatica-programador') echo"selected"; ?> value="informatica-programador">Informática - Programador</option>
              <option <?php if($row["orienacion"] == 'ingeniero-arquitecto') echo"selected"; ?> value="ingeniero-arquitecto">Ingeniero - Arquitecto</option>
              <option <?php if($row["orienacion"] == 'inernet-multimedia') echo"selected"; ?> value="inernet-multimedia">Internet - Multimedia</option>
              <option <?php if($row["orienacion"] == 'maestro-profesor') echo"selected"; ?> value="maestro-profesor">Maestro - Profesor</option>
              <option <?php if($row["orienacion"] == 'marketing-mercadeo') echo"selected"; ?> value="marketing-mercadeo">Marketing- Mercadeo</option>
              <option <?php if($row["orienacion"] == 'medicina-salud') echo"selected"; ?> value="medicina-salud">Medicina - Salud</option>
              <option <?php if($row["orienacion"] == 'produccion-operario') echo"selected"; ?> value="produccion-operario">Producción- Operario</option>
              <option <?php if($row["orienacion"] == 'publicidad-relaciones publicas') echo"selected"; ?> value="publicidad-relaciones publicas">Publicidad - Relaciones Públicas</option>
              <option <?php if($row["orienacion"] == 'recursos humanos') echo"selected"; ?> value="recursos humanos">Recursos Humanos</option>
              <option <?php if($row["orienacion"] == 'restauranes-chef') echo"selected"; ?> value="restauranes-chef">Restaurantes - Chef - Mesero</option>
              <option <?php if($row["orienacion"] == 'turismo-paquetes turisticos') echo"selected"; ?> value="turismo-paquetes turisticos">Turismo - Paquetes Turísticos</option>
              <option <?php if($row["orienacion"] == 'voluntario') echo"selected"; ?> value="voluntario">Voluntario</option>
            </select>
            <br>
            <div class="col-md-12">
              <label for="exampleInputEmail1" class="form-label">Telefono</label>
              <input type="text" class="form-control" placeholder="Tu numero" name="numero" value="<?php echo $row["telefono"]; ?>"
                required></div>
            <br>
            <div><button type="submit" class="btn btn-primary">Enviar</button></div>
            <br><br>
        </form>
      </div>
    </div>
    <br>
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
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
    crossorigin="anonymous"></script>
</body>

</html>
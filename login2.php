<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio De Sesion</title>
  <script src="https://kit.fontawesome.com/05f5e822e2.js" crossorigin="anonymous"></script> 
  <link rel="stylesheet" href="bootstrap.min.css">
  <link rel="stylesheet" href="diseñologin.css">
  <link rel="stylesheet" href="incolor.css">
  <link rel="icon" href="images/CATi.ico">
  <script src="login2.js"></script>
</head>
<body>
    <body style="background: url(images/fondo-1.jpg); background-size: cover; background-repeat: no-repeat;"></body>
  <br>
    <h1 style="color:aliceblue;" align="center" style="font-family:serif;">Libreria y Papeleria El Progreso</h1>
    <div class="container">
    <div class="main">
      <form id="form_id" method="POST" name="myform">
        <center><label>Usuario</label></center>
        <input type="text" name="usuar" id="usuar" placeholder="Ingrese Su Usuario">
        <center><label>Contraseña</label></center>
        <input type="password" name="password" id="password" placeholder="Ingrese su Contraseña">
        <center><input type="button" value="Iniciar Sesion" id="sumit" onclick="validate()"></center>
      </form>
    </div>
    <center><h6 style="text-align: center; color:rgb(0, 0, 0);">Si no tienes cuenta Registrarte</h6>
    <h5 style="text-align: center; color: aliceblue;"><a href="regis.php" style="text-decoration: none;">Registrarse</a></h5> </center>
  </div>


</body>
</html>
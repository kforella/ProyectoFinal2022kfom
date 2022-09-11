<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://lenguajehtml.com/html/formularios/validaciones-html5/">
    <link rel="stylesheet" href="index2.php">
    <title>Bienvenidos</title>
</head>
<body>
<?php
if (empty(!$_POST['savename'])&& !empty($_POST['pass'])) {
    $usuario = $_POST['savename'];
    $contra = $_POST['pass'];
    if($usuario=="lcp") && $contra=="123"{{

} else }
echo '<script lenguage="javascript"';
echo 'alert("usuario o contraseña incorrecta volver a intentar.")
window.location = "index2.php";
</script>';
    
</body>
</html>
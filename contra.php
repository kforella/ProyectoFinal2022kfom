<?php
error_reporting(0);
include 'cs.php':
if (isset($_POST['ingresar'])) {
    $usua=$conectar->real_escape_string($_POST['USUARIO']);
    $cont=$conectar->real_escape_string($_POST['CONTRASEÑA']);
    $consulta="SELECT * FROM nave WHERE usuario='$usua' and contraseña='$cont'";
    if ($resultado=$conectar->query($consulta)) {
        while ($row=$resultado->fetch_array()) {
            $usuar=$row['Usuario'];
            $contr=$row['Contraseña']

        }
        $resultado->close();
    }
    $conectar->close();
    if (isset($usua) && isset($cont)) {
        if ($usua==$usuar && $cont==$contr){
            $_SESSION['LOGIN'] = TRUE;
            $_SESSION['Usuario'] = $usua;
            header("location:mesajeria.php")
        }
       
        else{
            echo '<script lenguage="javascript"'>;
            echo 'alert("¡Datos erroneos!")
            window.location = "contrasena";
            </script>';


        }
    }


}

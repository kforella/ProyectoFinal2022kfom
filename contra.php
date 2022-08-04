<?php
error_reporting(0);
inclide '':
if (isset($_POST['ingresar'])) {
    $usua=$conectar->real_escape_string($_POST['USUARIO']);
    $cont=$conectar->real_escape_string($_POST['CONTRASEÑA']);
    $consulta="SELECT * FROM nave WHERE usuario='$usua' and contraseña='$cont'";
    if ($resultado=$conectar->query($consulta)) {
        while ($row=$resultado->fetch_array()) {
            $usuar=$row['Usuario'];
            $contr=$row['Contraseña']

        }
    }


}

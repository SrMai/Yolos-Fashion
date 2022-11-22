<?php
$cons_usuario="root";
$cons_contra="";
$cons_base_datos="Yolo";
$cons_equipo="localhost";

$db_name=$cons_base_datos;
$db_table_name="users";

$db_connection = 
mysqli_connect($cons_equipo,$cons_usuario,$cons_contra,$cons_base_datos);
if (!$db_connection) {
 die('No se ha podido conectar a la base de datos');
}
$subs_name = utf8_decode($_POST['nombre']);
$subs_last = utf8_decode($_POST['apellido']);
$subs_email = utf8_decode($_POST['email']);
$subs_mobilenumber = utf8_decode($_POST['mobilenumber']);
$subs_password = utf8_decode($_POST['password']);

$var_consulta = 'INSERT INTO `Yolo`.`users`(`firstname` , `lastname` , `email`, `mobilenumber`, `password`, `edad`, `cp`, `numero2`, `calle`, `entreCalles`, `colonia`, `interior`, `exterior`, `token`, `is_active`, `date_time`) VALUES ("' . $subs_name . '", "' . $subs_last . '", "' . $subs_email . '", "' . $subs_mobilenumber . '", "' . $subs_password . '", "0", "0", "0", "0", "0", "0", "0", "0", "0", "0", "2022-10-21")';

$var_resultado = $db_connection->query($var_consulta);

if (!$var_resultado) {
   die('Error: ' . mysql_error());
}
 
header('Location: Success.html');
 
?>
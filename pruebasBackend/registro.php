<?php
//Iniciar las sesiones, para comprobar si esta logeado.
session_start();
//Si esta con una sesión iniciada lo saca de la pagina
if ($_SESSION["state"] == 1) {
    header("location: index.php");
}
?>
<?php
//Registra en la base de datos
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include('config/database2.php');
    $correoo = $_POST['correo'];
    $_SESSION['CORREOOO'] = $_POST['correo'];
    $sql = "SELECT id FROM Usuarios WHERE correo = '$correoo'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);
    if ($count >= 1) {
        echo '<script language="Javascript">alert("Error, ya existe una cuenta con este correo electronico.");</script>';
    } else {
        require 'config/database2.php';
        if (!empty($_POST['nombre']) && !empty($_POST['numero']) && !empty($_POST['correo']) && !empty($_POST['password'])) {
            $sql = "INSERT INTO Usuarios (nombre, numero, correo, password, apellidos, edad, cp, numero2, calle, entreCalles, colonia, interior, exterior) 
            VALUES ('$_POST[nombre]', '$_POST[numero]', '$_POST[correo]', '$_POST[password]', 'N/A', '0', '0', '0', 'N/A', 'N/A', 'N/A', '0', '0')";
            if (mysqli_query($db, $sql)) {
                echo '<script language="Javascript">alert("Cuenta creada con exito, por favor inicie sesión.");location.href="Confirmacion.php";</script>';
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($db);
                echo '<div class="alert alert-danger" role="alert">
                <h4 class="alert-heading">ERROR!</h4>
                <hr>
                <p class="mb-0">Por favor, vuelva a intentar.</p>
                </div>
                ';
            }
        }
    }
}

?>

<!-----registro---->

<form action="" method="POST">
    <div class="mb-4">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" name="nombre" placeholder="Nombre">
    </div>
    <div class="mb-4">
        <label for="correo" class="form-label">Correo electronico</label>
        <input type="email" class="form-control" name="correo" placeholder="email@gmail.com">
    </div>
    <div class="mb-4">
        <label for="numero" class="form-label">Numero de telefono</label>
        <input type="tel" class="form-control" name="numero" placeholder="33-0000-0000" maxlength="10" />
    </div>
    <div class="mb-4">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" name="password" placeholder="***************">
    </div>
    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Registrarse</button>
    </div>
</form>
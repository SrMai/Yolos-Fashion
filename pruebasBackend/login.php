<?php
//Iniciar las sesiones, para comprobar si esta logeado.
session_start();
//Carga las variables de configuración.
if ($_SESSION["state"] == 1) {
    header("location: index.php");
}
?>
<?php
include('config/database2.php');
//Modulo de login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // username and password sent from form

    $myusername = mysqli_real_escape_string($db, $_POST['username']);
    $mypassword = mysqli_real_escape_string($db, $_POST['password']);

    $sql = "SELECT id FROM Usuarios WHERE correo = '$myusername' and password = '$mypassword'";
    $result = mysqli_query($db, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $active = $row['active'];

    $count = mysqli_num_rows($result);

    // If result matched $myusername and $mypassword, table row must be 1 row

    if ($count == 1) {
        $_SESSION["email"] = $myusername;
        $_SESSION["state"] = 1;
        echo $_SESSION["state"];
        header("location: index.php");
    } else {
        echo '<div class="alert alert-danger" role="alert">
        <h4 class="alert-heading">ERROR!</h4>
        <p>Error, correo o contraseña incorrectos.</p>
        <hr>
        <p class="mb-0">Por favor, vuelva a intentar.</p>
      </div>
      ';
    }
}
?>
<!-----Login---->

<form action="" method="POST">
    <div class="mb-4">
        <label for="username" class="form-label">Correo electronico</label>
        <input type="email" class="form-control" name="username" placeholder="Email">
    </div>
    <div class="mb-4">
        <label for="password" class="form-label">Contraseña</label>
        <input type="password" class="form-control" name="password" placeholder="********">
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
    </div>
</form>
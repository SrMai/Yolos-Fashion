<?php include('./controllers/cuenta.php'); ?>

<?php include('controllers/login.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Yolos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel='dns-prefetch' href='//s.w.org' />
    <script src="https://kit.fontawesome.com/379358f3a7.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-expand-xl navbar-light bg-light">
        <div class="container-fluid header-menu">
            <a class="navbar-brand" href="#">
                <img src="assets/img/Logo2.png" alt="" width="90" height="90"
                    class="d-inline-block align-text-top logo-header">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse header-opcion" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="index.php" style="color: #F9E4D4;">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php/#productos" style="color: #F9E4D4;">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php/#temporada" style="color: #F9E4D4;">Temporada</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false" style="color: #F9E4D4;">
                            Categorias
                        </a>
                        <ul class="dropdown-menu lista-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="index.php/#blusa">Blusa</a></li>
                            <li><a class="dropdown-item" href="index.php/#Vestido">Vestido</a></li>
                            <li><a class="dropdown-item" href="index.php/#Sudadera">Sudadera</a></li>
                            <li><a class="dropdown-item" href="index.php/#Mezclilla">Pantalones</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <div class="card" style="width: 25rem">
                <div class="card-body">
                    <h5 class="card-title text-center">Perfil de usuario</h5>
                    <form action="" method="post">
                        <div class="row">
                            <h3 class="col-md-6">Datos</h3>
                            <h3 class="col-md-6">Modificar</h3>
                        </div>
                        <?php echo $success_msg; ?>
                        <?php echo $email_exist; ?>
                        <?php echo $email_verify_err; ?>
                        <?php echo $email_verify_success; ?>
                        <div class="form-group row">
                            <label class="col-md-6">Nombre:</label>
                            <input type="text" class="form-control col-md-6" name="firstname" id="firstName"
                                value="<?php echo $_SESSION['firstname']; ?>" />
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Apellido:</label>
                            <input type="text" class="form-control col-md-6" name="lastname" id="lastname"
                                value="<?php echo $_SESSION['lastname']; ?>" />
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Email:</label>
                            <input type="text" class="form-control col-md-6" name="email" id="email"
                                value="<?php echo $_SESSION['email']; ?>" />
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Numero:</label>
                            <input type="text" class="form-control col-md-6" name="mobilenumber" id="mobilenumber"
                                value="<?php echo $_SESSION['mobilenumber']; ?>" />
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Edad:</label>
                            <input type="text" class="form-control col-md-6" name="edad" id="edad"
                                value="<?php echo $_SESSION['edad']; ?>" />
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Codigo postal:</label>
                            <input type="text" class="form-control col-md-6" name="cp" id="cp"
                                value="<?php echo $_SESSION['cp']; ?>" />
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Numero 2:</label>
                            <input type="text" class="form-control col-md-6" name="numero2" id="numero2"
                                value="<?php echo $_SESSION['numero2']; ?>" />
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Calle:</label>
                            <input type="text" class="form-control col-md-6" name="calle" id="calle"
                                value="<?php echo $_SESSION['calle']; ?>" />
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Entre calles:</label>
                            <input type="text" class="form-control col-md-6" name="entreCalles" id="entreCalles"
                                value="<?php echo $_SESSION['entreCalles']; ?>" />
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Colonia:</label>
                            <input type="text" class="form-control col-md-6" name="colonia" id="colonia"
                                value="<?php echo $_SESSION['colonia']; ?>" />
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Nº Interior:</label>
                            <input type="text" class="form-control col-md-6" name="interior" id="interior"
                                value="<?php echo $_SESSION['interior']; ?>" />
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Nº Exterior:</label>
                            <input type="text" class="form-control col-md-6" name="exterior" id="exterior"
                                value="<?php echo $_SESSION['exterior']; ?>" />
                        </div>
                        <button type="submit" name="submit" id="submit"
                            class="btn btn-outline-primary btn-block">Modificar
                        </button>
                    </form>
                    <a class="btn btn-outline-primary btn-block" href="out.php">Cerrar Sesion</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
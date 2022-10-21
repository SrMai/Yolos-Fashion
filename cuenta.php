<?php include('./controllers/cuenta.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>

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
                            <input type="text" class="form-control col-md-6" name="firstname" id="firstName" value="<?php echo $_SESSION['firstname']; ?>"/>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Apellido:</label>
                            <input type="text" class="form-control col-md-6" name="lastname" id="lastname" value="<?php echo $_SESSION['lastname']; ?>"/>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Email:</label>
                            <input type="text" class="form-control col-md-6" name="email" id="email" value="<?php echo $_SESSION['email']; ?>"/>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Numero:</label>
                            <input type="text" class="form-control col-md-6" name="mobilenumber" id="mobilenumber" value="<?php echo $_SESSION['mobilenumber']; ?>"/>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Edad:</label>
                            <input type="text" class="form-control col-md-6" name="edad" id="edad" value="<?php echo $_SESSION['edad']; ?>"/>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Codigo postal:</label>
                            <input type="text" class="form-control col-md-6" name="cp" id="cp" value="<?php echo $_SESSION['cp']; ?>"/>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Numero 2:</label>
                            <input type="text" class="form-control col-md-6" name="numero2" id="numero2" value="<?php echo $_SESSION['numero2']; ?>"/>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Calle:</label>
                            <input type="text" class="form-control col-md-6" name="calle" id="calle" value="<?php echo $_SESSION['calle']; ?>"/>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Entre calles:</label>
                            <input type="text" class="form-control col-md-6" name="entreCalles" id="entreCalles" value="<?php echo $_SESSION['entreCalles']; ?>"/>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Colonia:</label>
                            <input type="text" class="form-control col-md-6" name="colonia" id="colonia" value="<?php echo $_SESSION['colonia']; ?>"/>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Nº Interior:</label>
                            <input type="text" class="form-control col-md-6" name="interior" id="interior" value="<?php echo $_SESSION['interior']; ?>"/>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-6">Nº Exterior:</label>
                            <input type="text" class="form-control col-md-6" name="exterior" id="exterior" value="<?php echo $_SESSION['exterior']; ?>"/>
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
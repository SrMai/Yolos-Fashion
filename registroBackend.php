<?php include('./controllers/register.php'); ?>
<form action="" method="post">
    <h3>Registro</h3>
    <?php echo $success_msg; ?>
    <?php echo $email_exist; ?>
    <?php echo $email_verify_err; ?>
    <?php echo $email_verify_success; ?>
    <div class="form-group">
        <label>Nombre</label>
        <input type="text" class="form-control" name="firstname" id="firstName" />
        <?php echo $fNameEmptyErr; ?>
        <?php echo $f_NameErr; ?>
    </div>
    <div class="form-group">
        <label>Apellido</label>
        <input type="text" class="form-control" name="lastname" id="lastName" />
        <?php echo $l_NameErr; ?>
        <?php echo $lNameEmptyErr; ?>
    </div>
    <div class="form-group">
        <label>Correo</label>
        <input type="email" class="form-control" name="email" id="email" />
        <?php echo $_emailErr; ?>
        <?php echo $emailEmptyErr; ?>
    </div>
    <div class="form-group">
        <label>Nùmeri</label>
        <input type="text" class="form-control" name="mobilenumber" id="mobilenumber" />
        <?php echo $_mobileErr; ?>
        <?php echo $mobileEmptyErr; ?>
    </div>
    <div class="form-group">
        <label>Contraseña</label>
        <input type="password" class="form-control" name="password" id="password" />
        <?php echo $_passwordErr; ?>
        <?php echo $passwordEmptyErr; ?>
    </div>
    <button type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-lg btn-block">Registrarse
    </button>
</form>
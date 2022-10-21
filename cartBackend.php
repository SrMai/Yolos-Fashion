<?php include('./controllers/carrito.php'); ?>
<form action="" method="get">
    <h3>Carrito</h3>
    <?php echo $success_msg; ?>
    <?php echo $email_exist; ?>
    <?php echo $email_verify_err; ?>
    <?php echo $email_verify_success; ?>
    <div class="form-group">
        <label>Producto</label>
        <input type="text" class="form-control" name="Producto" id="firstName" />
        <?php echo $pNameEmptyErr; ?>
        <?php echo $p_NameErr; ?>
    </div>
    <div class="form-group">
        <label>Precio</label>
        <input type="text" class="form-control" name="Precio" id="lastName" />
        <?php echo $l_NameErr; ?>
        <?php echo $PriceEmptyErr; ?>
    </div>
    <div class="form-group">
        <label>Direccion</label>
        <input type="text" class="form-control" name="Direccion" id="email" />
        <?php echo $_emailErr; ?>
        <?php echo $DirectionEmptyErr; ?>
    </div>
    <div class="form-group">
        <label>cp</label>
        <input type="text" class="form-control" name="CpNumber" id="mobilenumber" />
        <?php echo $_mobileErr; ?>
        <?php echo $CpEmptyErr; ?>
    </div>
    <div class="form-group">
        <label>referencias</label>
        <input type="text" class="form-control" name="Referencias" id="password" />
        <?php echo $_passwordErr; ?>
        <?php echo $ReferencesEmptyErr; ?>
    </div>
    <button type="submit" name="submit" id="submit" class="btn btn-outline-primary btn-lg btn-block">Pagar
    </button>
</form>
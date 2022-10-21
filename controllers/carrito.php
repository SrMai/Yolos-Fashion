<?php
include('config/db.php');
$_Producto_name = $_Price = $_Direccion = $_CP_Number = $_Referencias = "";
if(isset($_GET["submit"])) {
    $Producto     = $_GET["Producto"];
    $Precio      = $_GET["Precio"];
    $Direccion         = $_GET["Direccion"];
    $CpNumber  = $_GET["CpNumber"];
    $Referencias      = $_GET["Referencias"];
    if(!empty($Producto) && !empty($Precio) && !empty($Direccion) && !empty($CpNumber) && !empty($Referencias)){
        $_Producto_name = mysqli_real_escape_string($connection, $Producto);
        $_Price = mysqli_real_escape_string($connection, $Precio);
        $_Direccion = mysqli_real_escape_string($connection, $Direccion);
        $_CP_Number = mysqli_real_escape_string($connection, $CpNumber);
        $_Referencias = mysqli_real_escape_string($connection, $Referencias);
        if(!preg_match("/^[0-9]{5}+$/", $_CP_Number)) {
            $_mobileErr = '<div class="alert alert-danger">
                    Solo numeros, 5 digitos.
                </div>';
        }
        if((preg_match("/^[0-9]{5}+$/", $_CP_Number))){
            $sql = "INSERT INTO compras (Producto, Precio, Direccion, CpNumber, Referencias, EstadoPago, Total, date_time)
            VALUES ('{$Producto}', '{$Precio}', '{$Direccion}', '{$CpNumber}', '{$Referencias}', '1', '{$Precio}', now())";
            $sqlQuery = mysqli_query($connection, $sql);
            if(!$sqlQuery){
                die("MySQL query failed!" . mysqli_error($connection));
            } 
        }
    } else {
        if(empty($Producto)){
            $pNameEmptyErr = '<div class="alert alert-danger">
                No se seleccionaron productos
            </div>';
        }
        if(empty($Precio)){
            $PriceEmptyErr = '<div class="alert alert-danger">
                Error en el precio del producto, por favor intentelo mas tarde.
            </div>';
        }
        if(empty($Direccion)){
            $DirectionEmptyErr = '<div class="alert alert-danger">
                No se añadio una direcciòn.
            </div>';
        }
        if(empty($CpNumber)){
            $CpEmptyErr = '<div class="alert alert-danger">
                Còdigo postal invalido.
            </div>';
        }
        if(empty($Referencias)){
            $ReferencesEmptyErr = '<div class="alert alert-danger">
                No se añadieron referencias de la direcciòn de entrega.
            </div>';
        }            
    }
}
?>
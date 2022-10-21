<?php
include('config/database2.php');
$FechaDeRecepcion = $_POST['FechaDeRecepcion'];

$HoraDePedido = $_POST['HoraDePedido'];
if ($HoraDePedido == 0) {
    $HoraDePedido = '8-11 AM';
} elseif ($HoraDePedido == 1) {
    $HoraDePedido = '11-2 PM';
} elseif ($HoraDePedido == 2) {
    $HoraDePedido = '2-5 PM';
} elseif ($HoraDePedido == 3) {
    $HoraDePedido = '5-8 PM';
}

$sql = "SELECT id FROM ventas WHERE FechaDeRecepcion = '$FechaDeRecepcion' and HoraDePedido = '$HoraDePedido'";
$result = mysqli_query($db, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$active = $row['active'];

$count = mysqli_num_rows($result);

$puede = 1;

require 'config/database.php';
session_start();
?>

<?php
echo $_SESSION['productoo'];
if (!empty($_POST['Nombre']) && $puede == 1) {
    echo ' Primer filtro superado ';
    $sql = "INSERT INTO ventas (NombreProducto, NombreRecibeProducto, Correo, Telefono, TamanoPaquete, Color, FechaDeRecepcion, HoraDePedido, Direccion, MensajeAVendedor, Precio, IDCliente) VALUES (:NombreProducto, :NombreRecibeProducto, :Correo, :Telefono, :TamanoPaquete, :Color, :FechaDeRecepcion, :HoraDePedido, :Direccion, :MensajeAVendedor, :Precio, :IDCliente)";
    $stmt = $conn->prepare($sql);
    $stmt->bindParam(':NombreProducto', $_SESSION['productoo']);
    $stmt->bindParam(':NombreRecibeProducto', $_POST['NombreRecibeProducto']);
    $stmt->bindParam(':Correo', $_POST['Correo']);
    $stmt->bindParam(':Telefono', $_POST['Telefono']);

    $NombreProducto = $_SESSION['productoo'];
    $TamanoPaquete = $_POST['TamanoPaquete'];
    if ($TamanoPaquete == 1) {
        $TamanoPaquete = '5x5';
        $precio = $Precio5x5;
        echo $TamanoPaquete;
    } elseif ($TamanoPaquete == 2) {
        $TamanoPaquete = '5x10';
        $precio = $Precio5x10;
        echo $TamanoPaquete;
    } elseif ($TamanoPaquete == 3) {
        $TamanoPaquete = '10x10';
        $precio = $Precio10x10;
        echo $TamanoPaquete;
    } elseif ($TamanoPaquete == 4) {
        $TamanoPaquete = '10x15';
        $precio = $Precio10x15;
        echo $TamanoPaquete;
    } elseif ($TamanoPaquete == 5) {
        $TamanoPaquete = '15x15';
        $precio = $Precio15x15;
        echo $TamanoPaquete;
    } elseif ($TamanoPaquete == 6) {
        $TamanoPaquete = '15x20';
        $precio = $Precio15x20;
        echo $TamanoPaquete;
    }
    $stmt->bindParam(':TamanoPaquete', $TamanoPaquete);

    $Color = $_POST['Color'];
    $stmt->bindParam(':Color', $Color);
    $stmt->bindParam(':FechaDeRecepcion', $_POST['FechaDeRecepcion']);

    $HoraDePedido = $_POST['HoraDePedido'];
    if ($HoraDePedido == 0) {
        $HoraDePedido = '8-11 AM';
        echo $HoraDePedido;
    } elseif ($HoraDePedido == 1) {
        $HoraDePedido = '11-2 PM';
        echo $HoraDePedido;
    } elseif ($HoraDePedido == 2) {
        $HoraDePedido = '2-5 PM';
        echo $HoraDePedido;
    } elseif ($HoraDePedido == 3) {
        $HoraDePedido = '5-8 PM';
        echo $HoraDePedido;
    }
    $stmt->bindParam(':HoraDePedido', $HoraDePedido);

    $Direccion = 'N/A';
    $stmt->bindParam(':Direccion', $Direccion);
    $stmt->bindParam(':MensajeAVendedor', $_POST['MensajeAVendedor']);
    $stmt->bindParam(':Precio', $precio);
    $IDCliente='0';
    $stmt->bindParam(':IDCliente', $IDCliente);
    if ($stmt->execute()) {
        $_SESSION['NombreRecibeProducto'] = $_POST['NombreRecibeProducto'];
        $_SESSION['Correo'] = $_POST['Correo'];
        $_SESSION['Telefono'] = $_POST['Telefono'];
        $_SESSION['TamanoPaquete'] = $TamanoPaquete;
        $_SESSION['Color'] = $Color;
        $_SESSION['FechaDeRecepcion'] = $_POST['FechaDeRecepcion'];
        $_SESSION['HoraDePedido'] = $HoraDePedido;
        $_SESSION['Direccion'] = $Direccion;
        $_SESSION['Total'] = $precio;
        $_SESSION['IDCliente'] = $IDCliente;
        echo '

        <script language="Javascript">
        location.href="pagar.php";
        </script>';
    } else {
        echo 'error';
    }
}
?>
<?php
include('config/db.php');
$email1 = $_SESSION['email'];
$sqlQuery = mysqli_query($connection, "SELECT * FROM users WHERE email = 'carlosadrian.cg2@gmail.com' ");
$countRow = mysqli_num_rows($sqlQuery);
while($rowData = mysqli_fetch_array($sqlQuery)){
    $_SESSION['firstname'] = $rowData["firstname"];
    $_SESSION['lastname'] = $rowData["lastname"];
    $_SESSION['email'] = $rowData["email"];
    $_SESSION['mobilenumber'] = $rowData["mobilenumber"];
    $_SESSION['edad'] = $rowData['edad'];
    $_SESSION['cp'] = $rowData['cp'];
    $_SESSION['numero2'] = $rowData['numero2'];
    $_SESSION['calle'] = $rowData['calle'];
    $_SESSION['entreCalles'] = $rowData['entreCalles'];
    $_SESSION['colonia'] = $rowData['colonia'];
    $_SESSION['interior'] = $rowData['interior'];
    $_SESSION['exterior'] = $rowData['exterior'];
}

global $success_msg, $email_exist, $f_NameErr, $l_NameErr, $_emailErr, $_mobileErr;
global $fNameEmptyErr, $lNameEmptyErr, $emailEmptyErr, $mobileEmptyErr, $email_verify_err, $email_verify_success;

$_first_name = $_last_name = $_email = $_mobile_number = $_edad = $_cp = $_numero2 = $_calle = $_entreCalles = $_colonia = $_interior = $_exterior = "";

if(isset($_POST["submit"])) {
    $firstname     = $_POST["firstname"];
    $lastname      = $_POST["lastname"];
    $email         = $_POST["email"];
    $mobilenumber  = $_POST["mobilenumber"];
    $edad  = $_POST["edad"];
    $cp  = $_POST["cp"];
    $numero2  = $_POST["numero2"];
    $calle  = $_POST["calle"];
    $entreCalles  = $_POST["entreCalles"];
    $colonia  = $_POST["colonia"];
    $interior  = $_POST["interior"];
    $exterior  = $_POST["exterior"];

    $_first_name = mysqli_real_escape_string($connection, $firstname);
    $_last_name = mysqli_real_escape_string($connection, $lastname);
    $_email = mysqli_real_escape_string($connection, $email);
    $_mobile_number = mysqli_real_escape_string($connection, $mobilenumber);
    $_edad = mysqli_real_escape_string($connection, $edad);
    $_cp = mysqli_real_escape_string($connection, $cp);
    $_numero2 = mysqli_real_escape_string($connection, $numero2);
    $_calle = mysqli_real_escape_string($connection, $calle);
    $_entreCalles = mysqli_real_escape_string($connection, $entreCalles);
    $_colonia = mysqli_real_escape_string($connection, $colonia);
    $_interior = mysqli_real_escape_string($connection, $interior);
    $_exterior = mysqli_real_escape_string($connection, $exterior);

    $email55 = $_SESSION['email'];
    $sql = "UPDATE users SET firstname='{$firstname}', lastname='{$lastname}', email='{$email}', mobilenumber='{$mobilenumber}', edad='{$edad}', 
    cp='{$cp}', numero2='{$numero2}', calle='{$calle}', entreCalles='{$entreCalles}', colonia='{$colonia}', interior='{$interior}', 
    exterior='{$exterior}' WHERE email = 'carlosadrian.cg2@gmail.com'";

    $sqlQuery = mysqli_query($connection, $sql);

    header("Location: cuenta.php");

    if(!$sqlQuery){
        die("MySQL query failed!" . mysqli_error($connection));
    } 
}
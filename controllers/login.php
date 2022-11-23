<?php
   
    include('config/db.php');
    global $wrongPwdErr, $accountNotExistErr, $emailPwdErr, $verificationRequiredErr, $email_empty_err, $pass_empty_err;

    if(isset($_POST['login'])) {
        $email_signin        = $_POST['email_signin'];
        $password_signin     = $_POST['password_signin'];

        $user_email = filter_var($email_signin, FILTER_SANITIZE_EMAIL);
        $pswd = mysqli_real_escape_string($connection, $password_signin);

        $sql = "SELECT * From users WHERE email = '{$email_signin}' ";
        $query = mysqli_query($connection, $sql);
        $rowCount = mysqli_num_rows($query);

        if(!$query){
           die("SQL query failed: " . mysqli_error($connection));
        }

        if(!empty($email_signin) && !empty($password_signin)){
            if(!preg_match("/^(?=.*\d)(?=.*[@#\-_$%^&+=§!\?])(?=.*[a-z])(?=.*[A-Z])[0-9A-Za-z@#\-_$%^&+=§!\?]{6,20}$/", $pswd)) {
                $wrongPwdErr = '<div class="alert alert-danger">
                Su contraseña debe contener un minimo de 6 - 20 caracteres, contener almenos un caracter especial, minusculas, mayusculas y un digito numerico.
                    </div>';
            }
            if($rowCount <= 0) {
                $accountNotExistErr = '<div class="alert alert-danger">
                        Esta cuenta no existe.
                    </div>';
            } else {
                while($row = mysqli_fetch_array($query)) {
                    $id            = $row['id'];
                    $firstname     = $row['firstname'];
                    $lastname      = $row['lastname'];
                    $email         = $row['email'];
                    $mobilenumber   = $row['mobilenumber'];
                    $pass_word     = $row['password'];
                    $token         = $row['token'];
                    $is_active     = $row['is_active'];
                }

                $password = $pass_word;

                if($email_signin == $email && $password_signin == $password) {
                   header("Location: cuenta.php");
                   
                   $_SESSION['id'] = $id;
                   $_SESSION['firstname'] = $firstname;
                   $_SESSION['lastname'] = $lastname;
                   $_SESSION['email'] = $email;
                   $_SESSION['mobilenumber'] = $mobilenumber;
                   $_SESSION['token'] = $token;
                } else {
                    $emailPwdErr = '<div class="alert alert-danger">
                            Correo o contraseña incorrectos.
                        </div>';
                }

            }

        } else {
            if(empty($email_signin)){
                $email_empty_err = "<div class='alert alert-danger email_alert'>
                            Porfavor, llena todos los campos.
                    </div>";
            }
            
            if(empty($password_signin)){
                $pass_empty_err = "<div class='alert alert-danger email_alert'>
                            Porfavor, llena todos los campos.
                        </div>";
            }            
        }

    }

?>
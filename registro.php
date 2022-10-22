
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Registro Yolos</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
            <link rel='dns-prefetch' href='//s.w.org' />
            <script src="https://kit.fontawesome.com/379358f3a7.js" crossorigin="anonymous"></script>
            <link rel="stylesheet" href="assets/css/login.css">
        </head>
        <body>
            <nav class="navbar navbar-expand-xl navbar-light bg-light">
                <div class="container-fluid header-menu">
                    <a class="navbar-brand" href="#">
                    <img src="assets/img/Logo2.png" alt="" width="90" height="90" class="d-inline-block align-text-top logo-header">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                    aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse header-opcion" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#" style="color: #F9E4D4;">Inicio</a>
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
            <div class="zona1">
                <div class="registro">
                        <div class="Login-div">
                            <div class="logo1" style="background-image: url(assets/img/Logo2.png);"></div>
                            <div class="title" style="margin-bottom: 10px;">Registro Yolo's</div>                            
                            <div class="fields">
                                <div class="datos">
                                    <div class="nombre">                                    
                                        <input type="text" class="nom-input" placeholder="Nombre">
                                    </div>
                                    <div class="apellido">
                                        <input type="text" class="ape-input" placeholder="Apellido">
                                    </div>
                                </div>
                                <div class="correo">
                                <i class="fa-regular fa-envelope"></i>
                                    <input type="text" class="correo-input" placeholder="Correo Electronico">
                                </div>
                                <div class="numero">
                                    <i class="fa-solid fa-phone"></i>
                                    <input type="numer" class="user-input" placeholder="Numero">
                                </div>
                                <div class="password">
                                    <i class="fa-solid fa-lock"></i>
                                    <input type="password" class="pass-input" placeholder="Contraseña">
                                </div>
                            </div>
                            <button class="signin-button" style="margin-bottom:10px;">Registrarse</button>                       
                        </div>
                    </div>
            </div>
        </body>
        </html>
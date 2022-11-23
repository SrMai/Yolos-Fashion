<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yolos Fashion</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel='dns-prefetch' href='//s.w.org' />
  <script src="https://kit.fontawesome.com/379358f3a7.js" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="assets/css/index.css">
</head>

<body>
  <div class="container">
    <!--
      =================================
      Menu Header
      =================================
    -->
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
              <a class="nav-link" href="#productos" style="color: #F9E4D4;">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#temporada" style="color: #F9E4D4;">Temporada</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false" style="color: #F9E4D4;">
                Categorias
              </a>
              <ul class="dropdown-menu lista-menu" aria-labelledby="navbarDropdownMenuLink">                
                <li><a class="dropdown-item" href="#blusa">Blusa</a></li>
                <li><a class="dropdown-item" href="#Vestido">Vestido</a></li>
                <li><a class="dropdown-item" href="#Sudadera">Sudadera</a></li>                       
                <li><a class="dropdown-item" href="#Mezclilla">Pantalones</a></li>
              </ul>
            </li>
          </ul>
        </div>
        <div class="Sesion">
          <a href="login.php"><h1>Iniciar Sesión</h1></a>
        </div>
      </div>
    </nav>
    <!--
      =================================
      CARRUSEL
      =================================
    -->
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="assets/img/carrusel.jpg" class="d-block w-100" alt="slider">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/carrusel.jpg" class="d-block w-100" alt="slider">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/carrusel.jpg" class="d-block w-100" alt="slider">
          <div class="carousel-caption d-none d-md-block">
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
      </button>
    </div>
    <!--
      =================================
      Categorias
      =================================
    -->
    <div class="categorias">
      <div class="row">
        <div class="col-md-12"><h1 class="Titulo_categorias">Categorias</h1></div>
      </div>
      <div class="cards-categorias justify-content-center">
        <div class="row p-3">    

          <div class="col-md-3">
            <div class="card-categoria">
              <a href="#blusa" class="categorias">
                <i class="fas fa-tshirt"></i>
                <p>Blusas</p>
              </a>
            </div>
          </div>

          <div class="col-md-3 ">
            <div class="card-categoria">
              <a href="#Vestido">
                <i class="fas fa-tshirt"></i>
                <p>Vestidos</p>
              </a>
            </div>
          </div>
          
          <div class="col-md-3 ">
            <div class="card-categoria">
              <a href="#Sudadera">
                <i class="fas fa-tshirt"></i>
                <p>Sudaderas</p>
              </a>
            </div>
          </div>
        
          <div class="col-md-3">
            <div class="card-categoria">
              <a href="#Mezclilla">
                <i class="fas fa-tshirt"></i>
                <p>Pantalones</p>
              </a>
            </div>
          </div>

        </div>        
      </div>
    </div>
    <!--
      =================================
      Rebajas de temporada
      =================================
    -->
    <div class="ofertas" id="temporada">
      <div class="row"><h1 class="titulo-ofertas">Ofertas de Temporada</h1></div>
      <div class="cards-ofertas justify-content-center">
        <div class="row justify-content-evenly">
          <div class="col-md-3 of m-3">
            <div class="card-temporada">
              <div class="card-imagen">
                <div class="letrero"></div>               
              </div>
              <div class="card-info">
                <h2>Camisa corta juvenil</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>199<small>.99</small></h2>
                  <a href="cartBackend.php?Producto=CAMISA+CORTA+JUVENIL&Precio=199.99&Direccion=Vascos+1189&CpNumber=44220&Referencias=N%2FA&submit="><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of m-3" >
            <div class="card-temporada">
              <div class="card-imagen" style="background-image:url(assets/img/mercancia/Camisa8.jpg);">
                <div class="letrero"></div>                
              </div>
              <div class="card-info">
                <h2>Camisa juvenil</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>249<small>.99</small></h2>
                  <a href="cartBackend.php?Producto=Camisa juvenil&Precio=249&Direccion=Vascos+1189&CpNumber=44220&Referencias=N%2FA&submit="><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of1 m-3">
            <div class="card-temporada">
              <div class="card-imagen" style="background-image:url(assets/img/mercancia/Vestido10.jpg);">
                <div class="letrero"></div>                
              </div>
              <div class="card-info">
                <h2>Vestido juvenil Casual</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>899<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--
      =================================
      Productos
      =================================
    -->
    <div class="productos" id="productos">
      <div class="row"><h1 class="titulo-producto">Productos</h1></div>
      <div class="cards-productos justify-content-center p-3 container">
        <!-- Productos: Blusas -->
        <div class="blusas" id="blusa">
          <div class="row justify-content-evenly p-3" style="--bs-colums: 12;">
            <div class="col-sm-4 col-md-3 of m-3">
              <div class="card-producto">
                <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Blusa1.jpg);"></div>
                <div class="card-info">
                  <h2 style="font-size:25px;">Blusa juvenil</h2>
                  <h4>Talla</h4>
                  <ul class="size">
                    <li>xs</li>
                    <li>s</li>
                    <li>m</li>
                    <li>l</li>
                  </ul>
                  <div class="precio">
                    <h2><sup>$</sup>249<small>.99</small></h2>
                    <a href="#"><h1>Comprar</h1></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-3 of m-3">
              <div class="card-producto">
                <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Blusa3.jpg);"></div>
                <div class="card-info">
                  <h2 style="font-size:25px;">Blusa juvenil</h2>
                  <h4>Talla</h4>
                  <ul class="size">
                    <li>xs</li>
                    <li>s</li>
                    <li>m</li>
                    <li>l</li>
                  </ul>
                  <div class="precio">
                    <h2><sup>$</sup>349<small>.99</small></h2>
                    <a href="#"><h1>Comprar</h1></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-4 col-md-3 of1 m-3">
              <div class="card-producto">
                <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Blusa4.jpg);"></div>
                <div class="card-info">
                  <h2 style="font-size:25px;">Blusa juvenil</h2>
                  <h4>Talla</h4>
                  <ul class="size">
                    <li>xs</li>
                    <li>s</li>
                    <li>m</li>
                    <li>l</li>
                  </ul>
                  <div class="precio">
                    <h2><sup>$</sup>449<small>.99</small></h2>
                    <a href="#"><h1>Comprar</h1></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-evenly p-3">
            <div class="col-md-3 of m-3">
              <div class="card-producto">
                <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Blusa10.jpg);"></div>
                <div class="card-info">
                  <h2 style="font-size:25px;">Blusa juvenil</h2>
                  <h4>Talla</h4>
                  <ul class="size">
                    <li>xs</li>
                    <li>s</li>
                    <li>m</li>
                    <li>l</li>
                  </ul>
                  <div class="precio">
                    <h2><sup>$</sup>229<small>.99</small></h2>
                    <a href="#"><h1>Comprar</h1></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 of m-3">
              <div class="card-producto">
                <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Blusa5.jpg);"></div>
                <div class="card-info">
                  <h2 style="font-size:25px;">Blusa juvenil</h2>
                  <h4>Talla</h4>
                  <ul class="size">
                    <li>xs</li>
                    <li>s</li>
                    <li>m</li>
                    <li>l</li>
                  </ul>
                  <div class="precio">
                    <h2><sup>$</sup>339<small>.99</small></h2>
                    <a href="#"><h1>Comprar</h1></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 of1 m-3">
              <div class="card-producto">
                <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Blusa6.jpg);"></div>
                <div class="card-info">
                  <h2 style="font-size:25px;">Blusa juvenil</h2>
                  <h4>Talla</h4>
                  <ul class="size">
                    <li>xs</li>
                    <li>s</li>
                    <li>m</li>
                    <li>l</li>
                  </ul>
                  <div class="precio">
                    <h2><sup>$</sup>279<small>.99</small></h2>
                    <a href="#"><h1>Comprar</h1></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row justify-content-evenly p-3">
            <div class="col-md-3 of m-3">
              <div class="card-producto">
                <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Blusa7.jpg);"></div>
                <div class="card-info">
                  <h2 style="font-size:25px;">Blusa juvenil</h2>
                  <h4>Talla</h4>
                  <ul class="size">
                    <li>xs</li>
                    <li>s</li>
                    <li>m</li>
                    <li>l</li>
                  </ul>
                  <div class="precio">
                    <h2><sup>$</sup>399<small>.99</small></h2>
                    <a href="#"><h1>Comprar</h1></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 of m-3">
              <div class="card-producto">
                <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Blusa8.jpg);"></div>
                <div class="card-info">
                  <h2 style="font-size:25px;">Blusa juvenil</h2>
                  <h4>Talla</h4>
                  <ul class="size">
                    <li>xs</li>
                    <li>s</li>
                    <li>m</li>
                    <li>l</li>
                  </ul>
                  <div class="precio">
                    <h2><sup>$</sup>249<small>.99</small></h2>
                    <a href="#"><h1>Comprar</h1></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-3 of1 m-3">
              <div class="card-producto">
                <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Blusa9.jpg);"></div>
                <div class="card-info">
                  <h2 style="font-size:25px;">Blusa juvenil</h2>
                  <h4>Talla</h4>
                  <ul class="size">
                    <li>xs</li>
                    <li>s</li>
                    <li>m</li>
                    <li>l</li>
                  </ul>
                  <div class="precio">
                    <h2><sup>$</sup>199<small>.99</small></h2>
                    <a href="#"><h1>Comprar</h1></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Productos: Camisa -->
        <div class="row justify-content-evenly p-3">
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/camisa.jpeg);"></div>
              <div class="card-info">
                <h2>Camisa juvenil</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>349<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Camisa4.jpg);"></div>
              <div class="card-info">
                <h2>Camisa juvenil</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>229<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of1 m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Camisa2.jpg);"></div>
              <div class="card-info">
                <h2>Camisa juvenil</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>249<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-evenly p-3">
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Camisa5.jpg);"></div>
              <div class="card-info">
                <h2>Camisa juvenil</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>389<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Camisa1.jpg);"></div>
              <div class="card-info">
                <h2>Camisa juvenil</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>249<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of1 m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Camisa3.jpg);"></div>
              <div class="card-info">
                <h2>Camisa juvenil</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>349<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-evenly p-3">
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Camisa6.jpg);"></div>
              <div class="card-info">
                <h2>Camisa juvenil</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>449<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Camisa7.jpg);"></div>
              <div class="card-info">
                <h2>Camisa juvenil</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>239<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of1 m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Camisa9.jpg);"></div>
              <div class="card-info">
                <h2>Camisa juvenil</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>219<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Productos: Pantalones -->
        <div class="Pantalones" id="Mezclilla"></div>
        <div class="row justify-content-evenly p-3">
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Pantalon3.jpg);"></div>
              <div class="card-info">
                <h2>Pantalon Elegante para Dama</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>499<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Pantalon.jpg);"></div>
              <div class="card-info">
                <h2>Pantalon Dama</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>489<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of1 m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Pantalon2.jpg);"></div>
              <div class="card-info">
                <h2>Pantalon Juvenil</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>459<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-evenly p-3">
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Pantalon4.jpg);"></div>
              <div class="card-info">
                <h2>Pantalon Elegante para Dama</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>549<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Pantalon5.jpg);"></div>
              <div class="card-info">
                <h2>Pantalon Elegante para Dama</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>529<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of1 m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Pantalon6.jpg);"></div>
              <div class="card-info">
                <h2>Pantalon juvenil</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>419<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-evenly p-3">
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Pantalon7.jpg);"></div>
              <div class="card-info">
                <h2>Pantalon Mezclila Dama</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>399<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Pantalon8.jpg);"></div>
              <div class="card-info">
                <h2>Pantalon Dama</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>449<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of1 m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Pantalon9.jpg);"></div>
              <div class="card-info">
                <h2>Pantalon Dama</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>489<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Productos: Sudaderas -->
        <div class="sudadera" id="Sudadera"></div>
        <div class="row justify-content-evenly p-3">
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Sudadera.jpg);"></div>
              <div class="card-info">
                <h2>Sudadera Juvenil</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>449<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/sudadera.jpeg);"></div>
              <div class="card-info">
                <h2>Sudadera Mikie Mouse</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>549<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of1 m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/sudadera2.jpeg);"></div>
              <div class="card-info">
                <h2>Sudadera Dumbo</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>349<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
        </div>        
        <div class="row justify-content-evenly p-3">
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Sudadera2.jpg);"></div>
              <div class="card-info">
                <h2>Sudadera Juvenil</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>349<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/sudadera3.jpeg);"></div>
              <div class="card-info">
                <h2>Sudadera Demon Slayer</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>549<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of1 m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Sudadera3.jpg);"></div>
              <div class="card-info">
                <h2>Sudadera juvenil</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>349<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
        </div>  
        <div class="row justify-content-evenly p-3">
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Sudadera4.jpg);"></div>
              <div class="card-info">
                <h2>Sudadera Puerquito</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>449<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Sudadera5.jpg);"></div>
              <div class="card-info">
                <h2>Sudadera Roja</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>349<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of1 m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Sudadera6.jpg);"></div>
              <div class="card-info">
                <h2>Sudadera Stich juvenil</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>649<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
        </div>  
        <!-- Productos: Vestidos -->
        <div class="Vestido" id="Vestido"></div>
        <div class="row justify-content-evenly p-3">
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Vestido.jpg);"></div>
              <div class="card-info">
                <h2>Vestido Casual</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>399<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/vestido.jpeg);"></div>
              <div class="card-info">
                <h2>Vestido de Fiesta Elegante</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>1,899<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of1 m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Vestido2.jpg);"></div>
              <div class="card-info">
                <h2>Vestido Entallado de Fiesta</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>1,500<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
        </div>  
        <div class="row justify-content-evenly p-3">
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Vestido3.jpg);"></div>
              <div class="card-info">
                <h2>vestido de Fiesta</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>1,599<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/vestido3.jpeg);"></div>
              <div class="card-info">
                <h2>Vestido Fiesta</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>1,999<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of1 m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Vestido4.jpg);"></div>
              <div class="card-info">
                <h2>Vestido Entallado</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>789<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
        </div>  
        <div class="row justify-content-evenly p-3">
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Vestido5.jpg);"></div>
              <div class="card-info">
                <h2>Vestido Elegante</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>1,249<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Vestido6.jpg);"></div>
              <div class="card-info">
                <h2>Vestido Fiesta Casual</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>949<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 of1 m-3">
            <div class="card-producto">
              <div class="cards-imagen" style="background-image:url(assets/img/mercancia/Vestido7.png);"></div>
              <div class="card-info">
                <h2>Vestido juvenil Casual</h2>
                <h4>Talla</h4>
                <ul class="size">
                  <li>xs</li>
                  <li>s</li>
                  <li>m</li>
                  <li>l</li>
                </ul>
                <div class="precio">
                  <h2><sup>$</sup>849<small>.99</small></h2>
                  <a href="#"><h1>Comprar</h1></a>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>
    </div>
  </div>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
</body>

</html>
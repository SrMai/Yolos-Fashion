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
</head>

<body>
  <div class="container">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="assets/img/logo.png" alt="" width="90" height="90" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Temporada</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                data-bs-toggle="dropdown" aria-expanded="false">
                Categorias
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Sueteres</a></li>
                <li><a class="dropdown-item" href="#">Blusas</a></li>
                <li><a class="dropdown-item" href="#">Calzado</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
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
            <h5>Lorem ipsum dolor</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque dolores sint iure cupiditate commodi
              recusandae reiciendis, deserunt consectetur odio vel autem perspiciatis maxime eos possimus amet
              repudiandae exercitationem eum error..</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/carrusel.jpg" class="d-block w-100" alt="slider">
          <div class="carousel-caption d-none d-md-block">
            <h5>Lorem ipsum dolor</h5>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident doloribus distinctio facilis vitae,
              dignissimos nihil maiores eos earum maxime in ad odit magni doloremque culpa amet aperiam quam vero
              delectus?.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="assets/img/carrusel.jpg" class="d-block w-100" alt="slider">
          <div class="carousel-caption d-none d-md-block">
            <h5>Lorem ipsum dolor</h5>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem suscipit labore nobis inventore molestiae
              repellendus incidunt laboriosam, obcaecati quia, libero deleniti velit facilis doloremque praesentium odio
              ex accusantium officiis minima?.</p>
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
      Rebajas de temporada
      =================================
    -->
    <h1 class="display-6">Rebajas de temporada</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <img src="assets/img/200px.png" style="border-radius: 100%;" alt="...">
      <img src="assets/img/200px.png" style="border-radius: 100%;" alt="...">
      <img src="assets/img/200px.png" style="border-radius: 100%;" alt="...">
      <img src="assets/img/200px.png" style="border-radius: 100%;" alt="...">
      
    </div>
    <!--
      ////=================================
      //Rebajas de temporada
      ////=================================
    -->
    <!--
      =================================
      Productos
      =================================
    -->
    <h1 class="display-6 text-center">Productos</h1>
    <div class="row row-cols-1 row-cols-md-3 g-4">
      <div class="col">
        <div class="card h-100">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="140" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image
              cap</text>
          </svg>
          <!--
        <img src="assets/img/productos/01.jpg" class="card-img-top" alt="Card title">
      -->
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="140" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image
              cap</text>
          </svg>
          <!--
        <img src="assets/img/productos/01.jpg" class="card-img-top" alt="Card title">
      -->
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a short card.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="140" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image
              cap</text>
          </svg>
          <!--
        <img src="assets/img/productos/01.jpg" class="card-img-top" alt="Card title">
      -->
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
              content.</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card h-100">
          <svg class="bd-placeholder-img card-img-top" width="100%" height="140" xmlns="http://www.w3.org/2000/svg"
            role="img" aria-label="Placeholder: Image cap" preserveAspectRatio="xMidYMid slice" focusable="false">
            <title>Placeholder</title>
            <rect width="100%" height="100%" fill="#868e96"></rect><text x="50%" y="50%" fill="#dee2e6" dy=".3em">Image
              cap</text>
          </svg>
          <!--
        <img src="assets/img/productos/01.jpg" class="card-img-top" alt="Card title">
-->
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional
              content. This content is a little bit longer.</p>
          </div>
        </div>
      </div>
    </div>
    <!--
      ////=================================
      //Productos
      ////=================================
    -->
  </div>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
  </script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
</body>

</html>
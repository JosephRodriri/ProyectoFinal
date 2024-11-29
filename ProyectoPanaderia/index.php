<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PanaderiaMela</title>
  <link rel="shortcut icon" href="./images/pan-de-molde.png" type="image/x-icon" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="styles.css" />
</head>

<header>
  <div class="container">
    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid">
        <img class="img-logo" src="images/Log.jpg" alt="" />
        <a class="navbar-brand" href="#">Cake♥Shop</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav justify-content-end">
            <li class="nav-item me-5">
              <a class="nav-link " aria-current="page" href="./index.php">Inicio</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="#AboutUs" >Nosotros</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="./Pages/Tienda.php" target="_blank" >Tienda</a>
            </li>
            <li class="nav-item me-5">
              <a class="nav-link" href="#contactanos">Contactanos</a>
            </li>  
          </ul> 
        </div>
        </div>
    </nav>
  </div>
</header>

<body>
  <div class="container">
    <img class="img-principal" src="./images/img-1.png" alt="" />
    <h1 class="titulo-princi">Cake♥Shop</h1>
  </div>
<div class="container">
  

  <div id="carouselExample" class="carousel slide">
    
    <div class="carousel-inner">
      <h3>Servicios</h3>

      <div class="carousel-item active">
        <div class="card-container">
          <div class="card" style="width: 15%">
            <img src="./images/panaderia.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Tienda</h5>
              
             
            </div>
          </div>

          <div class="card" id="card2" style="width: 15%">
            <img src="./images/camion-de-comida.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Domicilios</h5>
            
            </div>
          </div>

          <div class="card" id="card3" style="width: 15%">
            <img src="./images/pastel.png" class="card-img-top" alt="..." />
            <div class="card-body">
              <h5 class="card-title">Postres</h5>
              
            </div>
          </div>
        </div>
      </div>
    
      <div class="carousel-item">
        <div class="card" style="width: 15%">
          <img src="./images/camion-de-comida.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
      <div class="carousel-item">
        <div class="card" style="width: 15%">
          <img src="./images/pastel.png" class="card-img-top" alt="..." />
          <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">
              Some quick example text to build on the card title and make up
              the bulk of the card's content.
            </p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
          </div>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</div>
<section class="py-5" id="AboutUs">
	<div class="container">
		<div class="row align-items-center gx-4">
			<div class="col-md-5">
				<div class="ms-md-2 ms-lg-5"><img class="img-fluid rounded-3" src="./images/Nosotros.jpg"></div>
			</div>
			<div class="col-md-6 offset-md-1">
				<div class="ms-md-2 ms-lg-5">
					<span class="text-muted">Nuestra Historia</span>
					<h2 class="display-5 fw-bold">Sobre Nosotros</h2>
					<p class="lead">En Cake♥Shop, cada día es una oportunidad para crear algo especial. 
            Fundada en 2012 por Gustavo Petro Urrego, nuestra panadería nació del amor por las recetas tradicionales y 
            la pasión por los sabores auténticos. Desde que abrimos nuestras puertas, nos hemos comprometido a ofrecer productos frescos, elaborados 
            con los mejores ingredientes y una pizca de amor.</p>
					<p class="lead mb-0">Nuestra misión es brindarte una experiencia única a través de nuestro pan 
            recién horneado, pasteles exquisitos y postres irresistibles.</p>
				</div>
			</div>
		</div>
	</div>
</section>


  <div class="container" id="contactanos">
    <h3>Contactanos</h3>
    <form action="back.php" method="POST" id="from-sapa">

    <div class="mb-3">
      <label for="exampleFormControlInput1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
    </div>
    <img id="servicio-cliente" src="./images/agente-de-servicio-al-cliente.png" alt="">

    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Mensaje</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>

    </div>
  </div>
  <button type="submit" class="boton-enviar" id="enviar">Enviar</button>
</form>
<h2></h2>


<footer class="bg text-center"  >
  <!-- Grid container -->
  <div class="container p-4 pb-0" >
    <!-- Section: Social media -->
    <section class="mb-4" >
      <!-- Facebook -->
      <a
      data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #3b5998;"
        href="https://www.facebook.com/login/?next=https%3A%2F%2Fwww.facebook.com%2F"
        target="_blank"
        role="button"
        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
          <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
        </svg></a>

      <!-- Twitter -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #55acee;"
        href="https://x.com/?lang=en"
        target="_blank"
        role="button"
        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-twitter" viewBox="0 0 16 16">
          <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
        </svg></a>


      <!-- Instagram -->
      <a
        data-mdb-ripple-init
        class="btn text-white btn-floating m-1"
        style="background-color: #ac2bac;"
        href="https://www.instagram.com/"
        target="_blank"
        role="button"
        ><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16">
          <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
        </svg></a>

    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05);">
    © 2024 Copyright:
    <a class="text-body" href="https://mdbootstrap.com/">Cake♥Shop</a>
  </div>
  <!-- Copyright -->
</footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script type="module" src="./script.js"></script>
</body>



</html>
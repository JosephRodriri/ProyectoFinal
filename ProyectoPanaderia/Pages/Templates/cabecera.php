<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PanaderiaMela</title>
  
  <link rel="shortcut icon" href="../images/pan-de-molde.png" type="image/x-icon" />
  <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
  <link rel="stylesheet" href="./tienda.css" />

</head> 


<!--Barra de cotenido-->
<body>
<style>
  
</style>
<!--menu-->
  <header>

<div class="container">
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
  <img class="img-logo" src="../images/Log.jpg" alt=""/>
    <a class="navbar-brand" href="#">Cake♥Shop</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav justify-content-end">
        <li class="nav-item me-5">
          <a class="nav-link" aria-current="page" href="../index.php">inicio</a>

        </li>
        <li class="nav-item">
          <a class="nav-link" href="Tienda.php">Tienda</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contacto</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="mostrarCarrito.php">Carrito(<?php
          echo(empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']);
          ?>)</a>
        
      </li>
      </ul>
    </div>
  </div>
</nav>

</div>

  </header>

<div class="container">
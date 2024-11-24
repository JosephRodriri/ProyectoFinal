<?php
  include 'Global/config.php';
  include 'Global/conexion.php';
  include './carrito.php';
  include 'Templates/cabecera.php'
  ?>



<!--Carrito-->
  <br>

<div class="alert alert-success">

<?php echo $mensaje; ?>

  <a href="#" class="badge badge-success">Ver Carrito</a>
  
</div>  
  
<br>
<!--inicio de catalogo panaderia-->
  
<div class="container">
  <div class="col-xs-1 col-md-2  col-sm-6  col-lg-4 col-xl-4"></div>
  <img class="img-tienda" src="Imagenes/Panaderia_variada-700x416.jpg" alt="" />
  <h1 class="titulo-tienda">productos</h1>   
</div>

<br>

 <!--tarjetas productos panaderia-->
<section  class="container"  >
<div class="row g-4">

<!-- Sentencia Php-->

<?php
  $sentencia=$pdo->prepare("SELECT *FROM `productos`");
  $sentencia->execute();
  $listaProductos=$sentencia->fetchAll(PDO::FETCH_ASSOC);
  //print_r($listaProductos);
?>

<?php foreach($listaProductos as $producto){ ?>

<!--contenido tarjetas-->

<div class="col-  col-xs-1 col-md-2  col-sm-6  col-lg-4 col-xl-4 ">
  <div class="card">
    <img 
    title="<?php echo $producto['Nombre'];?>"
    alt="<?php echo $producto['Nombre'];?>"
    class="card-img-top"
    src=<?php echo $producto['Imagen'];?>
    src=<?php echo $producto['Descripcion'];?>
    height="#" 
    > 
      <div class="card-body">
        <span><?php echo $producto['Nombre'];?></span>
        <h5 class="card-title">$<?php echo $producto ['Precio'];?></h5>
        <p class="card-text">Descripcion</p>
      
        <form action="" method="post">

        <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">
        <input type="hidden" name="nombre" id="nombre" value="<?php echo openssl_encrypt($producto['Nombre'],COD,KEY);?>">
        <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($producto['Precio'],COD,KEY);?>">
        <input type="hidden" name="cantidad" id="cantidad" value="<?php echo openssl_encrypt(1,COD,KEY);?>">
        
      <button class="btn btn-primary"
        name="btnAccion"
        value="Agregar"
        type="submit"
      >
      Agregar al Carrito
      </button>

      </form>
    </div>
  </div>
</div> 

<?php } ?>





<!--inicio catalogo de pasteleria--

<div class="container xs- sm- md- lg- xl- mb-">
  <img class="img-tienda" src="../Pages/Imagenes/rebanada-pastel-fresa-parte-superior-colocada-plato_1106454-153495.jpg" alt="" />
<h1 class="titulo-tienda">Pastelería</h1>
</div>


<br>
-->

<?php 
include 'templates/pie.php'
?>

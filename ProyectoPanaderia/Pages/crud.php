<!--conexion & Base de datos-->
<?php include "Global/conexcrud.php";?>

<?php
$objConexion= new conexion();

$sql="INSERT INTO `productos` (`ID`, `Nombre`, `Precio`, `Descripcion`, `Imagen`) VALUES (NULL, 'Pastel de Pollo', '5000', 'Descripcion', 'http://localhost/ProyectoFinal/ProyectoPanaderia/Pages/Imagenes/Panaderia/Pastel_pollo-300x200.jpg');";

$objConexion->ejecutar($sql);

?>



<!--Ingreso de Login-->
<?php
session_start();
if( isset($_SESSION['usuario'])!="adm"){
    header("location:crud.php");

}

?>





<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>PanaderiaMela</title>
  
  <link rel="shortcut icon" href="../images/pan-de-molde.png" type="image/x-icon" />
  <link href="	https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
       
  
  <link href="/ProyectoPanaderia/css/bootstrap.min.css" />
 <!-- <link rel="stylesheet" href="tienda.css" />-->


</head>
<body>

<!--estructura HTML-->
<div class="container">
    <a href="../index.php">inicio</a>
    <a href="Tienda.php">tienda</a>
    <a href="cerrar.php">cerrar</a>
    <br>
    <p>Admin</p>

    </div>


<!--estructura bootstrapp-->
    <div class="p-5 mb-4 bg-light">
        <div class="container">
            <h1 class="display-5 fw-bold">Bienvenid@S</h1>
            <p class="col-md-8 fs-4"> Administrador Local </p>
            <hr class="my-2">
            <p>Más información</p>
           
        </div>
    </div>

    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-6"
                ><!--CARD-->

<div class="container">

    <div class="col-md-4">
    </div>
    <div class="card">
        <div class="card-header">
            Lista de productos
        <br>
        <form action="crud.php" method="post">
        Nombre del producto: <input class=form-control name="text" name="name" placeholder="Nombre">
        <br>
        Precio del producto: <input class=form-control type="number" name="number" placeholder="Precio">
        <br>
        Descripcion del producto: <input class=form-control type="text" name="text" placeholder="Descripcion">
        <br>
        Imagen del producto: <input  class=form-control type="file" name="file" placeholder="Imagen">

        </br>
        <button class="btn btn-success" type="submit" name="register">Enviar</button>

    </form>
        </div>
    </div>
</div>


                </div>
                <div
                     class="col-md-6"
                ><!--Tabla-->
<div
class="table-responsive"
>
<table
class="table table-primary"
>
<thead>
    <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Precio</th>
        <th scope="col">Descripcion</th>
        <th scope="col">Imagen</th>
    </tr>
</thead>
<tbody>
    <tr class="">
        <td scope="row">R1C1</td>
        <td>R1C2</td>
        <td>R1C3</td>
        <td>R1C4</td>
        <td>R1C5</td>
    </tr>
    <tr class="">
        <td scope="row">Item</td>
        <td>Item</td>
        <td>Item</td>
        <td>Item</td>
        <td>Item</td>
        
    </tr>
</tbody>
</table>
</div>


</table>
</div>
                </div>
                
            </div>
        </div>
        



    </div>






    
        

</body>
</html>
<?php
// Incluye la clase de conexión
include "Global/conexcrud.php";

// Crea una instancia de la clase de conexión
$objConexion = new conexion();

//SERVICIOS
// Agregar nuevo servicio a la base de datos
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
    $nombre_servicio = $_POST['nombre_servicio'];
    $desc_servicio = $_POST['desc_servicio'];
    $img_servicio = $_POST['img_servicio']; // Se asume que se proporciona una URL o ruta de imagen

    // Insertar el servicio en la base de datos
    $sql = "INSERT INTO servicios (nombre_servicio, desc_servicio, img_servicio) VALUES ($nombre_servicio, $desc_servicio, $img_servicio)";
    $objConexion->ejecutar($sql);
}



// Eliminar un servicio
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $sql = "DELETE FROM servicios WHERE id_servicio = $id";
    $objConexion->ejecutar($sql);
    header("location:tienda.php?view=servicios");; // Redirigir para evitar resubir el formulario si recargas la página
    exit();
}

// Obtener los servicios existentes de la base de datos
$servicios = $objConexion->consultar("SELECT * FROM servicios");


//Nostros
// Consulta para obtener el único registro de la tabla 'nosotros'
$sql = "SELECT * FROM `nosotros` LIMIT 1";
$registro = $objConexion->consultar($sql);
$registro = $registro[0]; // Ya que solo hay un registro, lo obtenemos directamente

// Verificar si se ha enviado el formulario para actualizar los datos
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['update'])) {
    // Obtener los datos del formulario
    $titulo_nosotros = $_POST['titulo_nosotros'];
    $resumen_nosotros = $_POST['resumen_nosotros'];
    $img_nosotros = $_POST['img_nosotros'];

    // Consulta para actualizar el único registro
    $sql_update = "UPDATE `nosotros` SET `titulo_nosotros` = ?, `resumen_nosotros` = ?, `img_nosotros` = ? WHERE `id_nosotro` = ?";
    $objConexion->ejecutar($sql_update, [$titulo_nosotros, $resumen_nosotros, $img_nosotros, $registro['id_nosotro']]);

    // Redirigir para evitar reenvío del formulario
    header("Location: editar_nosotros.php");
    exit;
}

?>

<!-- Ingreso de Login -->
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
 <style>
 form ,table {
    display: block !important;
    margin: 40px;
    }
</style>

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


    <br>
    <br>
    
<form action="crud.php" method="POST">
<h2>Servicios</h2>
    <div class="col-md-4">
        <label for="nombre_servicio" class="form-label">Nombre del servicio</label>
        <input type="text" class="form-control" id="nombre_servicio" name="nombre_servicio" required>
    </div>
    <div class="col-md-4">
        <label for="desc_servicio" class="form-label">Descripción del servicio</label>
        <input type="text" class="form-control" id="desc_servicio" name="desc_servicio" required>
    </div>
    <div class="col-md-4">
        <label for="img_servicio" class="form-label">Imagen del servicio (URL)</label>
        <input type="text" class="form-control" id="img_servicio" name="img_servicio" required>
    </div>
    <div class="col-12 mt-2">
        <button type="submit" name="submit" class="btn btn-primary">Agregar servicio</button>
    </div>
</form>

<hr>

<!-- Tabla que muestra los servicios existentes -->
<h2>Servicios existentes</h2>
<table class="table table-bordered mt-3">
    <thead>
        <tr>
            <th>Imagen</th>
            <th>Nombre del servicio</th>
            <th>Descripción</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if ($servicios): ?>
            <?php foreach ($servicios as $servicio): ?>
                <tr>
                    <td><img src="<?php echo $servicio['img_servicio']; ?>" alt="Imagen servicio" width="50"></td>
                    <td><?php echo $servicio['nombre_servicio']; ?></td>
                    <td><?php echo $servicio['desc_servicio']; ?></td>
                    <td>
                        <a href="?delete=<?php echo $servicio['id_servicio']; ?>" class="btn btn-danger btn-sm">Eliminar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="4" class="text-center">No hay servicios disponibles.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>
<br>
<br>
<div class="container mt-5">
    <h2>Editar Información de Nosotros</h2>

    <!-- Formulario para editar los datos -->
    <?php if ($registro) { ?>
        <form method="POST">
            <div class="mb-3">
                <label for="titulo_nosotros" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo_nosotros" name="titulo_nosotros" value="<?php echo $registro['titulo_nosotros']; ?>" required>
            </div>

            <div class="mb-3">
                <label for="resumen_nosotros" class="form-label">Resumen</label>
                <textarea class="form-control" id="resumen_nosotros" name="resumen_nosotros" rows="4" required><?php echo $registro['resumen_nosotros']; ?></textarea>
            </div>

            <div class="mb-3">
                <label for="img_nosotros" class="form-label">Imagen (URL)</label>
                <input type="text" class="form-control" id="img_nosotros" name="img_nosotros" value="<?php echo $registro['img_nosotros']; ?>" required>
            </div>

            <button type="submit" name="update" class="btn btn-primary">Actualizar</button>
        </form>
    <?php } else { ?>
        <p>No se encontró el registro.</p>
    <?php } ?>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</body>
</html>
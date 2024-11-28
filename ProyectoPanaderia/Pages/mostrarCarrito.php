<?php
  include 'Global/config.php';
  include './carrito.php';
  include 'Templates/cabecera.php'
  ?>
<br>
<h3>Lista del carrito</h3>

<?php if(!empty($_SESSION['CARRITO'])) { ?>

<table class="table table-light table-bordered" >
<!--los campos width deben sumar el 100%-->   
    <tbody>
        <tr>
            <th width="40%" >Descripción</th>
            <th width="15%" class="text-center">Cantidad</th>
            <th width="20%" class="text-center">Precio</th>
            <th width="20%" class="text-center">Total</th>
            <th width="50%" class="text-center">--</th>
        </tr>
        <!--Variable total-->
        <?php $total=0; ?>
        <!--Despliega los productos del carrito-->
        <?php foreach($_SESSION['CARRITO'] as $indice=>$producto){?>
        <tr>
            <td width="40%"><?php echo $producto['NOMBRE']?></td>
            <td width="15%" class="text-center"><?php echo $producto['CANTIDAD']?></td>
            <td width="20%" class="text-center">$<?php echo $producto['PRECIO']?></td>
            <td width="20%"class="text-center">$<?php echo Number_Format($producto['PRECIO']*$producto['CANTIDAD'],2); ?>Total</td>
            <td width="50%">
        
            <!--Boton eliminar-->
            <form action="" method="post">
            
            <input type="hidden" 
            name="id" 
            id="id" 
            value="<?php echo openssl_encrypt($producto['ID'],COD,KEY);?>">

                <button
                 class="btn btn-danger" 
                 type="submit"
                 name="btnAccion"
                 value="Eliminar"
                 >Eliminar</button>
            
            </form>
            </td>

        </tr>
        <?php $total=$total+($producto['PRECIO']*$producto['CANTIDAD']); ?>
        <?php } ?>
        <!--Funcion variable total-->
        <tr>
            <td colspan="3" align="right"><h3>Total</h3></td>
            <td align="right"><h3>$<?php echo number_format($total,2);?></h3></td>
            <td></td>
        </tr>
    </tbody>

</table>

<?php }else{?>
<div class="alert alert-success">
    No hay productos en el carrito
</div>
<?php }?>

<?php 
include 'templates/pie.php'
?>
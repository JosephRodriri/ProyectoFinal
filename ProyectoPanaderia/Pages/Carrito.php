<?php

session_start();

$mensaje="";

if(isset($_POST['btnAccion'])){

    switch($_POST['btnAccion']){

        case 'Agregar':

            if(is_numeric( openssl_decrypt($_POST['id'],COD,KEY))){
                $ID=openssl_decrypt($_POST['id'],COD,KEY);
                $mensaje.="Ok ID Correcto".$ID;"<br/>"; 
            
            }else{
                $mensaje.="Upss... ID incorrecto".$ID."<br/>";
            }


            if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))){
                $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
                $mensaje.="Ok Nombre".$NOMBRE."<br/>";
                }else{  $mensaje.="Ups... algo pasa con el nombre"."<br/>"; break;}

                if(is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))){
                $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
                $mensaje.="Ok Cantidad".$CANTIDAD."<br/>";
                }else{   $mensaje.="Ups... algo pasa con el cantidad"."<br/>"; break;}

                if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))){
                $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
                $mensaje.="Ok Precio".$PRECIO."<br/>";
                }else{    $mensaje.="Ups... algo pasa con el precio"."<br/>"; break;}


                //Variable de session//
            
                if (!isset($_SESSION['CARRITO'])) {
                
                $producto=array(
                    'ID'=>$ID,
                    'NOMBRE'=>$NOMBRE,
                    'CANTIDAD'=>$CANTIDAD,
                    "PRECIO"=>$PRECIO
                );
                $_SESSION['CARRITO'][0]=$producto;

                }else{
                    $NumeroProductos=count($_SESSION['CARRITO']);
                    $producto=array(
                        'ID'=>$ID,
                        'NOMBRE'=>$NOMBRE,
                        'CANTIDAD'=>$CANTIDAD,
                        "PRECIO"=>$PRECIO
                    );
    
                    $_SESSION['CARRITO'][$NumeroProductos] = $producto;
    
                }
                $mensaje=print_r($_SESSION,true);

        break;
    }   

} 

?>
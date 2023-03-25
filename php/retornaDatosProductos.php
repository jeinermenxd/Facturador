<?php
    //SESION_START();
    $respuesta = "";
    include('Conexion.php');
    $nombre = $_POST["nombreProducto"];
    $sql = "SELECT idProducto, descripcionProducto,precioProducto,costoProducto,stockProducto ".
             " FROM productos where descripcionProducto like '%".$nombre."%'  " ;
        $rs = mysqli_query($conexion,$sql);
        while($row= mysqli_fetch_array($rs))
        { 
          $respuesta.="<a href='#' class='list-group-item' idProducto='".$row['idProducto']."' value='".$row['descripcionProducto']."' 
          pvp=".$row['precioProducto']." onclick=\"retornaDatosProducto(".$row['idProducto'].",'".$row['descripcionProducto']."','".$row['precioProducto']."')\">".$row['descripcionProducto']."</a>";
        }
    echo $respuesta;
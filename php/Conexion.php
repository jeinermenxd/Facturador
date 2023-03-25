<?php
  $Servidor = "localhost";
  $Base_Datos = "facturacion";
  $usuario = "jeiner";   //usuario del motor de base de datos
  $clave = "123456" ;  // clave del usuario del motor de la base de datos

  $conexion = new mysqli($Servidor,$usuario,$clave);
  mysqli_select_db($conexion,$Base_Datos);

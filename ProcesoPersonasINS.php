<?php
    // conectar al servidor de Base de Datos
    $conex = mysql_connect("localhost","root","");
    // controlar conexión
    if (!$conex) {
        die("ATENCION!!!... NO se pudo CONECTAR al SERVIDOR de Base de Datos");
    } // endif
    // seleccionar Base de Datos
    $selDB = mysql_select_db("GrupoMJ2030",$conex);
    // controlar selección de Base de Datos
    if (!$selDB) {
        die("ATENCION!!!... NO se pudo SELECCIONAR Base de Datos");
    } // endif
    // capturar datos del formulario
    $nombre         = utf8_decode($_POST["NOM"]);
    $direccion      = utf8_decode($_POST["DIR"]);
    $telefono       = $_POST["TEL"];
    $departamento   = utf8_decode($_POST["DTO"]);
    // crear sentencia SQL para insertar registro
    $sql  = "INSERT INTO personas ";
    $sql .= "(idPERS,nomPERS,dirPERS,telPERS,dtoPERS) ";
    $sql .= "VALUES ";
    $sql .= "(null,'$nombre','$direccion','$telefono','$departamento')";
    // depurar sentencia
    // die($sql);
    // ejecutar sentencia SQL 
    mysql_query($sql,$conex);
    // cerrar conexión
    mysql_close($conex);
    // volver automáticamente al formulario
    header("Location: FormPersonasINS.html");
?>
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
    $id             = ($_POST["ID"]);

    // crear sentencia SQL para insertar registro
    $sql  = "DELETE FROM personas ";
    $sql .= "WHERE idPERS = $id";
    // depurar sentencia
    // die($sql); // Sirve como punto de interrupción
    // ejecutar sentencia SQL 
    mysql_query($sql,$conex);
    // cerrar conexión
    mysql_close($conex);
    // volver automáticamente al formulario
    header("Location: FormPersonasDEL.html");
?>
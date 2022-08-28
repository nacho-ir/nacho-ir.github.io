<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniSistema Personas - MySQL</title>
    <link rel="stylesheet" href="EstilosPersonas.css" />
</head>
<body>
    <!-- SECCION CABECERA -->
    <div id="head">
        <h1>MiniSistema Personas - MySQL</h1>
    </div>
    <!-- SECCION MENÚ -->
    <div id="menu">
        <a href="index.html">Inicio</a>
        <a href="FormPersonasINS.html">Insertar</a>
        <a href="FormPersonasUPD.html">Actualizar</a>
        <a href="FormPersonasDEL.html">Eliminar</a>
        <a href="ProcesoPersonasVER.php">Visualizar</a>
        <a href="javascript:window.close();">Salir</a>
    </div>
    <!-- SECCION CONTENIDO -->
    <div id="contenido">
        <fieldset>
            <legend>Listado</legend>
            <table id="lst">
                <!-- titulares de grilla de datos -->
                <tr>
                    <th>ID</th>
                    <th>NOMBRE</th>
                    <th>DIRECCION</th>
                    <th>TELEFONO</th>
                    <th>DEPARTAMENTO</th>
                </tr>
                <?php
                    // PROCESO VER
                    // conectar al Servidor de Base de Datos
                    $conex = mysql_connect("localhost","root","");
                    // control de conexión
                    if (!$conex) {
                        die("ATENCION!!!... NO se pudo CONECTAR al SERVIDOR de Base de Datos");
                    } // endif
                    // seleccionar Base de Datos
                    $selDB = mysql_select_db("GrupoMJ2030",$conex);
                    // control de selección de Base de Datos
                    if (!$selDB) {
                        die("ATENCION!!!... NO se pudo SELECCIONAR Base de Datos");
                    } // endif
                    // crear sentencia SQL
                    $sql = "SELECT * FROM personas";
                    // ejecutar sentencia SQL
                    $result = mysql_query($sql,$conex);
                    // declarar fila inicial
                    $fila=1;
                    while ($regPERS = mysql_fetch_array($result)) {
                        //  cargar registro
                        $id             = $regPERS["idPERS"];
                        $nombre         = utf8_encode($regPERS["nomPERS"]);
                        $direccion      = utf8_encode($regPERS["dirPERS"]);
                        $telefono       = $regPERS["telPERS"];
                        $departamento   = utf8_encode($regPERS["dtoPERS"]);
                        // filas de datos 
                        // determinar fila PAR/IMPAR
                        $resto = $fila%2;
                        if ($resto==0) {
                            echo "<tr class='filaPAR'>\n";
                        } else {
                            echo "<tr class='filaIMP'>\n";
                        } // endif
                        echo "
                            <td style='text-align:right;'>$id</td>
                            <td>$nombre</td>
                            <td>$direccion</td>
                            <td style='text-align:right;'>$telefono</td>
                            <td>$departamento</td>
                        </tr> 
                        "; 
                        // incrementar fila
                        $fila++;                         
                    } // end while
                    // cerrar conexión
                    mysql_close($conex);
                ?>
            </table>
        </fieldset>
    </div>
</body>
</html>
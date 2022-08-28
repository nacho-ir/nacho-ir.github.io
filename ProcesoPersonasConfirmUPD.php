<?php
    //PROCESO PERSONAS CONFIRM UPD

    //Conectar al servidor de BD
    $conex = mysql_connect("localhost","root","");
    //controlar conexion
    if(!$conex){
        die("ATENCION!!.. No se pudo conectar al servidor de BD");
    }
    //seleccionar la BD
    $selDB = mysql_select_db("grupomj2030",$conex);
    //controlar seleccion
    if(!$selDB){
        die("ATENCION!!.. No se pudo seleccionar BD");
    }
    //Caprturar ID del formulario
    $id = $_POST["ID"];
    //crear sentencia SQL para buscar ID
    $sql = "SELECT * FROM personas WHERE idPERS = $id";
    //ejecutar sentencia
    $result = mysql_query($sql,$conex);
    //controlar existencia
    if(mysql_num_rows($result) == 0){
        //enviar msj de error
        die("ATENCION!!.. ID Inexistente");
    }else{
        //cargar registro
        $regPERS = mysql_fetch_array($result);
        //separar campos
        $id             =   $regPERS["idPERS"];
        $nombre         =   utf8_encode($regPERS["nomPERS"]);
        $direccion      =   utf8_encode($regPERS["dirPERS"]);
        $telefono       =   $regPERS["telPERS"];
        $departamento   =   utf8_encode($regPERS["dtoPERS"]);

    }
    mysql_close($conex);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MiniSistema Personas - MySQL</title>
    <link rel="stylesheet" href="EstilosPersonas.css" />
    <script type="text/javascript" src="FuncionesPersonas.js"></script>
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
        <fieldset id="frm">
            <legend>Actualizar</legend>
            <form id="dataFRM" action="ProcesoPersonasUPD.php" method="POST">
                <table>
                    <tr>
                        <td>ID:</td>
                        <td>
                        <?php
                            echo "<input id='dataID' type='text' name='ID' value='$id' readonly/>\n";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td>
                            <?php
                            echo "<input id='dataNOM' type='text' name='NOM' value='$nombre' />";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Dirección:</td>
                        <td>
                            <?php
                            echo "<input id='dataDIR' type='text' name='DIR' value='$direccion' />";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Teléfono:</td>
                        <td>
                            <?php
                            echo "<input id='dataTEL' type='text' name='TEL' value='$telefono' />";
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Departamento:</td>
                        <td>
                            <?php
                            echo "<input id='dataDTO' type='text' name='DTO' value='$departamento' />"
                            ?>
                        </td>
                    </tr> 
                    <!-- fila de botones del formulario  -->
                    <tr>
                        <td colspan="2">
                            <input type="button" value="Actualizar registro" onclick="CheckForm();"/>
                            <input type="button"  value="Cancelar" onclick="SetPage('FormPersonasUPD.html');" />
                        </td>
                    </tr>                    
                </table>
            </form>
        </fieldset>
    </div>
</body>
</html>
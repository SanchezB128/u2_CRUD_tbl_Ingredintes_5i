<?php
include("./config.php");

// Compruebe si se ha hecho clic en el botón de registro o no
if (isset($_POST['boton_registrar'])) {
    // recuperar datos del formulario
    $nombre_ingrediente = $_POST['nombre_ingrediente'];
    $descripcion = $_POST['descripcion'];
    $precio_unidad = $_POST['precio_unidad'];
    $unidad_medida = $_POST['unidad_medida'];
    $stock_disponible = $_POST['stock_disponible'];
    $fecha_caducidad = $_POST['fecha_caducidad'];
    $cantidad_ingrediente = $_POST['cantidad_ingrediente'];

    // Consulta
    $query = "INSERT INTO ingredientes(nombre_ingrediente,descripcion,precio_unidad,unidad_medida,stock_disponible,fecha_caducidad,cantidad_ingrediente)
    VALUES('$nombre_ingrediente', '$descripcion', '$precio_unidad', '$unidad_medida', '$stock_disponible', '$fecha_caducidad', '$cantidad_ingrediente')";
    $resultado = mysqli_query($conexion, $query);

    // ¿Comprueba si la consulta se guardó correctamente?
    if ($resultado)
        header('Location: ./index.php?resultado=exito');
    else
        header('Location: ./index.php?resultado=error');
} else
    die("Akses dilarang...");

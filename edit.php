<?php
include("./config.php");

// Compruebe si se ha hecho clic en el botón de editar o no
if (isset($_POST['boton_editar'])) {
    // recuperar datos del formulario
    $id_ingrediente = $_POST['id_ingrediente'];
    $nuevo_nombre = $_POST['nuevo_nombre'];
    $nueva_descripción = $_POST['nueva_descripción'];
    $nuevo_precio = $_POST['nuevo_precio'];
    $nueva_unidad = $_POST['nueva_unidad'];
    $nuevo_stock = $_POST['nuevo_stock'];
    $nueva_fecha = $_POST['nueva_fecha'];
    $nueva_cantidad = $_POST['nueva_cantidad'];


    // Consulta
    $query = "UPDATE ingredientes SET nombre_ingrediente='$nuevo_nombre', descripcion='$nueva_descripción', precio_unidad='$nuevo_precio', unidad_medida='$nueva_unidad', stock_disponible='$nuevo_stock', fecha_caducidad='$nueva_fecha', cantidad_ingrediente='$nueva_cantidad' WHERE id_ingrediente = '$id_ingrediente'";
    $resultado = mysqli_query($conexion, $query);

    // ¿Comprueba si la consulta se guardó correctamente?
    if ($resultado)
        header('Location: ./index.php?eliminar=exito');
    else
        header('Location: ./index.php?eliminar=error');
} else
    die("Acceso prohibido...");

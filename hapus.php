<?php
include("./config.php");

if (isset($_POST['boton_borrar'])) {
    // Agarrar el id del registro que se va a borrar
    $id_para_borar = $_POST['id_para_borar'];

    // Consulta de borrado
    $query = "DELETE FROM ingredientes WHERE id_ingrediente = '$id_para_borar'";
    $resultado = mysqli_query($conexion, $query);

    // ¿Se eliminó correctamente la consulta?
    if ($resultado) {
        header('Location: ./index.php?eliminar=exito');
    } else
        die('Location: ./index.php?eliminar=error');
} else
    die("acceso prohibido...");

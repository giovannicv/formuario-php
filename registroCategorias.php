<?php
    include('conexion.php');

    if(isset($_POST['nombre'])){
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $estado = $_POST['estado'];

        $consulta = "INSERT INTO categorias VALUES (NULL, '$nombre', '$descripcion', NULL, NULL, '$estado')";
        mysqli_query($conexion, $consulta) or die ("Problemas en el select".mysqli_error($conexion));

        echo "<script> alert (\"Categoria Registrada\"); </script>";
        echo "<script>location.href='categorias.php';</script>";   

    }else{
        echo "no se enviaron los datos";
    }
?>
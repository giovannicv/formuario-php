<?php
    include('conexion.php');

    if(isset($_POST['nombre'])){
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];     
        $estado = $_POST['estado'];
        

        $consulta = "UPDATE categorias
                     SET nombre='$nombre', descripcion='$descripcion', estado='$estado'
                     WHERE id = $id";
        mysqli_query($conexion, $consulta) or die ("Problemas en el select".mysqli_error($conexion));
        echo "<script> alert (\"Categoria Actualizada\"); </script>";
        echo "<script>location.href='categorias.php';</script>";   
    }else{
        echo "no se enviaron los datos";
    }

?>
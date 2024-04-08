<?php
    if(isset($_GET['id'])){
    
        $id = $_GET['id'];
        include('conexion.php');
        
        $consulta ="DELETE FROM categorias WHERE id=$id";
        mysqli_query($conexion, $consulta) or die("Problemas en la consulta:".mysqli_error($conexion));
        echo "<script> alert (\"Categoria Eiminada\"); </script>";
        echo "<script>location.href='categorias.php';</script>";   
    }else{

    }

?>
<?php
    include("header.php");
?>

        <section>
            <div id="texto">
                <hgroup>
                    <h1>Administrar Categorias</h1>
                </hgroup>
                <button><a href="createCategorias.php">Crear Nuevo</a></button>
                <br><br>
                <table border="2px">
                    <thead>
                        <th>Nombre</th>
                        <th>Descripcion</th>
                        <th>Fecha de Registro</th>
                        <th>Estado</th>
                        <th>Acciones</th>
                    </thead>
                    <tbody>
                        
                        <?php
                            include('conexion.php');
                        
                            $consulta = "SELECT * FROM categorias";
                            $categorias=mysqli_query($conexion, $consulta) or die("Problemas en el select:".mysqli_error($conexion));
                            
                            foreach($categorias as $categoria){
                                if($categoria['estado']==1){
                                    $estado = "Activo";
                                }else{
                                    $estado = "Inactivo";
                                }

                                echo"
                                <tr>
                                <td>
                                    ".$categoria['nombre']."
                                </td>
                                <td>
                                    ".$categoria['descripcion']."
                                </td>
                                <td>
                                    ".$categoria['fecha_registro']."
                                </td>
                                <td>".$estado."</td>
                                <td>
                                    <a href='borrarCategoria.php?id=".$categoria['id']."' onclick='return confirmation()'>Eliminar</a>,
                                    <a href='editarCategoria.php?id=".$categoria['id']."'>Editar</a>,
                                    
                                </td>
                                </tr>"; 
                            }          
                        ?>
                        
                        
                    </tbody>
                </table>
            </div>
        </section>
<?php
    include("footer.php");
?>
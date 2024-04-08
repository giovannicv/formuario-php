<?php
    include("header.php");
?>

        <section>
            <div id="texto">
                <hgroup>
                    <h1>Editar Categoria</h1>
                </hgroup>
                <?php
                    if(isset($_GET['id'])){
                    
                        $id = $_GET['id'];
                        include('conexion.php');
                        
                        $consulta ="SELECT * FROM categorias WHERE id=$id";
                        $categoria = mysqli_query($conexion, $consulta) or die("Problemas en la consulta:".mysqli_error($conexion));
                        foreach($categoria as $cate){
                        
                            if($cate['estado']==1){
                                $estado = "Activo";
                                $valor = $cate['estado'];
                                $valor2 = 0;
                                $estado2 ="Inactivo";
                            }else{
                                $estado = "Inactivo";
                                $valor = $cate['estado'];
                                $valor2 = 1;
                                $estado2 ="Activo";
                            }
                            echo '
                                <form action="updateCategoria.php" method="POST">
                                    <input type="hidden" name="id" value="'.$cate["id"].'"><label for="nombre">Nombre:</label>
                                    <input type="text" name="nombre" value="'.$cate["nombre"].'" id="nombre">
                                    <label for="descripcion">Descripcion:</label>
                                    <input type="text" name="descripcion" value="'.$cate["descripcion"].'" id="descripcion" placeholder="Descripcion" required>
                                    <label for="estado">Estado:</label>
                                    <select name="estado" id="estado">
                                        <option value="'.$valor.'">'.$estado.'</option>
                                        <option value="'.$valor2.'">'.$estado2.'</option>
                                    </select>
                                    <input type="submit" value="Modificar" id="btnSubmit">
                                </form>
                            ';  //falta aumentar un if para actualizar el estado
   
                        }
                    }else{
                        echo "<br><a href='clientes.php'>no se selecciono ningun cliente</a>";
                    }

                ?>
            </div>
        </section>
        <?php
    include("footer.php");
?>
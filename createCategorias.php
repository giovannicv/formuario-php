<?php
    include("header.php");
?>

        <section>
            <div id="texto">
                
                    <h1>Crear Categorias</h1>
                
                <form action="registroCategorias.php" method="POST">
                    <label for="nombre">Nombre:</label>
                    <input type="text" name="nombre" id="nombre">
                    <label for="descripcion">Descripcion:</label>
                    <input type="text" name="descripcion" id="descripcion" placeholder="Descripcion" required>
                    <label for="estado">Estado:</label>
                    <select name="estado" id="estado">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                    <input type="submit" value="Registrar" id="btnSubmit">
                </form>
            </div>
        </section>
<?php
    include("footer.php");
?>
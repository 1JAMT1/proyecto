<?php
//inicio seguridad
session_start();
$auth=$_SESSION['login'];
if(!$auth){
    header('Location:/espaciodeliteratura');
}
//fin de seguridad
    require '../../includes/config/database.php';
    $db=conectarDB();
    require '../../includes/funciones.php';
    incluirTemplate('header');
?>
<link rel="stylesheet" href="../../cssa/bootstrap.min.css">
<main class="contenedor seccion">
        <br>
        <h1>Publicar Libro</h1>
        <br>
        <br><br>
<!-- inicio -->
<div class="col-md-4">
<div class="card">
                <div class="card-header">
                    Ingresar datos:
                </div>
                <?php  $iu=$_GET['cod']; ?>
                <form class="p-4" method="post" action="/espaciodeliteratura/admin/libros/registrarlibro1.php?cod=<?php echo $iu; ?>"
                     enctype="multipart/form-data">
                     <div class="mb-3">
                        <label class="form-label">Titulo: </label>
                        <input type="text" class="form-control" name="tit" id="tit" placeholder="Titulo" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha de Creación: </label>
                        <input type="date" class="form-control" name="fec" id="fec" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label for="form-label">Genero: </label>
                        <input type="text" class="form-control" name="gen" id="gen" placeholder="Genero" autofocus required>
                    </div>
                    <div class="mb-3">
                        <label for="form-label">Descripcion: </label>
                        <input type="text" class="form-control" name="des" id="des" placeholder="Genero" autofocus required>
                    </div>
                    <div>
                        <label for="">Precio:</label>
                        <input type="decimal" class="form-control" name="pre" id="pre" placeholder="Precio">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Portada: </label>
                        <input type="file" class="form-control" name="por" id="por" accept="image/jpeg, image/png, image/jpg">
                    </div>
                    <div class="mb-3">
                        <label for="form-label">Editorial: </label>
                        <select name="idEd" id="idEd">
                        <?php
                            $con_sql='SELECT * FROM editoriales';
                            $res=mysqli_query($db,$con_sql);
                            while($reg=$res->fetch_assoc())
                            {
                            ?>
                            <option value="<?php echo $reg['idEditorial']; ?>">
                                <?php echo $reg['nombreEditorial']; ?>
                            </option>
                        <?php 
                            } 
                        ?>
                </select>
                    </div>
                    <br>
                    <div class="d-grid">
                        <input type="submit" class="btn btn-primary" value="Registrar Libro">
                    </div>
                    
                </form>
            </div>
        </div>
<!-- fin -->
    </main>

    <script src="../../jsa/bootstrap.min.js" ></script>
<?php
    incluirTemplate('footer');
?>
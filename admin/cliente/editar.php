<?php include 'template/header.php' ?>

<?php
    if (!isset($_GET['id_cliente'])) {
        header('Location: index.php?mensaje=error');
        exit();
    }

    include_once 'model/conexion.php';
    $id_cliente = $_GET['id_cliente'];

    $sentencia = $bd->prepare("SELECT * FROM tbl_cliente WHERE id_cliente = ?;");
    $sentencia->execute([$id_cliente]);
    $cliente = $sentencia->fetch(PDO::FETCH_OBJ);
?>


<div class="container mt-5 mb-5">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">
                    Editar datos:
                </div>
                <form class="p-4" method="POST" action="editarProceso.php">
                    <div class="mb-3">
                        <label class="form-label">Nombre Completo: </label>
                        <input type="text" class="form-control" name="nombre_completo" required 
                        value="<?php echo $cliente->nombre_completo; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Correo: </label>
                        <input type="text" class="form-control" name="correo" autofocus required
                        value="<?php echo $cliente->correo; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Telefono: </label>
                        <input type="text" class="form-control" name="telefono" autofocus required
                        value="<?php echo $cliente->telefono; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Direccion: </label>
                        <input type="text" class="form-control" name="direccion" autofocus required
                        value="<?php echo $cliente->direccion; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Fecha de Nacimiento: </label>
                        <input type="date" class="form-control" name="fecha_nacimiento" autofocus required
                        value="<?php echo $cliente->fecha_nacimiento; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña: </label>
                        <input type="password" class="form-control" name="contrasena" autofocus required
                        value="<?php echo $cliente->contrasena; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Puntos Acumulados: </label>
                        <input type="text" class="form-control" name="puntos_acumulados" autofocus required
                        value="<?php echo $cliente->puntos_acumulados; ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Genero: </label>
                        <input type="text" class="form-control" name="genero" autofocus required
                        value="<?php echo $cliente->genero; ?>">
                    </div>
                    <div class="d-grid">
                        <input type="hidden" name="id_cliente" value="<?php echo $cliente->id_cliente; ?>">
                        <input type="submit" class="btn btn-primary" value="Editar">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include 'template/footer.php' ?>


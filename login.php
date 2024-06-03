<?php
require 'includes/config/database.php';
$db = conectarDB();
$errores = [];

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $e = isset($_POST['ema']) ? mysqli_real_escape_string($db, $_POST['ema']) : '';
    $p = isset($_POST['pas']) ? mysqli_real_escape_string($db, $_POST['pas']) : '';
    
    if (!$e) {
        $errores[] = "El email es obligatorio";
    }
    if (!$p) {
        $errores[] = "El password es obligatorio";
    }
    
    if (empty($errores)) {
        $con_sql = "SELECT * FROM usuarios WHERE gmail='$e'";
        $res = mysqli_query($db, $con_sql);
        
        if ($res && $res->num_rows) {
            $usuario = mysqli_fetch_array($res);
            $auth = password_verify($p, $usuario['password']);
            
            if ($auth) {
                session_start();
                $_SESSION['usuario'] = $usuario['gmail'];
                $_SESSION['login'] = true;
                
                if ($usuario['rolUsuario'] == 'admin') {
                    header("Location: /espaciodeliteratura/BASEDEDATOS.php");
                } else {
                    header("Location: /espaciodeliteratura/admin/perfilUsuario/index.php?cod=" . $usuario['idusuario']);
                }
                exit();
            } else {
                $errores[] = "El password es incorrecto";
            }
        } else {
            $errores[] = "El usuario no existe";
        }
    }
}

require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion contenido-centrado">
    <br><br>
    <center>
        <h1>Iniciar Sesión</h1>
    </center>
    <br><br>
    <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <style>
    /* Estilos con variables jamt */
    :root {
        --jamt-color-fondo: #f4f4f9;
        --jamt-color-texto: #333;
        --jamt-color-borde: #4CAF50;
        --jamt-color-boton-fondo: #4CAF50;
        --jamt-color-boton-texto: #fff;
    }

    .formulario {
        font-family: Arial, sans-serif;
        background-color: var(--jamt-color-fondo);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        max-width: 300px;
        margin: 0 auto;
    }

    fieldset {
        border: none;
        padding: 0;
        margin: 0;
    }

    label {
        display: block;
        margin-bottom: 5px;
        color: var(--jamt-color-texto);
    }

    input[type="email"],
    input[type="password"] {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: var(--jamt-color-boton-fondo);
        color: var(--jamt-color-boton-texto);
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
        background-color: #45a049;
    }
</style>

<form action="" method="post" class="formulario">
    <fieldset>
        <label for="ema">E-mail</label>
        <input type="email" name="ema" id="ema" value="" placeholder="Tu email">
        <label for="pas">Password</label>
        <input type="password" name="pas" id="pas" value="" placeholder="Tu password">
    </fieldset>
    <center>
    <a href="../espaciodeliteratura/admin/usuarios/listado.php"><input type="submit" value="Iniciar Sesión" class="boton boton-verde"></a>
    </center>
</form>

</main>
<br><br>
<?php
incluirTemplate('footer');
?>

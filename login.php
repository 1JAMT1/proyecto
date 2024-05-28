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
                    header("Location: /espaciodeliteratura/admin/index.php");
                } else {
                    header("Location: /espaciodeliteratura/admin/usuario/index.php?cod=" . $usuario['idusuario']);
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
    <h1>Iniciar Sesión</h1>
    <?php foreach ($errores as $error): ?>
        <div class="alerta error">
            <?php echo $error; ?>
        </div>
    <?php endforeach; ?>
    <form action="" method="post" class="formulario">
        <fieldset>
            <label for="ema">E-mail</label>
            <input type="email" name="ema" id="ema" value="" placeholder="Tu email">
            <label for="pas">Password</label>
            <input type="password" name="pas" id="pas" value="" placeholder="Tu password">
        </fieldset>
        <input type="submit" value="Iniciar Sesión" class="boton boton-verde">
    </form>
</main>

<?php
incluirTemplate('footer');
?>

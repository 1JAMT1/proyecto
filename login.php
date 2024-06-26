<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
                $_SESSION['idUsuario']=$usuario['idusuario'];
                $_SESSION['login'] = true;
                $_SESSION['rol'] =$usuario['rolUsuario'];
                $_SESSION['pass']=$usuario['password'];
                $_SESSION['saldo']=$usuario['saldo'];
                
                if ($usuario['rolUsuario'] == 'admin') {
                    header("Location: /espaciodeliteratura/BASEDEDATOS.php");
                }
                if($usuario['rolUsuario']=='usuario'){
                    header("Location: /espaciodeliteratura/admin/perfilUsuario/index.php?cod=" . $usuario['idusuario']);
                }
                if($usuario['rolUsuario']=='autor'){
                    header("Location: /espaciodeliteratura/admin/perfilAutor/index.php?cod=" . $usuario['idusuario']);
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
<link href="ojo.css" type="text/css" rel="stylesheet">
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
        <img src="cerrar-ojo.png" onclick="mostrar()" class="pass-icon" id="pass-icon">
        <!--<input type="button" name="wf" onclick="mostrar()" value="Mostrar Contraseña">-->
        <br>
        <input type="button" name="wf" onclick="mostrar()" value="Mostrar Contraseña" >
        <br>
    </fieldset>
    <center>
    <a href="../espaciodeliteratura/admin/usuarios/listado.php"><input type="submit" value="Iniciar Sesión" class="boton boton-verde"></a>
    </center>
</form>
<br>
<center>
<a href="../espaciodeliteratura/admin/usuarios/crear.php" class="btn btn-warning">Crear cuenta</a>
</center>
<br><br>
</main>

</main>
<br><br>
<script type="text/javascript">
    function mostrar() {
        var tipo = document.getElementById("pas");

        if(tipo.type == 'password'){
            tipo.type = 'text';
            document.getElementById('pass-icon').src='ojo.png';
            src="ojo.png";
        } else {
            tipo.type = 'password';
            document.getElementById('pass-icon').src='cerrar-ojo.png';
        }
    }
</script>
<?php
incluirTemplate('footer');
?>

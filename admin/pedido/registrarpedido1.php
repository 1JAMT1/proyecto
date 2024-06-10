<?php
//inicio seguridad
session_start();
$auth=$_SESSION['login'];
if(!$auth){
    header('Location:/espaciodeliteratura');
}

//fin de seguridad
if(!isset($_SESSION)){
    session_start();
}
$auth=$_SESSION['login']?? false;
$cod = isset($_SESSION['idUsuario']) ? $_SESSION['idUsuario'] : null;
$saldo = isset($_SESSION['saldo']) ? $_SESSION['saldo'] : null;
    require '../../includes/config/database.php';
    $db=conectarDB();
    //var_dump($db);
    if($_GET){
        $u=$_GET['idu'];
        $l=$_GET['idl'];
        $con_sql1="SELECT * FROM libros WHERE idlibro='$l'";
        $res1=mysqli_query($db,$con_sql1);
        $libro = mysqli_fetch_assoc($res1);
        $fechaHoraActual = new DateTime();
        if($saldo>=$libro['precio']){
        $fecha_actual = $fechaHoraActual->format("Y-m-d");
        $con_sql="INSERT INTO pedido (idusuario,idlibro,fechacompra) VALUES ('$u','$l','$fecha_actual')";
        $res=mysqli_query($db,$con_sql);
        if($res){
            $saldo=$saldo-$libro['precio'];
            $con_sql3 = "UPDATE usuarios SET saldo = saldo + '$saldo' WHERE idusuario = '$cod'";
            $res3=mysqli_query($db,$con_sql3);
            echo "
                <script> 
                    alert ('Se registro');
                    window.location='/espaciodeliteratura/CATALOGO.php';

                </script>
            ";
        }
        }else{
            echo "
            <script> 
                alert ('Saldo insuficiente');
                window.location='/espaciodeliteratura/CATALOGO.php';
            </script>
        ";
        }

    }
?>
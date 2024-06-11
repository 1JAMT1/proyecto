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
    //var_dump($db);
    if($_POST){
        $u=$_POST['idu'];
        $l=$_POST['idl'];
        $c=$_POST['can'];
        //fecha 
        $fechaHoraActual = new DateTime();
        $fecha_actual = $fechaHoraActual->format("Y-m-d");
        $con_sql="INSERT INTO pedido (idusuario,idlibro,cantidad,fechacompra) VALUES ('$u','$l','$c','$fecha_actual')";
        $res=mysqli_query($db,$con_sql);
        if($res){
            echo "
                <script> 
                    alert ('Se registro');
                </script>
            ";
        }
    }
?>
<?php
    require '../../includes/config/database.php';
    $db=conectarDB();
    //var_dump($db);
    if($_GET){
        $u=$_GET['idu'];
        $l=$_GET['idl'];
        $c=1;
        //fecha 
        $fechaHoraActual = new DateTime();
        $fecha_actual = $fechaHoraActual->format("Y-m-d");
        $con_sql="INSERT INTO pedido (idusuario,idlibro,fechacompra) VALUES ('$u','$l','$fecha_actual')";
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
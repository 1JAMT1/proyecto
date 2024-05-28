<?php
    require '../../includes/config/database.php';
    $db=conectarDB();
    //var_dump($db);
    if($_POST){
        $i=$_POST['idp'];
        $u=$_POST['idu'];
        $l=$_POST['idl'];
        $c=$_POST['can'];
        $f=$_POST['fec'];
        $con_sql="INSERT INTO pedido (idpedido,idusuario,idlibro,cantidad,fechacompra) VALUES ('$i','$u','$l','$c','$f')";
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
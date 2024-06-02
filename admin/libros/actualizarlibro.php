<?php
    require '../../includes/config/database.php';
    $db=conectarDB();
    //var_dump($db);
    if($_POST){
        $t=$_POST['tit'];
        $i=$_POST['ida'];
        $f=$_POST['fec'];
        $g=$_POST['gen'];
        $p=$_POST['por'];
        $r=$_POST['pre'];
        $e=$_POST['est'];
        $d=$_POST['des'];
        $t=$_POST['edi'];
        $con_sql="INSERT INTO libros (titulo,idautor,fechacreacion,generoLibro,portada,precio,estado,descripcion,editorial) VALUES ('$t','$i','$f','$g','$p','$r','$e','$d','$t')";
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
<?php
    require '../../includes/config/database.php';
    $db=conectarDB();
    //var_dump($db);
    if($_POST){
        $b=$_POST['idb'];
        $u=$_POST['idu'];
        $t=$_POST['tit'];
        $c=$_POST['con'];
        $i=$_POST['ima'];
        $con_sql="INSERT INTO blog (idblog,idusuario,titulo,contenido,imagen) VALUES ('$b','$u','$t','$c','$i')";
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
<?php
    require '../../includes/config/database.php';
    $db=conectarDB();
    //var_dump($db);
    if($_POST){
        $i=$_POST['idu'];
        $g=$_POST['gma'];
        $p=$_POST['pas'];
        $con_sql="INSERT INTO vendedores (idusuario,gmail,password) VALUES ('$i','$g','$p')";
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
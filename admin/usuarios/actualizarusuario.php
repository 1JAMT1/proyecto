<?php
    require '../../includes/config/database.php';
    $db=conectarDB();
    //var_dump($db);
    $cod=$_GET['cod'];
    if(isset($_POST['Modificar']))
    {
        $i=$_POST['idu'];
        $g=$_POST['gma'];
        $p=$_POST['pas'];
        $telefono=$_POST['tel'];
        $nickname=$_POST['nick'];
        $con_sql="UPDATE usuarios 
        SET idusuario='$i',gmail='$g',password='$p'
        ,telefono='$telefono',nickname='$nickname'
        WHERE idusuario='$cod')";
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
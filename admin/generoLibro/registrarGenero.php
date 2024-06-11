<?php
//inicio seguridad
session_start();
$auth=$_SESSION['login'];
if(!$auth){
    header('Location:/espaciodeliteratura');
}
//fin de seguridads
    require '../../includes/config/database.php';
    $db=conectarDB();
    //var_dump($db);
    if($_POST){
        $n=$_POST['nom'];
        $con_sql="INSERT INTO generolibros
         (nombreGenero) VALUES ('$n')";
        $res=mysqli_query($db,$con_sql);
        if($res){
            echo "
                <script> 
                    alert ('Se registro');
                    window.location.href = '/espaciodeliteratura/admin/generoLibro/listado.php';
                </script>
            ";
        }
    }
?>
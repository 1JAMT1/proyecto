<?php
    require '../../includes/config/database.php';
    $db=conectarDB();
    //var_dump($db);
    $cod=$_GET['cod'];
    if(isset($_POST['Modificar']))
    {
        $i=$_POST['idu'];
        $g=$_POST['gma'];
        $telefono=$_POST['tel'];
        $nickname=$_POST['nick'];
        $nombre=$_POST['nom'];
        $paterno=$_POST['pat'];
        $materno=$_POST['mat'];
        $con_sql="UPDATE usuarios 
        SET idusuario='$i',gmail='$g',telefono='$telefono',nombre='$nombre',paterno='$paterno'
        ,materno='$materno',nickname='$nickname' WHERE idusuario='$cod')";
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
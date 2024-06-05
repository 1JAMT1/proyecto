<?php
    require '../../includes/config/database.php';
    $db=conectarDB();
    //var_dump($db);
    if($_POST){
        $n=$_POST['nom'];
        $con_sql="INSERT INTO editoriales
         (nombreEditorial) VALUES ('$n')";
        $res=mysqli_query($db,$con_sql);
        if($res){
            echo "
                <script> 
                    alert ('Se registro');
                    window.location.href = '/espaciodeliteratura/admin/editoriales/listado.php';
                </script>
            ";
        }
    }
?>
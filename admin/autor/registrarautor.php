<?php
    require '../../includes/config/database.php';
    $db=conectarDB();
    //var_dump($db);
    if($_POST){
        $n=$_POST['nom'];
        $p=$_POST['pat'];
        $m=$_POST['mat'];
        $f=$_POST['fec'];
        $g=$_POST['gen'];
        $con_sql="INSERT INTO autor (nombre,paterno,materno,fechanacimiento,genero) VALUES ('$n','$p','$m','$f','$g')";
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
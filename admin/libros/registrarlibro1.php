<?php
    require '../../includes/config/database.php';
    $db=conectarDB();
    //var_dump($db);
    if($_POST){
        $ji=$_GET['cod'];
        $t=$_POST['tit'];
        $f=$_POST['fec'];
        $g=$_POST['gen'];
        $d=$_POST['des'];
        $r=$_POST['pre'];
        $p=$_FILES['por']['name'];
        $edi=$_POST['idEd'];
        $con_sql="INSERT INTO libros (titulo,fechacreacion,generoLibro,descripcion,precio,portada,estado,editorial,idusuario)
         VALUES ('$t','$f','$g','$d','$r','$p','activo','$edi','$ji')";
        $res=mysqli_query($db,$con_sql);
        if($res){
            $tmp=$_FILES['por']['tmp_name'];
            @copy($tmp,'imagenes/'.$p);
            echo "
                <script> 
                    alert ('Se registro');
                </script>
            ";
        }
    }
?>
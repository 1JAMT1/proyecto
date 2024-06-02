<?php
    require '../../includes/config/database.php';
    $db=conectarDB();
    //var_dump($db);
    if($_POST){
        $t=$_POST['tit'];
        $i=$_POST['ida'];
        $f=$_POST['fec'];
        $g=$_POST['gen'];
        $p=$_FILES['por']['name'];
        $r=$_POST['pre'];
        $d=$_POST['des'];
        $edi=$_POST['idEd'];
        $cantidad=$_POST['cant'];
        $con_sql="INSERT INTO libros (titulo,idautor,fechacreacion,generoLibro,portada,precio,estado,descripcion,editorial,
        cantidadLibro)
         VALUES ('$t','$i','$f','$g','$p','$r','activo','$d','$edi','$cantidad')";
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
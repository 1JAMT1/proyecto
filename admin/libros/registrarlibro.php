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
        $con_sql="INSERT INTO libros (titulo,idusuario,fechacreacion,generoLibro,portada,precio,estado,descripcion,editorial)
         VALUES ('$t','$i','$f','$g','$p','$r','activo','$d','$edi')";
        $res=mysqli_query($db,$con_sql);
        if($res){
            $tmp=$_FILES['por']['tmp_name'];
            @copy($tmp,'imagenes/'.$p);
            echo "
                <script> 
                    alert ('Se registro');
                    window.location.href = '/espaciodeliteratura/admin/libros/listado.php';
                </script>
            ";
        }
    }
?>
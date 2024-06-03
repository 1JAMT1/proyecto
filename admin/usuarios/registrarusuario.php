<?php
    require '../../includes/config/database.php';
    $db=conectarDB();
    //var_dump($db);
    if($_POST){
        $nick=$_POST['nick'];
        $nom=$_POST['nom'];
        $pat=$_POST['pat'];
        $mat=$_POST['mat'];
        $g=$_POST['gma'];
        $p=$_POST['pass'];
        $a=$_FILES['ima']['name'];
        $b=$_POST['num'];
        $io=$_POST['rol'];
        $pashash=password_hash($p,PASSWORD_DEFAULT);
        $con_sql="INSERT INTO usuarios (nickname,gmail,password,imagenUsuario,telefono,rolUsuario,nombre,paterno,materno) 
        VALUES ('$nick','$g','$pashash','$a','$b','$io','$nom','$pat','$mat')";
        $res=mysqli_query($db,$con_sql);
        if($res){
            $tmp=$_FILES['ima']['tmp_name'];
            @copy($tmp,'imagenes/'.$a);
            ?>
            <script> 
                alert ('Se registro');
                location.href='listado.php';
            </script>
            <?php
        }
        else
            echo"ERROR";
    }
?>
<?php
    function conectarDB(){
        $db=mysqli_connect('localhost','root','','espaciodeliteratura');
        if(!$db){
            echo "No se conecto";
            exit;
        }
        return $db;
    }
?>
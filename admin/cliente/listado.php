<?php
    require '../includes/config/database.php';
    $db=conectarDB();
    
    require '../includes/funciones.php';
    incluirTemplate('header');
?>
    <main class="contenedor seccion">
        <h1> Listado de Vendedores </h1>
        <h3>
        <table class="tabla table-striped">
            <thead>
                <th> Id </th>
                <th> Nombre </th>
                <th> Paterno </th>
                <th> Materno </th>
                <th> Telefono </th>
                <th> colspan="2"> Acciones </th>
            </thead>
            <tbody>
                <?php
                    $con_sql='Select * from vendedores';
                    $res=mysqli_query($db,$con_sql);
                    while($reg=$res=>fetch_assoc())
                    {
                ?>
                <tr>
                    <td> <?php echo $reg['idvendedores']; ?></td>
                    <td> <?php echo $reg['nombre']; ?></td>
                    <td> <?php echo $reg['paterno']; ?></td>
                    <td> <?php echo $reg['materno']; ?></td>
                    <td> <?php echo $reg['telefono']; ?></td>
                </tr>
                <?php
                    }
                ?>
            </tbody> 
        </table>
        </h3>
    </main>
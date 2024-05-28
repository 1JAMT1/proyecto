<?php
    require '../espaciodeliteratura/includes/config/database.php';
    $db=conectarDB();
    //var_dump($db);
    require '../espaciodeliteratura/includes/funciones.php';
    incluirTemplate('header');
?>
<link rel="stylesheet" href="../../cssa/bootstrap.min.css">
<link rel="stylesheet" href="../../css/dropdown.css">
    <main class="contenedor seccion">
        <br><br>

        <div class="dropdown">
			<button>--Seleccione--</button>
			<div class="dropdown-content"> 
  				<a href="../espaciodeliteratura/CATALOGO.php">Mas destacados</a>
  				<a href="../espaciodeliteratura/CATascendente.php">Ascendente</a>
  				<a href="../espaciodeliteratura/CATdescendente.php">Descendente</a>
  				<a href="../espaciodeliteratura/CATbarato.php">Mas baratos</a>
  				<a href="../espaciodeliteratura/CATcaro.php">Mas caros</a>
  				<a href="../espaciodeliteratura/CATdisponible.php">Disponibles</a>
			</div>
		</div>

        <h3>
        <table class="table table-striped">
            <thead>
                <th> Título </th>
                <th> Autor</th>
                <th> Género </th>
                <th> Portada </th>
                <th> Precio </th>
                <th> Descripción </th>
            </thead>
            <tbody>
                <?php
                    //SELECT * FROM libros ORDER BY titulo ASC
                    $consql=("SELECT p.*,v.idautor,v.nombre,v.paterno FROM libros
                    p INNER JOIN autor v ON 
                    p.idautor=v.idautor where p.estado = 'Disponible'");
                    $resultado=mysqli_query($db,$consql);
                    while($var=mysqli_fetch_array($resultado))
                    {
                ?>
                <tr>
                        <td><?php echo $var['titulo']; ?> </td>
                        <td><?php echo $var['nombre']." ".$var['paterno'] ; ?> </td>
                        <td><?php echo $var['genero']; ?> </td>
                        <!-- inicio de imagen  -->
                        <td>
                            <img src="img/<?php echo $var['portada']; ?>" >
                        </td>
                        <!-- fin de imagen -->
                        <td><?php echo $var['precio']; ?> </td>
                        <td><?php echo $var['descripcion']; ?> </td>


                </tr>
                <?php
                    }
                ?>
            </tbody>
        </table>

        </h3>
        <a href="/espaciodeliteratura/BASEDEDATOS.php" class="btn btn-warning">Volver</a>
        <br><br>
    </main>
    <script src="../../jsa/bootstrap.min.js" ></script>
<?php
    incluirTemplate('footer');
?>
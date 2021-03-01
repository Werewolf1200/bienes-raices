<?php 
    require '../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>

        <a href="/admin/propiedades/crear.php" class="boton-verde">Nueva Propiedad</a>
    </main>

    <?php // La funcion ya fue incluida en el header
    incluirTemplate('footer');
    ?>
<?php 

    $resultado = $_GET['resultado'] ?? null;
    require '../includes/funciones.php';
    incluirTemplate('header');
?>

    <main class="contenedor seccion">
        <h1>Administrador de Bienes Raices</h1>
        <?php if( intval( $resultado ) === 1): ?>
            <p class="alerta exito">Anuncio Creado correctamente</p>
        <?php endif; ?>

        <a href="/admin/propiedades/crear.php" class="boton-verde">Nueva Propiedad</a>
    </main>

    <?php // La funcion ya fue incluida en el header
    incluirTemplate('footer');
    ?>
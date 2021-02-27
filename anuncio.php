<?php include 'includes/templates/header.php'; ?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Casa en venta frente al bosque</h1>

        <picture>
            <source srcset="build/img/destacada.webp" type="image/webp" >
            <source srcset="build/img/destacada.jpg" type="image/jpeg" > 
            <img loading="lazy" src="build/img/destacada.jpg" alt="Imagen de la Propiedad">
        </picture>

        <div class="resumen-propiedad">
            <p class="precio">$3,000,000</p>
            <ul class="iconos-caracteristicas">
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_wc.svg" alt="icono wc">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_estacionamiento.svg" alt="icono estacionamiento">
                    <p>3</p>
                </li>
                <li>
                    <img class="icono" loading="lazy" src="build/img/icono_dormitorio.svg" alt="icono dormitorio">
                    <p>4</p>
                </li>
            </ul>

            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam dignissimos magnam harum quas distinctio ab voluptatibus, corporis fugiat eaque aspernatur totam, temporibus non accusamus cupiditate amet, ea quisquam sunt numquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum atque deserunt aliquid facere porro quo, autem nesciunt minus consequuntur nostrum aspernatur maiores repellendus, labore adipisci iure beatae quod, eveniet laboriosam.
            </p>
            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Veniam dignissimos magnam harum quas distinctio ab voluptatibus, corporis fugiat eaque aspernatur totam, temporibus non accusamus cupiditate amet, ea quisquam sunt numquam. Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum atque deserunt aliquid facere porro quo, autem nesciunt minus consequuntur nostrum aspernatur maiores repellendus, labore adipisci iure beatae quod, eveniet laboriosam.
            </p>
        </div>

    </main>

    <?php include 'includes/templates/footer.php'; ?>
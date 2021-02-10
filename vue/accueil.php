<?php $title = "accueil-Cutsy Barbershop"; ?>
<?php ob_start() ?>
<main>
    <div id="accueil">
        <div id="accueil_text">
            <h3>Bienvenue chez</h3>
            <h2>CUTSY BARBER SHOP POUR LES VRAIS HOMMES</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus. Suspendisse lectus torto </p>
            <a class="btn_rdv" href="index.php?motif=planning"><i class="far fa-calendar-check"></i> Prendre RDV</a>
        </div>
    </div>
    <div id="a_propos">
        <h2>Bienvenue chez Cutsy Barber shop</h2>
        <div id="a_propos_text">
            <img src="./public/Css/beanie-2562646_640.jpg" alt="yvan">
            <div id="a_propos_content">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Debitis corporis ipsa hic voluptatem culpa
                    non quibusdam illum error id sit atque, eum distinctio? Sint, ad dicta totam nisi officiis dolorem
                    hic. Error est officia consectetur,
                    perspiciatis tempora hic mollitia repellat doloremque alias reiciendis voluptatibus totam earum modi
                    molestias, doloribus voluptas esse placeat! Distinctio fugiat sit, quisquam, eaque eos aspernatur
                    quasi vel illum consequatur
                    deleniti aperiam facilis numquam aliquid minima. Incidunt.</p>
                <p id="paragraph_italik">
                    "Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique magnam ipsa alias labore
                    voluptas reprehenderit provident quia excepturi quae ea?"
                </p>
                <span>Yvan Jayas</span>
                <a href="#">En savoir plus.</a>
            </div>

        </div>
    </div>

    <div id="services">
        <div id="service_overlay">
            <h2>Services</h2>
            <div id="services_list">
                <div id="service1">
                    <div id="service1_img">
                    </div>
                    <div id="service1_text">
                        <h3>Titre</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt, aliquid?</p>
                        <span>10 €</span>
                    </div>
                </div>
                <div id="service1">
                    <div id="service1_img">
                    </div>
                    <div id="service1_text">
                        <h3>Titre</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt, aliquid?</p>
                        <span>10 €</span>
                    </div>
                </div>
                <div id="service1">
                    <div id="service1_img">
                    </div>
                    <div id="service1_text">
                        <h3>Titre</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt, aliquid?</p>
                        <span>10 €</span>
                    </div>
                </div>
                <div id="service1">
                    <div id="service1_img">
                    </div>
                    <div id="service1_text">
                        <h3>Titre</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Incidunt, aliquid?</p>
                        <span>10 €</span>
                    </div>
                </div>
            </div>
            <a class="btn_rdv" href="index.php?motif=planning"><i class="far fa-calendar-check"></i> Prendre RDV</a>
        </div>
    </div>

    <div id="galerie">
        <h2>Galerie</h2>
        <div id="galerie_content">
            <img src="./public/Css/barbershop-c.jpg" alt="">
            <img src="./public/Css/barbershop-c.jpg" alt="">
            <img src="./public/Css/barbershop-c.jpg" alt="">
            <img src="./public/Css/barbershop-c.jpg" alt="">
            <img src="./public/Css/barbershop-c.jpg" alt="">
            <img src="./public/Css/barbershop-c.jpg" alt="">
        </div>
        <a class="btn_rdv" href="index.php?motif=planning"><i class="far fa-calendar-check"></i> Prendre RDV</a>
    </div>

</main>

<?php $content = ob_get_clean(); ?>
<?php require_once('./vue/template.php'); ?>
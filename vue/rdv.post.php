<?php $title = "Planning-Cutsy Barbershop"; ?>

<?php ob_start(); ?>
<main>
    <div id="head">
        <div id="head_overlay">
            <h2><span>Cutsy</span> Barbershop</h2>
        </div>
    </div>
    <div id="main_content">
        <?php
    if ($rdv_Annuler) {
        ?>
        <h2>Votre Rdv a été annulé. Vous avez reçu un mail de confirmation. `A bientôt!</h2>
        <?php
    }
    else {
        ?>
        <h2>Votre Rdv a été enregistré. Vous avez reçu un mail de confirmation. `A bientôt!</h2>
        <?php
        
    }
     ?>
    </div>

</main>
<?php $content = ob_get_clean(); ?>
<?php require_once('./vue/template.php'); ?>
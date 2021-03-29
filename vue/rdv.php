<?php $title = "Rdv-Cutsy Barbershop"; ?>

<?php ob_start() ?>
<main>
    <div id="head">
        <div id="head_overlay">
            <h2><span>Cutsy</span> Barbershop</h2>
        </div>
    </div>
    <div id="formulaire">
        <p>Merci de prendre votre rdv et nous préciser ce que vous voulez</p>
        <form action="" method="post" enctype="multipart/form-data">
            <input type="text" name="pseudo" id="pseudo" placeholder="Votre pseudo (*)" required>
            <input type="email" name="email" id="email" placeholder="Votre email (*)" required>
            <label for="photo">Donnez un modele</label>
            <input type="file" name="photo" id="photo" title="Choisir modele">
            <textarea name="commentaire" id="commentaire" cols="30" rows="8"
                placeholder="saisissez votre commentaire"></textarea>
            <input type="hidden" name="motif" value="setRdv">
            <input type="hidden" name="creneau" value="<?= $creneau ?>">
            <input type="submit" value="Envoyer">
        </form>
    </div>
</main>

<?php $content = ob_get_clean(); ?>
<?php require_once('./vue/template.php'); ?>
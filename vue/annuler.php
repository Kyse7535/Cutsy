<?php $title = "Annuler-Cutsy Barbershop"; ?>

<?php ob_start(); ?>
<main>
    <div id="head">
        <div id="head_overlay">
            <h2><span>Cutsy</span> Barbershop</h2>
        </div>
    </div>
    <div id="annuler_content">
        <div id="annuler_item1">
            <form action="index.php" method="post" novalidate>
                <h2>Annuler un rdv</h2>
                <h3>Veuillez saisir les informations suivantes</h3>
                <input type="text" name="pseudo" placeholder="Votre pseudo (*)">
                <input type="datetime-local" name="laDate" placeholder="Date du rdv (*)">
                <input type="submit" value="Valider">
                <input type="hidden" name="motif" value="getDate">
            </form>
        </div>
        <?php
        if (isset($resultat)) {
            ?>
        <div id="list_rdv">
            <div id="list_rdv_item">
                <h3>Vos Rendez-vous</h3>
                <form class="rdv_item" action="index.php" method="post">

                    <?php
                if ($resultat->rowCount() == 0) {?>
                    <div>
                        <h2>Aucun rdv</h2>
                    </div>
                    <?php

                }
                else {
                    while ($donnees = $resultat->fetch()) {
                    ?>

                    <div>
                        <h4>Pseudo</h4>
                        <p><?= $donnees['pseudo'] ?></p>
                        <h4>Date</h4>
                        <p><?= $donnees['laDate'] ?></p>
                        <input type="submit" value="supprimer" class="btn_delete">
                        <input type="hidden" name="motif" value="setAnnuler">
                        <input type="hidden" name="laDate" value="<?= $donnees["laDate"] ?>">
                    </div>
                    <?php
            }
                }
                 ?>
                </form>
            </div>
        </div>
        <?php
        }
         ?>
    </div>
</main>
<?php $content = ob_get_clean(); ?>
<?php require_once('./vue/template.php'); ?>
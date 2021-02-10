<?php require_once('./modele/modele.php'); ?>

<?php
$base = connexion();
    function CtlAccueil() {
        require_once('./vue/accueil.php');
    }

    function CtlPlanning() {
        $base = $GLOBALS['base'];
        require_once('./vue/planning.php');
    }

    function CtlRdv() {
        require_once('./vue/rdv.php');
    }

    function Ctlimage() {

    if ($_FILES['photo']['error']) {
        switch ($_FILES['photo']['error']) {
            case 1: //UPLOAD_ERR_INI_SIZE
                echo "La taille du fichier est plus grande que la limite autorisée par le serveur";
                break;
            case 2: // UPLOAD_ERR_FORM_SIZE
                echo "La taille du fichier est plus grande que la limite autorisée par le formulaire";
                break;
            case 3: //UPLOAD_ERR_PARTIAL
                echo "L'envoi du fichier a été interrompu pendant le transfert";
                break;
            case 4:
                echo "La taille du fichier que vous avez envoyé est nulle";
                break;
        }
    } else {
        //s'il n'y a pas d'erreur alors $_FILES['nom_du_fichier']['error'] vaut 0
        //echo "Aucune erreur dans l'upload du fichier. <br>";
        if ((isset($_FILES['photo']['name']) && ($_FILES['photo']['error'] == UPLOAD_ERR_OK))) {

            $filename = basename($_FILES['photo']['name']);
            $tempname = $_FILES['photo']['tmp_name'];
            $chemin_destination = "./public/fichiers/" . $filename;

            //deplacement du fichier du repertoire temporaire (stocké par defaut) dans le rep de destination avec la fonction
            if (move_uploaded_file($tempname, $chemin_destination)) {
                //echo "Le fichier " . $filename . " a ete copie dans le repertoire fichiers";
            }
            return $filename;
        } else {
            echo "Le fichier n'a pas pu être copié dans le repertoire fichiers.";
        }
    }
}

    function CtlsetRdv($tab, $img){
        $mytab = [];
        $mytab['pseudo'] = htmlspecialchars($tab['pseudo']) ;
        $mytab['email'] = htmlspecialchars($tab['email']);
        $mytab['commentaire'] = htmlspecialchars($tab['commentaire']);
        $mytab['laDate'] = htmlspecialchars($tab['date']);
        $mytab['$img'] = $img;
        setCreneau($mytab, $GLOBALS['base']);
    }

    function CtlgetRdv($numWeek) {
        $resultat = getCreaneau($GLOBALS['base']);
        if ($resultat == false) {
            throw new Exception('Erreur chargement planning');
        }
        else {
            $numWeek = $numWeek;
            $base = $GLOBALS['base'];
            require_once('./vue/planning.php');
        }
    }

?>
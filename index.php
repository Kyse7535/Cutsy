<?php
try {
    require_once('./Controller/controller.php');
    if (isset($_GET['motif'])) {
        $motif = htmlspecialchars($_GET['motif']);
        if ($motif == "planning") {
            
            CtlPlanning();
        }
        elseif ($motif == "getAnnuler") {
            CtlgetAnnuler();
        }
        
    }
    elseif (isset($_GET['admin'])) {
       //CtlgetRdv();
        CtlAdmin();
    }
    elseif (isset($_POST['motif'])) {
        $motif = htmlspecialchars($_POST['motif']);
        if ($motif == "setcreneau") {
            CtlsetCreneau($_POST['creneau']);
            CtlsendMail($_POST['creneau']);
        }
        elseif ($motif == "setRdv") {
            $img = Ctlimage();
           CtlsetRdv($_POST, $img);
        }
        elseif ($motif == "setweek") {
            CtlgetRdv($_POST['date']);
        }
        elseif( $motif == "getDate") {
            CtlgetTheDate($_POST);
        }
        elseif($motif == "setAnnuler") {
            CtlSetAnnuler($_POST);
        }
    }
    else {
        CtlAccueil();
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
<?php
try {
    require_once('./Controller/controller.php');
    if (isset($_GET['motif'])) {
        $motif = htmlspecialchars($_GET['motif']);
        if ($motif == "planning") {
            
            CtlPlanning();
        } 
    }
    elseif (isset($_GET['admin'])) {
       CtlgetRdv();
        CtlPlanning();
    }
    elseif (isset($_POST['motif'])) {
        $motif = htmlspecialchars($_POST['motif']);
        if ($motif == "setcreneau") {
            CtlRdv();
        }
        elseif ($motif == "setRdv") {
            $img = Ctlimage();
           CtlsetRdv($_POST, $img);
        }
        elseif ($motif == "setweek") {
            CtlgetRdv($_POST['date']);
        }
    }
    else {
        CtlAccueil();
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
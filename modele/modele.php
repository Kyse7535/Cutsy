<?php
function connexion()
{
    $base = new PDO("mysql:host = 127.0.0.1;dbname=Cutsy", "kisseime", "boMk68QT8A8zGULs");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connexion reussie <br>";
    return $base;
}

function getCreaneau($base) {
    $sql = "select * from Creneau";
    $resultat = $base->query($sql);
    return $resultat;
}

function setCreneau($tab, $base) {
    $sql = "insert into Creneau(pseudo,laDate, email, image, commentaire) values(?, ?, ?, ?, ?);";
    $resultat = $base->prepare($sql);
    $resultat = $resultat->execute(array($tab['pseudo'], $tab['creneau'], $tab['email'], $tab['img'], $tab['commentaire']));
}

function getOneCreneau($creneau, $base) {
    $sql = "select * from Creneau where laDate = ?";
    $resultat = $base->prepare($sql);
    $resultat->execute(array($creneau));
    return $resultat;
}

function getTheDateToCancel($laDate, $pseudo, $base) {
    $sql = "select * from Creneau where laDate = ? and pseudo = ?";
    $resultat = $base->prepare($sql);
    $resultat->execute(array($laDate, $pseudo));
    return $resultat;
}

function DeleteCreneau($laDate, $base) {
    $sql = "delete from Creneau where laDate = ?";
    $resultat = $base->prepare($sql);
    $resultat->execute(array($laDate));
}

?>
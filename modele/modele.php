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
    $sql = "insert into Creaneau(pseudo,laDate, email, image, commentaire) values(?, ?, ?, ?, ?);";
    $resultat = $base->prepare($sql);
    $resultat = $resultat->execute(array($tab['pseudo'], $tab['date'], $tab['email'], $tab['image'], $tab['commentaire']));
}

?>
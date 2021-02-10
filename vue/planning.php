<?php $title = "Planning-Cutsy Barbershop"; ?>
<?php ob_start(); ?>
<main>
    <div id="head">
        <div id="head_overlay">
            <h2><span>Cutsy</span> Barbershop</h2>
        </div>
    </div>
    <div id="planning">

        <form action="index.php" method="post">

            <label for="date">Choisir une semaine :</label>
            <input type="week" name="date" id="date">
            <input type="hidden" name="motif" value="setweek">
            <input type="submit" value="Valider">
        </form>
        <?php
            
            if (isset($numWeek)) {
                $aujourdhui=strtotime("$numWeek");
            }else {
                $aujourdhui=strtotime("tomorrow");
            }
                ?>
        <form action="" method="post" id="planning_content">
            <p>Choisir un jour !</p>
            <table>
                <th>Heures</th>
                <?php
                        $w = date("W", $aujourdhui);
                        $jour = intval(date ("w", $aujourdhui));
                        while ($jour != 1) {
                            $aujourdhui = strtotime("-1 day", $aujourdhui);
                            $jour = intval(date ("w", $aujourdhui));
                        }
                        $datefin = strtotime("+1 week", $aujourdhui);
                        $datedebut = $aujourdhui;

                        while ($aujourdhui < $datefin) {
                        ?>
                <th><?= date('l d/m/Y', $aujourdhui) ?></th>
                <?php
                            $aujourdhui = strtotime("+1 day", $aujourdhui);
                            }
                    ?>
                <?php
                        echo date('d m Y ', $datedebut) . "<br>";
                        $heure_debut = strtotime('+ 10 hours', $datedebut);
                        $heure_fin = strtotime('+ 10 hours', $heure_debut);
                                        while ($heure_debut < $heure_fin) {  
                                        ?>
                <tr>
                    <th class="heure"><?= date('H:i', $heure_debut) ?></th>
                    <?php
                                        while($heure_debut <= $datefin) {
                                            $str = $base->quote(date('Y-m-d H:i:s', $heure_debut));
                                            $sql = 'select * from Creneau where laDate = '.$str .'';
                                            $resultat = $base->query($sql);
                                            if ($resultat == false) {
                                                throw new Exception('impossible afficher planning');
                                            }
                                            else {
                                                if($resultat->rowCount() == 0) {
                                                    ?>
                    <td id="<?= date('Y-m-d H:i:s', $heure_debut) ?>"></td>
                    <?php
                                                }
                                                else {
                                                    $donnees = $resultat->fetch(); 
                                                ?>
                    <td>Non disponible</td>
                    <?php
                                        }
                                        $heure_debut = strtotime("+1 day", $heure_debut);
                                            }     
                                        }
                                        $heure_debut = strtotime('- 1 week', $heure_debut);
                                        ?>
                </tr>
                <?php
                $heure_debut = strtotime("+ 30  minutes", $heure_debut);  
                                }

                                ?>
            </table>
            <input type="hidden" name="creneau" id="creneau" value="x">
            <input type="hidden" name="motif" value="setcreneau">
            <h3>Vous avez le creneau suivant.</h3>
            <input type="submit" value="Valider">
        </form>

    </div>
</main>

<?php $content = ob_get_clean(); ?>
<?php require_once('./vue/template.php'); ?>
<?php

/* Charger automatiquement les différentes class */
spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});

/* PAYS */

$portugal = new Pays("Portugal");
$france = new Pays("France");
$angleterre = new Pays("Angleterre");

/* JOUEUR */
$ronaldo = new Joueur("Cristiano","Ronaldo","12-03-1985", $portugal);
$mbappe = new Joueur("Kylian","Mbappé","27-08-1992", $france);
$messi = new Joueur("Lionel","Messi","14-10-1989",$france);
$neymar = new Joueur("Junior","Neymar","02-11-1995",$france);
//  echo $mbappe;

/* EQUIPE */
/* On crée un nouvel objet Equipe */
$psg = new Equipe("PSG", $france);
$om = new Equipe("OM",$france);
$racingClub = new Equipe("Racing Club Strasbourg",$france);
$porto = new Equipe("FC Porto",$portugal);
$manchester = 
/* On affiche les équipes pour le pays voulu */


/* CARRIERE */
$psgNeymar = new Carriere($neymar,$psg,2016);
$psgMbappe = new Carriere($mbappe,$psg,2021);
$omMbappe = new Carriere($mbappe,$om,2020);
$portoMbappe = new Carriere($mbappe,$porto,2018);
$psgMessi = new Carriere($messi,$psg,2015);
$portoRonaldo = new Carriere($ronaldo,$porto,2022);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>POO Football</title>
</head>
<body>
    <h1>Exercice football poo</h1>

    <div id="container_page">
        <div id="container-pays">
            <div class="pays-equipes">
                <?php echo $france->afficherEquipes(); ?>
            </div>
            <div class="pays-equipes">
                <?php echo $portugal->afficherEquipes(); ?>
            </div>
        </div>
        <div id="container-equipes">
            <div class="equipes">
                <?php echo $psg->afficherJoueurs(); ?>
            </div>
            <div class="equipes">
                <?php echo $porto->afficherJoueurs();  ?>
            </div>
        </div>
        <div id="container-carrieres">
            <div class="carriere">
                <?php echo $mbappe->afficherCarrieres(); ?>
            </div>
        </div>
       <?php
            /* CALL TO FUNCTIONS */
        

        

               
        
       ?>
    </div>



</body>
</html>
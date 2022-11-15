<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO Football</title>
</head>
<body>
    <h1>Exercice football poo</h1>



    <?php

        /* Charger automatiquement les différentes class */
        spl_autoload_register(function ($class_name) {
            include $class_name . '.php';
        });

        /* PAYS */

        $portugal = new Pays("Portugal");
        $france = new Pays("France");

        /* JOUEUR */
        $ronaldo = new Joueur("Cristiano","Ronaldo","12-03-1985", $portugal);
        $mbappe = new Joueur("Kylian","Mbappé","27-08-1992", $france);
        $messi = new Joueur("Lionel","Messi","14-10-1989",$france);
        //  echo $mbappe;

        /* EQUIPE */
        /* On crée un nouvel objet Equipe */
        $psg = new Equipe("PSG", $france);
        $om = new Equipe("OM",$france);
        $racingClub = new Equipe("Racing Club Strasbourg",$france);
        $porto = new Equipe("FC Porto",$portugal);
        /* On affiche les équipes pour le pays voulu */


        /* CARRIERE */
        $psgMbappe = new Carriere($mbappe,$psg,2022);
        $omMbappe = new Carriere($mbappe,$om,2020);
        $portoMbappe = new Carriere($mbappe,$porto,2018);
        $psgMessi = new Carriere($messi,$psg,2015);
        $portoRonaldo = new Carriere($ronaldo,$porto,2022);

        /* CALL TO FUNCTIONS */
        echo $france->afficherEquipes();

        echo $portugal->afficherEquipes();
        echo $psg->afficherJoueurs();
        echo $porto->afficherJoueurs();        
        echo $mbappe->afficherCarrieres();


   ?>
</body>
</html>
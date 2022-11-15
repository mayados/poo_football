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

        $ronaldo = new Joueur("Cristiano","Ronaldo","12-03-1985");
        $mbappe = new Joueur("Kylian","Mbappé","27-08-1992");
        // echo $ronaldo;

        $psg = new Equipe("PSG");
        $psg->setJoueurs($ronaldo,$mbappe);
        echo $psg;

        $france = new Pays("France");
        $france->ajouterEquipes($psg);

   ?>
</body>
</html>
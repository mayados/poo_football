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

        $portugal = new Pays("Portugal");
        $france = new Pays("France");

        $ronaldo = new Joueur("Cristiano","Ronaldo","12-03-1985", $portugal);
        $mbappe = new Joueur("Kylian","Mbappé","27-08-1992", $france);
        // echo $ronaldo;

        $psg = new Equipe("PSG", $france);
        

   ?>
</body>
</html>
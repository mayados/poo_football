<?php
    class Equipe {
        /* On liste les propriétés de l'objet */
        private string $name;
        /* Nous aurons plusieurs objets joueurs, il faut donc les stocker dans un tableau */
        private array $joueurs;

        /* On indique ce qu'on veut passer directement en paramètres du constructeur */
        public function __construct($name)
        {
            /* On indique que les propriétés de l'objet sont liées aux variables passées en paramètres */
            $this->name = $name;
            /* De base, joueurs est un array vide, car on ajoute au fur et à mesure */
            $this->joueurs = [];
        }

        public function getName()
        {
            return $this->name;
        }

        public function setName($name)
        {
            $this->name = $name;
            return $this;
        }

        /* Pouor pouvoir ajouter plusieurs objets joueurs au club */
        /* Lorsqu'il y a ..., cela signifie que l'on peut en mettre plusieurs, ca se comporte comme un tableau */
        public function setJoueurs(Joueur ...$joueurs)
        {
            /* Pour chaque joueur.. */
            foreach($joueurs as $joueur)
            {
                /* On ajoute chaque joueur dans le tableau $joueurs de notre class Equipe */
                array_push($this->joueurs,$joueur);
            }
             echo "Joueurs du club $this->name : <br>".implode("<br>",$this->joueurs);                           
        }


        public function __toString()
        {
            return "<br> $this->name";
        }        
    }


?>
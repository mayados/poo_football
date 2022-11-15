<?php
    class Carriere{
        private Joueur $joueur;
        private Equipe $equipe;
        private int $annee;

        public function __construct(Joueur $joueur, Equipe $equipe, int $annee)
        {
            $this->joueur = $joueur;
            $this->joueur->ajouterCarriere($this);
            $this->equipe = $equipe;
            /* On ajoute l'objet joueur entré en paramètres en tant que paramètre de fonction ajouterJoueur de la class Equipe entrée en paramètres = ça ajoute automatiquement le joueur */
            $this->equipe->ajouterJoueur($this->joueur);
            $this->annee = $annee;
        }


        public function __toString()
        {
            return " $this->equipe $this->annee";
        }

    }
?>
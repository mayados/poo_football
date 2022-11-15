<?php
    class Pays{
        private string $name;
        private array $equipes;
        

        public function __construct(string $name)
        {
            $this->name = $name;
            $this->equipes = [];
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

        /* On ajoute une équipe à chaque fois depuis le construct de la class Equipe */
        public function ajouterEquipe(Equipe $equipe)
        {
            // array_push($this->equipes,$equipe);
            /* Il est mieux d'utiliser cette syntaxe, plus moderne au lieu de array_push */
            $this->equipes[] = $equipe;
        }

        /* Une fonction d'affichage pour afficher les équipes d'un certain pays */
        public function afficherEquipes() {
            echo "<p>Les equipes du pays $this->name :</p>";
            /* Pour chaque élément de l'array $this->equipes, on affiche l'équipe */
            echo "<ul>";
            foreach($this->equipes as $equipe) {
                echo "<li>".$equipe."</li>";
            }
            echo "</ul>";
        }

        public function __toString()
        {
            return "$this->name";
        }
    }
?>
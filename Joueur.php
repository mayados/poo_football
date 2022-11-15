<?php
    class Joueur {
        private string $firstName;
        private string $lastName;
        private DateTime $dateNaissance;
        private Pays $pays;
        private array $carrieres;
        private int $annee;

        public function __construct(string $firstName,string $lastName, string $dateNaissance, Pays $pays)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            /* On a dit que la propriété $dateNaissance de l'objet doit être un objet date, on convertit donc en objet la string $dateNaissance entrée en paramètres */
            $this->dateNaissance = new DateTime($dateNaissance);
            $this->pays = $pays;
            $this->carriere = [];
            $this->annee = 0;
        }

        public function getFirstName(){
            return $this->firstName;
        }

        public function setFirstName($firstName){
            $this->lastName = $firstName;
            return $this;
        }

        public function getLastName(){
            return $this->lasttName;
        }

        public function setLastName($lastName){
            $this->lastName = $lastName;
            return $this;
        }

        public function setDateNaissance(string $dateNaissance)
        {
            $this->dateNaissance = $dateNaissance;
        }
        
        /* Comme on entre une string dateNaissance, pour convertir en age, il faut formater l'objet date */
        public function getAge():int
        {
             return date_diff(new DateTime(), $this->dateNaissance)->format("%Y");
        }

        public function ajouterCarriere(Carriere $carriere)
        {
            // array_push($this->equipes,$equipe);
            /* Il est mieux d'utiliser cette syntaxe, plus moderne au lieu de array_push */
            $this->carrieres[] = $carriere;
        }

        /* Une fonction d'affichage pour afficher les équipes d'un certain pays */
        public function afficherCarrieres() {
            echo "<br>Les carrières de $this->firstName $this->lastName : <br>";

            /* On trie le tableau $this->joueurs de par une fonction anonyme qui prend en paramètres une variable a et une variable b */
            usort ($this->carrieres,function ($a,$b)
            {
                /* On compare les 2 années qu'on récupère grâce à la fonction getAnnée contenue dans Joueur */
                return ($b->getAnnee()) <=> ($a->getAnnee());
  
            }    
            )  
            ;

            /* Pour chaque élément de l'array $this->equipes, on affiche l'équipe */
            foreach($this->carrieres as $carriere) {
                echo $carriere ."<br>";
            }
        }

        public function ajouterAnnee($annee)
        {
            $this->annee = $annee;
        }

        public function getAnnee(){
            return $this->annee;
        }

        public function __toString()
        {
            return "$this->firstName $this->lastName ". $this->getAge()." ans ($this->pays) $this->annee";
        }
}
?>
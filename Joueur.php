<?php
    class Joueur {
        private string $firstName;
        private string $lastName;
        private DateTime $dateNaissance;
        private Pays $pays;

        public function __construct(string $firstName,string $lastName, string $dateNaissance, Pays $pays)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->dateNaissance = new DateTime($dateNaissance);
            $this->pays = $pays;
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

        public function __toString()
        {
            return "$this->firstName $this->lastName ". $this->dateNaissance->format("d-m-Y");
        }
}
?>
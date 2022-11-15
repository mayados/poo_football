<?php
    class Joueur {
        private string $firstName;
        private string $lastName;
        private string $dateNaissance;
    

        public function __construct(string $firstName,string $lastName, string $dateNaissance)
        {
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->dateNaissance = $dateNaissance;
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
            return "$this->firstName $this->lastName $this->dateNaissance";
        }
}
?>
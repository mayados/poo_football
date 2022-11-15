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

        public function ajouterEquipes(Equipe $equipes)
        {
            foreach($equipes as $equipe)
            {
                array_push($this->equipes,$equipe);
            }
            echo "<br> Les equipes du pays $this->name :<br>" .implode("<br>",$this->equipes);
        }

        public function __toString()
        {
            return "<br> $this->name";
        }
    }
?>
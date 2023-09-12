<?php
    class Character
    {
        protected $health;
        protected $damage;
        protected $armor;

        function __construct()
        {
            $this->health = 100;
            $this->damage = 45;
            $this->armor = 100;

        }

        public function getdamage($damage)
        {
            $this->health -= $damage;
        }

        public function gethealth()
        {
            return $this->health;
        }

        public function _inflictdamage()
        {
            return $this->damage;
        }
    }
?>
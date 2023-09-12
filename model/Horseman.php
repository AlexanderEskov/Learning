<?php
    require_once('Character.php');
    require_once('Horse.php');

    class Horseman extends Character // кавалерист
    {
        private $horsestatus;
        public $horse;
        
        function __construct($id)
        {
            parent::__construct();
            $connect = mysqli_connect('localhost', 'root', '', 'rpg');
            if(!$connect) 
            {
                die('Error connect to database');
            }
            // $row_id=$_GET['id'];
            $result = mysqli_query($connect, "SELECT * FROM `horsemans` WHERE `id` = $id");
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            // TO DO исправить foreach
            foreach($rows as $row)
            {
                $this->health = $row['health'];
                $this->damage = $row['damage'];
                $this->armor = $row['armor'];
                $this->horsestatus = $row['horsestatus'];
                $this->speed = $row['speed'];
                $this->horse = new Horse(1);
            }
        }

        public function saddlehorse($horse)
        {
            if($horse->riderstatuse = 0)
            {
                $horse->riderstatuse = 1;
            }
        }

        public function dismount($horse)
        {
            if($horse->riderstatuse = 1)
            {
                $horse->riderstatuse = 0;
            }
        }

        public function hit($attack_object)
        {
            $attack_object->getdamage($this->damage);
        }

        public function _hit()
        {
            $this->_inflictdamage();
        }

        public function gethorsestatus()
        {
            return $this->horsestatus;
        }

        public function setspeed()
        {
            if($this->horsestatus == 1)
            {
                $this->speed = $this->horse->getspeed();
            }
        }

        public function getspeed()
        {
            return $this->speed;
        }
    }
?>
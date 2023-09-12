<?php
    require_once('Character.php');

    class Horse extends Character
    {
        private $riderstatus;
        private $name;

        public function __construct($id)
        {
            parent::__construct();
            $connect = mysqli_connect('localhost', 'root', '', 'rpg');
            if(!$connect) 
            {
                die('Error connect to database');
            }
            // $row_id=$_GET['id'];
            $result = mysqli_query($connect, "SELECT * FROM `horses` WHERE `id` = $id");
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            foreach($rows as $row)
            {
                $this->health = $row['health'];
                $this->damage = $row['damage'];
                $this->armor = $row['armor'];
                $this->riderstatus = $row['riderstatus'];
                $this->name = $row['name'];
                $this->speed = $row['speed'];
            }
        }

        public function getname()
        {
            return $this->name;
        }

        public function getspeed()
        {
            return $this->speed;
        }
    }
?>
<?php
    require_once('Character.php');

    class Archer extends Character // лучник
    {
        private $attackdistance;

        public function __construct($id)
        {
            parent::__construct();
            $connect = mysqli_connect('localhost', 'root', '', 'rpg');
            if(!$connect) 
            {
                die('Error connect to database');
            }
            // $row_id=$_GET['id'];
            $result = mysqli_query($connect, "SELECT * FROM `archers` WHERE `id` = $id");
            $rows = $result->fetch_all(MYSQLI_ASSOC);
            foreach($rows as $row)
            {
                $this->health = $row['health'];
                $this->damage = $row['damage'];
                $this->armor = $row['armor'];
                $this->attackdistance = $row['attackdistance'];
            }
        }

        public function shoot($attack_object)
        {
            $attack_object->getdamage($this->damage);
        }
    }
?>
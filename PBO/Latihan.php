<?php
    class Hewan{
        // Properties
        public $name;
        public $age;
        public $color;
        public $weight;

        // Method
        public function eat() {
            return $this->name . ' is eating';
        }

        public function sleep() {
            return $this->name. ' is sleeping';
        }
    }

    // Membuat objek baru
    $hewan = new hewan();
    $hewan -> name = 'Nana';

    echo $hewan->name;
?>
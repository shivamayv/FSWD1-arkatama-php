<?php

class Animal {
    protected $nama;
    protected $jenis;

    public function __construct($nama, $jenis) {
        $this->nama = $nama;
        $this->jenis = $jenis;
    }

    public function getInfo() {
        return "Hewan ini bernama " . $this->nama . " dan merupakan sejenis " . $this->jenis . ".";
    }
}

class Cat extends Animal {
    public function __construct($nama) {
        parent::__construct($nama, "kucing");
    }

    public function getInfo() {
        return parent::getInfo() . " Kucing ini suka bermain dan memiliki tingkah laku yang lucu.";
    }
}

class Dog extends Animal {
    public function __construct($nama) {
        parent::__construct($nama, "anjing");
    }

    public function getInfo() {
        return parent::getInfo() . " Anjing ini setia dan bisa menjadi teman yang baik.";
    }
}

// Membuat objek dari class Animal
$hewan = new Animal("Alpaca", "mamalia");
$kucing = new Cat("Louis");
$anjing = new Dog("Tessa");


// Memanggil method getInfo()
echo $hewan->getInfo();
echo "<br>";
echo $kucing->getInfo(); 
echo "<br>";
echo $anjing->getInfo();  

?>

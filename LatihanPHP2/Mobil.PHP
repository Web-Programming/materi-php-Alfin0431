<?php 
    // Cara Membuat Class OOP PHP
    class Mobil{
        // Cara Penulisan  Properti
            public $warna;
            public $merk;

            // Cara Penulisan Method
            function maju(){
                return "Mobil maju";
            }

            function berhenti(){
                return "Mobil berhenti";
            }
    }

    // Instansiasi Project
    // Buat Objek Dari Class Mobil
    $mobil_Ahmad = new Mobil();

        // Set Properti
        $mobil_Ahmad-> warna  = "Hitam";
        $mobil_Ahmad-> merk = "Toyota";

        // Tampilkan  Properti 
        echo "Mobil_Ahmad";
        echo "<br>Warna : ", $mobil_Ahmad->warna;
        echo "<br>Merk : ", $mobil_Ahmad->merk;

        // Tampilkan Method
        echo $mobil_Ahmad->maju();
        echo "<br>";
        echo $mobil_Ahmad->berhenti();

    $mobil_Anton = new mobil();

          // Set Properti
          $mobil_Anton-> warna  = "Putih";
          $mobil_Anton-> merk = "Suzuki";
  
          // Tampilkan  Properti 
          echo "Mobil_Anton";
          echo "<br>Warna : ", $mobil_Anton->warna;
          echo "<br>Merk : ", $mobil_Anton->merk;
  
          // Tampilkan Method
          echo $mobil_Anton->maju();
          echo "<br>";
          echo $mobil_Anton->berhenti();






?>
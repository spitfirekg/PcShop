<?php

    class Product{

      //povezivanje sa tabelom u bazi podataka
      private $conn;
      private $table_name="products";

      //Svojstva objekta
      public $id;
      public $name;
      public $sku;
      public $image;
      public $price;

      //Konstruktor
      public function __construct($db){
        $this->conn = $db;
      }

    }


 ?>

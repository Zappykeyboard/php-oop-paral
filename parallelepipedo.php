<?php
  class Parallelepipedo
  {

    public $base;
    public $altezza;
    public $profondita;

    function __construct($inBase, $inAltezza, $inProfondita){
      
      $this -> base = $inBase;
      $this -> altezza = $inAltezza;
      $this -> profondita = $inProfondita;

    }


    function getArea(){

      $a = $this -> altezza;
      $b = $this -> base;
      $p = $this -> profondita;

      $area = 2*($a * $b + $a * $p + $b * $p);

      return $area;
    }

    function getVolume(){

      $a = $this -> altezza;
      $b = $this -> base;
      $p = $this -> profondita;

      $volume = $a * $b * $p;

      return $volume;
    }
  }

  $myParallelepipedo = new Parallelepipedo(3, 4, 5);

  $myArea = $myParallelepipedo -> getArea();
  $myVolume = $myParallelepipedo -> getVolume();

  echo "Area: " . $myArea . "</br>";
  echo "Volume: " . $myVolume . "</br>";

?>
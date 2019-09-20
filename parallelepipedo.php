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

/*   $myParallelepipedi = [
    new Parallelepipedo(3, 4, 5),
    new Parallelepipedo(8, 9, 10),
    new Parallelepipedo(11, 12, 15)
  ];
  
  $message = "";
  foreach ($myParallelepipedi as $myParallelepipedo) {
    $myArea = $myParallelepipedo -> getArea();
    $myVolume = $myParallelepipedo -> getVolume();

    $message .= "Dimensioni parallelepipedo: ".
      $myParallelepipedo -> base .", ".
      $myParallelepipedo -> altezza . ", " .
      $myParallelepipedo -> profondita ." </br>";
    $message .= "Area: " . $myArea . "</br>";
    $message .= "Volume: " . $myVolume . "</br>";
  } */
  
  

?>
<?php
  include 'parallelepipedo.php';
  header('Content-type: application/json');

  $paral1 = $_GET['paral1'];
  $paral2 = $_GET['paral2'];
  $paral3 = $_GET['paral3'];

  $data = [$paral1, $paral2, $paral3];

  $res = ['areas' => [], 'volumes' => []];
  
  foreach ($data as  $paral) {
    $a = $paral[0];
    $b = $paral[1];
    $p = $paral[2];

    $myParal = new Parallelepipedo($a, $b, $p);

    $res['areas'][] = $myParal -> getArea();
    $res['volumes'][] = $myParal -> getVolume();
  }


  echo json_encode($res);
?>
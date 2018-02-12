<?php

$data = file_get_contents('exocap.json');
$json = json_decode($data);
session_start();
$sessionCheck= $_SESSION['count'];


switch ($sessionCheck) {
case '0':
  $formCheck = $json->a0;
    $rCheck = $json->q0;
  break;

  case '1':
    $formCheck = $json->a1;
      $rCheck = $json->q1;
    break;

    case '2':
      $formCheck = $json->a2;
        $rCheck = $json->q2;
      break;

default:
unset($_SESSION['count']);
$_SESSION['count']=0;
$formCheck = $json->a0;
  $rCheck = $json->q0;
  break;
}

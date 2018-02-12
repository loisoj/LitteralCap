<?php
  require_once 'variacap.php';
$vs = $_POST['exoCapPron'];
$sucs = 0;





echo "\n";

if($vs === $formCheck){
  $sucs++;
  if (!isset($_SESSION['count'])) {
    $_SESSION['count'] = 0;
  } else {
     $_SESSION['count']++;
  }

}
else {
  echo "Проверка не пройдена :(";
  $sucs--;
}
echo "\n";

if($sucs > 0){
  echo "Успешно пройдено!";
  //тут дополнить кодом который нужно выполнить после проверки
}
else{
  echo  "Что то указано неверно";
  echo $sessionCheck;
}

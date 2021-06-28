<?php

$i = 0;
$proximo = 0;
$anterior = 0;

while ($i <= 20) {
  $atual = $proximo + $anterior;
  echo ($atual. ',');

  if($i < 2){
    $proximo = 1;
    $anterio = 0;
  }
  else {
    $anterior = $proximo;
    $proximo = $atual;
  }
  $i++;

}


?>

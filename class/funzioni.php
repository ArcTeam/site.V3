<?php
if(isset($_POST['funzione']) && function_exists($_POST['funzione'])) {
  echo $_POST['funzione']();
}

function randomBg(){
  return json_encode(array_diff(scandir("../img/home.presentazione/"), array('.', '..')));
}
?>

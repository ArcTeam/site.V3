<?php
if(isset($_POST['funzione']) && function_exists($_POST['funzione'])) {
  echo $_POST['funzione']();
}

function randomBg(){
  $out=[];
  $arr = array_diff(scandir("../img/home.presentazione/"), array('.', '..'));
  foreach ($arr as $key => $img) {
    $out[]='./img/home.presentazione/'.$img;
  }
  return json_encode($out);
}
?>

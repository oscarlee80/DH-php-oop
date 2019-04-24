<?php

function dump($datos){
  echo "<pre>";
  var_dump($datos);
  echo "</pre>";
}
function dd($datos){
  echo "<pre>";
  var_dump($datos);
  exit;
}

<?php
  // DEFINICION DE DATOS (INPUTS)
  $name = "";
  const WELCOME = "Hola Bienvenido";

  // PROCESS 
  echo "Digite su nombre completo por favor \n";
  $name = readline();

  // OUTPUT
  echo WELCOME . " " . $name;
?>

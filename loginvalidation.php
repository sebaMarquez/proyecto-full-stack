<?php

function logueo($parametro){
  $errores=[];
  if(filter_var($datos["email"], FILTER_VALIDATE_EMAIL)== FALSE){
    $errores["email"] = "Su correo es incorrecto";
  }
if ($datos["password"] == "" && strlen($datos["password"] <5)){
  $errores["password"] == "Su contraseña es incorrecta";
}
}


 ?>

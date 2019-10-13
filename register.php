<?php  function validarRegistracion($datos) {
   $error = [];
  if(strlen($datos["nombre"])<5){
    $error["nombre"] = "su nombre debe contener mas de 4 caracteres <br>";
  }
  if(filter_var($datos["email"], FILTER_VALIDATE_EMAIL)==false){
    $errores["email"] = "su email no tiene el formato correcto <br>";
  }

  if(strlen($datos["password"])<8){
    $error["password"] = "su contraseña debe contener mas de 8 caracteres <br>";
  }
  if($datos["confirmarPassword"] != $datos["password"]){
    $error["confirmarPassword"] =  "sus contraseñas no coinciden";
  }
  return $error;
}
?>

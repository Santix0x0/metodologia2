<?php
include 'conexion.php';
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
$email=$_POST["email"];
$edad=$_POST["edad"];
$telefono=$_POST["Telefono"];
$genero=$_POST["genero"];
$contraseña=$_POST["password"];
$repetir_password=$_POST["repetir_password"];

if (isset ($nombre) &&!empty($nombre)  && isset($apellido) &&!empty($apellido) && isset($email) && !empty($email)
    && isset($edad) &&!empty($edad) && isset($telefono) &&!empty($telefono) && isset($genero) &&!empty($genero)
   && isset($contraseña) &&!empty($contraseña) && isset($repetir_password) &&!empty($repetir_password)){

    if (!preg_match('/^[a-zA-Z]+$/',$nombre)) {
        $resultado = "Digite solo letras";
        header ('location:index.php?var='.urlencode($resultado));

    } elseif (!preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/',$apellido)) {
        $resultado = "El apellido debe contener solo letras.";
        header('location:index.php?var='.urlencode($resultado));
    
    }else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $resultado="Formato invalido";
        header('location:index.php?var='.urlencode($resultado));
    }else if (!is_numeric($edad)){
        $resultado = "Digite solo numeros";
        header('location:index.php?var='.urlencode($resultado));


    }else if (!is_numeric($telefono)){
        $resultado = "Digite solo numeros";
        header('location:index.php?var='.urlencode($resultado));
     
    }else if($genero === ""){
        $resultado="Seleccione una opcion valida";
        header('location:index.php?var='.urlencode($resultado));

    }else  if (!preg_match('/^(?=.*[a-z])(?=.*[a-z])(?=.*\d)(?=.*[\w_]).{8,}$/',$contraseña)){
        $resultado="Password debe tener al menos 8 caracteres, una letra minúscula, una letra mayúscula, un número y un carácter especial";
        header('location:index.php?var='.urlencode($resultado));
    
    }else if($contraseña!== $repetir_password){
        $resultado="Las contraseñas no coinciden";
        header('location:index.php?var='.urlencode($resultado));

    }else{
        //mala
        //$sql = "INSERT INTO `usuario`(`id`, `nombre`,`apellido`,`email`,`edad`,`telefono`,`genero`,`contraseña`) VALUES ('','$nombre','$apellido','$email','$edad,'$telefono','$genero','$contraseña')";
        //$result = mysqli_query($conexion, $sql);
     
        //buena
        $sql = "INSERT INTO `usuario`(`id`, `nombre`,`apellido`,`email`,`edad`,`telefono`,`genero`,`contraseña`) VALUES ('','$nombre','$apellido','$email','$edad','$telefono','$genero','$contraseña')";

        $result = mysqli_query($conexion, $sql);
        //PRUEBA
        //$sql = "INSERT INTO `usuario`(`id`, `nombre`,`apellido`,`email`,`edad`,`telefono`,`genero`,`contraseña`) VALUES ('','$nombre','$apellido','$email','$edad,'$telefono','$genero','$contraseña')";
        //$result = mysqli_query($conexion, $sql);

    }
    }else {
        $resultado="campo obligatorio";
        header('location:index.php?var='.urlencode($resultado)) ;
    
}


?>
<?php
$errorMSG = "";

if (empty($_POST["name"])) {
    $errorMSG = "El Nombre es Requerido ";
} else {
    $name = $_POST["name"];
}

if (empty($_POST["email"])) {
    $errorMSG = "El E-mail es Requerido ";
} else {
    $email = $_POST["email"];
}

if (empty($_POST["message"])) {
    $errorMSG = "El Mensaje es Requerido";
} else {
    $message = $_POST["message"];
}

$EmailTo = "yourname@domain.com";
$Subject = "Mensaje de la pagina web";

// prepare email body text
$Body = "";
$Body .= "Nombre: ";
$Body .= $name;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $email;
$Body .= "\n";
$Body .= "Mensaje: ";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);

// redirect to success page
if ($success && $errorMSG == ""){
   echo "Mensaje Enviado";
}else{
    if($errorMSG == ""){
        echo "Algo salcio mal :(";
    } else {
        echo $errorMSG;
    }
}
?>
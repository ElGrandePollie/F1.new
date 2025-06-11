<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $naam = $_POST["naam"];
    $email = $_POST["email"];
    $telefoon = $_POST["telefoon"];
    $opmerking = $_POST["opmerking"];

    $to = "F1News@gmail.com";
    $subject = "Nieuw contactformulier van $naam";
    $message = "Naam: $naam\nE-mail: $email\nTelefoon: $telefoon\nOpmerkingen:\n$opmerking";
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops.. Something went wrong, try again.";
    }
}
?>


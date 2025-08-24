<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstName = htmlspecialchars($_POST['firstName']);
    $lastName = htmlspecialchars($_POST['lastName']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $school = htmlspecialchars($_POST['school']);
    $grade = htmlspecialchars($_POST['grade']);
    $subjects = htmlspecialchars($_POST['subjects']);
    $date = htmlspecialchars($_POST['date']);
    $comments = htmlspecialchars($_POST['comments']);
    $datenschutz = isset($_POST['datenschutz']) ? 'Ja' : 'Nein';

    // Hier kannst du die Daten weiterverarbeiten, z.B. per E-Mail versenden oder in einer Datenbank speichern.
    $to = "info@chancenschmiede.com"; // Ziel-E-Mail-Adresse
    $subject = "Neuer Termin Anfrage von Chancenschmiede";
    $message = "
    Vorname: $firstName\n
    Nachname: $lastName\n
    Telefonnummer: $phone\n
    E-Mail: $email\n
    Schule: $school\n
    Jahrgangsstufe: $grade\n
    Fächer: $subjects\n
    Wunschdatum: $date\n
    Wünsche/Anregungen: $comments\n
    Datenschutzerklärung akzeptiert: $datenschutz
    ";
    
    $headers = "From: $email";

    if (mail($to, $subject, $message, $headers)) {
        echo "Termin erfolgreich vereinbart!";
    } else {
        echo "Fehler beim Versenden der Nachricht.";
    }
} else {
    echo "Ungültige Anfrage.";
}
?>

<?php
$successMessage = '';
$errorMessage = '';

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
    $to = "info@chancenschmiede.com/"; // Ziel-E-Mail-Adresse
    $subject = "Neue Termin Anfrage von Musterschüler";
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
        $successMessage = "Termin erfolgreich vereinbart! Wir werden uns schnellstmöglich bei dir melden.";
    } else {
        $errorMessage = "Fehler beim Versenden der Nachricht. Bitte versuchen Sie es später erneut.";
    }
}

// Page Meta Information
$page_title = "Probestunde vereinbaren - Chancenschmiede";
$page_description = "Vereinbaren Sie eine kostenlose Probestunde für Ihr Kind";
$page_keywords = "Probestunde, Nachhilfe, Termin, Kontakt";
?>

<?php include 'includes/header.php'; ?>

      <!-- Termin vereinbaren section start -->
      <div class="appointment_section">
         <div class="container">
            <h2 class="events_taital">Termin Vereinbaren</h2>
            
            <!-- Erfolgs- oder Fehlermeldungen anzeigen -->
           

            <form action="" method="POST">
               <div class="row">
                  <!-- Vorname und Nachname nebeneinander -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="firstName">Dein Vorname</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" required>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="lastName">Dein Nachname</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" required>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <!-- E-Mail und Telefonnummer nebeneinander -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="email">Deine E-Mail</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="phone">Telefonnummer</label>
                        <input type="tel" class="form-control" id="phone" name="phone" required>
                     </div>
                  </div>
               </div>
               <div class="row">
                  <!-- Schule und Jahrgangsstufe nebeneinander -->
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="school">Deine Schule</label>
                        <input type="text" class="form-control" id="school" name="school" required>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group">
                        <label for="grade">Deine Jahrgangsstufe</label>
                        <input type="text" class="form-control" id="grade" name="grade" required>
                     </div>
                  </div>
               </div>
               <div class="form-group">
                  <label for="subjects">In welchen Fächern benötigst du Nachhilfe?</label>
                  <input type="text" class="form-control" id="subjects" name="subjects" required>
               </div>
               <div class="form-group">
                  <label for="date">Wunschdatum</label>
                  <input type="date" class="form-control" id="date" name="date" required>
               </div>
               <div class="form-group">
                  <label for="comments">Wünsche und Anregungen</label>
                  <textarea class="form-control" id="comments" name="comments" rows="5"></textarea>
               </div>
               <div class="form-check">
                  <input type="checkbox" class="form-check-input" id="datenschutz" name="datenschutz" required>
                  <label class="form-check-label" for="datenschutz">
                     Ich habe die <a href="agbs.php"  >AGBs&Datenschutzerklärung</a> gelesen und bin 
                     einverstanden.
                  </label>
               </div>
               <button type="submit" class="btn btn-primarys mt-3 mb-3">Termin Vereinbaren</button>
            </form>
            <?php if ($successMessage): ?>
               <div class="alert alert-success" role="alert">
                  <?php echo $successMessage; ?>
               </div>
            <?php elseif ($errorMessage): ?>
               <div class="alert alert-danger" role="alert">
                  <?php echo $errorMessage; ?>
               </div>
            <?php endif; ?>
         </div>

      </div>
      <!-- Termin vereinbaren section end -->

      <!--footer section start -->
     <!--footer section start -->
     <div class="footer_section" id="contact">
   <div class="container">


      <div class="call_main">
         <div class="call_text">
            <img src="images/call-icon.png">
            <span class="padding_left_15">+49 159 06377920</span>
         </div>
         <div class="call_text">
            <img src="images/mail-icon.png">
            <span class="padding_left_15">info@chancenschmiede.com</span>
         </div>
      </div>

      <!-- Neuer Abschnitt für Impressum, AGBs und Datenschutzerklärung -->
      <div class="footer_links mt-4">
         <ul class="list-inline text-center">
            <li class="list-inline-item">
               <a href="impressum.php" class="footer-link" >Impressum</a>
            </li>
            <li class="list-inline-item">
               <a href="agbs.php" class="footer-link"  >AGBs&Datenschutzerklärung</a>
            </li>
        
         </ul>
      </div>
      <!--footer section end -->

      <!-- Javascript Dateien-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <script src="js/plugin.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <!-- javascript --> 
      <script src="js/owl.carousel.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
   </body>
</html>

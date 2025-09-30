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
      </div>
      <!--header section end -->

      <!-- Hero Section -->
      <section class="contact-hero">
         <div class="container">
            <div class="text-center" data-aos="fade-up">
               <div class="contact-hero__badge">📅 Kostenlose Probestunde</div>
               <h1 class="contact-hero__title">
                  Vereinbare deine <span class="gradient-text">Probestunde</span>
               </h1>
               <p class="contact-hero__subtitle">
                  Lerne uns kennen und erlebe, wie wir dir beim Lernen helfen können – völlig unverbindlich!
               </p>
            </div>
         </div>
      </section>

      <!-- Form Section -->
      <section class="contact-form-section">
         <div class="container">
            <div class="row justify-content-center">
               <div class="col-lg-9 col-xl-8" data-aos="zoom-in">
                  <div class="contact-form-box">

                     <?php if ($successMessage): ?>
                        <div class="alert alert-success" role="alert">
                           <?php echo $successMessage; ?>
                        </div>
                     <?php elseif ($errorMessage): ?>
                        <div class="alert alert-danger" role="alert">
                           <?php echo $errorMessage; ?>
                        </div>
                     <?php endif; ?>

                     <form action="" method="POST" class="contact-form">
                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="contact-form__label">Dein Vorname *</label>
                                 <input type="text" class="contact-form__input" id="firstName" name="firstName" placeholder="Max" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="contact-form__label">Dein Nachname *</label>
                                 <input type="text" class="contact-form__input" id="lastName" name="lastName" placeholder="Mustermann" required>
                              </div>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="contact-form__label">Deine E-Mail *</label>
                                 <input type="email" class="contact-form__input" id="email" name="email" placeholder="max@beispiel.de" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="contact-form__label">Telefonnummer *</label>
                                 <input type="tel" class="contact-form__input" id="phone" name="phone" placeholder="+49 123 456789" required>
                              </div>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="contact-form__label">Deine Schule *</label>
                                 <input type="text" class="contact-form__input" id="school" name="school" placeholder="Name deiner Schule" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="contact-form__label">Deine Jahrgangsstufe *</label>
                                 <input type="text" class="contact-form__input" id="grade" name="grade" placeholder="z.B. 9. Klasse" required>
                              </div>
                           </div>
                        </div>

                        <div class="row">
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="contact-form__label">Nachhilfe-Fächer *</label>
                                 <input type="text" class="contact-form__input" id="subjects" name="subjects" placeholder="z.B. Mathe, Deutsch" required>
                              </div>
                           </div>
                           <div class="col-md-6">
                              <div class="form-group">
                                 <label class="contact-form__label">Wunschdatum *</label>
                                 <input type="date" class="contact-form__input" id="date" name="date" required>
                              </div>
                           </div>
                        </div>

                        <div class="form-group">
                           <label class="contact-form__label">Wünsche und Anregungen (optional)</label>
                           <textarea class="contact-form__textarea" id="comments" name="comments" rows="4" placeholder="Teile uns mit, wenn du besondere Wünsche hast..."></textarea>
                        </div>

                        <div class="contact-form__checkbox">
                           <input type="checkbox" class="contact-form__checkbox-input" id="datenschutz" name="datenschutz" required>
                           <label class="contact-form__checkbox-label" for="datenschutz">
                              Ich habe die <a href="agbs.php" class="contact-form__link">AGBs & Datenschutzerklärung</a> gelesen und bin einverstanden. *
                           </label>
                        </div>

                        <button type="submit" class="btn-contact-submit">
                           <span>Jetzt Probestunde vereinbaren</span>
                           <span class="btn-contact-submit__icon">→</span>
                        </button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <!-- Benefits Section -->
      <section class="contact-benefits">
         <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
               <h2 class="contact-benefits__title">Was erwartet dich in der Probestunde?</h2>
            </div>

            <div class="row">
               <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                  <div class="contact-benefit-card">
                     <div class="contact-benefit-card__icon">👋</div>
                     <h3 class="contact-benefit-card__title">Kennenlernen</h3>
                     <p class="contact-benefit-card__text">
                        Wir lernen uns gegenseitig kennen und finden heraus, wie wir dir am besten helfen können.
                     </p>
                  </div>
               </div>

               <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                  <div class="contact-benefit-card">
                     <div class="contact-benefit-card__icon">📊</div>
                     <h3 class="contact-benefit-card__title">Bedarfsanalyse</h3>
                     <p class="contact-benefit-card__text">
                        Gemeinsam schauen wir, wo du Unterstützung brauchst und setzen realistische Ziele.
                     </p>
                  </div>
               </div>

               <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                  <div class="contact-benefit-card">
                     <div class="contact-benefit-card__icon">🎯</div>
                     <h3 class="contact-benefit-card__title">Erste Übungen</h3>
                     <p class="contact-benefit-card__text">
                        Du kannst gleich unsere Lernmethoden ausprobieren und erste Erfolgserlebnisse feiern.
                     </p>
                  </div>
               </div>
            </div>
         </div>
      </section>

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

<?php
// Variablen für die Fehlermeldung und Erfolgsmeldung
$message = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Formularfelder abrufen und validieren
    $name = htmlspecialchars(trim($_POST['Name']));
    $phone = htmlspecialchars(trim($_POST['Phone']));
    $email = htmlspecialchars(trim($_POST['Email']));
    $messageContent = htmlspecialchars(trim($_POST['Massage']));

    // Überprüfen, ob alle Felder ausgefüllt wurden
    if (!empty($name) && !empty($phone) && !empty($email) && !empty($messageContent)) {
        // E-Mail Informationen
        $to = "info@chancenschmiede.de"; // Empfängeradresse
        $subject = "Neue Kontaktanfrage von: $name";
        $messageBody = "
        Name: $name\n
        Telefon: $phone\n
        E-Mail: $email\n
        Nachricht:\n$messageContent";

        // Header für die E-Mail
        $headers = "From: $email\r\n" .
                   "Reply-To: $email\r\n" .
                   "X-Mailer: PHP/" . phpversion();

        // E-Mail versenden
        if (mail($to, $subject, $messageBody, $headers)) {
            $message = "<div style='color: green;'>Vielen Dank! Ihre Nachricht wurde erfolgreich versendet.</div>";
        } else {
            $message = "<div style='color: red;'>Fehler: Ihre Nachricht konnte nicht versendet werden.</div>";
        }
    } else {
        $message = "<div style='color: red;'>Bitte füllen Sie alle Felder aus.</div>";
    }
}
?>




<!DOCTYPE html>
<html lang="de">
   <head>
      <!-- Grundlegende Meta-Tags -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- Website-Metas -->
      <title>Chancenschmiede</title>
      <meta name="keywords" content="">
      <meta name="description" content="Chancen für eine bessere Zukunft.">
      <meta name="author" content="">
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
      <!-- Stil CSS -->
      <link rel="stylesheet" type="text/css" href="css/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- Favicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Font Awesome -->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- Owl Stylesheets -->
      <link rel="stylesheet" href="css/owl.carousel.min.css">
      <link rel="stylesheet" href="css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div >
   <a href="index.php"><img src="images/logo.png" alt="Logo" class="logo-img"></a>
</div>               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Navigation umschalten">
               <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav mr-auto w-100">
                     <li class="nav-item active">
                        <a class="nav-link" href="index.php">Startseite</a>
                     </li>
                     <li class="nav-item">
                     <a class="nav-link" href="#aboutus">Über Uns</a>
                     </li>
           
                     <li class="nav-item">
                        <a class="nav-link" href="#contact">Kontakt</a>
                     </li>
                     <li class="nav-item ml-auto">
                        <a class="nav-link"  style="border:solid;border-color:#dbc64c;border-radius:50px" href="contact.php">Probestunde</a>
                     </li>
                  </ul>
                
               </div>
            </nav>
         </div>
         <!--banner section start -->
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="carouselExampleSlidesOnly" >
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <p class="banner_text">Chancenschmiede</p>
                        <h1 class="banner_taital">Chancen für<br>eine bessere Zukunft.</h1>
                        <div class="read_bt"><a href="contact.php">Termin vereinbaren.</a></div>
                     </div>
               
           
                  </div>
               </div>
            </div>
         </div>
         <!--banner section end -->
      </div>
      <div class="container">
         <div class="play_icon"><a href="#"><img src="images/play-icon.png"></a></div>
      </div>
      <!--header section end -->
<!-- twingle -->

<!-- twingle -->
      <!-- Sprachabschnitt -->
      <div class="language_section layout_padding">
   <div class="container">

   <script type="text/javascript">
	(function() {
		var u="https://spenden.twingle.de/embed/chancenschmiede-ggmbh/spendenkampagne-chancenschmiede/tw67b329517147a/widget";
		var id = '_' + Math.random().toString(36).substr(2, 9);
		var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0], t=d.createElement('div');
        t.id = 'twingle-public-embed-' + id;
        document.currentScript.after(t);
		g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'/'+id; s.parentNode.insertBefore(g,s);
	})();
</script>
<img src="images/daniel_busra.jpg" alt="Logo" style="border-radius:1000px" >
      <h1 class="language_taital">Bildung und Unterstützung</h1>
      <h1 class="language_taital_1">für Kinder und Jugendliche, die eine Perspektive brauchen</h1>
      <div class="language_section_2 layout_padding">
         <div class="row">
            <div class="col-lg-3 col-sm-6">
               <div class="box_main">
                  <div class="icon_1"><img src="images/icon-1.png"></div>
                  <h6 class="heavy_text">Flexibler<br>Unterricht </h6>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="box_main ">
                  <div class="icon_1"><img src="images/icon-2.png"></div>
                  <h6 class="heavy_text">Individuelle<br>Lernpläne</h6>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="box_main">
                  <div class="icon_1"><img src="images/icon-3.png"></div>
                  <h6 class="heavy_text">Zugriff auf<br>Online-Lernplattform</h6>
               </div>
            </div>
            <div class="col-lg-3 col-sm-6">
               <div class="box_main">
                  <div class="icon_1"><img src="images/icon-4.png"></div>
                  <h6 class="heavy_text">Erfahrene<br>Nachhilfelehrer</h6>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>

      <!--language  section end -->
      <!--services section start -->
      <div class="services_section layout_padding">
   <div class="container">
      <div class="row">
         <div class="col-md-6">
            <h1 class="language_taital">Unsere Zielgruppe</h1>
            <h1 class="language_taital_1">Bildung für Alle.</h1>
            <p class="services_text  p-2">
               Die Chancenschmiede setzt sich engagiert dafür ein, benachteiligten Kindern und Jugendlichen Chancen zu bieten. Unsere gemeinnützige Organisation bietet gezielte Nachhilfe und Förderung in Einzel- oder Gruppensitzungen für junge Menschen, die unter schwierigen Bedingungen aufwachsen und wenig Zugang zu Bildungsangeboten haben.
            </p>
            <p class="services_text  p-2">
               Besonders fördern wir jene, die aufgrund ihrer sozialen oder persönlichen Umstände kaum Unterstützung erhalten.
            </p>
         </div>
         <div class="col-md-6">
            <div class="image_1"><img src="images/img-1.png"></div>
         </div>
         <div class="col-md-6 mt-3">
            <div class="image_1"><img src="images/img-2.png"></div>
         </div>
         <div class="col-md-6 mt-3 p-2">
            <p class="services_text">
              Wir verstehen Bildung als Grundlage für Selbstvertrauen und persönliche Entwicklung. Unsere Angebote gehen daher über die reine Wissensvermittlung hinaus: Durch langfristige Begleitung und individuell angepasste Lernpläne unterstützen wir die persönliche und schulische Entwicklung unserer Teilnehmer.
            </p>
            <br>
            <p class="services_text">
               Gemeinsam mit erfahrenen Lehrkräften und engagierten Unterstützern schaffen wir ein stabiles Umfeld, das jungen Menschen Perspektiven für ihre Zukunft eröffnet. Unser Ziel ist es, Bildungslücken zu schließen und Jugendlichen Selbstvertrauen zu geben – unabhängig von ihrem sozialen Hintergrund oder persönlichen Herausforderungen.
            </p>
         </div>
      </div>
   </div>
</div>

      <!--Servicebereich Ende -->
      <!--Galeriebereich Anfang -->
 
      <!--Galeriebereich Ende -->
      <!--Über uns Abschnitt Anfang -->
      <div class="about_section layout_padding" style="background-color:#270b60" id="aboutus">
   <div class="container">
      <h1 class="events_taital">Was wir bieten</h1>
      <div class="about_section_2">
         <div class="row">
            <div class="col-md-6">
               <div class="image_6"></div>
            </div>
            <div class="col-md-6">
               <h1 class="events_taital">Mehr als Nachhilfe</h1>
               <p class="events_text" style="margin-bottom: 20px;">Unsere Mission geht über reine Nachhilfe hinaus. Bei uns geht es darum, jungen Menschen langfristige Perspektiven zu eröffnen und sie in ihrer persönlichen Entwicklung zu stärken. Wir bieten:</p>
               
               <ul class="events_text" style="margin-bottom: 20px;">
                  <li><strong>Einzelnachhilfe und Gruppenförderung:</strong> Maßgeschneiderte Lernhilfe für jedes Kind, angepasst an die individuellen Bedürfnisse.</li>
                  <li><strong>Bildungs- und Teilhabeprogramme:</strong> Unterstützung für Kinder, die durch das Bildungspaket gefördert werden, aber auch für jene, die aus dem Raster fallen.</li>
                  <li><strong>Spendenfinanzierte Angebote:</strong> Dank Ihrer Spenden können wir auch Kinder fördern, die keine staatlichen Hilfen erhalten, wie Waisenkinder aus Krisengebieten.</li>
               </ul>

               <p class="events_text" style="margin-bottom: 20px;">
                  Darüber hinaus arbeiten wir eng mit Schulen und Bildungseinrichtungen zusammen, um maßgeschneiderte Programme zur Lernförderung zu entwickeln. Gemeinsam mit Schulen erarbeiten wir Pläne, um Schüler in ihrer individuellen Entwicklung zu unterstützen und ihre schulischen Leistungen nachhaltig zu verbessern. Unser Ziel ist es, jedem Schüler zu helfen, sein volles Potenzial auszuschöpfen und mit gestärktem Selbstvertrauen in den Unterricht zurückzukehren.
               </p>
               
               <div class="appoinment_bt"><a href="contact.php">Mehr erfahren</a></div>
            </div>
         </div>
      </div>
   </div>
</div>


      <!--Über uns Abschnitt Ende -->
      <!--Kursbereich Anfang
      <div class="courses_section layout_padding">
         <div class="container">
            <h1 class="courses_taital">Unsere Kurse</h1>
            <p class="courses_text">Es ist eine lange bekannte Tatsache, dass der Leser durch den lesbaren Inhalt abgelenkt wird.</p>
            <div class="courses_section_2">
               <div class="flag_main">
                  <div class="flag_text"><img src="images/flag-1.png"><span class="padding_left_15">Chinesisch</span></div>
                  <hr class="border_bg">
                  <h6 class="learn_text active">Sprache beginnen zu lernen</h6>
               </div>
               <div class="flag_main">
                  <div class="flag_text"><img src="images/flag-2.png"><span class="padding_left_15">Englisch</span></div>
                  <hr class="border_bg">
                  <h6 class="learn_text">Sprache beginnen zu lernen</h6>
               </div>
               <div class="flag_main">
                  <div class="flag_text"><img src="images/flag-3.png"><span class="padding_left_15">Französisch</span></div>
                  <hr class="border_bg">
                  <h6 class="learn_text">Sprache beginnen zu lernen</h6>
               </div>
               <div class="flag_main">
                  <div class="flag_text"><img src="images/flag-4.png"><span class="padding_left_15">Deutsch</span></div>
                  <hr class="border_bg">
                  <h6 class="learn_text">Sprache beginnen zu lernen</h6>
               </div>
               <div class="flag_main">
                  <div class="flag_text"><img src="images/flag-5.png"><span class="padding_left_15">Japanisch</span></div>
                  <hr class="border_bg">
                  <h6 class="learn_text">Sprache beginnen zu lernen</h6>
               </div>
               <div class="flag_main">
                  <div class="flag_text"><img src="images/flag-6.png"><span class="padding_left_15">Spanisch</span></div>
                  <hr class="border_bg">
                  <h6 class="learn_text">Sprache beginnen zu lernen</h6>
               </div>
            </div>
         </div>
      </div> -->
      <!--Kursbereich Ende -->
      <!--Veranstaltungsbereich Anfang 
      <div class="events_section layout_padding">
         <div class="container">
            <h1 class="events_taital">Veranstaltungen</h1>
            <p class="events_text">Es ist eine lange bekannte Tatsache, dass der Leser durch den lesbaren Inhalt abgelenkt wird.</p>
            <div class="events_section_2">
               <div class="row">
                  <div class="col-md-6">
                     <div class="images_main">
                        <img src="images/img-7.png" class="image_7">
                     </div>
                     <p class="lorem_text">Es ist eine lange bekannte Tatsache, dass der Leser durch den lesbaren Inhalt abgelenkt wird.</p>
                     <div class="time_section">
                        <div class="live_text">Live-Veranstaltung</div>
                        <div class="date_text">04. Nov 2023</div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="images_main">
                        <img src="images/img-8.png" class="image_7">
                     </div>
                     <p class="lorem_text">Es ist eine lange bekannte Tatsache, dass der Leser durch den lesbaren Inhalt abgelenkt wird.</p>
                     <div class="time_section">
                        <div class="live_text">Live-Veranstaltung</div>
                        <div class="date_text">04. Nov 2023</div>
                     </div>
                  </div>
               </div>
               <div class="read_bt"><a href="#">Mehr erfahren</a></div>
            </div>
         </div>
      </div>-->
      <!--Veranstaltungsbereich Ende -->
      <!--Schülerbereich Anfang -->
      <div class="students_section layout_padding">
   <div class="container">
      <h1 class="language_taital">Helfen Sie mit</h1>
      <h1 class="language_taital_1">Gemeinsam Chancen schaffen</h1>
      <p class="events_text" style="color: #000; margin-bottom: 15px;">
         Um unser Ziel zu erreichen, sind wir auf Unterstützung angewiesen. Jede Spende hilft uns, weitere Kinder und Jugendliche zu erreichen, ihnen Nachhilfe anzubieten und sie auf ihrem Bildungsweg zu begleiten.
      </p>
      <p class="events_text" style="color: #000; margin-bottom: 15px;">
         Helfen Sie uns, eine nachhaltige Basis für junge Menschen zu schaffen, die oft übersehen werden. Lassen Sie uns gemeinsam die Zukunft gestalten!
      </p>
      <p class="events_text" style="color: #000; font-weight: bold; margin-bottom: 15px;">
         Ihre Spende schafft Chancen – Ihre Unterstützung verändert Leben.
      </p>
      <p class="events_text" style="color: #000; margin-bottom: 15px;">
         Wir freuen uns, mit Ihnen ins Gespräch zu kommen und gemeinsam Ideen zur Unterstützung dieser jungen Menschen zu entwickeln. Bei Fragen zu unserer Arbeit oder wenn Sie unsere Mission unterstützen möchten, können Sie uns jederzeit kontaktieren.
      </p>
   </div>
</div>



      <!--Schülerbereich Ende -->
      <!--Newsletter Bereich Anfang -->
     
      <!--Newsletter Bereich Ende -->

      <!--services section end -->
      <!--footer section start -->
      <div class="footer_section" id="contact">
      <div class="container">
    <h1 class="touch_text">Kontaktieren Sie uns</h1>
    <div class="email_box">
        <div class="input_main">
            <form action="" method="POST">
                <div class="form-group">
                    <input type="text" class="email-bt form-control" placeholder="Name" name="Name" required>
                </div>
                <div class="form-group">
                    <input type="text" class="email-bt form-control" placeholder="Telefon" name="Phone" required>
                </div>
                <div class="form-group">
                    <input type="email" class="email-bt form-control" placeholder="E-Mail" name="Email" required>
                </div>
                <div class="form-group">
                    <textarea class="massage-bt form-control" placeholder="Nachricht" rows="5" id="comment" name="Massage" required></textarea>
                </div>
                <div class="send_bt">
                    <button type="submit" class="btn btn-primarys">Senden</button>
                </div>
            </form>
            <!-- Erfolg- oder Fehlermeldung anzeigen -->
            <?php echo $message; ?>
        </div>
    </div>
</div>

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

   <div class="footer_links mt-4">
         <ul class="list-inline text-center">
         <li>Logo made by <a href="https://www.designevo.com/" title="Free Online Logo Maker" class="footer-link">DesignEvo free logo creator</a></li>
         <li>Photos designed by <a href="https://de.freepik.com/fotos-kostenlos/mittlere-aufnahme-eines-jungen-mannes-der-mathematik-unterrichtet_45114618.htm title="Freepik" class="footer-link">Freepik</a> <a href="https://de.freepik.com/autor/kamranaydinov" title="Freepik" class="footer-link">KamranAydinov</a> <a href="https://de.freepik.com/fotos-kostenlos/ein-junges-maedchen-mit-einem-rucksack-auf-den-schultern-auf-einem-gelben-hintergrund-der-mit-generative-ai-technologie-erstellt-wurde_264307615.htm" title="Freepik" class="footer-link">atlascompany</a> <a href="https://www.freepik.com/free-photo/book-day-with-group-younf-childre_6914198.htm#fromView=serie&position=6" title="Freepik" class="footer-link">Freepik</a></li>

         </ul>
      </div>
   </div>
</div>

<!-- Styles für die Links -->
<style>
   .footer_links {
      padding-top: 20px;
   }

   .footer-link {
      color: #ffffff;} /* Farbe
   

      
      <!--footer section end -->
      <!--copyright section start -->
    
      </div>
      <!--copyright section end -->
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


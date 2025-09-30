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
        $to = "info@chancenschmiede.com"; // Empfängeradresse
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
                        <h1 class="banner_taital">Wir geben Kindern faire Bildungschancen<br> – auch bei finanziellen Hürden.</h1>
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
          <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div style="background: white; padding: 40px; border: 3px solid #000; border-radius: 20px; text-align: center; margin: 40px 0;">
                    <h2 style="color: #333; font-size: 28px; font-weight: 700; margin-bottom: 20px;">Unsere Mission</h2>
                    <p style="color: #333; font-size: 18px; margin-bottom: 15px;">
                        Wir schließen Lernlücken, stärken Selbstvertrauen und öffnen neue Chancen – unabhängig vom Einkommen der Eltern.
                    </p>
                    <p style="color: #333; font-size: 16px; font-style: italic;">
                        Bildung ist nicht nur Wissen, sondern der Schlüssel zu einer selbstbestimmten Zukunft.
                    </p>
                </div>
            </div>
        </div>
        
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <div style="text-align: center; background: #f0f8ff; padding: 30px; border-radius: 15px; height: 100%;">
                    <div style="background: white; padding: 20px; border-radius: 50%; width: 80px; height: 80px; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                        <span style="font-size: 2rem;">😊</span>
                    </div>
                    <h5 style="color: #333; font-weight: 600; margin-bottom: 10px;">Lernfreude</h5>
                    <p style="color: #666; font-size: 14px;">Wir wecken die natürliche Neugier und Freude am Lernen</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div style="text-align: center; background: #f0f8ff; padding: 30px; border-radius: 15px; height: 100%;">
                    <div style="background: white; padding: 20px; border-radius: 50%; width: 80px; height: 80px; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                        <span style="font-size: 2rem;">🎯</span>
                    </div>
                    <h5 style="color: #333; font-weight: 600; margin-bottom: 10px;">Individuelle Förderung</h5>
                    <p style="color: #666; font-size: 14px;">Jedes Kind erhält maßgeschneiderte Unterstützung</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div style="text-align: center; background: #f0f8ff; padding: 30px; border-radius: 15px; height: 100%;">
                    <div style="background: white; padding: 20px; border-radius: 50%; width: 80px; height: 80px; margin: 0 auto 20px; display: flex; align-items: center; justify-content: center; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                        <span style="font-size: 2rem;">🤝</span>
                    </div>
                    <h5 style="color: #333; font-weight: 600; margin-bottom: 10px;">Gemeinsam stark</h5>
                    <p style="color: #666; font-size: 14px;">Zusammen erreichen wir mehr für unsere Kinder</p>
                </div>
            </div>
        </div>
    </div>

    <div class="services_section layout_padding" style="background: #f8f9fa;">
        <div class="container">
            <div class="text-center mb-5">
                <h1 class="language_taital">So unterstützen wir Sie</h1>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-8 mx-auto">
                    <div class="text-center" style="background: white; padding: 40px; border-radius: 15px; box-shadow: 0 5px 15px rgba(0,0,0,0.1);">
                        <p style="color: #333; font-size: 18px; line-height: 1.6; margin-bottom: 30px;">
                            Wenn kein Anspruch auf staatliche Förderung besteht, finden wir gemeinsam einen Weg, damit Ihr Kind die passende Lernförderung erhält. Wir helfen, einen Platz im Nachhilfe- oder Hausaufgabenprogramm der <strong>Studyfriends GmbH</strong> zu sichern – gefördert durch unsere Bildungspaten.
                        </p>
                        <div class="row justify-content-center">
                          
                            <div class="col-md-6">
                                <a href="#foerderanfrage" style="background: #98FB98; color: #333; padding: 15px 40px; border-radius: 25px; text-decoration: none; font-weight: 600; display: inline-block; margin: 10px; transition: all 0.3s ease;" onmouseover="this.style.background='#90EE90'" onmouseout="this.style.background='#98FB98'">
                                    Förderanfrage stellen
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<!-- twingle -->
      <!-- Sprachabschnitt -->
   <div class="container">


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
      <!-- Spenden Section mit Buttons -->
<section class="about_section layout_padding" style="background-color:#270b60;" id="aboutus">
  <div class="container">
    <div class="text-center mb-4">
      <h2 style="color:#fff; font-weight:700;">Unterstützen Sie uns</h2>
      <p style="color:#ddd;">Wählen Sie aus, wie Sie uns unterstützen möchten:</p>
    </div>

    <!-- Buttons -->
    <div class="d-flex justify-content-center mb-4">
      <button id="btnPrivat" class="btn btn-outline-light px-4 me-2">
        Privatperson
      </button>
      <button id="btnGewerbe" class="btn btn-light px-4 fw-bold active">
        Gewerbe
      </button>
    </div>

    <!-- Twingle-Widget -->
    <div id="twingleEmbedContainer" class="text-center" style="min-height:300px;"></div>
  </div>
</section>

<script>
(function () {
  const container = document.getElementById("twingleEmbedContainer");

  const LINKS = {
    privat: "https://spenden.twingle.de/embed/chancenschmiede-ggmbh/spendenkampagne-chancenschmiede/tw67b329517147a/widget",
    gewerbe: "https://spenden.twingle.de/embed/chancenschmiede-ggmbh/spendenkampagne-chancenschmiede/tw68b380d8afc5a/widget"
  };

  const btnPrivat = document.getElementById("btnPrivat");
  const btnGewerbe = document.getElementById("btnGewerbe");

  // Widget laden
  function loadTwingle(url) {
    container.innerHTML = "";
    const id = '_' + Math.random().toString(36).substr(2, 9);
    const t = document.createElement("div");
    t.id = "twingle-public-embed-" + id;
    container.appendChild(t);

    const g = document.createElement("script");
    g.type = "text/javascript";
    g.async = true;
    g.defer = true;
    g.src = url + "/" + id;
    document.body.appendChild(g);
  }

  // Button-Klicks
  btnPrivat.addEventListener("click", function () {
    btnPrivat.classList.add("btn-light", "fw-bold", "active");
    btnPrivat.classList.remove("btn-outline-light");
    btnGewerbe.classList.remove("btn-light", "fw-bold", "active");
    btnGewerbe.classList.add("btn-outline-light");
    loadTwingle(LINKS.privat);
  });

  btnGewerbe.addEventListener("click", function () {
    btnGewerbe.classList.add("btn-light", "fw-bold", "active");
    btnGewerbe.classList.remove("btn-outline-light");
    btnPrivat.classList.remove("btn-light", "fw-bold", "active");
    btnPrivat.classList.add("btn-outline-light");
    loadTwingle(LINKS.gewerbe);
  });

  // Standard: Gewerbe direkt laden
  loadTwingle(LINKS.gewerbe);
})();
</script>



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
<!-- Bildungspate & Erfolgsgeschichten - Kombinierte Section -->
<section id="bildungspate" class="patenschaft_section layout_padding">
  <div class="container">

    <!-- Hauptüberschrift -->
    <div class="section_heading text-center">
      <h2 class="patenschaft_title">
        So werden Sie Bildungspate – <span>und so wirkt Ihre Unterstützung</span>
      </h2>
    </div>

    <div class="row">
      <!-- Textblock links -->
      <div class="col-md-8">
        <div class="patenschaft_panel">
          <ul class="patenschaft_list">
            <li><strong>Sie schenken einem Kind in unserer Region</strong> wertvolle Lernchancen.</li>
            <li><strong>Mit 60 € pro Monat</strong> finanzieren Sie einen Platz im Nachhilfe- oder Hausaufgabenprogramm.</li>
            <li><strong>Sie bestimmen, in welchem Rhythmus Sie fördern</strong> – monatlich, quartalsweise oder jährlich – <strong>wie vielen Kindern</strong> Sie Lernchancen ermöglichen.</li>
            <li>Wir zeigen Ihnen transparent, wie Ihre Unterstützung eingesetzt wird und welche Wirkung sie entfaltet.</li>
            <li>Auf Wunsch nennen wir Sie öffentlich als Bildungspaten auf unserer Website und in der Presse.</li>
          </ul>
          <p class="patenschaft_note">
            Ihr Beitrag kommt direkt dort an, wo er gebraucht wird – ohne Umwege, für eine bessere Zukunft.
          </p>
        </div>
      </div>

      <!-- CTA rechts -->
      <div class="col-md-4">
        <aside class="patenschaft_cta">
          <a class="btn btn-primarys patenschaft_btn" href="/#kontakt">
            Jetzt Bildungspate werden
          </a>
        </aside>
      </div>
    </div>

    <!-- Erfolgsgeschichten -->
    <div class="section_heading" style="margin-top:50px;">
      <h3>Erfolgsgeschichten</h3>
    </div>
    <div class="row">
      <div class="col-md-6">
        <div class="story_card">
          <p><strong>Lena, 13 Jahre</strong>, hat wieder Freude am Lernen –<br>
          dank eines Bildungspaten aus Bad Lippspringe.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="story_card">
          <p><strong>Danilo, 15 Jahre</strong>, hat den Realschulabschluss geschafft –<br>
          dank eines Bildungspaten aus Schlangen.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="story_card">
          <p><strong>Amina, 7 Jahre</strong>, erledigt jetzt stolz selbstständig Hausaufgaben –<br>
          dank eines Bildungspaten aus Bad Lippspringe.</p>
        </div>
      </div>
      <div class="col-md-6">
        <div class="story_card">
          <p><strong>Fatima, 17 Jahre</strong>, hat am Berufskolleg den höheren Abschluss erworben –<br>
          dank eines Bildungspaten aus Bad Lippspringe.</p>
        </div>
      </div>
    </div>

    <!-- CTA unten -->
    <div class="stories_cta">
      <p>
        Unterstützen Sie gezielt Familien mit kleinem Einkommen<br>
        und machen Sie Bildung für alle möglich. 
        <a href="#bildungspate"><strong>Bildungspate werden!</strong></a>
      </p>
    </div>

  </div>
</section>
<!-- Bildungspate & Erfolgsgeschichten Ende 
<section id="partner" class="partners_section layout_padding">
  <div class="container">
    <div class="section_heading text-center">
      <h2>Unsere Partner</h2>
      <p class="partners_sub">Gemeinsam schaffen wir Chancen.</p>
    </div>

    <div id="partnerScroller" class="partner-scroller">
      <div class="partner-track">
       LOGO LİSTESİ: sadece buraya img ekle 
       
        <img src="/assets/logos/partner4.png" alt="Partner 4" class="partner_logo">
        <img src="/assets/logos/partner5.png" alt="Partner 5" class="partner_logo">
        <img src="/assets/logos/partner6.png" alt="Partner 6" class="partner_logo">
      </div>
    </div>
  </div>
</section>

 Unsere Partner – Ende 
</div>-->



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

    <script>
/* ===== Partner Logos — RAF Scroller ===== */
(function () {
  const ROOT_ID = 'partnerScroller';
  const SPEED_PX_PER_SEC = 60;     // Hız ayarı (px/sn)
  let state = { x: 0, w: 0, contentW: 0, playing: true, lastTs: 0 };

  function duplicateUntilFill(track, containerWidth) {
    // İçeriği en az 2× konteyner genişliği olana kadar kopyala
    const originals = Array.from(track.children);
    let total = track.scrollWidth;
    while (total < containerWidth * 2 && originals.length) {
      originals.forEach(n => track.appendChild(n.cloneNode(true)));
      total = track.scrollWidth;
    }
    return total;
  }

  function init() {
    const root = document.getElementById(ROOT_ID);
    if (!root) return;
    const track = root.querySelector('.partner-track');
    if (!track) return;

    state.w = root.clientWidth;
    state.contentW = duplicateUntilFill(track, state.w);

    // Hover pause/play
    root.addEventListener('mouseenter', () => { state.playing = false; root.classList.add('is-paused'); });
    root.addEventListener('mouseleave', () => { state.playing = true;  root.classList.remove('is-paused'); });

    // Sekme görünürlüğü
    document.addEventListener('visibilitychange', () => { state.playing = !document.hidden; });

    // Resize olunca yeniden kur
    let resizeTO;
    window.addEventListener('resize', () => {
      clearTimeout(resizeTO);
      resizeTO = setTimeout(() => {
        track.style.transform = 'translateX(0px)';
        state.x = 0;
        state.w = root.clientWidth;
        state.contentW = duplicateUntilFill(track, state.w);
      }, 150);
    });

    // Animasyon döngüsü
    const step = (ts) => {
      const dt = state.lastTs ? (ts - state.lastTs) / 1000 : 0;
      state.lastTs = ts;
      if (state.playing && dt > 0) {
        state.x -= SPEED_PX_PER_SEC * dt;
        if (Math.abs(state.x) >= state.contentW / 2) state.x = 0;
        track.style.transform = `translateX(${state.x}px)`;
      }
      requestAnimationFrame(step);
    };
    requestAnimationFrame(step);
  }

  if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', init);
  } else {
    init();
  }
})();
</script>


  
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


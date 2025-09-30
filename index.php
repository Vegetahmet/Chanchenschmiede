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
            $message = "<div class='message-success'>Vielen Dank! Ihre Nachricht wurde erfolgreich versendet.</div>";
        } else {
            $message = "<div class='message-error'>Fehler: Ihre Nachricht konnte nicht versendet werden.</div>";
        }
    } else {
        $message = "<div class='message-error'>Bitte füllen Sie alle Felder aus.</div>";
    }
}
// Page Meta Information
$page_title = "Chancenschmiede - Faire Bildungschancen für alle Kinder";
$page_description = "Chancen für eine bessere Zukunft.";
$page_keywords = "Nachhilfe, Bildung, Förderung, Bildungspate";
?>

<?php include 'includes/header.php'; ?>

         <!--banner section start -->
         <div class="banner_section layout_padding">
            <div class="container">
               <div id="carouselExampleSlidesOnly" >
                  <div class="carousel-inner">
                     <div class="carousel-item active">
                        <p class="banner_text">Chancenschmiede</p>
                        <h1 class="banner_taital" id="typingText"></h1>
                        <div class="read_bt"><a href="contact.php" class="btn-hero-cta">Jetzt Termin vereinbaren</a></div>

                     </div>


                  </div>
               </div>
            </div>
         </div>
         <!--banner section end -->
      </div>
      <!--header section end -->

      <!-- Mission Section Start -->
      <section class="section section--bg-white">
          <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-10" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card card--highlight text-center" style="padding: 50px 40px;">
                        <div style="display: inline-block; background: linear-gradient(135deg, #270b60 0%, #dbc64c 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-size: 18px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 20px;">
                            Unsere Mission
                        </div>
                        <h2 style="font-size: 32px; font-weight: 700; color: #1a1a1a; margin-bottom: 25px; line-height: 1.3;">
                            Wir schließen Lernlücken, stärken Selbstvertrauen und öffnen neue Chancen – unabhängig vom Einkommen der Eltern.
                        </h2>
                        <p style="font-size: 18px; color: #666; font-style: italic; max-width: 700px; margin: 0 auto;">
                            Bildung ist nicht nur Wissen, sondern der Schlüssel zu einer selbstbestimmten Zukunft.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                <div class="card card--icon card-tilt">
                    <div class="card__icon-wrapper">
                        <span class="card__icon-emoji">😊</span>
                    </div>
                    <h5 class="card__title">Lernfreude</h5>
                    <p class="card__subtitle">Wir wecken die natürliche Neugier und Freude am Lernen</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card card--icon card-tilt">
                    <div class="card__icon-wrapper">
                        <span class="card__icon-emoji">🎯</span>
                    </div>
                    <h5 class="card__title">Individuelle Förderung</h5>
                    <p class="card__subtitle">Jedes Kind erhält maßgeschneiderte Unterstützung</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card card--icon card-tilt">
                    <div class="card__icon-wrapper">
                        <span class="card__icon-emoji">🤝</span>
                    </div>
                    <h5 class="card__title">Gemeinsam stark</h5>
                    <p class="card__subtitle">Zusammen erreichen wir mehr für unsere Kinder</p>
                </div>
            </div>
        </div>
          </div>
      </section>
      <!-- Mission Section End -->

      <!-- Support Section Start -->
      <section class="section section--bg-light">
          <div class="container">
              <div class="section-header" data-aos="fade-down">
                  <h1 class="section-header__title">So unterstützen wir Sie</h1>
              </div>
              <div class="section-content">
                  <div class="row align-items-center">
                      <div class="col-lg-8 mx-auto" data-aos="zoom-in" data-aos-delay="200">
                          <div class="text-center support-box">
                              <p class="support-box__text">
                                  Wenn kein Anspruch auf staatliche Förderung besteht, finden wir gemeinsam einen Weg, damit Ihr Kind die passende Lernförderung erhält. Wir helfen, einen Platz im Nachhilfe- oder Hausaufgabenprogramm der <strong>Studyfriends GmbH</strong> zu sichern – gefördert durch unsere Bildungspaten.
                              </p>
                              <div class="row justify-content-center">
                                  <div class="col-md-6">
                                      <a href="#foerderanfrage" class="btn-success-custom">
                                          Förderanfrage stellen
                                      </a>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Support Section End -->

      <!-- Features Icons Section Start -->
      <section class="section section--bg-white section--education">
          <div class="container">
              <div class="education-hero" data-aos="fade-up">
                  <div class="education-hero__badge">📚 Unsere Leistungen</div>
                  <h2 class="education-hero__title">
                      Bildung und Unterstützung
                  </h2>
                  <p class="education-hero__subtitle">für Kinder und Jugendliche, die eine Perspektive brauchen</p>
              </div>

              <!-- Split Layout: Image + Content -->
              <div class="row align-items-center mb-5">
                  <div class="col-lg-6" data-aos="fade-right">
                      <div class="education-image-wrapper">
                          <img src="images/img-6.png" alt="Flexibler Unterricht" class="education-main-image">
                          <div class="education-float-badge">
                              <span class="education-float-badge__number">01</span>
                              <span class="education-float-badge__text">Flexibilität</span>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6" data-aos="fade-left">
                      <div class="education-content">
                          <div class="education-content__icon">
                              <img src="images/icon-1.png" alt="Icon">
                          </div>
                          <h3 class="education-content__title">Flexibler Unterricht</h3>
                          <p class="education-content__text">
                              Unterricht, der sich an die Bedürfnisse Ihres Kindes anpasst. Ob online oder vor Ort,
                              wir finden die passende Lösung für individuellen Erfolg.
                          </p>
                          <ul class="education-list">
                              <li><span class="education-list__icon">✓</span> Online & Präsenzunterricht</li>
                              <li><span class="education-list__icon">✓</span> Flexible Terminplanung</li>
                              <li><span class="education-list__icon">✓</span> Anpassbare Lernintensität</li>
                          </ul>
                      </div>
                  </div>
              </div>

              <!-- Timeline Style -->
              <div class="education-timeline" data-aos="fade-up">
                  <div class="education-timeline-item education-timeline-item--left">
                      <div class="education-timeline-item__marker">
                          <img src="images/icon-2.png" alt="Icon">
                      </div>
                      <div class="education-timeline-item__content">
                          <h4 class="education-timeline-item__title">Individuelle Lernpläne</h4>
                          <p class="education-timeline-item__text">
                              Jedes Kind lernt anders. Wir erstellen maßgeschneiderte Lernpläne,
                              die auf die Stärken und Schwächen Ihres Kindes abgestimmt sind.
                          </p>
                      </div>
                  </div>

                  <div class="education-timeline-item education-timeline-item--right">
                      <div class="education-timeline-item__marker">
                          <img src="images/icon-3.png" alt="Icon">
                      </div>
                      <div class="education-timeline-item__content">
                          <h4 class="education-timeline-item__title">Zugriff auf Online-Lernplattform</h4>
                          <p class="education-timeline-item__text">
                              Moderne digitale Tools unterstützen den Lernprozess. Übungen, Videos und
                              interaktive Inhalte stehen jederzeit zur Verfügung.
                          </p>
                      </div>
                  </div>

                  <div class="education-timeline-item education-timeline-item--left">
                      <div class="education-timeline-item__marker">
                          <img src="images/icon-4.png" alt="Icon">
                      </div>
                      <div class="education-timeline-item__content">
                          <h4 class="education-timeline-item__title">Erfahrene Nachhilfelehrer</h4>
                          <p class="education-timeline-item__text">
                              Qualifizierte Lehrkräfte mit pädagogischer Erfahrung begleiten Ihr Kind
                              auf dem Weg zum schulischen Erfolg – mit Geduld und Kompetenz.
                          </p>
                      </div>
                  </div>
              </div>

          </div>
      </section>
      <!-- Features Icons Section End -->

      <!-- Target Group Section Start -->
      <section id="zielgruppe" class="section section--target-modern">
          <div class="container">
              <!-- Hero Header -->
              <div class="target-hero" data-aos="fade-up">
                  <div class="target-hero__badge">🎯 Für wen wir da sind</div>
                  <h2 class="target-hero__title">
                      <span class="gradient-text">Bildung für Alle</span> – unabhängig vom Hintergrund
                  </h2>
                  <p class="target-hero__subtitle">
                      Wir unterstützen benachteiligte Kinder und Jugendliche, die aufgrund ihrer sozialen oder persönlichen Umstände kaum Zugang zu Bildungsangeboten haben.
                  </p>
              </div>

              <!-- Main Content with Images -->
              <div class="row align-items-center mt-5 mb-5">
                  <div class="col-lg-6" data-aos="fade-right">
                      <div class="target-content">
                          <h3 class="target-content__title">Gezielte Nachhilfe & Förderung</h3>
                          <p class="target-content__text">
                              Die Chancenschmiede setzt sich engagiert dafür ein, benachteiligten Kindern und Jugendlichen Chancen zu bieten. Unsere gemeinnützige Organisation bietet gezielte Nachhilfe und Förderung in Einzel- oder Gruppensitzungen für junge Menschen, die unter schwierigen Bedingungen aufwachsen.
                          </p>
                          <div class="target-highlight">
                              <div class="target-highlight__icon">💡</div>
                              <div class="target-highlight__text">
                                  <strong>Besonders fördern wir jene,</strong> die aufgrund ihrer sozialen oder persönlichen Umstände kaum Unterstützung erhalten.
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-6" data-aos="fade-left">
                      <div class="target-image-wrapper">
                          <img src="images/img-1.png" alt="Nachhilfe" class="target-image">
                          <div class="target-image-badge">📚 Einzelförderung</div>
                      </div>
                  </div>
              </div>

              <!-- Features Row -->
              <div class="row mb-5">
                  <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="100">
                      <div class="target-feature">
                          <div class="target-feature__icon">🎓</div>
                          <h4>Langfristige Begleitung</h4>
                          <p>Durch individuell angepasste Lernpläne unterstützen wir die persönliche und schulische Entwicklung.</p>
                      </div>
                  </div>
                  <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="200">
                      <div class="target-feature">
                          <div class="target-feature__icon">💪</div>
                          <h4>Selbstvertrauen stärken</h4>
                          <p>Bildung ist die Grundlage für Selbstvertrauen und persönliche Entwicklung jedes Kindes.</p>
                      </div>
                  </div>
                  <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-delay="300">
                      <div class="target-feature">
                          <div class="target-feature__icon">🌟</div>
                          <h4>Stabile Perspektiven</h4>
                          <p>Mit erfahrenen Lehrkräften schaffen wir ein Umfeld, das Zukunftsperspektiven eröffnet.</p>
                      </div>
                  </div>
              </div>

              <!-- Bottom Content with Image -->
              <div class="row align-items-center">
                  <div class="col-lg-6 order-lg-2" data-aos="fade-left">
                      <div class="target-content">
                          <h3 class="target-content__title">Mehr als Wissensvermittlung</h3>
                          <p class="target-content__text">
                              Wir verstehen Bildung als Grundlage für Selbstvertrauen und persönliche Entwicklung. Unsere Angebote gehen daher über die reine Wissensvermittlung hinaus: Durch langfristige Begleitung und individuell angepasste Lernpläne unterstützen wir die persönliche und schulische Entwicklung unserer Teilnehmer.
                          </p>
                          <p class="target-content__text">
                              Gemeinsam mit erfahrenen Lehrkräften und engagierten Unterstützern schaffen wir ein stabiles Umfeld, das jungen Menschen Perspektiven für ihre Zukunft eröffnet. Unser Ziel ist es, Bildungslücken zu schließen und Jugendlichen Selbstvertrauen zu geben – unabhängig von ihrem sozialen Hintergrund oder persönlichen Herausforderungen.
                          </p>
                      </div>
                  </div>
                  <div class="col-lg-6 order-lg-1" data-aos="fade-right">
                      <div class="target-image-wrapper">
                          <img src="images/img-2.png" alt="Gruppenförderung" class="target-image">
                          <div class="target-image-badge">👥 Gruppenförderung</div>
                      </div>
                  </div>
              </div>

          </div>
      </section>
      <!-- Target Group Section End -->
      <!-- Donation Section Start -->
      <section class="donation-section" id="aboutus">
          <div class="container">
              <div class="donation-hero" data-aos="fade-up">
                  <div class="donation-hero__badge">💝 Jetzt spenden</div>
                  <h2 class="donation-hero__title">
                      Gemeinsam <span class="gradient-text">Bildung ermöglichen</span>
                  </h2>
                  <p class="donation-hero__text">
                      Ihre Spende macht den Unterschied. Helfen Sie uns, Kindern faire Bildungschancen zu geben – unabhängig von ihren finanziellen Möglichkeiten.
                  </p>
              </div>

              <div class="donation-content" data-aos="zoom-in">
                  <!-- Buttons -->
                  <div class="donation-tabs">
                      <button id="btnPrivat" class="donation-tab">
                          <span class="donation-tab__icon">👤</span>
                          <span class="donation-tab__text">Privatperson</span>
                      </button>
                      <button id="btnGewerbe" class="donation-tab donation-tab--active">
                          <span class="donation-tab__icon">🏢</span>
                          <span class="donation-tab__text">Gewerbe</span>
                      </button>
                  </div>

                  <!-- Twingle-Widget -->
                  <div class="donation-widget">
                      <div id="twingleEmbedContainer"></div>
                  </div>
              </div>
          </div>
      </section>
      <!-- Donation Section End -->

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
    btnPrivat.classList.add("donation-tab--active");
    btnGewerbe.classList.remove("donation-tab--active");
    loadTwingle(LINKS.privat);
  });

  btnGewerbe.addEventListener("click", function () {
    btnGewerbe.classList.add("donation-tab--active");
    btnPrivat.classList.remove("donation-tab--active");
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
      <!-- Patenschaft Section Start -->
      <section id="bildungspate" class="section section--patenschaft-modern">
          <div class="container">
              <!-- Hero Header -->
              <div class="patenschaft-hero" data-aos="fade-up">
                  <div class="patenschaft-hero__badge">💚 Bildungspate werden</div>
                  <h2 class="patenschaft-hero__title">
                      Schenken Sie einem Kind neue <span class="gradient-text">Chancen</span>
                  </h2>
                  <p class="patenschaft-hero__subtitle">
                      Mit Ihrer Unterstützung ermöglichen Sie gezielte Förderung und eröffnen neue Zukunftsperspektiven
                  </p>
              </div>

              <!-- Features Grid -->
              <div class="row mt-5">
                  <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                      <div class="patenschaft-feature">
                          <div class="patenschaft-feature__icon">🎯</div>
                          <h3 class="patenschaft-feature__title">Direkte Wirkung</h3>
                          <p class="patenschaft-feature__text">Sie schenken einem Kind in unserer Region wertvolle Lernchancen und sehen die direkte Wirkung Ihrer Unterstützung.</p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                      <div class="patenschaft-feature">
                          <div class="patenschaft-feature__icon">💰</div>
                          <h3 class="patenschaft-feature__title">Flexible Förderung</h3>
                          <p class="patenschaft-feature__text">Mit <strong><span class="counter" data-target="60">0</span> € pro Monat</strong> finanzieren Sie einen Platz. Sie bestimmen Rhythmus und Umfang.</p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                      <div class="patenschaft-feature">
                          <div class="patenschaft-feature__icon">📊</div>
                          <h3 class="patenschaft-feature__title">Transparenz</h3>
                          <p class="patenschaft-feature__text">Wir zeigen Ihnen transparent, wie Ihre Unterstützung eingesetzt wird und welche Wirkung sie entfaltet.</p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                      <div class="patenschaft-feature">
                          <div class="patenschaft-feature__icon">🏆</div>
                          <h3 class="patenschaft-feature__title">Anerkennung</h3>
                          <p class="patenschaft-feature__text">Auf Wunsch nennen wir Sie öffentlich als Bildungspaten auf unserer Website und in der Presse.</p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="500">
                      <div class="patenschaft-feature">
                          <div class="patenschaft-feature__icon">🎓</div>
                          <h3 class="patenschaft-feature__title">Bildung ermöglichen</h3>
                          <p class="patenschaft-feature__text">Zugang zu Nachhilfe- und Hausaufgabenprogramm bei Studyfriends GmbH für benachteiligte Kinder.</p>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="600">
                      <div class="patenschaft-feature">
                          <div class="patenschaft-feature__icon">❤️</div>
                          <h3 class="patenschaft-feature__title">Ohne Umwege</h3>
                          <p class="patenschaft-feature__text">Ihr Beitrag kommt direkt dort an, wo er gebraucht wird – für eine bessere Zukunft.</p>
                      </div>
                  </div>
              </div>

              <!-- CTA Box -->
              <div class="patenschaft-cta-box" data-aos="zoom-in" data-aos-delay="200">
                  <h3>Bereit, Leben zu verändern?</h3>
                  <p>Werden Sie Teil unserer Mission und ermöglichen Sie Bildung für alle.</p>
                  <a href="bildungspate.php" class="btn-hero-cta">Jetzt Bildungspate werden</a>
              </div>

              <!-- Erfolgsgeschichten -->
              <div class="success-stories-section mt-5">
                  <div class="section-header text-center" data-aos="fade-up">
                      <div style="display: inline-block; background: linear-gradient(135deg, #270b60 0%, #dbc64c 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text; font-size: 16px; font-weight: 700; text-transform: uppercase; letter-spacing: 2px; margin-bottom: 15px;">
                          Echte Erfolge
                      </div>
                      <h2 style="font-size: 36px; font-weight: 700; color: #1a1a1a; margin-bottom: 50px;">
                          Das haben wir gemeinsam erreicht
                      </h2>
                  </div>

                  <div class="row">
                      <div class="col-md-6 mb-4" data-aos="fade-right" data-aos-delay="100">
                          <div class="success-card">
                              <div class="success-card__icon">✨</div>
                              <div class="success-card__content">
                                  <h4 class="success-card__name">Lena, 13 Jahre</h4>
                                  <p class="success-card__text">hat wieder Freude am Lernen – dank eines Bildungspaten aus Bad Lippspringe.</p>
                                  <div class="success-card__location">📍 Bad Lippspringe</div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 mb-4" data-aos="fade-left" data-aos-delay="100">
                          <div class="success-card">
                              <div class="success-card__icon">🎓</div>
                              <div class="success-card__content">
                                  <h4 class="success-card__name">Danilo, 15 Jahre</h4>
                                  <p class="success-card__text">hat den Realschulabschluss geschafft – dank eines Bildungspaten aus Schlangen.</p>
                                  <div class="success-card__location">📍 Schlangen</div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 mb-4" data-aos="fade-right" data-aos-delay="200">
                          <div class="success-card">
                              <div class="success-card__icon">💪</div>
                              <div class="success-card__content">
                                  <h4 class="success-card__name">Amina, 7 Jahre</h4>
                                  <p class="success-card__text">erledigt jetzt stolz selbstständig Hausaufgaben – dank eines Bildungspaten aus Bad Lippspringe.</p>
                                  <div class="success-card__location">📍 Bad Lippspringe</div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-6 mb-4" data-aos="fade-left" data-aos-delay="200">
                          <div class="success-card">
                              <div class="success-card__icon">🌟</div>
                              <div class="success-card__content">
                                  <h4 class="success-card__name">Fatima, 17 Jahre</h4>
                                  <p class="success-card__text">hat am Berufskolleg den höheren Abschluss erworben – dank eines Bildungspaten aus Bad Lippspringe.</p>
                                  <div class="success-card__location">📍 Bad Lippspringe</div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>

          </div>
      </section>
      <!-- Patenschaft Section End -->



      <!--Schülerbereich Ende -->
      <!--Newsletter Bereich Anfang -->
     
      <!--Newsletter Bereich Ende -->

      <!-- Contact Section Start -->
      <section class="section section--bg-dark" id="contact">
          <div class="container">
              <div class="section-header">
                  <h1 class="touch_text">Kontaktieren Sie uns</h1>
                  <p style="color: #b0b0b0; text-align: center; font-size: 18px; margin-bottom: 40px;">Wir freuen uns auf Ihre Nachricht und melden uns schnellstmöglich bei Ihnen.</p>
              </div>
              <div class="section-content">
                  <div class="email_box">
                      <div class="input_main">
                          <form action="" method="POST">
                              <div class="form-group">
                                  <input type="text" class="email-bt form-control" placeholder="Ihr Name" name="Name" required>
                              </div>
                              <div class="form-group">
                                  <input type="text" class="email-bt form-control" placeholder="Ihre Telefonnummer" name="Phone" required>
                              </div>
                              <div class="form-group">
                                  <input type="email" class="email-bt form-control" placeholder="Ihre E-Mail-Adresse" name="Email" required>
                              </div>
                              <div class="form-group">
                                  <textarea class="massage-bt form-control" placeholder="Ihre Nachricht an uns..." rows="5" id="comment" name="Massage" required></textarea>
                              </div>
                              <div class="send_bt">
                                  <button type="submit" class="btn-success-custom">Nachricht senden</button>
                              </div>
                          </form>
                          <!-- Erfolg- oder Fehlermeldung anzeigen -->
                          <?php echo $message; ?>
                      </div>
                  </div>

              </div>
          </div>
      </section>
      <!-- Contact Section End -->

<?php include 'includes/footer.php'; ?>

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

      <!-- AOS Animation Library -->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

      <script>
      // Initialize AOS
      AOS.init({
         duration: 800,
         easing: 'ease-in-out',
         once: true,
         mirror: false
      });

      // Typing Animation for Hero Text
      const typingText = document.getElementById('typingText');
      const text = 'Wir geben Kindern faire Bildungschancen – auch bei finanziellen Hürden.';
      let index = 0;

      function typeText() {
         if (index < text.length) {
            typingText.innerHTML += text.charAt(index);
            index++;
            setTimeout(typeText, 50);
         }
      }

      // Start typing after page load
      window.addEventListener('load', function() {
         setTimeout(typeText, 500);
      });

      // Counter Animation
      function animateCounter(element) {
         const target = parseInt(element.getAttribute('data-target'));
         const duration = 2000;
         const increment = target / (duration / 16);
         let current = 0;

         const updateCounter = () => {
            current += increment;
            if (current < target) {
               element.textContent = Math.floor(current);
               requestAnimationFrame(updateCounter);
            } else {
               element.textContent = target;
            }
         };

         updateCounter();
      }

      // Intersection Observer for Counter
      const counterObserver = new IntersectionObserver((entries) => {
         entries.forEach(entry => {
            if (entry.isIntersecting) {
               animateCounter(entry.target);
               counterObserver.unobserve(entry.target);
            }
         });
      }, { threshold: 0.5 });

      document.querySelectorAll('.counter').forEach(counter => {
         counterObserver.observe(counter);
      });

      // Card Tilt Effect
      document.querySelectorAll('.card-tilt').forEach(card => {
         card.addEventListener('mousemove', function(e) {
            const rect = card.getBoundingClientRect();
            const x = e.clientX - rect.left;
            const y = e.clientY - rect.top;

            const centerX = rect.width / 2;
            const centerY = rect.height / 2;

            const rotateX = (y - centerY) / 10;
            const rotateY = (centerX - x) / 10;

            card.style.transform = `perspective(1000px) rotateX(${rotateX}deg) rotateY(${rotateY}deg) scale3d(1.05, 1.05, 1.05)`;
         });

         card.addEventListener('mouseleave', function() {
            card.style.transform = 'perspective(1000px) rotateX(0) rotateY(0) scale3d(1, 1, 1)';
         });
      });
      </script>
   </body>
</html>


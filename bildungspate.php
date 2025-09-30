<?php
// E-Mail-Verarbeitung
$message = '';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $betrag = htmlspecialchars($_POST['betrag']);
    $nachricht = htmlspecialchars($_POST['nachricht']);

    $to = 'info@chancenschmiede.com';
    $subject = 'Neue Bildungspaten-Anfrage von ' . $name;

    $email_content = "Name: $name\n";
    $email_content .= "E-Mail: $email\n";
    $email_content .= "Telefon: $phone\n";
    $email_content .= "Monatlicher Betrag: $betrag\n\n";
    $email_content .= "Nachricht:\n$nachricht\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $email_content, $headers)) {
        $message = '<div class="alert alert-success">Vielen Dank! Ihre Nachricht wurde erfolgreich gesendet. Wir melden uns in Kürze bei Ihnen.</div>';
    } else {
        $message = '<div class="alert alert-danger">Es gab ein Problem beim Senden Ihrer Nachricht. Bitte versuchen Sie es später erneut.</div>';
    }
}

// Page Meta Information
$page_title = "Bildungspate werden - Chancenschmiede";
$page_description = "Werden Sie Bildungspate und schenken Sie einem Kind faire Bildungschancen";
$page_keywords = "Bildungspate, Spende, Nachhilfe, Förderung";
?>

<?php include 'includes/header.php'; ?>

    <!-- Hero Section - Full Width -->
    <section class="pate-hero-full">
        <div class="container">
            <div class="text-center" data-aos="fade-up">
                <div class="pate-hero__badge">💚 Machen Sie den Unterschied</div>
                <h1 class="pate-hero__title">
                    Werden Sie <span class="gradient-text">Bildungspate</span>
                </h1>
                <p class="pate-hero__subtitle">
                    Mit Ihrer Unterstützung ermöglichen Sie Kindern aus einkommensschwachen Familien faire Bildungschancen
                </p>

                <div class="pate-hero__stats-row" data-aos="fade-up" data-aos-delay="100">
                    <div class="pate-stat-inline">
                        <div class="pate-stat-inline__number">150+</div>
                        <div class="pate-stat-inline__label">Geförderte Kinder</div>
                    </div>
                    <div class="pate-stat-inline">
                        <div class="pate-stat-inline__number">50+</div>
                        <div class="pate-stat-inline__label">Aktive Paten</div>
                    </div>
                    <div class="pate-stat-inline">
                        <div class="pate-stat-inline__number">95%</div>
                        <div class="pate-stat-inline__label">Erfolgsquote</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Form Section - Centered -->
    <section class="pate-form-main">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9 col-xl-8" data-aos="zoom-in">
                    <div class="pate-form-box">
                        <div class="pate-form-box__header">
                            <div class="pate-form-box__icon">✨</div>
                            <h2 class="pate-form-box__title">Jetzt Bildungspate werden</h2>
                            <p class="pate-form-box__subtitle">
                                Füllen Sie das Formular aus und wir melden uns zeitnah bei Ihnen
                            </p>
                        </div>

                        <?php echo $message; ?>

                        <form method="POST" action="" class="pate-form-box__form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="pate-form__label">Ihr Name *</label>
                                        <input type="text" name="name" class="pate-form__input" placeholder="Max Mustermann" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="pate-form__label">Ihre E-Mail *</label>
                                        <input type="email" name="email" class="pate-form__input" placeholder="max@beispiel.de" required>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="pate-form__label">Telefonnummer</label>
                                        <input type="tel" name="phone" class="pate-form__input" placeholder="+49 123 456789">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="pate-form__label">Monatlicher Betrag *</label>
                                        <select name="betrag" class="pate-form__input" required>
                                            <option value="">Bitte wählen</option>
                                            <option value="60€">60€ / Monat</option>
                                            <option value="120€">120€ / Monat</option>
                                            <option value="180€">180€ / Monat</option>
                                            <option value="individuell">Individueller Betrag</option>
                                        </select>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="pate-form__label">Ihre Nachricht (optional)</label>
                                <textarea name="nachricht" class="pate-form__textarea" rows="4" placeholder="Teilen Sie uns mit, warum Sie Bildungspate werden möchten..."></textarea>
                            </div>

                            <div class="pate-form-box__info">
                                <span class="pate-form-box__info-icon">🔒</span>
                                <span>Ihre Daten werden vertraulich behandelt und nicht an Dritte weitergegeben</span>
                            </div>

                            <button type="submit" class="btn-pate-submit-full">
                                <span>Jetzt Bildungspate werden</span>
                                <span class="btn-pate-submit__icon">→</span>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Benefits Section - 3 Columns -->
    <section class="pate-benefits-grid">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="pate-benefits-grid__title">Warum Bildungspate werden?</h2>
                <p class="pate-benefits-grid__subtitle">Als Bildungspate investieren Sie direkt in die Zukunft eines Kindes</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="benefit-card">
                        <div class="benefit-card__icon">📚</div>
                        <h3 class="benefit-card__title">Direkte Wirkung</h3>
                        <p class="benefit-card__text">
                            Ihre Spende fließt zu 100% in die Nachhilfe und Förderung von Kindern, die sich diese sonst nicht leisten könnten.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="benefit-card">
                        <div class="benefit-card__icon">🎯</div>
                        <h3 class="benefit-card__title">Transparenz</h3>
                        <p class="benefit-card__text">
                            Sie erhalten regelmäßige Updates über die Fortschritte und Erfolge der geförderten Kinder.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="benefit-card">
                        <div class="benefit-card__icon">💚</div>
                        <h3 class="benefit-card__title">Flexibilität</h3>
                        <p class="benefit-card__text">
                            Bestimmen Sie selbst die Höhe Ihres monatlichen Beitrags – jeder Betrag hilft und macht einen Unterschied.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="benefit-card">
                        <div class="benefit-card__icon">🏆</div>
                        <h3 class="benefit-card__title">Langfristige Unterstützung</h3>
                        <p class="benefit-card__text">
                            Ihre kontinuierliche Förderung ermöglicht nachhaltige Bildungserfolge und eine bessere Zukunft.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="benefit-card">
                        <div class="benefit-card__icon">🌟</div>
                        <h3 class="benefit-card__title">Anerkennung</h3>
                        <p class="benefit-card__text">
                            Auf Wunsch nennen wir Sie öffentlich als Bildungspate auf unserer Website und in der Presse.
                        </p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="benefit-card">
                        <div class="benefit-card__icon">🎓</div>
                        <h3 class="benefit-card__title">Bildungsgerechtigkeit</h3>
                        <p class="benefit-card__text">
                            Sie helfen, die Bildungsschere zu schließen und allen Kindern faire Chancen zu geben.
                        </p>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center mt-4">
                <div class="col-lg-8" data-aos="zoom-in">
                    <div class="pate-cta-box">
                        <div class="pate-cta-box__icon">💰</div>
                        <div class="pate-cta-box__content">
                            <div class="pate-cta-box__title">Schon ab 60€ pro Monat</div>
                            <div class="pate-cta-box__text">können Sie einem Kind den Zugang zu Bildung ermöglichen</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Impact Section -->
    <section class="pate-impact">
        <div class="container">
            <div class="pate-section-header" data-aos="fade-up">
                <h2 class="pate-section-header__title">Ihre Wirkung in Zahlen</h2>
                <p class="pate-section-header__subtitle">Das haben unsere Bildungspaten bereits bewirkt</p>
            </div>

            <div class="row">
                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="pate-impact-card">
                        <div class="pate-impact-card__number">150+</div>
                        <div class="pate-impact-card__label">Geförderte Kinder</div>
                        <div class="pate-impact-card__description">haben eine bessere Bildungschance erhalten</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="pate-impact-card">
                        <div class="pate-impact-card__number">2.500+</div>
                        <div class="pate-impact-card__label">Nachhilfestunden</div>
                        <div class="pate-impact-card__description">wurden durch Patenschaften finanziert</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="300">
                    <div class="pate-impact-card">
                        <div class="pate-impact-card__number">95%</div>
                        <div class="pate-impact-card__label">Erfolgsquote</div>
                        <div class="pate-impact-card__description">der Kinder haben ihre Noten verbessert</div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="400">
                    <div class="pate-impact-card">
                        <div class="pate-impact-card__number">50+</div>
                        <div class="pate-impact-card__label">Aktive Paten</div>
                        <div class="pate-impact-card__description">unterstützen uns kontinuierlich</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer Start -->
    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="text-center" style="color: #fefefe; padding: 20px 0;">
                        © <?php echo date('Y'); ?> Chancenschmiede. Alle Rechte vorbehalten.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Javascript files -->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true,
            mirror: false
        });
    </script>
</body>
</html>
<?php
// Page Meta Information
$page_title = "Unsere Partner - Chancenschmiede";
$page_description = "Partner und Unterstützer der Chancenschmiede gGmbH";
$page_keywords = "Partner, Unterstützer, Sponsoren, Chancenschmiede";
?>

<?php include 'includes/header.php'; ?>

<!-- Partner Hero Section -->
<section class="partner-hero">
    <div class="container">
        <div class="partner-hero__content" data-aos="fade-up">
            <div class="partner-hero__badge">🤝 Gemeinsam stark</div>
            <h1 class="partner-hero__title">
                Unsere <span class="gradient-text">Partner</span>
            </h1>
            <p class="partner-hero__subtitle">
                Gemeinsam setzen wir uns für faire Bildungschancen ein. Wir danken unseren Partnern für ihr Vertrauen und ihre Unterstützung.
            </p>
        </div>
    </div>
</section>

<!-- Partner Grid Section -->
<section class="partner-grid-section">
    <div class="container">
        <div class="row">
            <!-- Premium Partner -->
            <div class="col-12" data-aos="zoom-in">
                <div class="partner-category">
                    <h2 class="partner-category__title">Premium Partner</h2>
                    <div class="partner-category__divider"></div>
                </div>
            </div>

            <div class="col-lg-6 col-xl-4" data-aos="fade-up" data-aos-delay="100">
                <div class="partner-card partner-card--featured">
                    <div class="partner-card__logo-wrapper">
                        <img src="images/VB_Logo.png" alt="Volksbank Schlangen eG | Spadaka Bad Lippspringe" class="partner-card__logo">
                    </div>
                    <div class="partner-card__content">
                        <h3 class="partner-card__name">Volksbank Schlangen eG | Spadaka Bad Lippspringe</h3>
                        <p class="partner-card__description">
                            Die Volksbank Schlangen eG und Spadaka Bad Lippspringe unterstützen uns als starker regionaler Partner bei unserer Mission, Kindern faire Bildungschancen zu ermöglichen.
                        </p>
                        <div class="partner-card__tag">
                            <span class="partner-card__tag-icon">⭐</span>
                            <span>Premium Partner</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Placeholder for future partners -->
            <div class="col-lg-6 col-xl-4" data-aos="fade-up" data-aos-delay="200">
                <div class="partner-card partner-card--placeholder">
                    <div class="partner-card__placeholder-content">
                        <div class="partner-card__placeholder-icon">🤝</div>
                        <h3 class="partner-card__placeholder-title">Werden Sie Partner</h3>
                        <p class="partner-card__placeholder-text">
                            Unterstützen Sie unsere Mission und werden Sie Teil unseres Netzwerks für faire Bildungschancen.
                        </p>
                        <a href="bildungspate.php" class="btn-partner-placeholder">
                            <span>Jetzt Partner werden</span>
                            <span class="btn-partner-placeholder__icon">→</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Partner CTA Section -->
<section class="partner-cta-section">
    <div class="container">
        <div class="partner-cta" data-aos="zoom-in">
            <div class="partner-cta__content">
                <h2 class="partner-cta__title">Möchten Sie Partner werden?</h2>
                <p class="partner-cta__text">
                    Gemeinsam können wir mehr erreichen. Werden Sie Teil unseres Netzwerks und unterstützen Sie Kinder auf ihrem Bildungsweg.
                </p>
                <div class="partner-cta__buttons">
                    <a href="bildungspate.php" class="btn-partner-cta btn-partner-cta--primary">
                        <span>Partner werden</span>
                        <span class="btn-partner-cta__icon">→</span>
                    </a>
                    <a href="index.php#contact" class="btn-partner-cta btn-partner-cta--secondary">
                        <span>Kontakt aufnehmen</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'includes/footer.php'; ?>

<!-- Javascript Dateien-->
<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/jquery-3.0.0.min.js"></script>
<script src="js/plugin.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/owl.carousel.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        duration: 800,
        once: true
    });
</script>
</body>
</html>
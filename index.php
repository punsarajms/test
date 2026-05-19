<?php
$pageTitle = 'Seneha Home Nursing Care | Home';
$pageDescription = 'Seneha Home Nursing Care provides caring home support for sick patients, including medicine help, bathing, dressing, meals, and daily assistance.';
$activePage = 'home';
include __DIR__ . '/includes/header.php';
?>

<!-- Top image slider below navbar (professional version) -->
<section class="section top-slider-section">
    <div class="container">
        <div class="top-slider" aria-roledescription="carousel">
            <button class="top-slider-btn prev" aria-label="Previous slide">‹</button>
            <div class="top-slider-track">
                <div class="top-slider-item">
                    <img src="assets/img/slider/slider01.jpeg" alt="Home nursing care">
                </div>
                <div class="top-slider-item">
                    <img src="assets/img/slider/slider02.jpeg" alt="Meal care">
                </div>
                <div class="top-slider-item">
                    <img src="assets/img/slider/slider03.jpeg" alt="Room care">
                </div>
                <div class="top-slider-item">
                    <img src="assets/img/slider/slider04.jpeg" alt="Seneha logo">
                </div>
            </div>
            <button class="top-slider-btn next" aria-label="Next slide">›</button>
            <div class="top-slider-dots" aria-hidden="false"></div>
        </div>
    </div>
</section>
<section class="hero-section">
    <div class="container hero-grid">
        <div class="hero-copy reveal">
            <span class="eyebrow">Home nursing and patient care</span>
            <h1>Comfort, dignity, and daily support for patients at home.</h1>
            <p>We care for sick patients with medicine reminders, bathing, dressing, meal preparation, mobility help, and gentle daily assistance designed to support recovery and peace of mind.</p>
            <div class="hero-actions">
                <a class="btn btn-primary" href="contact.php">Book Care Support</a>
                <a class="btn btn-secondary" href="services.php">View Services</a>
                <a class="btn btn-primary" href="register.php">Register Patient Online</a>
            </div>
            <div class="hero-stats">
                <div><strong>24/7</strong><span>Support available</span></div>
                <div><strong>100%</strong><span>Patient-focused care</span></div>
                <div><strong>Daily</strong><span>Home care assistance</span></div>
            </div>
        </div>
        <div class="hero-art reveal delay-1">
            <img src="assets/img/hero-care.png" alt="Home nurse caring for a patient">
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading reveal">
            <span class="eyebrow">Why families trust us</span>
            <h2>Complete care for everyday needs.</h2>
            <p>Our team focuses on the daily tasks that make a real difference for sick or elderly patients staying at home.</p>
        </div>
        <div class="feature-grid">
            <article class="feature-card reveal">
                <h3>Medicine support</h3>
                <p>Timely reminders and safe support for prescribed medicines.</p>
            </article>
            <article class="feature-card reveal delay-1">
                <h3>Bathing and hygiene</h3>
                <p>Respectful washing, grooming, and clean personal care.</p>
            </article>
            <article class="feature-card reveal delay-2">
                <h3>Meal preparation</h3>
                <p>Cooked meals prepared carefully according to patient needs.</p>
            </article>
        </div>
    </div>
</section>

<section class="section soft-panel">
    <div class="container split-grid">
        <div class="reveal">
            <span class="eyebrow">About the service</span>
            <h2>Support that feels human, calm, and reliable.</h2>
            <p>We help patients with dressing, moving safely, staying clean, eating well, and keeping their day organized so families can feel supported.</p>
            <ul class="check-list">
                <li>Patient washing and personal hygiene</li>
                <li>Dressing and changing clothes</li>
                <li>Cooked food and feeding support</li>
                <li>Companionship and comfort care</li>
            </ul>
        </div>
        <div class="info-card reveal delay-1">
            <h3>What we do each day</h3>
            <p>Every patient gets care based on need, routine, and family instructions. We work with kindness and clear communication.</p>
            <a class="text-link" href="about.php">Learn more about Seneha Home Nursing Care</a>
        </div>
    </div>
</section>

<section class="section">
    <div class="container">
        <div class="section-heading reveal">
            <span class="eyebrow">Our promise</span>
            <h2>We care as if the patient were family.</h2>
        </div>
        <div class="promise-banner reveal">
            <div>
                <h3>Light blue and green theme</h3>
                <p>The website uses calm, fresh wellness colors to reflect cleanliness, comfort, and trust.</p>
            </div>
            <a class="btn btn-primary" href="gallery.php">See gallery</a>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>

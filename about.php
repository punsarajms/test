<?php
$pageTitle = 'About | Seneha Home Nursing Care';
$pageDescription = 'Learn about Seneha Home Nursing Care and the values behind our patient support, daily care, and home assistance services.';
$activePage = 'about';
require_once __DIR__ . '/includes/data_store.php';
$about = get_about_data();
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">About us</span>
        <h1><?php echo htmlspecialchars((string)$about['hero_title'], ENT_QUOTES, 'UTF-8'); ?></h1>
        <p><?php echo htmlspecialchars((string)$about['hero_text'], ENT_QUOTES, 'UTF-8'); ?></p>
    </div>
</section>

<section class="section">
    <div class="container split-grid">
        <div class="reveal">
            <img class="rounded-image" src="<?php echo htmlspecialchars((string)$about['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="Caregiver assisting a patient in a home room">
        </div>
        <div class="reveal delay-1">
            <span class="eyebrow">Our mission</span>
            <h2><?php echo htmlspecialchars((string)$about['mission_title'], ENT_QUOTES, 'UTF-8'); ?></h2>
            <p><?php echo htmlspecialchars((string)$about['mission_paragraph_1'], ENT_QUOTES, 'UTF-8'); ?></p>
            <p><?php echo htmlspecialchars((string)$about['mission_paragraph_2'], ENT_QUOTES, 'UTF-8'); ?></p>
        </div>
    </div>
</section>

<section class="section soft-panel">
    <div class="container">
        <div class="section-heading reveal">
            <span class="eyebrow">Core values</span>
            <h2>How we work</h2>
        </div>
        <div class="value-grid">
            <article class="value-card reveal">
                <h3>Respect</h3>
                <p>Every patient is treated with patience, privacy, and dignity.</p>
            </article>
            <article class="value-card reveal delay-1">
                <h3>Cleanliness</h3>
                <p>We keep personal care and patient surroundings neat and fresh.</p>
            </article>
            <article class="value-card reveal delay-2">
                <h3>Reliability</h3>
                <p>We aim to be dependable for daily routines and support needs.</p>
            </article>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>

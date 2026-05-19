<?php
$pageTitle = 'Gallery | Seneha Home Nursing Care';
$pageDescription = 'View the gallery for Seneha Home Nursing Care with clean, friendly visuals that represent patient support and home care.';
$activePage = 'gallery';
require_once __DIR__ . '/includes/data_store.php';
$gallery = get_gallery_data();
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Gallery</span>
        <h1>Visuals that reflect clean, calm home care.</h1>
        <p>These illustrations represent the patient support experience at Seneha Home Nursing Care.</p>
    </div>
</section>

<section class="section">
    <div class="container gallery-grid">
        <?php foreach ($gallery as $item): ?>
            <figure class="gallery-card reveal">
                <img src="<?php echo htmlspecialchars($item['src'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?>">
                <figcaption><?php echo htmlspecialchars($item['title'], ENT_QUOTES, 'UTF-8'); ?></figcaption>
            </figure>
        <?php endforeach; ?>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>

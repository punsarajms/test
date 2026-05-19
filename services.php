<?php
$pageTitle = 'Services | Seneha Home Nursing Care';
$pageDescription = 'Explore the full range of home nursing and patient care services offered by Seneha Home Nursing Care.';
$activePage = 'services';
require_once __DIR__ . '/includes/data_store.php';
$services = get_services_data();
include __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Services</span>
        <h1>Complete care services for patients at home.</h1>
        <p>From bathing to meal preparation, we cover the daily tasks that matter most for comfort and recovery.</p>
    </div>
</section>

<section class="section">
    <div class="container service-grid">
        <?php foreach ($services as $index => $service): ?>
            <article class="service-card reveal <?php echo $index % 3 === 1 ? 'delay-1' : ($index % 3 === 2 ? 'delay-2' : ''); ?>" style="position: relative;">
                <?php if (!empty($service['image'])): ?>
                    <div style="position: relative; width: 100%; height: 200px; overflow: hidden; border-radius: 8px; margin-bottom: 15px;">
                        <img src="<?php echo htmlspecialchars($service['image'], ENT_QUOTES, 'UTF-8'); ?>" alt="<?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?>" style="width: 100%; height: 100%; object-fit: cover;">
                        <span class="service-index" style="position: absolute; bottom: 8px; left: 8px; font-size: 14px; background: rgba(0, 0, 0, 0.6); color: white; padding: 4px 8px; border-radius: 3px;">0<?php echo $index + 1; ?></span>
                    </div>
                <?php else: ?>
                    <span class="service-index" style="font-size: 14px; display: inline-block; margin-bottom: 10px;">0<?php echo $index + 1; ?></span>
                <?php endif; ?>
                <h2><?php echo htmlspecialchars($service['title'], ENT_QUOTES, 'UTF-8'); ?></h2>
                <p><?php echo htmlspecialchars($service['text'], ENT_QUOTES, 'UTF-8'); ?></p>
            </article>
        <?php endforeach; ?>
    </div>
</section>

<section class="section soft-panel">
    <div class="container split-grid">
        <div class="reveal">
            <span class="eyebrow">Care plan</span>
            <h2>Flexible support based on patient needs.</h2>
            <p>We can assist with short visits, daily routines, or more complete home care arrangements depending on what your family needs.</p>
        </div>
        <div class="info-card reveal delay-1">
            <h3>Need custom support?</h3>
            <p>Contact us with your patient’s routine and care requirements. We will discuss a suitable plan.</p>
            <a class="btn btn-primary" href="contact.php">Request care</a>
        </div>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>

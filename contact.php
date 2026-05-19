<?php
$pageTitle = 'Contact | Seneha Home Nursing Care';
$pageDescription = 'Contact Seneha Home Nursing Care to discuss home nursing, patient hygiene, meal preparation, and daily patient support.';
$activePage = 'contact';
require_once __DIR__ . '/includes/data_store.php';

$successMessage = '';
$errorMessage = '';
$name = '';
$phone = '';
$message = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = trim($_POST['name'] ?? '');
    $phone = trim($_POST['phone'] ?? '');
    $message = trim($_POST['message'] ?? '');

    if ($name === '' || $phone === '' || $message === '') {
        $errorMessage = 'Please fill in your name, phone number, and care request.';
    } else {
        if (add_contact_record($name, $phone, $message)) {
            $successMessage = 'Thank you. Your request has been received. We will contact you soon.';
            $name = '';
            $phone = '';
            $message = '';
        } else {
            $errorMessage = 'Sorry, we could not save your request. Please try again.';
        }
    }
}

include __DIR__ . '/includes/header.php';
?>
<section class="page-hero">
    <div class="container">
        <span class="eyebrow">Contact</span>
        <h1>Talk to us about patient care at home.</h1>
        <p>Tell us what kind of support the patient needs, and we will discuss the right care arrangement.</p>
    </div>
</section>

<section class="section">
    <div class="container contact-grid">
        <div class="info-card reveal">
            <h2>Get in touch</h2>
            <p>Use the form to request home nursing support for medicine care, bathing, dressing, cooking, or general patient assistance.</p>
            <div class="contact-lines">
                <p><strong>Business name:</strong> Seneha Home Nursing Care</p>
                <p><strong>Service area:</strong> Western Province</p>
                <p><strong>Support:</strong> Daily nursing and personal care assistance</p>
            </div>
        </div>
        <form class="contact-form reveal delay-1" method="post" action="contact.php">
            <?php if ($successMessage !== ''): ?>
                <div class="alert success"><?php echo htmlspecialchars($successMessage, ENT_QUOTES, 'UTF-8'); ?></div>
            <?php endif; ?>
            <?php if ($errorMessage !== ''): ?>
                <div class="alert error"><?php echo htmlspecialchars($errorMessage, ENT_QUOTES, 'UTF-8'); ?></div>
            <?php endif; ?>
            <label>
                Full name
                <input type="text" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, 'UTF-8'); ?>" placeholder="Enter your name">
            </label>
            <label>
                Phone number
                <input type="text" name="phone" value="<?php echo htmlspecialchars($phone, ENT_QUOTES, 'UTF-8'); ?>" placeholder="Enter your phone number">
            </label>
            <label>
                Care request
                <textarea name="message" rows="6" placeholder="Tell us what the patient needs"><?php echo htmlspecialchars($message, ENT_QUOTES, 'UTF-8'); ?></textarea>
            </label>
            <button class="btn btn-primary" type="submit">Send request</button>
        </form>
    </div>
</section>
<?php include __DIR__ . '/includes/footer.php'; ?>

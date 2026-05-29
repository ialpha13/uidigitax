<?php
$rootPath = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/\\');
$baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . ($rootPath ? $rootPath : '') . '/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>uidigitax | Privacy Policy</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <base href="<?php echo $baseUrl; ?>">
    <link rel="stylesheet" href="assets/css/privacy-policy.css" />
    <link rel="stylesheet" href="assets/css/navbar.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="chat/whatsapp.css" />
</head>
<body>
<?php include __DIR__ . '/../includes/navbar.php'; ?>

<main class="page-shell legal-shell">
    <section class="page-hero legal-hero">
        <div class="page-hero__inner legal-hero__inner">
            <span class="page-pill">Privacy Policy</span>
            <h1>How UIDigitax collects, uses, and protects the information you share with us.</h1>
            <p>This Privacy Policy explains how we handle personal information submitted through our website, contact forms, and communication channels. By using the UIDigitax website, you agree to the practices described here.</p>
            <div class="page-actions">
                <a href="pages/contact.php" class="page-btn page-btn--primary">Contact UIDigitax</a>
                <a href="pages/terms-and-conditions.php" class="page-btn page-btn--ghost">View Terms</a>
            </div>
        </div>
    </section>

    <section class="page-section legal-summary">
        <div class="legal-summary__grid">
            <article class="legal-summary__card" data-legal-reveal>
                <span class="legal-summary__kicker">What We Collect</span>
                <p>Name, email address, phone number, and the project details you submit through our contact forms.</p>
            </article>
            <article class="legal-summary__card" data-legal-reveal>
                <span class="legal-summary__kicker">Why We Use It</span>
                <p>To respond to your inquiries, improve our services, and maintain communication related to your project or request.</p>
            </article>
            <article class="legal-summary__card" data-legal-reveal>
                <span class="legal-summary__kicker">Your Control</span>
                <p>You may contact us any time to ask about your data, request corrections, or ask for deletion where appropriate.</p>
            </article>
        </div>
    </section>

    <section class="page-section legal-content">
        <div class="legal-content__layout">
            <article class="legal-content__main">
                <section class="legal-block" data-legal-reveal>
                    <h2>Information We Collect</h2>
                    <p>UIDigitax may collect personal information when you contact us through forms, email, phone, or any other communication channel on our website. This may include your name, email address, phone number, and the details you choose to provide about your business or project.</p>
                    <p>We may also collect limited technical information such as browser details, device type, and general site usage data to help improve website functionality and performance.</p>
                </section>

                <section class="legal-block" data-legal-reveal>
                    <h2>How We Use Your Information</h2>
                    <p>We use the information you provide to respond to inquiries, discuss potential projects, deliver relevant services, and improve the overall quality of our communication and digital experience.</p>
                    <p>Your information may also be used for internal record keeping, service improvement, and website administration. UIDigitax does not sell your personal information.</p>
                </section>

                <section class="legal-block" data-legal-reveal>
                    <h2>How We Store and Protect Data</h2>
                    <p>We take reasonable steps to store information securely and limit access to those who need it for business and service purposes. While no online system can guarantee absolute security, UIDigitax works to protect your data against unauthorized access, misuse, or disclosure.</p>
                </section>

                <section class="legal-block" data-legal-reveal>
                    <h2>Third-Party Services</h2>
                    <p>Some technical processes such as hosting, form handling, analytics, or email delivery may involve third-party tools or services. Where such tools are used, we aim to rely on reputable providers and limit the information shared to what is reasonably necessary.</p>
                </section>

                <section class="legal-block" data-legal-reveal>
                    <h2>Your Rights</h2>
                    <p>You may contact UIDigitax to ask about the personal information we hold, request corrections, or request deletion where appropriate and legally permitted. To make such a request, contact us at <a href="mailto:contact@uidigitax.com">contact@uidigitax.com</a>.</p>
                </section>

                <section class="legal-block" data-legal-reveal>
                    <h2>Policy Updates</h2>
                    <p>UIDigitax may update this Privacy Policy from time to time to reflect changes in our business, services, or legal obligations. Any updates will be published on this page.</p>
                </section>
            </article>

            <aside class="legal-content__sidebar">
                <div class="legal-panel" data-legal-reveal>
                    <span class="page-pill">Quick Contact</span>
                    <h3>Questions about your information?</h3>
                    <p>If you need clarification about this Privacy Policy or want to make a request, reach out directly.</p>
                    <div class="legal-panel__stack">
                        <a href="mailto:contact@uidigitax.com">contact@uidigitax.com</a>
                        <a href="tel:+923169396919">+923169396919</a>
                    </div>
                </div>
                <div class="legal-panel legal-panel--soft" data-legal-reveal>
                    <span class="page-pill">Effective Scope</span>
                    <p>This policy applies to information collected through the UIDigitax website and direct communication related to our services.</p>
                </div>
            </aside>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
<script src="assets/js/navbar.js"></script>
<script src="assets/js/footer.js"></script>
<script src="assets/js/privacy-policy.js"></script>
<script src="chat/whatsapp.js"></script>
</body>
</html>

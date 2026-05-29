<?php
$rootPath = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/\\');
$baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . ($rootPath ? $rootPath : '') . '/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>uidigitax | Terms & Conditions</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <base href="<?php echo $baseUrl; ?>">
    <link rel="stylesheet" href="assets/css/terms-and-conditions.css" />
    <link rel="stylesheet" href="assets/css/navbar.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="chat/whatsapp.css" />
</head>
<body>
<?php include __DIR__ . '/../includes/navbar.php'; ?>

<main class="page-shell legal-shell">
    <section class="page-hero legal-hero">
        <div class="page-hero__inner legal-hero__inner">
            <span class="page-pill">Terms &amp; Conditions</span>
            <h1>The terms that govern how UIDigitax content, services, and website use are handled.</h1>
            <p>These Terms and Conditions outline the general rules for using the UIDigitax website and engaging with our services. By using this website, you agree to these terms.</p>
            <div class="page-actions">
                <a href="pages/contact.php" class="page-btn page-btn--primary">Contact UIDigitax</a>
                <a href="pages/privacy-policy.php" class="page-btn page-btn--ghost">View Privacy Policy</a>
            </div>
        </div>
    </section>

    <section class="page-section legal-summary">
        <div class="legal-summary__grid">
            <article class="legal-summary__card" data-legal-reveal>
                <span class="legal-summary__kicker">Website Use</span>
                <p>You may use this site for lawful purposes only and in a way that does not harm UIDigitax, its systems, or other users.</p>
            </article>
            <article class="legal-summary__card" data-legal-reveal>
                <span class="legal-summary__kicker">Service Scope</span>
                <p>Specific project terms, deliverables, and timelines are defined separately through client discussions, proposals, or agreements.</p>
            </article>
            <article class="legal-summary__card" data-legal-reveal>
                <span class="legal-summary__kicker">Content Rights</span>
                <p>Website text, visuals, branding, and original material remain protected and may not be reused without permission.</p>
            </article>
        </div>
    </section>

    <section class="page-section legal-content">
        <div class="legal-content__layout">
            <article class="legal-content__main">
                <section class="legal-block" data-legal-reveal>
                    <h2>Website Use</h2>
                    <p>The UIDigitax website is provided for general informational and business communication purposes. You agree to use this site lawfully and not to attempt unauthorized access, misuse, disruption, or harmful activity involving the website or its connected systems.</p>
                </section>

                <section class="legal-block" data-legal-reveal>
                    <h2>Intellectual Property</h2>
                    <p>Unless otherwise stated, the content on this website, including text, branding, design direction, visual layout, graphics, and original materials, belongs to UIDigitax or is used with appropriate rights. You may not copy, reproduce, republish, or distribute this material without prior permission.</p>
                </section>

                <section class="legal-block" data-legal-reveal>
                    <h2>Service Discussions and Agreements</h2>
                    <p>Any inquiry made through this website does not automatically create a formal client relationship. Project scope, pricing, timelines, revisions, and delivery terms are confirmed separately through direct communication, proposals, or written agreements.</p>
                </section>

                <section class="legal-block" data-legal-reveal>
                    <h2>Accuracy of Information</h2>
                    <p>UIDigitax aims to present clear and accurate information on this website. However, content may change over time and is provided without guarantees that every detail will always be complete, current, or error-free.</p>
                </section>

                <section class="legal-block" data-legal-reveal>
                    <h2>External Links and Third Parties</h2>
                    <p>This website may reference or connect to third-party tools, platforms, or websites. UIDigitax is not responsible for the content, policies, or practices of external sites beyond our direct control.</p>
                </section>

                <section class="legal-block" data-legal-reveal>
                    <h2>Limitation of Liability</h2>
                    <p>To the fullest extent permitted by law, UIDigitax is not liable for indirect, incidental, or consequential losses arising from use of this website or reliance on its content. Any service-related liability is governed separately by the specific agreement between UIDigitax and the client.</p>
                </section>

                <section class="legal-block" data-legal-reveal>
                    <h2>Changes to These Terms</h2>
                    <p>UIDigitax may update these Terms and Conditions from time to time to reflect business, service, or legal changes. Updated terms will be published on this page.</p>
                </section>
            </article>

            <aside class="legal-content__sidebar">
                <div class="legal-panel" data-legal-reveal>
                    <span class="page-pill">Need Clarification?</span>
                    <h3>We’re happy to explain our legal pages in plain language.</h3>
                    <p>If you have questions about these terms or how they apply to a project inquiry, contact us directly.</p>
                    <div class="legal-panel__stack">
                        <a href="mailto:contact@uidigitax.com">contact@uidigitax.com</a>
                        <a href="tel:+923169396919">+923169396919</a>
                    </div>
                </div>
                <div class="legal-panel legal-panel--soft" data-legal-reveal>
                    <span class="page-pill">General Note</span>
                    <p>These Terms apply to website use in general. Client-specific obligations and deliverables are defined in individual project agreements.</p>
                </div>
            </aside>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
<script src="assets/js/navbar.js"></script>
<script src="assets/js/footer.js"></script>
<script src="assets/js/terms-and-conditions.js"></script>
<script src="chat/whatsapp.js"></script>
</body>
</html>

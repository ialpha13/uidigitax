<?php
$rootPath = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/\\');
$baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . ($rootPath ? $rootPath : '') . '/';
$servicesPath = __DIR__ . '/../data/services.json';
$services = [];

if (is_file($servicesPath)) {
    $decoded = json_decode(file_get_contents($servicesPath), true);
    if (is_array($decoded)) {
        $services = $decoded;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>uidigitax | Services</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <base href="<?php echo $baseUrl; ?>">
    <link rel="stylesheet" href="assets/css/services.css" />
    <link rel="stylesheet" href="assets/css/navbar.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="chat/whatsapp.css" />
</head>
<body>

<?php include __DIR__ . '/../includes/navbar.php'; ?>

<main class="services-page">
    <section class="services-hero">
        <div class="services-hero__inner">
            <div class="services-hero__content">
                <span class="services-hero__eyebrow">uidigitax services</span>
                <h1>Services designed to shape stronger digital presence, sharper execution, and measurable brand growth.</h1>
                <p>Explore our core service areas below. Each one opens into its own portfolio page with supporting screenshots, showcase videos, process notes, and project-specific detail.</p>
                <div class="services-hero__actions">
                    <a href="pages/contact.php" class="services-hero__btn services-hero__btn--primary">Start a Project</a>
                    <a href="#servicesStack" class="services-hero__btn services-hero__btn--ghost">Explore Services</a>
                </div>
            </div>

            <div class="services-hero__visual" aria-hidden="true">
                <div class="services-orbit services-orbit--outer"></div>
                <div class="services-orbit services-orbit--middle"></div>
                <div class="services-orbit services-orbit--inner"></div>

                <div class="services-hero__center">
                    <strong><?php echo count($services); ?>+</strong>
                    <span>Core Services</span>
                </div>

                <?php foreach ($services as $index => $service): ?>
                    <?php
                    $orbitClasses = ['services-pill--outer', 'services-pill--middle', 'services-pill--inner'];
                    $orbitClass = $orbitClasses[$index % count($orbitClasses)];
                    ?>
                    <div class="services-pill-float <?php echo $orbitClass; ?>" style="--orbit-order: <?php echo $index; ?>;">
                        <span><?php echo htmlspecialchars($service['title'] ?? 'Service'); ?></span>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <section class="services-signal">
        <div class="services-signal__grid">
            <article class="services-signal__card">
                <span class="services-signal__eyebrow">Built for growth</span>
                <strong>Strategy + execution</strong>
                <p>We combine planning, design, development, and marketing support into one connected service system.</p>
            </article>
            <article class="services-signal__card">
                <span class="services-signal__eyebrow">Creative quality</span>
                <strong>Premium presentation</strong>
                <p>Every deliverable is shaped for brand consistency, clarity, and a stronger digital impression.</p>
            </article>
            <article class="services-signal__card">
                <span class="services-signal__eyebrow">Performance minded</span>
                <strong>Designed to convert</strong>
                <p>We focus on work that not only looks refined, but also supports measurable growth and engagement.</p>
            </article>
        </div>
    </section>

    <section class="services-stack" id="servicesStack" aria-label="Service list">
        <div class="services-section-heading">
            <span class="services-section-heading__pill">Core Capabilities</span>
            <h2>Explore what UIDigitax can build, manage, and grow for your brand.</h2>
        </div>
        <div class="services-stack__shell">
            <?php foreach ($services as $index => $service): ?>
                <?php
                $serviceUrl = 'portfolios/' . rawurlencode($service['slug'] ?? '') . '.php';
                ?>
                <article class="service-row" data-service-row>
                    <button class="service-row__toggle" type="button" aria-expanded="false">
                        <span class="service-row__index"><?php echo str_pad((string)($index + 1), 2, '0', STR_PAD_LEFT); ?></span>
                        <span class="service-row__main">
                            <span class="service-row__title"><?php echo htmlspecialchars($service['title'] ?? 'Service'); ?></span>
                            <?php if (!empty($service['tags']) && is_array($service['tags'])): ?>
                                <span class="service-row__tags">
                                    <?php foreach ($service['tags'] as $tagIndex => $tag): ?>
                                        <span><?php echo htmlspecialchars($tag); ?></span><?php if ($tagIndex < count($service['tags']) - 1): ?><i aria-hidden="true"></i><?php endif; ?>
                                    <?php endforeach; ?>
                                </span>
                            <?php endif; ?>
                        </span>
                    </button>

                    <div class="service-row__details">
                        <p><?php echo htmlspecialchars($service['description'] ?? ''); ?></p>
                        <div class="service-row__actions">
                            <a href="<?php echo htmlspecialchars($serviceUrl); ?>" class="service-row__btn">Explore Portfolio</a>
                            <a href="pages/contact.php" class="service-row__link">Discuss Services</a>
                        </div>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="services-marquee" aria-label="Service categories">
        <div class="services-marquee__track">
            <div class="services-marquee__inner">
                <?php for ($loop = 0; $loop < 2; $loop++): ?>
                    <?php foreach ($services as $service): ?>
                        <span><?php echo htmlspecialchars($service['title'] ?? 'Service'); ?></span>
                    <?php endforeach; ?>
                <?php endfor; ?>
            </div>
        </div>
    </section>

    <section class="services-process">
        <div class="services-section-heading">
            <span class="services-section-heading__pill">How We Deliver</span>
            <h2>A service experience shaped around clarity, collaboration, and consistent progress.</h2>
        </div>
        <div class="services-process__grid">
            <article class="services-process__card">
                <span class="services-process__index">01</span>
                <h3>Discover</h3>
                <p>We understand your brand, audience, goals, and digital gaps before recommending direction.</p>
            </article>
            <article class="services-process__card">
                <span class="services-process__index">02</span>
                <h3>Design the Direction</h3>
                <p>We shape the structure, visuals, messaging, and priorities that create stronger digital momentum.</p>
            </article>
            <article class="services-process__card">
                <span class="services-process__index">03</span>
                <h3>Build & Execute</h3>
                <p>From development to content, campaigns, and editing, we move ideas into polished outcomes.</p>
            </article>
            <article class="services-process__card">
                <span class="services-process__index">04</span>
                <h3>Refine & Grow</h3>
                <p>We review performance, improve weak points, and help your brand scale with more precision.</p>
            </article>
        </div>
    </section>

    <section class="services-proof">
        <div class="services-section-heading">
            <span class="services-section-heading__pill">Why Clients Work With Us</span>
            <h2>More than isolated deliverables. A digital partner focused on long-term brand value.</h2>
        </div>
        <div class="services-proof__grid">
            <article class="services-proof__feature">
                <h3>One connected ecosystem</h3>
                <p>Website development, SEO, design, content, social, and video work together instead of feeling fragmented.</p>
            </article>
            <article class="services-proof__feature">
                <h3>Creative plus commercial thinking</h3>
                <p>We balance visual quality with business goals so every output feels intentional and outcome-driven.</p>
            </article>
            <article class="services-proof__feature">
                <h3>Scalable service structure</h3>
                <p>Whether you need one focused service or a wider digital support system, the work is built to evolve with you.</p>
            </article>
        </div>
    </section>

    <section class="services-cta">
        <div class="services-cta__inner">
            <span class="services-section-heading__pill">Let's Build</span>
            <h2>Need a tailored mix of web, SEO, design, social, or content support?</h2>
            <p>UIDigitax can help you shape the right combination of services for your current growth stage, team structure, and brand goals.</p>
            <div class="services-cta__actions">
                <a href="pages/contact.php" class="services-hero__btn services-hero__btn--primary">Discuss Your Brand</a>
                <a href="mailto:contact@uidigitax.com" class="services-hero__btn services-hero__btn--ghost">Email UIDigitax</a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>

<script src="assets/js/navbar.js"></script>
<script src="assets/js/footer.js"></script>
<script src="assets/js/services.js"></script>
<script src="chat/whatsapp.js"></script>
</body>
</html>

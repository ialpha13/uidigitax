<?php
$rootPath = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/\\');
$baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . ($rootPath ? $rootPath : '') . '/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>uidigitax | About</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@600;700;800&family=DM+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <base href="<?php echo $baseUrl; ?>">
    <link rel="stylesheet" href="assets/css/about.css" />
    <link rel="stylesheet" href="assets/css/navbar.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="chat/whatsapp.css" />
</head>
<body>
<?php include __DIR__ . '/../includes/navbar.php'; ?>

<main class="renew-page">
    <section class="renew-hero" aria-labelledby="about-title" data-about-reveal>
        <div class="renew-hero__copy" data-about-reveal>
            <p class="renew-hero__kicker">UIDigitax Studio</p>
            <h1 id="about-title">A digital agency built for clear growth.</h1>
            <p>We help brands connect strategy, websites, search, content, design, and campaigns into one focused digital presence.</p>
            <div class="renew-hero__actions">
                <a href="pages/contact.php" class="renew-hero__button renew-hero__button--primary">Start a Conversation</a>
                <a href="pages/portfolio.php" class="renew-hero__button renew-hero__button--ghost">View Portfolio</a>
            </div>
        </div>

        <div class="leaf-scene" aria-hidden="true" data-about-reveal>
            <span class="leaf leaf--wide leaf--one"></span>
            <span class="leaf leaf--dark leaf--two"></span>
            <span class="leaf leaf--thin leaf--three"></span>
            <span class="leaf leaf--light leaf--four"></span>
            <span class="leaf leaf--paper leaf--five"></span>
            <span class="leaf leaf--sage leaf--six"></span>
        </div>
    </section>

    <section class="renew-service-band" aria-label="About highlights" data-about-reveal>
        <article class="renew-mini-card" data-about-reveal>
            <span class="renew-mini-card__icon renew-mini-card__icon--target"></span>
            <h2>Clarity</h2>
            <p>Sharper direction before design, development, content, or campaigns begin.</p>
        </article>
        <article class="renew-mini-card" data-about-reveal>
            <span class="renew-mini-card__icon renew-mini-card__icon--build"></span>
            <h2>Systems</h2>
            <p>Connected digital foundations that make each brand touchpoint easier to scale.</p>
        </article>
        <article class="renew-mini-card" data-about-reveal>
            <span class="renew-mini-card__icon renew-mini-card__icon--spark"></span>
            <h2>Creative</h2>
            <p>Visual language, motion, and content shaped around memorable execution.</p>
        </article>
        <article class="renew-mini-card" data-about-reveal>
            <span class="renew-mini-card__icon renew-mini-card__icon--growth"></span>
            <h2>Performance</h2>
            <p>Search, marketing, and refinement that keep growth visible after launch.</p>
        </article>
    </section>

    <section class="renew-story" aria-labelledby="story-title">
        <div class="renew-story__copy" data-about-reveal>
            <p>Who We Are</p>
            <h2 id="story-title">We turn scattered digital activity into one clear brand system.</h2>
        </div>
        <div class="renew-story__text" data-about-reveal>
            <p>UIDigitax works with ambitious brands that need more than isolated posts, pages, or campaigns. We connect strategy, design, development, search, content, and marketing so every digital touchpoint supports the same direction.</p>
            <p>Our work is built around clarity first. Once the brand, audience, and goals are understood, execution becomes sharper, faster, and easier to measure.</p>
        </div>
    </section>

    <section class="renew-values" aria-label="Mission vision and values">
        <article class="renew-value-card" data-about-reveal>
            <span>Mission</span>
            <h2>Build digital systems that help brands grow with confidence.</h2>
            <p>We create the structure, visuals, content, and campaigns needed to make a brand feel focused online.</p>
        </article>
        <article class="renew-value-card" data-about-reveal>
            <span>Vision</span>
            <h2>Make premium digital execution practical and accessible.</h2>
            <p>Our goal is to help growing businesses move with the polish and discipline of larger digital teams.</p>
        </article>
        <article class="renew-value-card" data-about-reveal>
            <span>Values</span>
            <h2>Clarity, consistency, creativity, and measurable momentum.</h2>
            <p>Every decision should make the brand easier to understand, trust, remember, and choose.</p>
        </article>
    </section>

    <section class="renew-garden" aria-label="UIDigitax strengths">
        <div class="renew-section-heading" data-about-reveal>
            <p>What We Do</p>
            <h2>Creative execution shaped around measurable digital progress.</h2>
        </div>

        <div class="renew-tile-grid">
            <article class="renew-tile renew-tile--green" data-about-reveal>
                <span class="renew-tile__mark renew-tile__mark--flower"></span>
                <h2>Brand Strategy</h2>
                <p>Positioning, planning, and priorities arranged into a clear digital path.</p>
            </article>

            <article class="renew-tile renew-tile--deep" data-about-reveal>
                <span class="renew-tile__mark renew-tile__mark--drop"></span>
                <h2>Websites</h2>
                <p>Premium pages built for trust, speed, conversion, and long-term upkeep.</p>
            </article>

            <article class="renew-tile renew-tile--copper" data-about-reveal>
                <span class="renew-tile__mark renew-tile__mark--leaf"></span>
                <h2>Visual Design</h2>
                <p>Clean brand assets and campaign visuals with a consistent design voice.</p>
            </article>

            <article class="renew-tile renew-tile--photo" data-about-reveal>
                <span class="renew-tile__mark renew-tile__mark--play"></span>
                <h2>Content Growth</h2>
                <p>Social, video, and editorial direction made for steady audience momentum.</p>
            </article>

            <article class="renew-tile renew-tile--moss" data-about-reveal>
                <span class="renew-tile__mark renew-tile__mark--cotton"></span>
                <h2>Search Focus</h2>
                <p>SEO structure and content signals that help the right people find you.</p>
            </article>

            <article class="renew-tile renew-tile--sand" data-about-reveal>
                <span class="renew-tile__mark renew-tile__mark--stack"></span>
                <h2>Digital Marketing</h2>
                <p>Campaigns, funnels, and reporting that turn attention into action.</p>
            </article>
        </div>
    </section>

    <section class="renew-proof" aria-labelledby="proof-title">
        <div class="renew-section-heading" data-about-reveal>
            <p>Why Choose Us</p>
            <h2 id="proof-title">A focused partner for brands that want cleaner execution and stronger direction.</h2>
        </div>

        <div class="renew-proof__grid">
            <article data-about-reveal>
                <span>01</span>
                <h3>Strategy before execution</h3>
                <p>We clarify goals, audience, message, and priorities before producing digital assets.</p>
            </article>
            <article data-about-reveal>
                <span>02</span>
                <h3>One connected team</h3>
                <p>Web, SEO, design, content, and marketing decisions stay aligned instead of feeling scattered.</p>
            </article>
            <article data-about-reveal>
                <span>03</span>
                <h3>Built for consistency</h3>
                <p>Every page, campaign, and content piece supports the same brand language and growth path.</p>
            </article>
            <article data-about-reveal>
                <span>04</span>
                <h3>Performance-minded delivery</h3>
                <p>We care about how the work functions after launch, not only how it looks on delivery day.</p>
            </article>
        </div>
    </section>

    <section class="renew-cred" aria-label="UIDigitax credibility">
        <article data-about-reveal>
            <strong>6</strong>
            <span>Core digital services</span>
        </article>
        <article data-about-reveal>
            <strong>360</strong>
            <span>Brand presence coverage</span>
        </article>
        <article data-about-reveal>
            <strong>1</strong>
            <span>Connected growth partner</span>
        </article>
        <article data-about-reveal>
            <strong>Always</strong>
            <span>Strategy-led execution</span>
        </article>
    </section>

    <section class="renew-team" aria-labelledby="team-title">
        <div class="renew-team__heading" data-about-reveal>
            <p>Our Team</p>
            <h2 id="team-title">Strategy, design, content, and growth working together.</h2>
        </div>

        <div class="renew-team__grid">
            <article class="renew-team-card renew-team-card--strategy" data-about-reveal>
                <div class="renew-team-card__media">
                    <span>Strategy</span>
                </div>
                <div class="renew-team-card__body">
                    <p>Founder & Strategy Lead</p>
                    <h3>Ali Raza</h3>
                </div>
            </article>

            <article class="renew-team-card renew-team-card--design" data-about-reveal>
                <div class="renew-team-card__media">
                    <span>Design</span>
                </div>
                <div class="renew-team-card__body">
                    <p>Creative Design Director</p>
                    <h3>Sarah Khan</h3>
                </div>
            </article>

            <article class="renew-team-card renew-team-card--growth" data-about-reveal>
                <div class="renew-team-card__media">
                    <span>Growth</span>
                </div>
                <div class="renew-team-card__body">
                    <p>SEO & Marketing Specialist</p>
                    <h3>Usman Javed</h3>
                </div>
            </article>

            <article class="renew-team-card renew-team-card--content" data-about-reveal>
                <div class="renew-team-card__media">
                    <span>Content</span>
                </div>
                <div class="renew-team-card__body">
                    <p>Content & Video Producer</p>
                    <h3>Maham Ahmed</h3>
                </div>
            </article>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
<script src="assets/js/navbar.js"></script>
<script src="assets/js/footer.js"></script>
<script src="assets/js/about.js"></script>
<script src="chat/whatsapp.js"></script>
</body>
</html>

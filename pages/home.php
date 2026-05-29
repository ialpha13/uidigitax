<?php
$rootPath = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/\\');
$baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . ($rootPath ? $rootPath : '') . '/';
$floating_tags = [
    ['label' => 'Market Strategy', 'class' => 'tag--tl'],
    ['label' => 'Product Positioning', 'class' => 'tag--tr'],
    ['label' => 'Optimize', 'class' => 'tag--ml'],
    ['label' => 'Innovation', 'class' => 'tag--mr'],
    ['label' => 'Growth Analytics', 'class' => 'tag--bc'],
];
$logos = ['CloudWatch', 'Boltshift', 'Epicurious', 'Sisyphus', 'Nietzsche', 'Quotient', 'Capsule'];
$blogsPath = __DIR__ . '/../data/blogs.json';
$featuredBlogs = [];
if (is_file($blogsPath)) {
    $decodedBlogs = json_decode(file_get_contents($blogsPath), true);
    if (is_array($decodedBlogs)) {
        $featuredBlogs = array_slice($decodedBlogs, 0, 3);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>uidigitax | Digital Agency for Growth-Driven Brands</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <base href="<?php echo $baseUrl; ?>">
    <link rel="stylesheet" href="assets/css/home.css" />
    <link rel="stylesheet" href="assets/css/navbar.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="chat/whatsapp.css" />
</head>
<body>

<?php include __DIR__ . '/../includes/navbar.php'; ?>

<section class="hero" id="hero">
    <div class="hero__bg">
        <div class="hero__vignette"></div>
        <div class="hero__grain"></div>
        <div class="hero__image-wrap">
            <div class="hero__portrait"></div>
            <div class="hero__tags">
                <?php foreach ($floating_tags as $tag): ?>
                    <div class="tag tag--floating <?php echo $tag['class']; ?>">
                        <?php echo $tag['label']; ?>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <div class="hero__content">
        <span class="hero__eyebrow">Growth strategy, design, and execution</span>
        <h1 class="hero__heading" data-text="A Consulting Partner for Startups Ready to Scale.">
            <span class="hero__heading-line">
                <span class="hero__typewriter" id="heroTypewriter"></span>
                <span class="hero__caret" aria-hidden="true"></span>
            </span>
        </h1>
        <p class="hero__sub">
            From strategic planning to digital transformation, we help growing companies.
        </p>
        <div class="hero__cta">
            <a href="#" class="btn btn--primary">Book Consultation</a>
            <a href="pages/services.php" class="btn btn--ghost">View Services</a>
        </div>
    </div>
</section>

<section class="about" id="about">
    <div class="about__inner">
        <div class="about__label">
            <span class="pill">About uidigitax</span>
        </div>
        <div class="about__body">
            <h2 class="about__heading">
                UIDigitax is a forward-thinking digital agency built for brands that aim higher.
                We combine strategy,
                <span class="highlight">design and technology</span>
                to craft digital experiences that elevate brands, engage audiences, and drive growth.
            </h2>
        </div>
    </div>
    <div class="about__badge">
        <span class="badge">
            <span class="badge__stars">Growth Focused</span>
            <span class="badge__text">Precision, creativity, innovation, and measurable digital results</span>
        </span>
    </div>
</section>

<section class="workflow-band">
    <div class="workflow-band__visual">
        <div class="workflow-band__content">
            <span class="pill">How We Work</span>
            <h2>The System That Drives Growth.</h2>
            <p>A structured approach to uncover brand opportunities, shape digital direction, and build experiences that perform.</p>
        </div>
    </div>
    <div class="workflow-band__panel">
        <span class="workflow-band__eyebrow">01 - 06</span>
        <h3>Decode the Business</h3>
        <p>We dive into your brand, market, audience, and digital presence to uncover what is limiting momentum and where growth can accelerate.</p>
        <div class="workflow-band__rings">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
</section>

<section class="insight-strip">
    <div class="insight-strip__top">
        <span class="insight-strip__meta">4.9 Trusted by growing businesses</span>
    </div>
    <div class="insight-strip__rail">
        <article class="insight-strip__orb insight-strip__orb--spark">
            <span class="insight-strip__spark"></span>
        </article>
        <article class="insight-strip__story">
            <p>We help ambitious brands build stronger digital ecosystems through strategy, design, marketing, and technology-led execution.</p>
            <a href="pages/services.php" class="insight-strip__arrow" aria-label="Explore services">+</a>
        </article>
        <article class="insight-strip__orb insight-strip__orb--stat">
            <strong>6+</strong>
            <span>Years Building Digital Growth</span>
        </article>
    </div>
</section>

<section class="showcase">
    <div class="showcase__header">
        <div>
            <span class="pill">Services</span>
            <h2>Modernize How Your Brand Shows Up.</h2>
        </div>
        <div class="showcase__aside">
            <p>In a fast-moving digital world, visibility alone is not enough. UIDigitax helps brands stand out with sharper creative direction, stronger execution, and performance-driven digital strategy.</p>
            <a href="pages/services.php" class="btn btn--ghost">View Services</a>
        </div>
    </div>
    <div class="showcase__grid">
        <article class="showcase-card">
            <div class="showcase-card__media showcase-card__media--ops">
                <div class="showcase-card__metric">SEO <span>visibility and performance strategy</span></div>
            </div>
            <h3>Strategy &amp; Operations</h3>
            <p>We align brand goals, audience insight, and digital planning to create a foundation built for long-term growth.</p>
        </article>
        <article class="showcase-card">
            <div class="showcase-card__media showcase-card__media--digital">
                <div class="showcase-card__stack">
                    <span>Website Development</span>
                    <span>Creative Design Systems</span>
                    <span>Social Media Execution</span>
                </div>
            </div>
            <h3>Digital Transformation</h3>
            <p>From websites to visual identity and campaign assets, we turn ideas into polished digital experiences that feel intentional.</p>
        </article>
        <article class="showcase-card">
            <div class="showcase-card__media showcase-card__media--product">
                <div class="showcase-card__metric">360° <span>marketing and content support</span></div>
            </div>
            <h3>Product &amp; Innovation</h3>
            <p>We blend SEO, digital marketing, social media management, and video editing to keep your brand relevant and growing.</p>
        </article>
    </div>
</section>

<?php if (!empty($featuredBlogs)): ?>
<section class="home-journal">
    <div class="home-journal__header">
        <div>
            <span class="pill">Journal</span>
            <h2>Ideas, strategy, and sharper digital thinking for brands building momentum.</h2>
        </div>
        <div class="home-journal__aside">
            <p>Explore practical insights from UIDigitax across websites, SEO, content systems, creative direction, and digital growth strategy.</p>
            <a href="pages/blog.php" class="btn btn--ghost">Read All Articles</a>
        </div>
    </div>
    <div class="home-journal__layout">
        <?php $primaryBlog = $featuredBlogs[0]; ?>
        <article class="home-journal__featured">
            <a href="blogs/<?php echo rawurlencode($primaryBlog['slug'] ?? ''); ?>.php" class="home-journal__featured-link">
                <div class="home-journal__featured-media" style="background-image:
                    linear-gradient(180deg, rgba(10, 14, 11, 0.06) 0%, rgba(10, 14, 11, 0.74) 100%),
                    url('<?php echo htmlspecialchars($primaryBlog['hero_image'] ?? 'assets/images/hero.png'); ?>');">
                    <div class="home-journal__featured-overlay">
                        <div class="home-journal__meta">
                            <span><?php echo htmlspecialchars($primaryBlog['category'] ?? 'Blog'); ?></span>
                            <span><?php echo htmlspecialchars($primaryBlog['read_time'] ?? ''); ?></span>
                        </div>
                        <h3><?php echo htmlspecialchars($primaryBlog['title'] ?? 'Featured Article'); ?></h3>
                        <p><?php echo htmlspecialchars($primaryBlog['excerpt'] ?? ''); ?></p>
                        <span class="home-journal__cta">Read Article</span>
                    </div>
                </div>
            </a>
        </article>
        <div class="home-journal__stack">
            <?php foreach (array_slice($featuredBlogs, 1) as $post): ?>
                <article class="home-journal__card">
                    <a href="blogs/<?php echo rawurlencode($post['slug'] ?? ''); ?>.php" class="home-journal__card-link">
                        <div class="home-journal__card-media" style="background-image:
                            linear-gradient(180deg, rgba(10, 14, 11, 0.08) 0%, rgba(10, 14, 11, 0.68) 100%),
                            url('<?php echo htmlspecialchars($post['hero_image'] ?? 'assets/images/hero.png'); ?>');"></div>
                        <div class="home-journal__card-body">
                            <div class="home-journal__meta">
                                <span><?php echo htmlspecialchars($post['category'] ?? 'Blog'); ?></span>
                                <span><?php echo htmlspecialchars($post['date'] ?? ''); ?></span>
                            </div>
                            <h3><?php echo htmlspecialchars($post['title'] ?? 'Article'); ?></h3>
                            <p><?php echo htmlspecialchars($post['excerpt'] ?? ''); ?></p>
                            <span class="home-journal__cta">Open Insight</span>
                        </div>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<?php endif; ?>

<section class="testimonials-wall">
    <div class="testimonials-wall__header">
        <span class="pill">Testimonials</span>
        <h2>Built With Ambitious Brands. Proven Through Results.</h2>
    </div>
    <div class="testimonials-wall__grid">
        <article class="quote-card">
            <p>UIDigitax helped us rethink our digital presence from the ground up. The clarity in strategy and execution gave our brand a much stronger direction.</p>
            <div class="quote-card__person">
                <strong>Samantha Lee</strong>
                <span>Brand Lead, Tech Company</span>
            </div>
        </article>
        <article class="quote-card quote-card--featured">
            <p>We came in with ideas but no structure. Their team translated vision into a clean website, sharper branding, and marketing that actually moved results.</p>
            <div class="quote-card__person">
                <strong>Ardi Pratama</strong>
                <span>Founder, SaaS Platform</span>
            </div>
        </article>
        <article class="quote-card">
            <p>Working with them felt less like hiring a vendor and more like bringing in a strategic partner. They understood our audience and stayed involved through every detail.</p>
            <div class="quote-card__person">
                <strong>Michael Tan</strong>
                <span>Marketplace Platform</span>
            </div>
        </article>
        <article class="quote-card">
            <p>They simplified our content, creative workflow, and campaign direction without losing quality. The brand feels more refined and much more consistent now.</p>
            <div class="quote-card__person">
                <strong>Andreas Gunawan</strong>
                <span>Operations Lead</span>
            </div>
        </article>
    </div>
</section>

<section class="plans" id="services">
    <div class="plans__header">
        <h2>Digital services built for brands that want to grow with clarity.</h2>
    </div>
    <div class="plans__cards">
        <article class="plan-card">
            <span class="plan-card__label">Website Development</span>
            <h3>Visually refined, user-focused websites designed to strengthen your brand and convert attention into action.</h3>
            <div class="plan-card__price"><span>Fast</span> delivery</div>
            <ul class="plan-card__list">
                <li>Custom website design and development</li>
                <li>Landing pages built for conversion</li>
                <li>Performance-focused user experience</li>
            </ul>
            <a href="mailto:contact@uidigitax.com" class="btn btn--ghost plan-card__btn">Get Started</a>
        </article>
        <article class="plan-card plan-card--featured">
            <span class="plan-card__label">Digital Marketing</span>
            <h3>Data-driven campaigns, SEO, and social media management designed to increase reach, engagement, and measurable growth.</h3>
            <div class="plan-card__price"><span>Smart</span> growth</div>
            <ul class="plan-card__list">
                <li>Search engine optimization strategy</li>
                <li>Social media management and planning</li>
                <li>Campaign execution with clear reporting</li>
                <li>Audience-focused digital promotion</li>
            </ul>
            <a href="mailto:contact@uidigitax.com" class="btn btn--primary plan-card__btn">Get Started</a>
        </article>
        <article class="plan-card">
            <span class="plan-card__label">Creative Content</span>
            <h3>Creative design and video editing that give your brand a more polished, memorable, and modern digital identity.</h3>
            <div class="plan-card__price"><span>Creative</span> impact</div>
            <ul class="plan-card__list">
                <li>Brand visuals and marketing creatives</li>
                <li>Video editing for digital campaigns</li>
                <li>Design systems for consistency</li>
                <li>Content tailored for modern platforms</li>
            </ul>
            <a href="tel:+923169396919" class="btn btn--ghost plan-card__btn">Call Us</a>
        </article>
    </div>
</section>

<section class="scale-cta" id="portfolio">
    <div class="scale-cta__inner">
        <h2>Ready to build a stronger digital presence?</h2>
        <p>From strategy and design to marketing and execution, UIDigitax helps brands turn ideas into measurable digital growth.</p>
        <a href="mailto:contact@uidigitax.com" class="btn btn--primary">Start a Conversation</a>
    </div>
</section>

<?php include __DIR__ . '/../includes/footer.php'; ?>

<script src="assets/js/home.js"></script>
<script src="assets/js/navbar.js"></script>
<script src="assets/js/footer.js"></script>
<script src="chat/whatsapp.js"></script>
</body>
</html>

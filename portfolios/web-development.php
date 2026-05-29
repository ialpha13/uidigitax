<?php
$rootPath = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/\\');
$baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . ($rootPath ? $rootPath : '') . '/';

$projects = [
    [
        'name' => 'Pak West International',
        'type' => 'PHP Product & Category Website',
        'url' => 'pakwestinternational.com',
        'live_url' => 'https://pakwestinternational.com',
        'image' => 'assets/images/hero.png',
        'mobile' => 'assets/images/hero2.png',
        'summary' => 'A modular PHP website for product and category presentation, using reusable components and JSON-driven content across key business pages.',
        'tags' => ['PHP', 'JSON-driven', 'Responsive'],
        'video' => 'Live homepage walkthrough',
    ],
    [
        'name' => 'The Grantship',
        'type' => 'Grant Support & Resources Website',
        'url' => 'thegrantship.com',
        'live_url' => 'https://thegrantship.com',
        'image' => 'assets/images/hero2.png',
        'mobile' => 'assets/images/hero3.jpeg',
        'summary' => 'A complete grant-focused website with service pages, resources, blog, downloads, and contact/newsletter workflows for inquiry capture.',
        'tags' => ['Grant Services', 'Resources', 'Lead Capture'],
        'video' => 'Live page flow preview',
    ],
    [
        'name' => 'The Saltship',
        'type' => 'PHP Website Scaffold',
        'url' => 'thesaltship.com',
        'live_url' => 'https://thesaltship.com',
        'image' => 'assets/images/hero3.jpeg',
        'mobile' => 'assets/images/hero.png',
        'summary' => 'A structured PHP website foundation with routed pages, reusable includes/components, and data-driven navigation, products, and categories.',
        'tags' => ['PHP', 'Component-based', 'Data-driven'],
        'video' => 'Live reading journey preview',
    ],
    [
        'name' => 'The Blogship',
        'type' => 'Cybersecurity Blog & Portfolio',
        'url' => 'theblogship.com',
        'live_url' => 'https://theblogship.com',
        'image' => 'assets/images/blogs/DigitalBrandMoment.png',
        'mobile' => 'assets/images/hero2.png',
        'summary' => 'A personal blog and portfolio platform focused on networking, routing protocols, and cybersecurity content with category-driven article structure.',
        'tags' => ['Cybersecurity', 'Blog', 'Portfolio'],
        'video' => 'Live editorial preview',
    ],
];

$activeProject = $projects[0];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>uidigitax | Web Development Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <base href="<?php echo $baseUrl; ?>">
    <link rel="stylesheet" href="assets/css/portfolios/web-development.css" />
    <link rel="stylesheet" href="assets/css/navbar.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="chat/whatsapp.css" />
</head>
<body>
<?php include dirname(__DIR__) . '/includes/navbar.php'; ?>

<main class="wd-page">
    <section class="wd-hero" data-wd-reveal>
        <div class="wd-hero__copy">
            <span class="wd-pill">Web Development Portfolio</span>
            <h1>Live websites built for clarity, speed, and growth.</h1>
            <p>Explore real client websites with responsive previews, conversion-focused structure, and clean modern presentation.</p>
            <div class="wd-actions">
                <a href="pages/contact.php" class="wd-btn wd-btn--primary">Start a Website Project</a>
                <a href="#websiteBrowser" class="wd-btn wd-btn--ghost">Explore Websites</a>
            </div>
        </div>

        <div class="wd-hero__visual" aria-hidden="true">
            <div class="wd-browser wd-browser--hero">
                <div class="wd-browser__bar">
                    <span></span><span></span><span></span>
                    <strong><?php echo htmlspecialchars($activeProject['url']); ?></strong>
                </div>
                <div class="wd-browser__screen" style="background-image: linear-gradient(180deg, rgba(8,10,8,0.02), rgba(8,10,8,0.42)), url('<?php echo htmlspecialchars($activeProject['image']); ?>');"></div>
            </div>
            <div class="wd-phone wd-phone--hero">
                <div style="background-image: linear-gradient(180deg, rgba(8,10,8,0.05), rgba(8,10,8,0.5)), url('<?php echo htmlspecialchars($activeProject['mobile']); ?>');"></div>
            </div>
        </div>
    </section>

    <section class="wd-featured" data-wd-reveal>
        <div class="wd-section-heading">
            <span class="wd-pill">Featured Build</span>
            <h2><?php echo htmlspecialchars($activeProject['name']); ?></h2>
            <p><?php echo htmlspecialchars($activeProject['summary']); ?></p>
        </div>
        <div class="wd-featured__stage">
            <div class="wd-browser">
                <div class="wd-browser__bar">
                    <span></span><span></span><span></span>
                    <strong><?php echo htmlspecialchars($activeProject['url']); ?></strong>
                </div>
                <div class="wd-browser__screen" style="background-image: linear-gradient(180deg, rgba(8,10,8,0.01), rgba(8,10,8,0.48)), url('<?php echo htmlspecialchars($activeProject['image']); ?>');">
                    <button class="wd-play" type="button" aria-label="Play <?php echo htmlspecialchars($activeProject['video']); ?>"></button>
                </div>
            </div>
            <div class="wd-phone">
                <div style="background-image: linear-gradient(180deg, rgba(8,10,8,0.02), rgba(8,10,8,0.5)), url('<?php echo htmlspecialchars($activeProject['mobile']); ?>');"></div>
            </div>
        </div>
    </section>

    <section class="wd-browser-section" id="websiteBrowser" data-wd-reveal>
        <div class="wd-section-heading">
            <span class="wd-pill">Project Browser</span>
            <h2>Four live websites in one interactive preview.</h2>
        </div>

        <div class="wd-browser-layout">
            <div class="wd-project-list" role="tablist" aria-label="Website projects">
                <?php foreach ($projects as $index => $project): ?>
                    <button class="wd-project-tab<?php echo $index === 0 ? ' is-active' : ''; ?>" type="button" role="tab" aria-selected="<?php echo $index === 0 ? 'true' : 'false'; ?>" data-wd-project='<?php echo htmlspecialchars(json_encode($project), ENT_QUOTES); ?>'>
                        <span><?php echo str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT); ?></span>
                        <strong><?php echo htmlspecialchars($project['name']); ?></strong>
                        <em><?php echo htmlspecialchars($project['type']); ?></em>
                    </button>
                <?php endforeach; ?>
            </div>

            <div class="wd-live-preview">
                <div class="wd-browser">
                    <div class="wd-browser__bar">
                        <span></span><span></span><span></span>
                        <strong id="wdPreviewUrl"><?php echo htmlspecialchars($activeProject['url']); ?></strong>
                    </div>
                    <div class="wd-browser__screen" id="wdPreviewImage" style="background-image: linear-gradient(180deg, rgba(8,10,8,0.01), rgba(8,10,8,0.48)), url('<?php echo htmlspecialchars($activeProject['image']); ?>');">
                        <button class="wd-play" type="button" id="wdPreviewPlay" aria-label="Play <?php echo htmlspecialchars($activeProject['video']); ?>"></button>
                    </div>
                </div>
                <div class="wd-preview-copy">
                    <span id="wdPreviewType"><?php echo htmlspecialchars($activeProject['type']); ?></span>
                    <h3 id="wdPreviewName"><?php echo htmlspecialchars($activeProject['name']); ?></h3>
                    <p id="wdPreviewSummary"><?php echo htmlspecialchars($activeProject['summary']); ?></p>
                    <div class="wd-tag-row" id="wdPreviewTags">
                        <?php foreach ($activeProject['tags'] as $tag): ?>
                            <span><?php echo htmlspecialchars($tag); ?></span>
                        <?php endforeach; ?>
                    </div>
                    <div class="wd-actions">
                        <a id="wdPreviewVisit" href="<?php echo htmlspecialchars($activeProject['live_url']); ?>" class="wd-btn wd-btn--primary" target="_blank" rel="noopener noreferrer">Visit Live Site</a>
                    </div>
                </div>
                <div class="wd-phone wd-phone--floating">
                    <div id="wdPreviewMobile" style="background-image: linear-gradient(180deg, rgba(8,10,8,0.02), rgba(8,10,8,0.5)), url('<?php echo htmlspecialchars($activeProject['mobile']); ?>');"></div>
                </div>
            </div>
        </div>
    </section>

    <section class="wd-video-grid-section" data-wd-reveal>
        <div class="wd-section-heading">
            <span class="wd-pill">Walkthroughs</span>
            <h2>Video-style previews for website flow, mobile behavior, and page rhythm.</h2>
        </div>
        <div class="wd-video-grid">
            <?php foreach (array_slice($projects, 0, 3) as $project): ?>
                <article class="wd-video-card" data-wd-reveal>
                    <div class="wd-video-card__visual" style="background-image: linear-gradient(180deg, rgba(8,10,8,0.02), rgba(8,10,8,0.68)), url('<?php echo htmlspecialchars($project['image']); ?>');">
                        <button class="wd-play" type="button" aria-label="Play <?php echo htmlspecialchars($project['video']); ?>"></button>
                    </div>
                    <div>
                        <span><?php echo htmlspecialchars($project['type']); ?></span>
                        <h3><?php echo htmlspecialchars($project['video']); ?></h3>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="wd-device-wall" data-wd-reveal>
        <div class="wd-section-heading">
            <span class="wd-pill">Responsive Showcase</span>
            <h2>Desktop and mobile presentations designed to feel consistent everywhere.</h2>
        </div>
        <div class="wd-device-wall__grid">
            <?php foreach ($projects as $project): ?>
                <article class="wd-device-card" data-wd-reveal>
                    <div class="wd-device-card__desktop" style="background-image: linear-gradient(180deg, rgba(8,10,8,0.02), rgba(8,10,8,0.48)), url('<?php echo htmlspecialchars($project['image']); ?>');"></div>
                    <div class="wd-device-card__phone" style="background-image: linear-gradient(180deg, rgba(8,10,8,0.02), rgba(8,10,8,0.5)), url('<?php echo htmlspecialchars($project['mobile']); ?>');"></div>
                    <h3><?php echo htmlspecialchars($project['name']); ?></h3>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="wd-deliverables" data-wd-reveal>
        <div class="wd-section-heading">
            <span class="wd-pill">What We Deliver</span>
            <h2>Everything needed to make a website look premium and work clearly.</h2>
        </div>
        <div class="wd-deliverables__grid">
            <span>UI/UX design</span>
            <span>Responsive development</span>
            <span>Landing pages</span>
            <span>Content structure</span>
            <span>Speed optimization</span>
            <span>Contact forms</span>
            <span>SEO-ready setup</span>
            <span>Launch support</span>
        </div>
    </section>

    <section class="wd-cta" data-wd-reveal>
        <div class="wd-cta__inner">
            <span class="wd-pill">Build With UIDigitax</span>
            <h2>Need a website that feels sharp, clear, and ready for growth?</h2>
            <p>We can shape the structure, visuals, and responsive experience around your brand goals.</p>
            <div class="wd-actions">
                <a href="pages/contact.php" class="wd-btn wd-btn--primary">Start a Website Project</a>
                <a href="pages/services.php" class="wd-btn wd-btn--ghost">View Services</a>
            </div>
        </div>
    </section>
</main>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>

<script src="assets/js/navbar.js"></script>
<script src="assets/js/footer.js"></script>
<script src="assets/js/portfolios/web-development.js"></script>
<script src="chat/whatsapp.js"></script>
</body>
</html>

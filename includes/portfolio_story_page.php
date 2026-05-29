<?php
$rootPath = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/\\');
$baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . ($rootPath ? $rootPath : '') . '/';
$servicesPath = dirname(__DIR__) . '/data/services.json';
$services = [];
$service = null;
$portfolioSlug = $portfolioSlug ?? '';

if (is_file($servicesPath)) {
    $decoded = json_decode(file_get_contents($servicesPath), true);
    if (is_array($decoded)) {
        $services = $decoded;
    }
}

foreach ($services as $item) {
    if (($item['slug'] ?? '') === $portfolioSlug) {
        $service = $item;
        break;
    }
}

if ($service === null) {
    http_response_code(404);
    $service = [
        'slug' => $portfolioSlug,
        'title' => 'Portfolio',
        'description' => 'Portfolio details are currently unavailable.',
        'detail_intro' => 'Portfolio details are currently unavailable.',
        'tags' => [],
        'deliverables' => [],
        'media' => [],
    ];
}

$storyConfig = [
    'design' => [
        'class' => 'story-design',
        'eyebrow' => 'Design Portfolio',
        'hero' => 'Visual systems that make brands easier to trust and remember.',
        'intro' => 'Explore interface concepts, identity boards, campaign visuals, and design systems shaped for consistent digital presentation.',
        'primary' => 'Brand System Gallery',
        'secondary' => 'Interface direction, creative assets, and campaign visuals arranged as one cohesive design language.',
        'modules' => ['Identity Board', 'UI Screens', 'Campaign Assets', 'Social Templates'],
        'process' => ['Discovery', 'Direction', 'Design System', 'Asset Rollout'],
        'proof' => ['Consistent visual language', 'Reusable creative assets', 'Clearer user journeys'],
    ],
    'social-media-management' => [
        'class' => 'story-social',
        'eyebrow' => 'Social Portfolio',
        'hero' => 'Content systems built for consistency, rhythm, and audience growth.',
        'intro' => 'See how monthly calendars, campaign posts, reels, and reporting views can turn social presence into a managed growth channel.',
        'primary' => 'Content Command Center',
        'secondary' => 'A planning-led social system covering post themes, creative direction, publishing rhythm, and performance review.',
        'modules' => ['Content Calendar', 'Reel Concepts', 'Campaign Posts', 'Reporting'],
        'process' => ['Plan', 'Create', 'Publish', 'Optimize'],
        'proof' => ['Cleaner publishing rhythm', 'Aligned visuals and captions', 'More useful performance reviews'],
    ],
    'digital-marketing' => [
        'class' => 'story-marketing',
        'eyebrow' => 'Marketing Portfolio',
        'hero' => 'Campaign systems that connect attention, traffic, and conversion.',
        'intro' => 'Explore paid media direction, funnel planning, search alignment, and reporting structures for measurable growth.',
        'primary' => 'Campaign Growth Lab',
        'secondary' => 'Strategy, creative, targeting, landing pages, and reporting connected into one performance workflow.',
        'modules' => ['Campaign Funnel', 'Ad Creative', 'Landing Flow', 'Performance Report'],
        'process' => ['Position', 'Launch', 'Measure', 'Scale'],
        'proof' => ['Clearer campaign structure', 'Better conversion paths', 'Actionable reporting'],
    ],
    'seo' => [
        'class' => 'story-seo',
        'eyebrow' => 'SEO Portfolio',
        'hero' => 'Search visibility systems built for structure, relevance, and long-term growth.',
        'intro' => 'Review audit snapshots, keyword maps, content structures, and reporting views designed to improve organic discoverability.',
        'primary' => 'Search Visibility Dashboard',
        'secondary' => 'Technical health, keyword planning, on-page structure, and content opportunities organized into a clear SEO roadmap.',
        'modules' => ['SEO Audit', 'Keyword Map', 'Content Plan', 'Search Report'],
        'process' => ['Audit', 'Map', 'Optimize', 'Report'],
        'proof' => ['Stronger search foundations', 'Clearer content priorities', 'Better visibility tracking'],
    ],
];

$config = $storyConfig[$portfolioSlug] ?? $storyConfig['design'];
$media = $service['media'] ?? [];
$fallbackMedia = [
    ['asset' => 'assets/images/hero.png', 'title' => 'Portfolio visual', 'caption' => 'Selected project presentation asset.', 'type' => 'screenshot'],
    ['asset' => 'assets/images/hero2.png', 'title' => 'Campaign preview', 'caption' => 'Creative direction and digital presentation.', 'type' => 'screenshot'],
    ['asset' => 'assets/images/hero3.jpeg', 'title' => 'Motion preview', 'caption' => 'Video-style presentation preview.', 'type' => 'video'],
];
$media = count($media) ? $media : $fallbackMedia;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>uidigitax | <?php echo htmlspecialchars($service['title'] ?? 'Portfolio'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <base href="<?php echo $baseUrl; ?>">
    <link rel="stylesheet" href="assets/css/portfolios/portfolio-story.css" />
    <link rel="stylesheet" href="assets/css/navbar.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="chat/whatsapp.css" />
</head>
<body>
<?php include dirname(__DIR__) . '/includes/navbar.php'; ?>

<main class="story-page <?php echo htmlspecialchars($config['class']); ?>">
    <section class="story-hero" data-story-reveal>
        <div class="story-hero__copy">
            <span class="story-pill"><?php echo htmlspecialchars($config['eyebrow']); ?></span>
            <h1><?php echo htmlspecialchars($config['hero']); ?></h1>
            <p><?php echo htmlspecialchars($config['intro']); ?></p>
            <div class="story-actions">
                <a href="pages/contact.php" class="story-btn story-btn--primary">Start a Project</a>
                <a href="#storyShowcase" class="story-btn story-btn--ghost">View Showcase</a>
            </div>
        </div>
        <div class="story-hero__mosaic" aria-hidden="true">
            <?php foreach (array_slice($media, 0, 3) as $index => $item): ?>
                <div class="story-float-card story-float-card--<?php echo $index + 1; ?>" style="background-image: linear-gradient(180deg, rgba(8,10,8,0.02), rgba(8,10,8,0.64)), url('<?php echo htmlspecialchars($item['asset'] ?? 'assets/images/hero.png'); ?>');"></div>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="story-showcase" id="storyShowcase" data-story-reveal>
        <aside class="story-side-panel">
            <span class="story-pill"><?php echo htmlspecialchars($config['primary']); ?></span>
            <h2><?php echo htmlspecialchars($service['title'] ?? 'Portfolio'); ?></h2>
            <p><?php echo htmlspecialchars($config['secondary']); ?></p>
            <div class="story-side-panel__meta">
                <strong><?php echo count($media); ?></strong>
                <span>Showcase items</span>
            </div>
        </aside>
        <div class="story-media-grid">
            <?php foreach ($media as $item): ?>
                <article class="story-media-card<?php echo ($item['type'] ?? '') === 'video' ? ' story-media-card--video' : ''; ?>" data-story-reveal>
                    <div class="story-media-card__visual" style="background-image: linear-gradient(180deg, rgba(8,10,8,0.02), rgba(8,10,8,0.72)), url('<?php echo htmlspecialchars($item['asset'] ?? 'assets/images/hero.png'); ?>');">
                        <?php if (($item['type'] ?? '') === 'video'): ?>
                            <span class="story-play" aria-hidden="true"></span>
                        <?php endif; ?>
                    </div>
                    <div class="story-media-card__body">
                        <span><?php echo htmlspecialchars(($item['type'] ?? 'media') === 'video' ? 'Video Preview' : 'Visual Asset'); ?></span>
                        <h3><?php echo htmlspecialchars($item['title'] ?? 'Portfolio item'); ?></h3>
                        <p><?php echo htmlspecialchars($item['caption'] ?? ''); ?></p>
                    </div>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="story-modules" data-story-reveal>
        <div class="story-section-heading">
            <span class="story-pill">What This Shows</span>
            <h2>Key portfolio modules tailored to <?php echo htmlspecialchars(strtolower($service['title'] ?? 'this service')); ?>.</h2>
        </div>
        <div class="story-module-grid">
            <?php foreach ($config['modules'] as $index => $module): ?>
                <article data-story-reveal>
                    <span><?php echo str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT); ?></span>
                    <h3><?php echo htmlspecialchars($module); ?></h3>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="story-process" data-story-reveal>
        <div class="story-section-heading">
            <span class="story-pill">Workflow</span>
            <h2>A simple process for turning strategy into visible output.</h2>
        </div>
        <div class="story-process__track">
            <?php foreach ($config['process'] as $index => $step): ?>
                <article data-story-reveal>
                    <span><?php echo str_pad((string) ($index + 1), 2, '0', STR_PAD_LEFT); ?></span>
                    <strong><?php echo htmlspecialchars($step); ?></strong>
                </article>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="story-proof" data-story-reveal>
        <div class="story-proof__copy">
            <span class="story-pill">Proof Points</span>
            <h2>Built to make the work easier to understand, use, and improve.</h2>
        </div>
        <div class="story-proof__list">
            <?php foreach ($config['proof'] as $item): ?>
                <p data-story-reveal><?php echo htmlspecialchars($item); ?></p>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="story-cta" data-story-reveal>
        <div class="story-cta__inner">
            <span class="story-pill">Work With UIDigitax</span>
            <h2>Need this kind of system for your brand?</h2>
            <p>We can shape the strategy, creative direction, and execution around your current goals.</p>
            <div class="story-actions">
                <a href="pages/contact.php" class="story-btn story-btn--primary">Start a Conversation</a>
                <a href="pages/services.php" class="story-btn story-btn--ghost">View Services</a>
            </div>
        </div>
    </section>
</main>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
<script src="assets/js/navbar.js"></script>
<script src="assets/js/footer.js"></script>
<script src="assets/js/portfolios/portfolio-story.js"></script>
<script src="chat/whatsapp.js"></script>
</body>
</html>

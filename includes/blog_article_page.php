<?php
$rootPath = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/\\');
$baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . ($rootPath ? $rootPath : '') . '/';
$blogsPath = dirname(__DIR__) . '/data/blogs.json';
$posts = [];
$post = null;
$blogSlug = $blogSlug ?? '';
$blogCss = $blogCss ?? '';
$blogJs = $blogJs ?? '';
$relatedPosts = [];

if (is_file($blogsPath)) {
    $decoded = json_decode(file_get_contents($blogsPath), true);
    if (is_array($decoded)) {
        $posts = $decoded;
    }
}

foreach ($posts as $item) {
    if (($item['slug'] ?? '') === $blogSlug) {
        $post = $item;
        break;
    }
}

foreach ($posts as $item) {
    if (($item['slug'] ?? '') === $blogSlug) {
        continue;
    }

    if (($item['category'] ?? '') === ($post['category'] ?? null)) {
        $relatedPosts[] = $item;
    }
}

if (count($relatedPosts) < 2) {
    foreach ($posts as $item) {
        if (($item['slug'] ?? '') === $blogSlug) {
            continue;
        }

        $alreadyIncluded = false;
        foreach ($relatedPosts as $relatedItem) {
            if (($relatedItem['slug'] ?? '') === ($item['slug'] ?? '')) {
                $alreadyIncluded = true;
                break;
            }
        }

        if ($alreadyIncluded) {
            continue;
        }

        $relatedPosts[] = $item;
        if (count($relatedPosts) >= 2) {
            break;
        }
    }
}

$relatedPosts = array_slice($relatedPosts, 0, 2);

if ($post === null) {
    http_response_code(404);
    $post = [
        'title' => 'Blog Article',
        'category' => 'Blog',
        'read_time' => '',
        'date' => '',
        'excerpt' => 'The requested blog article could not be found.',
        'hero_image' => 'assets/images/hero.png',
        'cover_image' => 'assets/images/hero2.png',
        'intro' => 'The requested blog article could not be found.',
        'sections' => [],
        'key_points' => [],
        'summary_points' => [],
        'closing' => ''
    ];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>uidigitax | <?php echo htmlspecialchars($post['title'] ?? 'Blog Article'); ?></title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <base href="<?php echo $baseUrl; ?>">
    <link rel="stylesheet" href="assets/css/blogs/base.css" />
    <?php if ($blogCss !== ''): ?>
        <link rel="stylesheet" href="<?php echo htmlspecialchars($blogCss); ?>" />
    <?php endif; ?>
    <link rel="stylesheet" href="assets/css/navbar.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="chat/whatsapp.css" />
</head>
<body>
<?php include dirname(__DIR__) . '/includes/navbar.php'; ?>

<main class="blog-article-page">
    <section class="blog-article-hero">
        <div class="blog-article-hero__inner">
            <div class="blog-article-hero__copy">
                <span class="blog-article-pill"><?php echo htmlspecialchars($post['category'] ?? 'Blog'); ?></span>
                <div class="blog-article-hero__meta">
                    <?php if (($post['date'] ?? '') !== ''): ?><span><?php echo htmlspecialchars($post['date']); ?></span><?php endif; ?>
                    <?php if (($post['read_time'] ?? '') !== ''): ?><span><?php echo htmlspecialchars($post['read_time']); ?></span><?php endif; ?>
                </div>
                <h1><?php echo htmlspecialchars($post['title'] ?? 'Blog Article'); ?></h1>
                <p><?php echo htmlspecialchars($post['excerpt'] ?? ''); ?></p>
                <div class="blog-article-hero__actions">
                    <a href="pages/blog.php" class="blog-article-btn blog-article-btn--ghost">Back to Blog</a>
                    <a href="pages/contact.php" class="blog-article-btn blog-article-btn--primary">Discuss a Project</a>
                </div>
            </div>
            <div class="blog-article-hero__visual" style="background-image:
                linear-gradient(180deg, rgba(11, 15, 12, 0.08) 0%, rgba(11, 15, 12, 0.7) 100%),
                url('<?php echo htmlspecialchars($post['hero_image'] ?? 'assets/images/hero.png'); ?>');"></div>
        </div>
    </section>

    <section class="blog-article-body">
        <div class="blog-article-layout">
            <article class="blog-article-content">
                <div class="blog-article-intro">
                    <p><?php echo htmlspecialchars($post['intro'] ?? ''); ?></p>
                </div>
                <?php if (!empty($post['summary_points'])): ?>
                    <section class="blog-article-highlights">
                        <?php foreach (($post['summary_points'] ?? []) as $index => $point): ?>
                            <article class="blog-article-highlight">
                                <span class="blog-article-highlight__index"><?php echo str_pad((string)($index + 1), 2, '0', STR_PAD_LEFT); ?></span>
                                <p><?php echo htmlspecialchars($point); ?></p>
                            </article>
                        <?php endforeach; ?>
                    </section>
                <?php endif; ?>
                <?php foreach (($post['sections'] ?? []) as $section): ?>
                    <section class="blog-article-section">
                        <h2><?php echo htmlspecialchars($section['heading'] ?? 'Section'); ?></h2>
                        <?php foreach (($section['paragraphs'] ?? []) as $paragraph): ?>
                            <p><?php echo htmlspecialchars($paragraph); ?></p>
                        <?php endforeach; ?>
                    </section>
                <?php endforeach; ?>
                <?php if (($post['closing'] ?? '') !== ''): ?>
                    <section class="blog-article-closing">
                        <span class="blog-article-pill">Closing Thought</span>
                        <p><?php echo htmlspecialchars($post['closing']); ?></p>
                    </section>
                <?php endif; ?>
            </article>

            <aside class="blog-article-sidebar">
                <div class="blog-article-panel">
                    <span class="blog-article-pill">Article Details</span>
                    <dl class="blog-article-details">
                        <div>
                            <dt>Category</dt>
                            <dd><?php echo htmlspecialchars($post['category'] ?? 'Blog'); ?></dd>
                        </div>
                        <?php if (($post['date'] ?? '') !== ''): ?>
                            <div>
                                <dt>Published</dt>
                                <dd><?php echo htmlspecialchars($post['date']); ?></dd>
                            </div>
                        <?php endif; ?>
                        <?php if (($post['read_time'] ?? '') !== ''): ?>
                            <div>
                                <dt>Reading Time</dt>
                                <dd><?php echo htmlspecialchars($post['read_time']); ?></dd>
                            </div>
                        <?php endif; ?>
                    </dl>
                </div>
                <div class="blog-article-panel">
                    <span class="blog-article-pill">Key Points</span>
                    <ul>
                        <?php foreach (($post['key_points'] ?? []) as $point): ?>
                            <li><?php echo htmlspecialchars($point); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="blog-article-cover" style="background-image:
                    linear-gradient(180deg, rgba(11, 15, 12, 0.12) 0%, rgba(11, 15, 12, 0.58) 100%),
                    url('<?php echo htmlspecialchars($post['cover_image'] ?? 'assets/images/hero2.png'); ?>');"></div>
                <div class="blog-article-panel blog-article-panel--cta">
                    <span class="blog-article-pill">UIDigitax</span>
                    <h3>Need this kind of thinking applied to your brand?</h3>
                    <p>We help businesses turn ideas into clear digital systems across websites, search, content, creative design, and video.</p>
                    <div class="blog-article-sidebar__actions">
                        <a href="pages/services.php" class="blog-article-btn blog-article-btn--ghost">Explore Services</a>
                        <a href="pages/contact.php" class="blog-article-btn blog-article-btn--primary">Start a Project</a>
                    </div>
                </div>
            </aside>
        </div>
    </section>

    <?php if (!empty($relatedPosts)): ?>
        <section class="blog-article-related">
            <div class="blog-article-related__heading">
                <span class="blog-article-pill">More Reading</span>
                <h2>Continue exploring related insights from UIDigitax.</h2>
            </div>
            <div class="blog-article-related__grid">
                <?php foreach ($relatedPosts as $relatedPost): ?>
                    <article class="blog-related-card">
                        <a href="blogs/<?php echo rawurlencode($relatedPost['slug'] ?? ''); ?>.php" class="blog-related-card__link">
                            <div class="blog-related-card__image" style="background-image:
                                linear-gradient(180deg, rgba(10, 14, 11, 0.08) 0%, rgba(10, 14, 11, 0.66) 100%),
                                url('<?php echo htmlspecialchars($relatedPost['hero_image'] ?? 'assets/images/hero.png'); ?>');"></div>
                            <div class="blog-related-card__body">
                                <div class="blog-related-card__meta">
                                    <span><?php echo htmlspecialchars($relatedPost['category'] ?? 'Blog'); ?></span>
                                    <span><?php echo htmlspecialchars($relatedPost['read_time'] ?? ''); ?></span>
                                </div>
                                <h3><?php echo htmlspecialchars($relatedPost['title'] ?? 'Article'); ?></h3>
                                <p><?php echo htmlspecialchars($relatedPost['excerpt'] ?? ''); ?></p>
                                <span class="blog-related-card__cta">Read Article</span>
                            </div>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </section>
    <?php endif; ?>
</main>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>
<script src="assets/js/navbar.js"></script>
<script src="assets/js/footer.js"></script>
<script src="assets/js/blogs/base.js"></script>
<script src="chat/whatsapp.js"></script>
<?php if ($blogJs !== ''): ?>
    <script src="<?php echo htmlspecialchars($blogJs); ?>"></script>
<?php endif; ?>
</body>
</html>

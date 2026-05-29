<?php
$rootPath = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/\\');
$baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . ($rootPath ? $rootPath : '') . '/';
$blogsPath = __DIR__ . '/../data/blogs.json';
$posts = [];
if (is_file($blogsPath)) {
    $decoded = json_decode(file_get_contents($blogsPath), true);
    if (is_array($decoded)) {
        $posts = $decoded;
    }
}

$featuredPosts = array_slice($posts, 0, 3);
$categories = [];
foreach ($posts as $post) {
    $category = trim((string)($post['category'] ?? ''));
    if ($category !== '') {
        $categories[$category] = true;
    }
}
$categories = array_keys($categories);
sort($categories, SORT_NATURAL | SORT_FLAG_CASE);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>uidigitax | Blog</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <base href="<?php echo $baseUrl; ?>">
    <link rel="stylesheet" href="assets/css/blog.css" />
    <link rel="stylesheet" href="assets/css/navbar.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="chat/whatsapp.css" />
</head>
<body>
<?php include __DIR__ . '/../includes/navbar.php'; ?>

<main class="blog-page">
    <section class="blog-hero">
        <div class="blog-hero__inner">
            <div class="blog-hero__copy">
                <span class="blog-pill">UIDigitax Journal</span>
                <h1>Ideas, analysis, and creative thinking for brands building stronger digital momentum.</h1>
                <p>Explore practical writing on brand strategy, websites, search visibility, content systems, design direction, and the digital decisions that shape long-term growth.</p>
                <div class="blog-hero__actions">
                    <a href="#blogGrid" class="blog-btn blog-btn--primary">Read Articles</a>
                    <a href="pages/contact.php" class="blog-btn blog-btn--ghost">Talk to UIDigitax</a>
                </div>
            </div>
            <div class="blog-hero__visual" data-blog-hero-visual>
                <div class="blog-hero__glow" aria-hidden="true"></div>
                <?php foreach (array_slice($posts, 0, 3) as $index => $post): ?>
                    <article class="blog-hero-card blog-hero-card--<?php echo $index === 0 ? 'main' : ($index === 1 ? 'left' : 'right'); ?>" data-blog-hero-card style="--hero-order: <?php echo $index; ?>;">
                        <div class="blog-hero-card__image" style="background-image:
                            linear-gradient(180deg, rgba(10, 14, 11, 0.08) 0%, rgba(10, 14, 11, 0.72) 100%),
                            url('<?php echo htmlspecialchars($post['hero_image'] ?? 'assets/images/hero.png'); ?>');"></div>
                        <div class="blog-hero-card__body">
                            <div class="blog-hero-card__meta">
                                <span><?php echo htmlspecialchars($post['category'] ?? 'Blog'); ?></span>
                                <span><?php echo htmlspecialchars($post['read_time'] ?? ''); ?></span>
                            </div>
                            <h3><?php echo htmlspecialchars($post['title'] ?? 'Article'); ?></h3>
                            <p><?php echo htmlspecialchars($post['excerpt'] ?? ''); ?></p>
                        </div>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>

    <?php if (!empty($featuredPosts)): ?>
    <section class="blog-featured">
        <div class="blog-section-heading blog-section-heading--featured">
            <span class="blog-pill">Featured Articles</span>
            <h2>Distinct perspectives, practical ideas, and sharper digital thinking for ambitious brands.</h2>
        </div>

        <div class="blog-featured__layout">
            <?php
            $primaryFeatured = $featuredPosts[0] ?? null;
            $secondaryFeatured = array_slice($featuredPosts, 1);
            ?>

            <?php if ($primaryFeatured): ?>
                <article class="featured-article featured-article--primary" data-featured-card>
                    <a href="blogs/<?php echo rawurlencode($primaryFeatured['slug'] ?? ''); ?>.php" class="featured-article__link">
                        <div class="featured-article__media" style="background-image:
                            linear-gradient(180deg, rgba(9, 14, 11, 0.04) 0%, rgba(9, 14, 11, 0.7) 100%),
                            url('<?php echo htmlspecialchars($primaryFeatured['hero_image'] ?? 'assets/images/hero.png'); ?>');">
                            <div class="featured-article__overlay">
                                <div class="featured-article__meta">
                                    <span><?php echo htmlspecialchars($primaryFeatured['category'] ?? 'Blog'); ?></span>
                                    <span><?php echo htmlspecialchars($primaryFeatured['read_time'] ?? ''); ?></span>
                                </div>
                                <h3><?php echo htmlspecialchars($primaryFeatured['title'] ?? 'Featured Article'); ?></h3>
                                <p><?php echo htmlspecialchars($primaryFeatured['excerpt'] ?? ''); ?></p>
                                <span class="featured-article__cta">Read Featured Article</span>
                            </div>
                        </div>
                    </a>
                </article>
            <?php endif; ?>

            <div class="featured-article__stack">
                <?php foreach ($secondaryFeatured as $post): ?>
                    <article class="featured-article featured-article--secondary" data-featured-card>
                        <a href="blogs/<?php echo rawurlencode($post['slug'] ?? ''); ?>.php" class="featured-article__link">
                            <div class="featured-article__media" style="background-image:
                                linear-gradient(180deg, rgba(9, 14, 11, 0.08) 0%, rgba(9, 14, 11, 0.66) 100%),
                                url('<?php echo htmlspecialchars($post['hero_image'] ?? 'assets/images/hero.png'); ?>');"></div>
                            <div class="featured-article__body">
                                <div class="featured-article__meta">
                                    <span><?php echo htmlspecialchars($post['category'] ?? 'Blog'); ?></span>
                                    <span><?php echo htmlspecialchars($post['date'] ?? ''); ?></span>
                                </div>
                                <h3><?php echo htmlspecialchars($post['title'] ?? 'Featured Article'); ?></h3>
                                <p><?php echo htmlspecialchars($post['excerpt'] ?? ''); ?></p>
                                <span class="featured-article__cta">Open Article</span>
                            </div>
                        </a>
                    </article>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <?php endif; ?>

    <section class="blog-grid-section" id="blogGrid">
        <div class="blog-section-heading">
            <span class="blog-pill">Latest Articles</span>
            <h2>Explore featured topics across web, SEO, social media, creative systems, and growth strategy.</h2>
        </div>

        <div class="blog-search" role="search" aria-label="Search blog articles">
            <label for="blogSearchInput" class="blog-search__label">Search Articles</label>
            <div class="blog-search__field">
                <span class="blog-search__icon" aria-hidden="true">
                    <svg viewBox="0 0 24 24" width="18" height="18" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="11" cy="11" r="6.5" stroke="currentColor" stroke-width="1.7"/>
                        <path d="M16 16L21 21" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                    </svg>
                </span>
                <input
                    id="blogSearchInput"
                    class="blog-search__input"
                    type="search"
                    placeholder="Search by title, category, or topic"
                    autocomplete="off"
                    data-blog-search-input
                />
                <button type="button" class="blog-search__clear" data-blog-search-clear aria-label="Clear search">Clear</button>
            </div>
            <?php if (!empty($categories)): ?>
            <div class="blog-filters" aria-label="Filter articles by category">
                <button type="button" class="blog-filter is-active" data-blog-filter="all">All</button>
                <?php foreach ($categories as $category): ?>
                    <button
                        type="button"
                        class="blog-filter"
                        data-blog-filter="<?php echo htmlspecialchars(strtolower($category)); ?>"
                    >
                        <?php echo htmlspecialchars($category); ?>
                    </button>
                <?php endforeach; ?>
            </div>
            <?php endif; ?>
            <p class="blog-search__status" data-blog-search-status>Showing all articles</p>
        </div>

        <div class="blog-grid" data-blog-grid>
            <?php foreach ($posts as $index => $post): ?>
                <article
                    class="blog-card"
                    data-blog-card
                    data-category="<?php echo htmlspecialchars(strtolower($post['category'] ?? '')); ?>"
                    data-search-text="<?php
                        echo htmlspecialchars(
                            strtolower(
                                trim(
                                    ($post['title'] ?? '') . ' ' .
                                    ($post['category'] ?? '') . ' ' .
                                    ($post['excerpt'] ?? '') . ' ' .
                                    implode(' ', $post['key_points'] ?? [])
                                )
                            )
                        );
                    ?>"
                >
                    <a href="blogs/<?php echo rawurlencode($post['slug'] ?? ('post-' . $index)); ?>.php" class="blog-card__link">
                        <div class="blog-card__image" style="background-image:
                            linear-gradient(180deg, rgba(10, 14, 11, 0.08) 0%, rgba(10, 14, 11, 0.66) 100%),
                            url('<?php echo htmlspecialchars($post['hero_image'] ?? 'assets/images/hero.png'); ?>');"></div>
                        <div class="blog-card__body">
                            <div class="blog-card__meta">
                                <span><?php echo htmlspecialchars($post['category'] ?? 'Blog'); ?></span>
                                <span><?php echo htmlspecialchars($post['read_time'] ?? ''); ?></span>
                            </div>
                            <h3><?php echo htmlspecialchars($post['title'] ?? 'Blog Article'); ?></h3>
                            <p><?php echo htmlspecialchars($post['excerpt'] ?? ''); ?></p>
                            <span class="blog-card__cta">Read Article</span>
                        </div>
                    </a>
                </article>
            <?php endforeach; ?>
        </div>

        <div class="blog-search__empty" data-blog-search-empty hidden>
            <span class="blog-pill">No Results</span>
            <h3>No articles matched your search.</h3>
            <p>Try a broader keyword like <em>SEO</em>, <em>design</em>, <em>strategy</em>, or <em>video</em>.</p>
        </div>
    </section>

    <section class="blog-cta">
        <div class="blog-cta__inner">
            <span class="blog-pill">Need Support?</span>
            <h2>Need ideas turned into action across web, content, and digital growth?</h2>
            <p>UIDigitax helps brands move from strategy to polished execution across design, development, search, social, and storytelling.</p>
            <div class="blog-hero__actions">
                <a href="pages/contact.php" class="blog-btn blog-btn--primary">Start a Conversation</a>
                <a href="pages/services.php" class="blog-btn blog-btn--ghost">Explore Services</a>
            </div>
        </div>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
<script src="assets/js/navbar.js"></script>
<script src="assets/js/footer.js"></script>
<script src="assets/js/blog.js"></script>
<script src="chat/whatsapp.js"></script>
</body>
</html>

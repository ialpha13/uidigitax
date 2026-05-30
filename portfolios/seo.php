<?php
$rootPath = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/\\');
$baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . ($rootPath ? $rootPath : '') . '/';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>uidigitax | SEO Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <base href="<?php echo $baseUrl; ?>">
    <link rel="stylesheet" href="assets/css/portfolios/seo.css" />
    <link rel="stylesheet" href="assets/css/navbar.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="chat/whatsapp.css" />
</head>
<body>
<?php include dirname(__DIR__) . '/includes/navbar.php'; ?>

<main class="seo-page">
    <section class="seo-hero seo-shell" data-seo-reveal>
        <div class="seo-hero__copy">
            <span class="seo-pill">Portfolio / SEO</span>
            <h1>SEO That Drives Rankings, Traffic, and Real Business Growth.</h1>
            <p>Data-driven SEO strategies that improve visibility, rank higher on Google, and turn search traffic into measurable business results.</p>
            <div class="seo-feature-row">
                <span>Strategic SEO Planning</span>
                <span>Technical SEO Excellence</span>
                <span>Content and Authority That Rank</span>
            </div>
            <div class="seo-actions">
                <a href="#seoCaseStudy" class="seo-btn seo-btn--primary">View Case Study</a>
                <a href="#seoScreens" class="seo-btn seo-btn--ghost">View Screenshots</a>
            </div>
        </div>

        <div class="seo-panel seo-panel--metrics" aria-hidden="true">
            <h2>SEO Performance Dashboard</h2>
            <div class="seo-metric-grid">
                <div><span>Organic Sessions</span><strong data-count="12400">0</strong></div>
                <div><span>Total Keywords</span><strong data-count="3200">0</strong></div>
                <div><span>Top 3 Rankings</span><strong data-count="842">0</strong></div>
                <div><span>Conversions</span><strong data-count="512">0</strong></div>
            </div>

            <div class="seo-chart seo-chart--line" data-graph="line" data-points="18,24,29,26,35,42,37,49,56,52,62,71">
                <div class="seo-chart__title">Organic Sessions Trend</div>
                <svg viewBox="0 0 100 40" preserveAspectRatio="none" role="presentation">
                    <polyline class="seo-line-fill" points=""></polyline>
                    <polyline class="seo-line-stroke" points=""></polyline>
                </svg>
            </div>
        </div>
    </section>

    <section id="seoCaseStudy" class="seo-case seo-shell" data-seo-reveal>
        <div class="seo-heading">
            <span class="seo-pill">Featured Case Study</span>
            <h2>E-Commerce Brand - Organic Growth Transformation</h2>
        </div>

        <div class="seo-case__layout">
            <article class="seo-panel seo-panel--feature">
                <div class="seo-chart seo-chart--line seo-chart--large" data-graph="line" data-points="14,19,23,20,27,33,29,41,38,47,44,58">
                    <div class="seo-chart__title">Case Study Performance Timeline</div>
                    <svg viewBox="0 0 100 40" preserveAspectRatio="none" role="presentation">
                        <polyline class="seo-line-fill" points=""></polyline>
                        <polyline class="seo-line-stroke" points=""></polyline>
                    </svg>
                </div>
                <p>From low visibility to top rankings. A strategic SEO roadmap that increased organic traffic by 247% and revenue by 186% in 8 months.</p>
            </article>

            <aside class="seo-side-stack">
                <article class="seo-panel">
                    <div class="seo-chart seo-chart--bars" data-graph="bars" data-bars="28,34,42,57,66,74,88">
                        <div class="seo-chart__title">Keyword Ranking Growth</div>
                        <div class="seo-bars"></div>
                    </div>
                    <h3>Keyword Ranking Proof</h3>
                </article>
                <article class="seo-panel">
                    <div class="seo-chart seo-chart--donut" data-graph="donut" data-percent="68">
                        <div class="seo-chart__title">Conversion Share</div>
                        <div class="seo-donut"><span>0%</span></div>
                    </div>
                    <h3>Client Results Snapshot</h3>
                </article>
                <a href="pages/contact.php" class="seo-btn seo-btn--primary seo-btn--full">View Full Case Study</a>
            </aside>
        </div>
    </section>

    <section id="seoScreens" class="seo-screens seo-shell" data-seo-reveal>
        <div class="seo-heading">
            <span class="seo-pill">SEO Screenshot Library</span>
            <h2>Placeholders for Ranking Proof, GSC, Analytics, and Client Reports.</h2>
            <p>Replace these blocks with your real screenshots. Sizes are mixed intentionally for a strong visual rhythm.</p>
        </div>

        <div class="seo-shotwall">
            <article class="seo-shot seo-shot--xl"><div class="seo-shot__label">Large Placeholder: Primary SEO Dashboard Screenshot</div></article>
            <article class="seo-shot seo-shot--tall"><div class="seo-shot__label">Tall Placeholder: Search Console Queries</div></article>
            <article class="seo-shot seo-shot--wide"><div class="seo-shot__label">Wide Placeholder: Organic Traffic Graph</div></article>
            <article class="seo-shot seo-shot--small"><div class="seo-shot__label">Small Placeholder: Top Landing Pages</div></article>
            <article class="seo-shot seo-shot--small"><div class="seo-shot__label">Small Placeholder: CTR and Impressions</div></article>
            <article class="seo-shot seo-shot--large"><div class="seo-shot__label">Large Placeholder: Keyword Position Report</div></article>
            <article class="seo-shot seo-shot--wide"><div class="seo-shot__label">Wide Placeholder: Conversion Attribution</div></article>
            <article class="seo-shot seo-shot--tall"><div class="seo-shot__label">Tall Placeholder: Backlink Profile</div></article>
            <article class="seo-shot seo-shot--small"><div class="seo-shot__label">Small Placeholder: Local SEO Snapshot</div></article>
            <article class="seo-shot seo-shot--small"><div class="seo-shot__label">Small Placeholder: Device Split</div></article>
        </div>
    </section>

    <section class="seo-services seo-shell" data-seo-reveal>
        <div class="seo-heading seo-heading--center">
            <span class="seo-pill">Services I Offer</span>
        </div>
        <div class="seo-service-grid">
            <article class="seo-card"><h3>SEO Strategy and Planning</h3><p>Roadmaps aligned to your business goals and market realities.</p></article>
            <article class="seo-card"><h3>Technical SEO Audits</h3><p>Fix crawl issues, improve indexing, and strengthen site health.</p></article>
            <article class="seo-card"><h3>On-Page Optimization</h3><p>Optimize content, headings, links, and page intent for ranking.</p></article>
            <article class="seo-card"><h3>Off-Page and Link Building</h3><p>Build relevant authority with quality outreach and signals.</p></article>
            <article class="seo-card"><h3>Local SEO Optimization</h3><p>Improve local search presence and Google Maps visibility.</p></article>
            <article class="seo-card"><h3>SEO Reporting and Analytics</h3><p>Transparent reporting with clear growth and ROI insights.</p></article>
        </div>
    </section>

    <section class="seo-results seo-shell" data-seo-reveal>
        <div class="seo-heading seo-heading--center">
            <span class="seo-pill">Proven Results</span>
        </div>
        <div class="seo-result-grid">
            <article class="seo-result-card"><h3>Organic Traffic Growth</h3><strong>+247%</strong><p>Increase in organic traffic in 8 months</p></article>
            <article class="seo-result-card"><h3>Keyword Rankings Growth</h3><strong>+312%</strong><p>Increase in top 3 keyword rankings</p></article>
            <article class="seo-result-card"><h3>SERP Wins</h3><strong>96+</strong><p>Keywords ranking on page 1 of Google</p></article>
            <article class="seo-result-card"><h3>Conversions Growth</h3><strong>+186%</strong><p>Increase in conversion from organic search</p></article>
        </div>
    </section>

    <section class="seo-cta seo-shell" data-seo-reveal>
        <div class="seo-cta__copy">
            <span class="seo-pill">Let's Rank Higher Together</span>
            <h2>Ready to Grow Your Organic Presence?</h2>
            <p>Let's build a data-driven SEO strategy that gets you rankings, traffic, and measurable business outcomes.</p>
        </div>
        <div class="seo-cta__card">
            <h3>Book a Free SEO Consultation</h3>
            <p>Let's discuss your goals and create a roadmap for measurable growth.</p>
            <a href="pages/contact.php" class="seo-btn seo-btn--primary seo-btn--full">Schedule a Call</a>
        </div>
    </section>
</main>

<?php include dirname(__DIR__) . '/includes/footer.php'; ?>

<script src="assets/js/navbar.js"></script>
<script src="assets/js/footer.js"></script>
<script src="assets/js/portfolios/seo.js"></script>
<script src="chat/whatsapp.js"></script>
</body>
</html>

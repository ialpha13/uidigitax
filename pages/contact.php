<?php
$rootPath = rtrim(dirname(dirname($_SERVER['SCRIPT_NAME'])), '/\\');
$baseUrl = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . ($rootPath ? $rootPath : '') . '/';
$status = $_GET['status'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>uidigitax | Contact</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;600;700&family=Syne:wght@400;600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;1,300&display=swap" rel="stylesheet">
    <base href="<?php echo $baseUrl; ?>">
    <link rel="stylesheet" href="assets/css/contact.css" />
    <link rel="stylesheet" href="assets/css/navbar.css" />
    <link rel="stylesheet" href="assets/css/footer.css" />
    <link rel="stylesheet" href="chat/whatsapp.css" />
</head>
<body class="contact-page-body">
<?php include __DIR__ . '/../includes/navbar.php'; ?>

<div class="contact-progress" aria-hidden="true"></div>
<div class="contact-cursor-glow" aria-hidden="true"></div>

<main class="contact-shell">
    <section class="contact-frame">
        <div class="contact-frame__noise" aria-hidden="true"></div>

        <header class="contact-hero" data-reveal-card>
            <span class="contact-eyebrow">Contact</span>
            <h1>Contact our team of experts</h1>
        </header>

        <div class="contact-quote" data-reveal-card>
            <label>
                <span>Service</span>
                <input type="text" value="Website, SEO, Marketing">
            </label>
            <label>
                <span>Project Type</span>
                <input type="text" value="Launch or improve">
            </label>
            <label>
                <span>Date</span>
                <input type="text" value="DD / MM / YYYY">
            </label>
            <label>
                <span>Time</span>
                <input type="text" value="12:00">
            </label>
            <label>
                <span>Team</span>
                <input type="text" value="-  1  +">
            </label>
            <a href="#inquiry" class="contact-quote__button">Request Quote</a>
        </div>

        <section class="contact-grid" id="inquiry">
            <article class="contact-method contact-method--dark" data-reveal-card data-tilt-card>
                <span class="contact-method__icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12.04 3.5a8.35 8.35 0 0 0-7.2 12.58L3.9 20.5l4.52-.9a8.35 8.35 0 1 0 3.62-16.1Zm0 1.55a6.8 6.8 0 1 1-3.04 12.9l-.24-.12-2.75.55.57-2.67-.15-.25A6.8 6.8 0 0 1 12.04 5.05Z"/></svg>
                </span>
                <h2>WhatsApp</h2>
                <p>Get fast project clarity, timeline alignment, and direct conversation with UIDigitax.</p>
                <a href="https://wa.me/923169396919">Start a new chat</a>
            </article>

            <article class="contact-method contact-method--dark" data-reveal-card data-tilt-card>
                <span class="contact-method__icon">
                    <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M20.77 4.32 3.63 10.94c-1.17.47-1.16 1.12-.21 1.41l4.4 1.37 1.68 5.17c.22.61.11.85.75.85.49 0 .71-.22.98-.49l2.36-2.29 4.91 3.63c.9.5 1.56.24 1.79-.84l3.23-15.21c.33-1.32-.5-1.92-1.75-1.22Zm-3.2 3.49-8.28 7.47-.32 3.42-1.55-5.06 10.15-5.83Z"/></svg>
                </span>
                <h2>Telegram</h2>
                <p>Prefer lean messaging? Send goals, references, and blockers in one clean thread.</p>
                <a href="https://t.me/uidigitax">Start a new chat</a>
            </article>

            <article class="contact-card contact-card--light contact-card--info" data-reveal-card data-tilt-card>
                <a href="mailto:contact@uidigitax.com">contact@uidigitax.com</a>
                <strong>+92 316 9396919</strong>
                <p>Project communication is open during business hours.</p>
            </article>

            <article class="contact-card contact-card--form" data-reveal-card>
                <p class="contact-form__title">Please select the reason for your inquiry <span>*</span></p>
                <div class="contact-reasons" aria-label="Inquiry reasons">
                    <button type="button">Make a Website</button>
                    <button type="button">SEO</button>
                    <button type="button">General Inquiry</button>
                    <button type="button">Other</button>
                </div>

                <?php if ($status === 'success'): ?>
                    <div class="contact-status contact-status--success">
                        <strong>Message sent successfully.</strong>
                        <span>Thanks for reaching out. UIDigitax will get back to you shortly.</span>
                    </div>
                <?php elseif ($status === 'error'): ?>
                    <div class="contact-status contact-status--error">
                        <strong>Something is missing.</strong>
                        <span>Please fill in the required fields and try again.</span>
                    </div>
                <?php endif; ?>

                <form class="contact-form" action="includes/contact.php" method="post">
                    <div class="contact-form__row">
                        <label>
                            <span>Full Name *</span>
                            <input type="text" name="name" required placeholder="Oliver Hendricks">
                        </label>
                        <label>
                            <span>Email Address *</span>
                            <input type="email" name="email" required placeholder="name@company.com">
                        </label>
                    </div>
                    <div class="contact-form__row">
                        <label>
                            <span>Phone Number</span>
                            <input type="text" name="phone" placeholder="+92...">
                        </label>
                        <label>
                            <span>Company</span>
                            <input type="text" placeholder="Your brand">
                        </label>
                    </div>
                    <label>
                        <span>Your Message</span>
                        <textarea name="message" required placeholder="Tell us what you want to build, improve, or launch."></textarea>
                    </label>
                    <div class="contact-form__footer">
                        <label class="contact-form__check">
                            <input type="checkbox" required>
                            <span>I agree to UIDigitax Privacy Policy</span>
                        </label>
                        <button type="submit">Submit Your Inquiry</button>
                    </div>
                    <small>This site is protected by reCAPTCHA and the Google Privacy Policy and Terms of Service apply.</small>
                </form>
            </article>

            <article class="wa-inline-card" data-reveal-card>
                <div class="wa-inline-card__header">
                    <div class="wa-inline-card__avatar" aria-hidden="true">
                        <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 11.9A8 8 0 0 1 8.3 19L4 20l1.1-4.2A8 8 0 1 1 20 11.9Zm-8-6.2a6.2 6.2 0 0 0-5.3 9.3l.3.5-.7 2.5 2.6-.7.5.3A6.2 6.2 0 1 0 12 5.7Zm3.7 7.9c-.2-.1-1.2-.6-1.4-.7-.2-.1-.3-.1-.5.1l-.4.5c-.1.1-.3.2-.5.1-.2-.1-.8-.3-1.5-1-.6-.6-1-1.4-1.1-1.6-.1-.2 0-.3.1-.4l.3-.4.2-.3a.4.4 0 0 0 0-.4c-.1-.1-.5-1.3-.7-1.7-.1-.4-.3-.3-.5-.3h-.4a.8.8 0 0 0-.6.3c-.2.2-.8.8-.8 1.9 0 1.1.8 2.2.9 2.4.1.2 1.6 2.5 4 3.4 2.3.9 2.3.6 2.7.6.4-.1 1.2-.5 1.4-.9.2-.4.2-.8.2-.9 0-.1-.2-.2-.4-.3Z"/></svg>
                    </div>
                    <div class="wa-inline-card__meta">
                        <p class="wa-inline-card__name">UIDigitax</p>
                        <span class="wa-inline-card__status">
                            <span class="wa-inline-card__status-dot" aria-hidden="true"></span>
                            Typically replies instantly
                        </span>
                    </div>
                </div>

                <div class="wa-inline-card__body">
                    <div class="wa-inline-card__bubble">
                        <p>Chat with us on WhatsApp — share your goal and we'll help turn it into a clear, actionable direction.</p>
                        <span class="wa-inline-card__bubble-time">Just now</span>
                    </div>
                </div>

                <a href="https://wa.me/923169396919?text=<?php echo urlencode('Hi! I found you on your website and would like to know more.'); ?>" class="wa-inline-card__cta" target="_blank" rel="noreferrer">
                    <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20 11.9A8 8 0 0 1 8.3 19L4 20l1.1-4.2A8 8 0 1 1 20 11.9Zm-8-6.2a6.2 6.2 0 0 0-5.3 9.3l.3.5-.7 2.5 2.6-.7.5.3A6.2 6.2 0 1 0 12 5.7Zm3.7 7.9c-.2-.1-1.2-.6-1.4-.7-.2-.1-.3-.1-.5.1l-.4.5c-.1.1-.3.2-.5.1-.2-.1-.8-.3-1.5-1-.6-.6-1-1.4-1.1-1.6-.1-.2 0-.3.1-.4l.3-.4.2-.3a.4.4 0 0 0 0-.4c-.1-.1-.5-1.3-.7-1.7-.1-.4-.3-.3-.5-.3h-.4a.8.8 0 0 0-.6.3c-.2.2-.8.8-.8 1.9 0 1.1.8 2.2.9 2.4.1.2 1.6 2.5 4 3.4 2.3.9 2.3.6 2.7.6.4-.1 1.2-.5 1.4-.9.2-.4.2-.8.2-.9 0-.1-.2-.2-.4-.3Z"/></svg>
                    Start a new chat
                </a>
            </article>
        </section>

        <section class="contact-locations" id="locations">
            <div class="contact-locations__intro" data-reveal-card>
                <h2>Our Office Locations</h2>
                <p>UIDigitax supports digital projects with a remote-first workflow, clear communication, and flexible collaboration across markets.</p>
            </div>

            <div class="contact-locations__grid">
                <article class="contact-location" data-reveal-card data-tilt-card>
                    <svg viewBox="0 0 120 120" aria-hidden="true"><path d="M58 15 43 23l-3 16-11 6 7 13-7 11 15 4 3 18 18 6 8-13 15-2 5-17-11-8 7-18-17-4Z"/></svg>
                    <h3>Pakistan</h3>
                    <p>Remote studio and digital project coordination for websites, SEO, social media, and creative execution.</p>
                    <a href="tel:+923169396919">+92 316 9396919</a>
                </article>

                <article class="contact-location" data-reveal-card data-tilt-card>
                    <svg viewBox="0 0 120 120" aria-hidden="true"><path d="M25 62c10-24 33-34 56-24 12 5 20 15 18 28-2 17-21 28-42 24-18-3-34-11-32-28Z"/></svg>
                    <h3>Global Remote</h3>
                    <p>Strategy, design, marketing, and content collaboration for brands that need flexible digital growth support.</p>
                    <a href="mailto:contact@uidigitax.com">contact@uidigitax.com</a>
                </article>

                <article class="contact-community contact-card--light" data-reveal-card data-tilt-card>
                    <div class="contact-community__copy">
                        <span>UIDigitax Updates</span>
                        <h3>Get sharper digital insight from our studio.</h3>
                        <p>Strategy, design, marketing ideas, and creative growth notes for brands building momentum.</p>
                    </div>
                    <div class="contact-socials">
                        <a href="#" aria-label="Instagram">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M7.8 2h8.4A5.8 5.8 0 0 1 22 7.8v8.4a5.8 5.8 0 0 1-5.8 5.8H7.8A5.8 5.8 0 0 1 2 16.2V7.8A5.8 5.8 0 0 1 7.8 2Zm0 2A3.8 3.8 0 0 0 4 7.8v8.4A3.8 3.8 0 0 0 7.8 20h8.4a3.8 3.8 0 0 0 3.8-3.8V7.8A3.8 3.8 0 0 0 16.2 4H7.8Zm4.2 3.3A4.7 4.7 0 1 1 7.3 12 4.7 4.7 0 0 1 12 7.3Zm0 2A2.7 2.7 0 1 0 14.7 12 2.7 2.7 0 0 0 12 9.3Zm5-2.2a1.1 1.1 0 1 1-1.1 1.1A1.1 1.1 0 0 1 17 7.1Z"/></svg>
                        </a>
                        <a href="#" aria-label="LinkedIn">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M6.94 8.98H3.75V20h3.19V8.98ZM5.35 4a1.85 1.85 0 1 0 .02 3.7A1.85 1.85 0 0 0 5.35 4Zm14.9 9.68c0-3.1-1.65-4.54-3.86-4.54a3.33 3.33 0 0 0-3.01 1.66h-.04V8.98h-3.06V20h3.19v-5.46c0-1.44.27-2.84 2.06-2.84 1.77 0 1.8 1.65 1.8 2.93V20h3.19l-.27-6.32Z"/></svg>
                        </a>
                        <a href="#" aria-label="Twitter">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M18.9 3H22l-6.8 7.78L23.2 21h-6.27l-4.9-6.41L6.4 21H3.3l7.28-8.32L2.9 3h6.43l4.43 5.86L18.9 3Zm-1.1 16.2h1.72L8.38 4.7H6.53L17.8 19.2Z"/></svg>
                        </a>
                        <a href="#" aria-label="Facebook">
                            <svg viewBox="0 0 24 24" aria-hidden="true"><path d="M14 8.5V6.8c0-.82.2-1.3 1.42-1.3H17V2.2A20.7 20.7 0 0 0 14.31 2C11.65 2 9.83 3.62 9.83 6.6v1.9H6.82V12h3.01v9.8H14V12h2.92l.44-3.5H14Z"/></svg>
                        </a>
                    </div>
                </article>
            </div>
        </section>
    </section>
</main>

<?php include __DIR__ . '/../includes/footer.php'; ?>
<script src="assets/js/navbar.js"></script>
<script src="assets/js/footer.js"></script>
<script src="assets/js/contact.js"></script>
<script src="chat/whatsapp.js"></script>
</body>
</html>

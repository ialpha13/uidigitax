<?php
/**
 * WhatsApp Floating Chat Button
 * Include this file in any page to render the floating button.
 *
 * Usage:
 *   <?php include __DIR__ . '/../chat/whatsapp.php'; ?>
 */

$wa_number  = '923169396919';
$wa_message = urlencode('Hi! I found you on your website and would like to know more.');
$wa_url     = 'https://wa.me/' . $wa_number . '?text=' . $wa_message;
?>

<!-- WhatsApp Floating Chat Widget -->
<div class="wa-widget" id="waWidget" aria-live="polite">

    <!-- Popup card (shown when button is clicked) -->
    <div class="wa-widget__popup" id="waPopup" aria-hidden="true" role="dialog" aria-label="Chat with UIDigitax on WhatsApp">
        <div class="wa-widget__popup-header">
            <div class="wa-widget__avatar" aria-hidden="true">
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 11.9A8 8 0 0 1 8.3 19L4 20l1.1-4.2A8 8 0 1 1 20 11.9Zm-8-6.2a6.2 6.2 0 0 0-5.3 9.3l.3.5-.7 2.5 2.6-.7.5.3A6.2 6.2 0 1 0 12 5.7Zm3.7 7.9c-.2-.1-1.2-.6-1.4-.7-.2-.1-.3-.1-.5.1l-.4.5c-.1.1-.3.2-.5.1-.2-.1-.8-.3-1.5-1-.6-.6-1-1.4-1.1-1.6-.1-.2 0-.3.1-.4l.3-.4.2-.3a.4.4 0 0 0 0-.4c-.1-.1-.5-1.3-.7-1.7-.1-.4-.3-.3-.5-.3h-.4a.8.8 0 0 0-.6.3c-.2.2-.8.8-.8 1.9 0 1.1.8 2.2.9 2.4.1.2 1.6 2.5 4 3.4 2.3.9 2.3.6 2.7.6.4-.1 1.2-.5 1.4-.9.2-.4.2-.8.2-.9 0-.1-.2-.2-.4-.3Z"/></svg>
            </div>
            <div class="wa-widget__popup-meta">
                <span class="wa-widget__name">UIDigitax</span>
                <span class="wa-widget__status">
                    <span class="wa-widget__status-dot" aria-hidden="true"></span>
                    Typically replies instantly
                </span>
            </div>
            <button class="wa-widget__close" id="waClose" aria-label="Close chat widget">&times;</button>
        </div>

        <div class="wa-widget__popup-body">
            <div class="wa-widget__bubble">
                <p>Hi there! 👋</p>
                <p>How can we help you today? Chat with us on WhatsApp — we're here to help.</p>
                <span class="wa-widget__bubble-time">Just now</span>
            </div>
        </div>

        <a href="<?php echo $wa_url; ?>" class="wa-widget__cta" target="_blank" rel="noreferrer">
            <svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true"><path d="M20 11.9A8 8 0 0 1 8.3 19L4 20l1.1-4.2A8 8 0 1 1 20 11.9Zm-8-6.2a6.2 6.2 0 0 0-5.3 9.3l.3.5-.7 2.5 2.6-.7.5.3A6.2 6.2 0 1 0 12 5.7Zm3.7 7.9c-.2-.1-1.2-.6-1.4-.7-.2-.1-.3-.1-.5.1l-.4.5c-.1.1-.3.2-.5.1-.2-.1-.8-.3-1.5-1-.6-.6-1-1.4-1.1-1.6-.1-.2 0-.3.1-.4l.3-.4.2-.3a.4.4 0 0 0 0-.4c-.1-.1-.5-1.3-.7-1.7-.1-.4-.3-.3-.5-.3h-.4a.8.8 0 0 0-.6.3c-.2.2-.8.8-.8 1.9 0 1.1.8 2.2.9 2.4.1.2 1.6 2.5 4 3.4 2.3.9 2.3.6 2.7.6.4-.1 1.2-.5 1.4-.9.2-.4.2-.8.2-.9 0-.1-.2-.2-.4-.3Z"/></svg>
            Start Chat on WhatsApp
        </a>
    </div>

    <!-- Floating trigger button -->
    <button class="wa-widget__trigger" id="waTrigger" aria-label="Open WhatsApp chat" aria-expanded="false" aria-controls="waPopup">
        <span class="wa-widget__pulse" aria-hidden="true"></span>
        <span class="wa-widget__badge" id="waBadge" aria-label="1 unread message">1</span>

        <!-- WhatsApp icon (visible when closed) -->
        <span class="wa-widget__icon wa-widget__icon--open" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="currentColor"><path d="M20 11.9A8 8 0 0 1 8.3 19L4 20l1.1-4.2A8 8 0 1 1 20 11.9Zm-8-6.2a6.2 6.2 0 0 0-5.3 9.3l.3.5-.7 2.5 2.6-.7.5.3A6.2 6.2 0 1 0 12 5.7Zm3.7 7.9c-.2-.1-1.2-.6-1.4-.7-.2-.1-.3-.1-.5.1l-.4.5c-.1.1-.3.2-.5.1-.2-.1-.8-.3-1.5-1-.6-.6-1-1.4-1.1-1.6-.1-.2 0-.3.1-.4l.3-.4.2-.3a.4.4 0 0 0 0-.4c-.1-.1-.5-1.3-.7-1.7-.1-.4-.3-.3-.5-.3h-.4a.8.8 0 0 0-.6.3c-.2.2-.8.8-.8 1.9 0 1.1.8 2.2.9 2.4.1.2 1.6 2.5 4 3.4 2.3.9 2.3.6 2.7.6.4-.1 1.2-.5 1.4-.9.2-.4.2-.8.2-.9 0-.1-.2-.2-.4-.3Z"/></svg>
        </span>

        <!-- Close (X) icon (visible when open) -->
        <span class="wa-widget__icon wa-widget__icon--close" aria-hidden="true">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"><line x1="18" y1="6" x2="6" y2="18"/><line x1="6" y1="6" x2="18" y2="18"/></svg>
        </span>
    </button>
</div>

/**
 * WhatsApp Chat Widget — interactions
 */
(function () {
    'use strict';

    var STORAGE_KEY = 'wa_widget_seen';

    document.addEventListener('DOMContentLoaded', function () {
        var widget  = document.getElementById('waWidget');
        var trigger = document.getElementById('waTrigger');
        var popup   = document.getElementById('waPopup');
        var closeBtn = document.getElementById('waClose');
        var badge   = document.getElementById('waBadge');

        if (!widget || !trigger || !popup) return;

        /* ── Entrance: slide up after 1.2 s ── */
        setTimeout(function () {
            widget.classList.add('wa-widget--visible');
        }, 1200);

        /* ── Hide badge if user has interacted before ── */
        if (sessionStorage.getItem(STORAGE_KEY)) {
            badge.classList.add('wa-widget__badge--hidden');
        }

        /* ── Toggle popup ── */
        function openPopup() {
            popup.setAttribute('aria-hidden', 'false');
            trigger.setAttribute('aria-expanded', 'true');
            widget.classList.add('wa-widget--open');
            /* Hide badge on first open */
            badge.classList.add('wa-widget__badge--hidden');
            sessionStorage.setItem(STORAGE_KEY, '1');
        }

        function closePopup() {
            popup.setAttribute('aria-hidden', 'true');
            trigger.setAttribute('aria-expanded', 'false');
            widget.classList.remove('wa-widget--open');
        }

        trigger.addEventListener('click', function () {
            var isOpen = popup.getAttribute('aria-hidden') === 'false';
            isOpen ? closePopup() : openPopup();
        });

        /* ── Close button inside popup ── */
        if (closeBtn) {
            closeBtn.addEventListener('click', function (e) {
                e.stopPropagation();
                closePopup();
            });
        }

        /* ── Close on Escape key ── */
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && popup.getAttribute('aria-hidden') === 'false') {
                closePopup();
                trigger.focus();
            }
        });

        /* ── Close when clicking outside the widget ── */
        document.addEventListener('click', function (e) {
            if (!widget.contains(e.target) && popup.getAttribute('aria-hidden') === 'false') {
                closePopup();
            }
        });

        /* ── Auto-open popup after 8 s if user hasn't seen it yet ── */
        if (!sessionStorage.getItem(STORAGE_KEY)) {
            setTimeout(function () {
                if (popup.getAttribute('aria-hidden') === 'true') {
                    openPopup();
                }
            }, 8000);
        }

        /* ── Track CTA click ── */
        var cta = popup.querySelector('.wa-widget__cta');
        if (cta) {
            cta.addEventListener('click', function () {
                console.info('[WhatsApp] Chat started → wa.me/923169396919');
                /* Swap for GA4 / Meta Pixel event here if needed:
                   gtag('event', 'whatsapp_chat_started');
                   fbq('track', 'Contact');
                */
            });
        }
    });
})();

(function () {
    'use strict';

    const revealItems = document.querySelectorAll('[data-wd-reveal]');
    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

    revealItems.forEach((item, index) => {
        item.style.setProperty('--wd-delay', Math.min(index * 70, 350) + 'ms');
    });

    if (revealItems.length && !reduceMotion && 'IntersectionObserver' in window) {
        const observer = new IntersectionObserver((entries, instance) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('is-visible');
                instance.unobserve(entry.target);
            });
        }, { threshold: 0.16, rootMargin: '0px 0px -10% 0px' });

        revealItems.forEach((item) => observer.observe(item));
    } else {
        revealItems.forEach((item) => item.classList.add('is-visible'));
    }

    const tabs = document.querySelectorAll('.wd-project-tab');
    const previewUrl = document.getElementById('wdPreviewUrl');
    const previewImage = document.getElementById('wdPreviewImage');
    const previewMobile = document.getElementById('wdPreviewMobile');
    const previewType = document.getElementById('wdPreviewType');
    const previewName = document.getElementById('wdPreviewName');
    const previewSummary = document.getElementById('wdPreviewSummary');
    const previewTags = document.getElementById('wdPreviewTags');
    const previewPlay = document.getElementById('wdPreviewPlay');
    const previewVisit = document.getElementById('wdPreviewVisit');
    const previewVideo = document.getElementById('wdPreviewVideo');

    const setBackground = (element, image, overlay) => {
        if (!element || !image) return;
        element.style.backgroundImage = overlay + ", url('" + image + "')";
    };

    tabs.forEach((tab) => {
        tab.addEventListener('click', () => {
            const data = JSON.parse(tab.dataset.wdProject || '{}');

            tabs.forEach((item) => {
                item.classList.remove('is-active');
                item.setAttribute('aria-selected', 'false');
            });

            tab.classList.add('is-active');
            tab.setAttribute('aria-selected', 'true');

            if (previewUrl) previewUrl.textContent = data.url || '';
            if (previewType) previewType.textContent = data.type || '';
            if (previewName) previewName.textContent = data.name || '';
            if (previewSummary) previewSummary.textContent = data.summary || '';
            if (previewPlay) previewPlay.setAttribute('aria-label', 'Play ' + (data.video || 'website preview'));
            if (previewPlay) previewPlay.setAttribute('data-wd-video', data.video_preview || '');
            if (previewVisit && data.live_url) previewVisit.setAttribute('href', data.live_url);
            if (previewVideo) {
                if (data.video_preview) {
                    previewVideo.src = data.video_preview;
                    previewVideo.classList.remove('is-hidden');
                    previewVideo.load();
                } else {
                    previewVideo.removeAttribute('src');
                    previewVideo.classList.add('is-hidden');
                }
            }

            setBackground(previewImage, data.image, 'linear-gradient(180deg, rgba(8,10,8,0.01), rgba(8,10,8,0.48))');
            setBackground(previewMobile, data.mobile, 'linear-gradient(180deg, rgba(8,10,8,0.02), rgba(8,10,8,0.5))');

            if (previewTags) {
                previewTags.innerHTML = '';
                (data.tags || []).forEach((tag) => {
                    const node = document.createElement('span');
                    node.textContent = tag;
                    previewTags.appendChild(node);
                });
            }
        });
    });

    const playButtons = document.querySelectorAll('.wd-play');
    playButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const videoUrl = button.getAttribute('data-wd-video');
            if (!videoUrl) return;
            window.open(videoUrl, '_blank', 'noopener,noreferrer');
        });
    });
}());

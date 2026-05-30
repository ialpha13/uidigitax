(function () {
    'use strict';

    const reduceMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    const revealItems = document.querySelectorAll('[data-seo-reveal]');

    revealItems.forEach((item, index) => {
        item.style.setProperty('--seo-delay', Math.min(index * 70, 350) + 'ms');
    });

    const revealObserver = (!reduceMotion && 'IntersectionObserver' in window)
        ? new IntersectionObserver((entries, instance) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                entry.target.classList.add('is-visible');
                instance.unobserve(entry.target);
            });
        }, { threshold: 0.16, rootMargin: '0px 0px -10% 0px' })
        : null;

    revealItems.forEach((item) => {
        if (revealObserver) revealObserver.observe(item);
        else item.classList.add('is-visible');
    });

    const formatCount = (value) => {
        if (value >= 1000) return (value / 1000).toFixed(1).replace('.0', '') + 'K';
        return String(value);
    };

    const animateCounter = (counter) => {
        if (!counter || counter.dataset.animated === 'true') return;
        counter.dataset.animated = 'true';
        const target = Number(counter.getAttribute('data-count')) || 0;

        if (reduceMotion) {
            counter.textContent = formatCount(target);
            return;
        }

        const duration = 1200;
        const start = performance.now();

        const tick = (time) => {
            const progress = Math.min((time - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            counter.textContent = formatCount(Math.floor(target * eased));
            if (progress < 1) requestAnimationFrame(tick);
        };

        requestAnimationFrame(tick);
    };

    const buildLineGraph = (chart) => {
        if (!chart || chart.dataset.graphReady === 'true') return;
        chart.dataset.graphReady = 'true';
        const svg = chart.querySelector('svg');
        const line = chart.querySelector('.seo-line-stroke');
        const fill = chart.querySelector('.seo-line-fill');
        if (!svg || !line || !fill) return;

        const raw = (chart.getAttribute('data-points') || '').split(',').map((n) => Number(n.trim())).filter((n) => Number.isFinite(n));
        if (raw.length < 2) return;

        const min = Math.min(...raw);
        const max = Math.max(...raw);
        const spread = Math.max(max - min, 1);

        const points = raw.map((value, index) => {
            const x = (index / (raw.length - 1)) * 100;
            const y = 34 - ((value - min) / spread) * 28;
            return `${x.toFixed(2)},${y.toFixed(2)}`;
        });

        const linePoints = points.join(' ');
        const fillPoints = `0,40 ${linePoints} 100,40`;
        line.setAttribute('points', linePoints);
        fill.setAttribute('points', fillPoints);

        if (reduceMotion) return;

        const length = line.getTotalLength();
        line.style.strokeDasharray = String(length);
        line.style.strokeDashoffset = String(length);
        requestAnimationFrame(() => {
            line.style.transition = 'stroke-dashoffset 1.4s ease';
            line.style.strokeDashoffset = '0';
        });
    };

    const buildBarsGraph = (chart) => {
        if (!chart || chart.dataset.graphReady === 'true') return;
        chart.dataset.graphReady = 'true';
        const host = chart.querySelector('.seo-bars');
        if (!host) return;

        const values = (chart.getAttribute('data-bars') || '').split(',').map((n) => Number(n.trim())).filter((n) => Number.isFinite(n));
        if (!values.length) return;

        host.innerHTML = '';
        values.forEach((value, index) => {
            const bar = document.createElement('span');
            host.appendChild(bar);
            const clamped = Math.min(Math.max(value, 8), 100);
            if (reduceMotion) {
                bar.style.height = `${clamped}%`;
                return;
            }

            setTimeout(() => {
                bar.style.transition = 'height 900ms cubic-bezier(0.22, 1, 0.36, 1)';
                bar.style.height = `${clamped}%`;
            }, index * 110 + 120);
        });
    };

    const buildDonutGraph = (chart) => {
        if (!chart || chart.dataset.graphReady === 'true') return;
        chart.dataset.graphReady = 'true';
        const donut = chart.querySelector('.seo-donut');
        const label = donut ? donut.querySelector('span') : null;
        if (!donut || !label) return;

        const target = Math.min(Math.max(Number(chart.getAttribute('data-percent')) || 0, 0), 100);

        if (reduceMotion) {
            donut.style.setProperty('--progress', String(target));
            label.textContent = `${target}%`;
            return;
        }

        const duration = 1200;
        const start = performance.now();

        const tick = (time) => {
            const progress = Math.min((time - start) / duration, 1);
            const eased = 1 - Math.pow(1 - progress, 3);
            const value = Math.round(target * eased);
            donut.style.setProperty('--progress', String(value));
            label.textContent = `${value}%`;
            if (progress < 1) requestAnimationFrame(tick);
        };

        requestAnimationFrame(tick);
    };

    const runGraphByType = (chart) => {
        const type = chart.getAttribute('data-graph');
        if (type === 'line') buildLineGraph(chart);
        if (type === 'bars') buildBarsGraph(chart);
        if (type === 'donut') buildDonutGraph(chart);
    };

    const graphItems = document.querySelectorAll('[data-graph]');
    const counters = document.querySelectorAll('[data-count]');

    if (reduceMotion || !('IntersectionObserver' in window)) {
        graphItems.forEach(runGraphByType);
        counters.forEach(animateCounter);
        return;
    }

    const graphObserver = new IntersectionObserver((entries, instance) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            runGraphByType(entry.target);
            instance.unobserve(entry.target);
        });
    }, { threshold: 0.25, rootMargin: '0px 0px -8% 0px' });

    graphItems.forEach((item) => graphObserver.observe(item));

    const counterObserver = new IntersectionObserver((entries, instance) => {
        entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            animateCounter(entry.target);
            instance.unobserve(entry.target);
        });
    }, { threshold: 0.45 });

    counters.forEach((counter) => counterObserver.observe(counter));
}());

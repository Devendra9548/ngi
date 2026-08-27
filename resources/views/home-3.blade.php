@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/home.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

<style>
@import url('https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Familjen+Grotesk:wght@400;500&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box
}

:root {
    --bg: #0b0d12;
    --ink: #eef2fb;
    --muted: #8a93a8;
    --accent: #7aa2ff;
}

.cf {
    padding: clamp(28px, 5vw, 64px) 20px;
    text-align: center;
    overflow: hidden;
}

.cf__eyebrow {
    font-size: .72rem;
    letter-spacing: .32em;
    text-transform: uppercase;
    color: var(--muted)
}

.cf__title {
    font-family: "Instrument Serif", serif;
    font-weight: 400;
    font-size: clamp(2.4rem, 7vw, 4rem);
    margin: .25em 0 .2em;
    letter-spacing: .005em
}

.cf__sub {
    color: var(--muted);
    font-size: .9rem
}

.stage {
    position: relative;
    width: 100%;
    height: clamp(340px, 52vh, 520px);
    margin: clamp(24px, 4vw, 48px) 0 8px;
    perspective: 1600px;
    touch-action: pan-y;
}

.deck {
    position: absolute;
    inset: 0;
    transform-style: preserve-3d;
    cursor: grab;
}

.deck:active {
    cursor: grabbing
}

.slide {
    position: absolute;
    top: 50%;
    left: 50%;
    width: clamp(300px, 36vw, 300px);
    height: clamp(280px, 36vw, 420px);
    margin: 0;
    border-radius: 16px;
    overflow: hidden;
    background: #161a24;
    box-shadow: 0 30px 60px -20px rgba(0, 0, 0, .7), 0 0 0 1px rgba(255, 255, 255, .05) inset;
    transition: transform .6s cubic-bezier(.22, .61, .36, 1), opacity .6s ease;
    will-change: transform, opacity;
    user-select: none;
}

.slide img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    display: block;
    pointer-events: none
}

.slide figcaption {
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    padding: 28px 16px 14px;
    font-family: "Instrument Serif", serif;
    font-size: 1.2rem;
    text-align: left;
    background: linear-gradient(to top, rgba(6, 8, 12, .85), transparent);
    opacity: 0;
    transform: translateY(8px);
    transition: opacity .5s ease, transform .5s ease;
}

.slide.is-active figcaption {
    opacity: 1;
    transform: translateY(0)
}

.slide.is-active {
    box-shadow: 0 40px 80px -24px rgba(0, 0, 0, .85), 0 0 0 1px rgba(122, 162, 255, .35) inset
}

.cf__controls {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 20px;
    margin-top: 6px
}

.nav {
    width: 46px;
    height: 46px;
    border-radius: 50%;
    border: 1px solid rgba(255, 255, 255, .14);
    background: rgba(255, 255, 255, .04);
    color: var(--ink);
    font-size: 1.5rem;
    line-height: 1;
    cursor: pointer;
    display: grid;
    place-items: center;
    transition: transform .25s ease, background .25s ease, border-color .25s ease;
}

.nav:hover {
    background: rgba(122, 162, 255, .16);
    border-color: var(--accent);
    transform: translateY(-2px)
}

.nav:active {
    transform: translateY(0) scale(.94)
}

.dots {
    display: flex;
    gap: 10px;
    align-items: center
}

.dot {
    width: 9px;
    height: 9px;
    border-radius: 50%;
    padding: 0;
    border: none;
    background: #fff !important;
    cursor: pointer;
    transition: transform .3s ease, background .3s ease;
    z-index: 99;
    display: none !important;
}

.dot.is-active {
    background: #318129 !important;
    transform: scale(1.5)
}

.cf {
    background: #fde7e7;
    height: 600px
}

.cf .content-inner {
    width: 100% !important;
}

.cf .content-inner h1,
.cf .content-inner p {
    text-align: left !important;
}

.cf .nav {
    background: #31812985 !important;
    color: #fff !important;
    z-index: 99 !important;
    justify-content: center !important;
    font-size: 30px !important;
    padding: 0px !important;
    align-items: center !important;
}


@media (max-width:520px) {
    .cf__controls {
        gap: 12px
    }
}
</style>

@endsection
@section('body')

<section class="hero-section d-flex align-items-center">
    <div class="container-fluid pb-5">
        <div class="content-inner">
            <h1>Let's Build Futures, Not Just Schools - <span>Rajasthan Model</span></h1>
            <p>Let's build futures, not just schools. Together, we can give every child a childhood worth remembering.
            </p>
            <div class="btngroup d-flex align-items-center">
                <a href="#" class="globalbtn btn-1 me-2">Donate Now</a>
                <a href="#" class="globalbtn btn-2">About Us</a>
            </div>
        </div>
    </div>
</section>


<!-- <section class="cf hero-section" aria-label="3D coverflow carousel">
    <div class="layerbg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 col-md-5 d-flex align-items-center">
                    <div class="content-inner">
                        <h1>Let's Build Futures, Not Just Schools - <span>Rajasthan Model</span></h1>
                        <p>Let's build futures, not just schools. Together, we can give every child a childhood worth
                            remembering.
                        </p>
                        <div class="btngroup d-flex align-items-center">
                            <a href="#" class="globalbtn btn-1 me-2">Donate Now</a>
                            <a href="#" class="globalbtn btn-2">About Us</a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-7">
                    <div class="stage" id="stage">
                        <div class="deck" id="deck">
                            <figure class="slide"><img src="/assets/imgs/1/1.webp" alt="Nebula" draggable="false">
                                <figcaption>Nebula</figcaption>
                            </figure>
                            <figure class="slide"><img src="/assets/imgs/1/2.webp" alt="Ridge" draggable="false">
                                <figcaption>Ridge</figcaption>
                            </figure>
                            <figure class="slide"><img src="/assets/imgs/1/3.webp" alt="Harbor" draggable="false">
                                <figcaption>Harbor</figcaption>
                            </figure>
                            <figure class="slide"><img src="/assets/imgs/1/4.webp" alt="Atrium" draggable="false">
                                <figcaption>Atrium</figcaption>
                            </figure>
                            <figure class="slide"><img src="/assets/imgs/1/5.webp" alt="Dunes" draggable="false">
                                <figcaption>Dunes</figcaption>
                            </figure>
                            <figure class="slide"><img src="/assets/imgs/1/6.webp" alt="Monolith" draggable="false">
                                <figcaption>Monolith</figcaption>
                            </figure>
                            <figure class="slide"><img src="/assets/imgs/1/7.webp" alt="Aurora" draggable="false">
                                <figcaption>Aurora</figcaption>
                            </figure>
                        </div>
                    </div>

                    <div class="cf__controls">
                        <button class="nav" id="prev" aria-label="Previous">&#8249;</button>
                        <div class="dots" id="dots" role="tablist" aria-label="Slides"></div>
                        <button class="nav" id="next" aria-label="Next">&#8250;</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->


@endsection
@section('customjs')
<script>
(function() {
    const deck = document.getElementById('deck');
    const slides = Array.from(deck.querySelectorAll('.slide'));
    const dotsWrap = document.getElementById('dots');
    const stage = document.getElementById('stage');
    const N = slides.length;

    let index = 0;
    let dragging = false;
    let startX = 0;
    let dragDX = 0;
    let moved = false;

    // Build dots
    const dots = slides.map((_, i) => {
        const b = document.createElement('button');
        b.className = 'dot';
        b.setAttribute('role', 'tab');
        b.setAttribute('aria-label', 'Go to slide ' + (i + 1));
        b.addEventListener('click', () => go(i));
        dotsWrap.appendChild(b);
        return b;
    });

    // Shortest signed distance from active index on a ring of N slides
    function offset(i) {
        let d = i - index;
        d -= Math.round(d / N) * N;
        return d;
    }

    function render(dragShift) {
        dragShift = dragShift || 0;
        slides.forEach((slide, i) => {
            const off = offset(i) + dragShift;
            const abs = Math.abs(off);
            const sign = off < 0 ? -1 : 1;
            const tx = off * 58; // % horizontal spread
            const tz = -Math.min(abs, 3.2) * 160; // push back
            const ry = Math.max(-1, Math.min(1, off)) * -42; // rotate side cards
            const scale = Math.max(0.62, 1 - abs * 0.12);
            const opacity = abs > 3.4 ? 0 : Math.max(0.12, 1 - abs * 0.26);
            const zi = 100 - Math.round(abs * 10);
            slide.style.transform =
                `translate(-50%,-50%) translateX(${tx}%) translateZ(${tz}px) rotateY(${ry * (sign ? 1 : 1)}deg) scale(${scale})`;
            slide.style.opacity = opacity;
            slide.style.zIndex = zi;
            slide.classList.toggle('is-active', i === index && !dragShift);
        });
        dots.forEach((d, i) => d.classList.toggle('is-active', i === index));
    }

    function go(i) {
        index = ((i % N) + N) % N;
        render();
    }
    const next = () => go(index + 1);
    const prev = () => go(index - 1);

    document.getElementById('next').addEventListener('click', next);
    document.getElementById('prev').addEventListener('click', prev);

    // Keyboard
    window.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowRight') {
            next();
        } else if (e.key === 'ArrowLeft') {
            prev();
        }
    });

    // Click a side slide to focus it
    slides.forEach((slide, i) => {
        slide.addEventListener('click', () => {
            if (!moved && i !== index) go(i);
        });
    });

    // Pointer drag / swipe
    const SLIDE_W = () => Math.max(160, stage.clientWidth * 0.32);

    function onDown(e) {
        dragging = true;
        moved = false;
        startX = e.clientX;
        dragDX = 0;
        deck.style.transition = 'none';
        stopAuto();
        deck.setPointerCapture && deck.setPointerCapture(e.pointerId);
    }

    function onMove(e) {
        if (!dragging) return;
        dragDX = e.clientX - startX;
        if (Math.abs(dragDX) > 2) moved = true;
        render(-dragDX / SLIDE_W());
    }

    function onUp() {
        if (!dragging) return;
        dragging = false;
        const shift = Math.round(-dragDX / SLIDE_W());
        if (shift !== 0) go(index + shift);
        else render();
        startAuto();
    }

    deck.addEventListener('pointerdown', onDown);
    window.addEventListener('pointermove', onMove);
    window.addEventListener('pointerup', onUp);
    window.addEventListener('pointercancel', onUp);

    // Autoplay, paused on hover
    let timer = null;

    function startAuto() {
        stopAuto();
        timer = setInterval(next, 3800);
    }

    function stopAuto() {
        if (timer) {
            clearInterval(timer);
            timer = null;
        }
    }
    stage.addEventListener('pointerenter', stopAuto);
    stage.addEventListener('pointerleave', startAuto);

    render();
    startAuto();
})();
</script>
@endsection
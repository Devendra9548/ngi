@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/home.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
<link rel="preload" href="/assets/imgs/2/1.webp" as="image" type="image/webp">
<style>
.ngo-preloader-bg {
    position: fixed;
    inset: 0;
    width: 100vw;
    height: 100vh;
    background: radial-gradient(circle at center, #ffffff 40%, #f4f9f6 100%);
    z-index: 9999999;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: opacity 0.8s cubic-bezier(0.65, 0, 0.35, 1), visibility 0.8s ease;
}

.ngo-preloader-bg.fade-out {
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
}

#ngo-preloader {
    background: #fff;
    background-size: cover;
    background-repeat: no-repeat;
    background-position: center center;
}

.preloader-container {
    position: relative;
    display: flex;
    flex-direction: column;
    align-items: center;
}

.ngo-preloader-bg .notebook-img {
    position: absolute;
    left: 0px;
}

.orbit-stage {
    position: relative;
    width: 320px;
    height: 240px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.orbit-ring {
    position: absolute;
    border-radius: 50%;
    pointer-events: none;
}

.ring-1 {
    width: 280px;
    height: 280px;
    border: 2px dashed rgba(0, 194, 94, 0.3);
    animation: rotateClockwise 8s linear infinite;
}

.ring-2 {
    width: 310px;
    height: 310px;
    border: 1.5px solid rgba(11, 67, 113, 0.15);
    animation: rotateCounterClockwise 11s linear infinite;
}

.orbit-dot {
    position: absolute;
    border-radius: 50%;
}

.dot-green {
    width: 16px;
    height: 16px;
    background: #00c25e;
    box-shadow: 0 0 14px #00c25e, 0 0 30px rgba(0, 194, 94, 0.6);
    top: 14px;
    left: 45px;
    display: none !important;
}

.dot-blue {
    width: 14px;
    height: 14px;
    background: #0b4371;
    box-shadow: 0 0 14px #0b4371, 0 0 25px rgba(11, 67, 113, 0.5);
    bottom: 25px;
    right: 40px;
    display: none !important;
}

.logo-core {
    position: relative;
    z-index: 2;
    animation: breatheLogo 3s ease-in-out infinite alternate;
}

.ngo-logo {
    max-width: 260px;
    height: auto;
    display: block;
    filter: drop-shadow(0 12px 25px rgba(0, 80, 40, 0.12));
}

.counter-display {
    font-size: 2.2rem;
    font-weight: 800;
    font-family: system-ui, -apple-system, "Segoe UI", Roboto, sans-serif;
    color: #0b4371;
    letter-spacing: -0.5px;
}

.percent-symbol {
    font-size: 1.3rem;
    color: #00c25e;
    margin-left: 2px;
}

.ngo-progress-bar-wrapper {
    width: 220px;
    height: 6px;
    background: #e6edf2;
    border-radius: 20px;
    overflow: hidden;
    margin-top: 6px;
}

.ngo-progress-bar-fill {
    width: 0%;
    height: 100%;
    background: linear-gradient(90deg, #0b4371, #00c25e);
    border-radius: 20px;
    transition: width 0.15s ease-out;
}

.tagline-wrapper {
    min-height: 32px;
    display: flex;
    align-items: center;
    justify-content: center;
}

.typewriter-headline {
    font-size: 1.25rem;
    font-weight: 600;
    color: #2b394a;
    letter-spacing: 0.5px;
}

.cursor-blink {
    font-size: 1.3rem;
    font-weight: 700;
    color: #00c25e;
    margin-left: 3px;
    animation: blinkCursor 0.7s infinite;
}

@keyframes rotateClockwise {
    from {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(360deg);
    }
}

@keyframes rotateCounterClockwise {
    from {
        transform: rotate(0deg);
    }

    to {
        transform: rotate(-360deg);
    }
}

@keyframes breatheLogo {
    0% {
        transform: scale(0.98);
    }

    100% {
        transform: scale(1.03);
    }
}

@keyframes blinkCursor {

    0%,
    100% {
        opacity: 1;
    }

    50% {
        opacity: 0;
    }
}

@media (max-width: 991.98px) {
    .orbit-stage {
        width: 280px;
        height: 220px;
    }

    .ring-1 { width: 250px; height: 250px; }
    .ring-2 { width: 275px; height: 275px; }

    .ngo-logo { max-width: 220px; }

    .counter-display { font-size: 2rem; }
    .typewriter-headline { font-size: 1.1rem; }
}

/* ===== Mobile (<= 767px) ===== */
@media (max-width: 767.98px) {
    .ngo-preloader-bg {
        height: 100% !important;
    display: block;
    padding-top: 128px;
    }

    .preloader-container {
        padding: 0 16px;
        width: 100%;
        text-align: center;
    }

    .ngo-preloader-bg .notebook-img {
        display: none !important;
    }

    .orbit-stage {
        width: 240px;
        height: 190px;
    }

    .ring-1 { width: 210px; height: 210px; border-width: 1.5px; }
    .ring-2 { width: 232px; height: 232px; border-width: 1px; }

    .ngo-logo {
        max-width: 180px;
        filter: drop-shadow(0 8px 18px rgba(0, 80, 40, 0.12));
    }

    .counter-display { font-size: 1.7rem; }
    .percent-symbol { font-size: 1.1rem; }

    .ngo-progress-bar-wrapper {
        width: 70%;
        max-width: 220px;
        height: 5px;
    }

    .tagline-wrapper {
        min-height: 44px;      /* 2 line text aaye to jump na kare */
        padding: 0 10px;
    }

    .typewriter-headline {
        font-size: 1rem;
        letter-spacing: 0.3px;
        line-height: 1.35;
        text-align: center;
    }

    .cursor-blink { font-size: 1.1rem; }
}

/* ===== Chhote phones (<= 480px) ===== */
@media (max-width: 480px) {
    .orbit-stage {
        width: 210px;
        height: 170px;
    }

    .ring-1 { width: 185px; height: 185px; }
    .ring-2 { width: 205px; height: 205px; }

    .ngo-logo { max-width: 155px; }

    .counter-display { font-size: 1.5rem; }
    .typewriter-headline { font-size: 0.92rem; }
}

/* ===== Bahut chhoti screen (<= 360px) ===== */
@media (max-width: 360px) {
    .orbit-stage { width: 190px; height: 155px; }
    .ring-1 { width: 170px; height: 170px; }
    .ring-2 { width: 188px; height: 188px; }

    .ngo-logo { max-width: 135px; }
    .typewriter-headline { font-size: 0.85rem; }
}

/* ===== Landscape mode (phone aadha ghuma ho) ===== */
@media (max-height: 480px) and (orientation: landscape) {
    .orbit-stage { width: 190px; height: 130px; }
    .ring-1 { width: 150px; height: 150px; }
    .ring-2 { width: 170px; height: 170px; }

    .ngo-logo { max-width: 120px; }
    .counter-display { font-size: 1.3rem; }
    .tagline-wrapper { min-height: 24px; }
    .typewriter-headline { font-size: 0.85rem; }
}

/* ===== Optional: kam motion pasand karne walon ke liye ===== */
@media (prefers-reduced-motion: reduce) {
    .ring-1, .ring-2, .logo-core { animation: none; }
}



.torn-edge{
  width:100%;
  height:60px;
  margin-top:-59px;      /* banner ke upar overlap */
  position:relative;
  z-index:5;
  line-height:0;
  filter:drop-shadow(0 -3px 4px rgba(0,0,0,.25));  /* paper ka shadow */
}
.torn-edge svg{width:100%;height:100%;display:block}

@media(max-width:768px){
  .torn-edge{
    height:36px;
    margin-top:-35px;
   }
}
</style>
@endsection
@section('body')
<div id="ngo-preloader" class="ngo-preloader-bg">
    <img src="{{ asset('assets/1.webp') }}" class="notebook-img" alt="preloader" width="100%" fetchpriority="high"
        loading="eager">
    <div class="preloader-container text-center">
        <div class="orbit-stage">
            <div class="orbit-ring ring-1">
                <span class="orbit-dot dot-green"></span>
            </div>
            <div class="orbit-ring ring-2">
                <span class="orbit-dot dot-blue"></span>
            </div>
            <div class="logo-core">
                <img src="{{ asset('assets/imgs/NGI-Logo.webp') }}" alt="NextGen Impact" class="ngo-logo">
            </div>
        </div>
        <div class="counter-display mt-4">
            <span id="load-count">0</span><span class="percent-symbol">%</span>
        </div>
        <div class="ngo-progress-bar-wrapper">
            <div id="ngo-progress-fill" class="ngo-progress-bar-fill"></div>
        </div>
        <div class="tagline-wrapper mt-3">
            <span id="typewriter-text" class="typewriter-headline"></span>
            <span class="cursor-blink">|</span>
        </div>
    </div>
</div>

<section class="first-hero-section">
    <picture>
        <source media="(max-width: 767px)" srcset="/assets/imgs/banners/new/7.webp">
        <source media="(min-width: 768px)" srcset="/assets/imgs/banners/new/7.webp">
        <img src="/assets/imgs/banners/new/7.webp" alt="Banner" width="100%">
    </picture>
    <picture>
        <source media="(max-width: 767px)" srcset="/assets/imgs/banners/new/5.webp">
        <source media="(min-width: 768px)" srcset="/assets/imgs/banners/new/5.webp">
        <img src="/assets/imgs/banners/new/5.webp" alt="Banner" width="100%">
    </picture>

    <picture>
        <source media="(max-width: 767px)" srcset="/assets/imgs/banners/new/6.webp">
        <source media="(min-width: 768px)" srcset="/assets/imgs/banners/new/6.webp">
        <img src="/assets/imgs/banners/new/6.webp" alt="Banner" width="100%">
    </picture>
</section>

<div class="torn-edge">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path fill="#dfe8e2" transform="translate(0,-7)"
      d="M0,38 L34,30 L66,40 L98,27 L132,37 L160,29 L196,41 L228,32 L262,43 L290,30 L326,38 L356,26 L392,36 L424,29 L458,42 L490,33 L524,40 L556,28 L592,37 L624,30 L660,43 L694,32 L728,39 L760,27 L796,36 L830,31 L862,42 L898,29 L930,38 L964,28 L998,41 L1030,33 L1064,40 L1096,27 L1130,37 L1162,30 L1198,43 L1230,32 L1264,39 L1296,28 L1330,36 L1362,31 L1396,42 L1440,33 L1440,60 L0,60Z"/>
    <path fill="#ffffff"
      d="M0,40 L30,32 L58,41 L90,28 L118,38 L150,30 L185,42 L215,33 L250,44 L280,31 L312,39 L345,27 L378,37 L410,30 L445,43 L478,34 L510,41 L545,29 L580,38 L612,31 L648,44 L680,33 L715,40 L748,28 L785,37 L818,32 L850,43 L885,30 L918,39 L950,29 L985,42 L1018,34 L1050,41 L1085,28 L1118,38 L1150,31 L1185,44 L1218,33 L1250,40 L1285,29 L1318,37 L1350,32 L1385,43 L1415,34 L1440,38 L1440,60 L0,60Z"/>
  </svg>
</div>

<section class="first-section scroll-section">
    <div class="container">
        <div class="about-clm text-center">
            <div class="title ct-tooltip" data-animate="fade-left">About Us</div>
            <h2 data-animate="fade-right">Build My School Mission <span>- INDIA</span></h2>
            <h3 data-animate="fade-left" class="subheading">- NextGen Impact</h3>
            <p data-animate="fade-right" data-delay="2">"Let's not just build school, let's build a childhood worth
                remembering"</p>
        </div>
        <div class="row imgs-row mt-3">
            <div class="col-6 col-md" data-animate="fade-top" data-delay="1">
                <img src="/assets/imgs/about/1.webp" alt="1" width="100%">
                <p>Digital <br>Learning</p>
            </div>
            <div class="col-6 col-md" data-animate="fade-top" data-delay="2">
                <img src="/assets/imgs/about/2.webp" alt="1" width="100%">
                <p>Safe Drinking<br> Water</p>
            </div>
            <div class="col-6 col-md" data-animate="fade-top" data-delay="3">
                <img src="/assets/imgs/about/3.webp" alt="1" width="100%">
                <p>Faculty <br>Training</p>
            </div>
            <div class="col-6 col-md" data-animate="fade-top" data-delay="4">
                <img src="/assets/imgs/about/4.jpeg" alt="1" width="100%">
                <p>Better <br>Classrooms</p>
            </div>
            <div class="col-6 col-md" data-animate="fade-top" data-delay="5">
                <img src="/assets/imgs/about/5.jpeg" alt="1" width="100%">
                <p>Sustainable <br>Impact</p>
            </div>
        </div>
    </div>
</section>

<section class="second-section scroll-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 order-2 order-md-1">
                <img src="/assets/imgs/1/student-reading.webp" alt="6" width="100%" clsas="mt-3">
            </div>
            <div class="col-12 col-md-6 ps-md-4 order-1 order-md-2">
                <h2 data-animate="fade-left" data-delay="9">NextGen Impact <span> - A Unit of Earth Initiative
                        Foundation</span></h2>
                <p class="mb-2" data-animate="fade-left" data-delay="11">Earth Initiative Foundation is a registered
                    non-governmental organization working to
                    strengthen education and child development through Corporate Social Responsibility initiatives. </p>
                <p data-animate="fade-left" data-delay="9">Under its flagship CSR programme, NextGen Impact, the
                    Foundation launched the Build My School Mission
                    in Rajasthan to create safe, inspiring and technology-enabled learning environments for children
                    from rural and economically weaker backgrounds.</p>
                <a href="#" class="globalbtn" data-animate="fade-left" data-delay="11">Read Our Story</a>
            </div>
        </div>
    </div>
</section>

<div class="torn-edge">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path fill="#dfe8e2" transform="translate(0,-7)"
      d="M0,38 L34,30 L66,40 L98,27 L132,37 L160,29 L196,41 L228,32 L262,43 L290,30 L326,38 L356,26 L392,36 L424,29 L458,42 L490,33 L524,40 L556,28 L592,37 L624,30 L660,43 L694,32 L728,39 L760,27 L796,36 L830,31 L862,42 L898,29 L930,38 L964,28 L998,41 L1030,33 L1064,40 L1096,27 L1130,37 L1162,30 L1198,43 L1230,32 L1264,39 L1296,28 L1330,36 L1362,31 L1396,42 L1440,33 L1440,60 L0,60Z"/>
    <path fill="#ffffff"
      d="M0,40 L30,32 L58,41 L90,28 L118,38 L150,30 L185,42 L215,33 L250,44 L280,31 L312,39 L345,27 L378,37 L410,30 L445,43 L478,34 L510,41 L545,29 L580,38 L612,31 L648,44 L680,33 L715,40 L748,28 L785,37 L818,32 L850,43 L885,30 L918,39 L950,29 L985,42 L1018,34 L1050,41 L1085,28 L1118,38 L1150,31 L1185,44 L1218,33 L1250,40 L1285,29 L1318,37 L1350,32 L1385,43 L1415,34 L1440,38 L1440,60 L0,60Z"/>
  </svg>
</div>

<section class="third-section scroll-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 d-flex align-items-center order-2 order-md-1">
                <div class="content">
                    <h2 class="mb-4" data-animate="fade-left" data-delay="2">Our Future Goal - <span>Building Better
                            Schools, Across India</span></h2>
                    <p class="mb-3" data-animate="fade-right" data-delay="2">The Build My School Mission begins with
                        strengthening government schools in
                        underserved communities. With a vision to expand to more schools, NextGen Impact is working
                        towards a future where every child can learn in an environment that inspires curiosity,
                        creativity and confidence.</p>
                    <p class="mb-4" data-animate="fade-left" data-delay="2">Expand the Build My School Mission to more
                        government schools, creating safe,
                        inspiring and technology-enabled learning spaces for children across India.</p>
                    <a href="#" class="globalbtn" data-animate="fade-top" data-delay="2">Read Our Story</a>
                </div>
            </div>
            <div class="col-12 col-md-6 order-1 order-md-2">
                <div id="india-map"></div>
                <div id="state-tooltip"></div>

            </div>
        </div>
    </div>
</section>

<section class="fourth-section scroll-section">
    <div class="main-row">
        <div class="left-img">
            <img src="/assets/imgs/web/DSC_0022.webp" alt="left" width="100%">
        </div>
        <div class="right-content">
            <div class="inner-content">
                <h2 class="mb-3" data-animate="fade-top" data-delay="2">Every Number Tells <span class="subheading">A
                        Story</span></h2>
                <p data-animate="fade-bottom" data-delay="2">A focused intervention across <strong>government schools in
                        rural Rajasthan</strong> is creating
                    better opportunities for children through digital learning, safe drinking water and teacher
                    training.</p>
            </div>
            <div class="row mt-5">
                <div class="col-6 col-md-4 mb-5 text-center">
                    <h2 class="counter" data-target="3">3</h2>
                    <p>Government Schools Covered</p>
                </div>

                <div class="col-6 col-md-4 mb-5 text-center">
                    <h2 class="counter" data-target="2">2</h2>
                    <p>Districts <br> Reached</p>
                </div>

                <div class="col-6 col-md-4 mb-5 text-center">
                    <h2 class="counter" data-target="3">3</h2>
                    <p>AI Interactive Smartboards Installed</p>
                </div>
                <div class="col-6 col-md-4 mb-5 text-center">
                    <h2 class="counter" data-target="3">3</h2>
                    <p>RO Water Coolers Installed</p>
                </div>

                <div class="col-6 col-md-4 mb-5 text-center">
                    <h2 class="counter" data-target="2">2</h2>
                    <p>Schools with Faculty Training</p>
                </div>

                <div class="col-6 col-md-4 mb-5 text-center">
                    <h2 class="counter" data-target="1">1</h2>
                    <p>Mission for Better Childhood</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="story-section scroll-section">
    <div class="container">
        <div class="row">
            <div class="about-clm text-center">
                <h2>Success <span>Stories</span></h2>
                <div class="row mt-4">
                    <div class="col-12 col-md-3" data-animate="fade-bottom" data-delay="2">
                        <div class="story-box">
                            <img src="/assets/imgs/1/20.webp" alt="20" width="100%">
                            <div class="content">
                            <h3>Smart Learning Begins</h3>
                            <p>AI Interactive Flat Panel Displays were installed to make classroom learning more
                                engaging, interactive and effective.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3" data-animate="fade-bottom" data-delay="3">
                        <div class="story-box">
                            <img src="/assets/imgs/1/21.jpg" alt="20" width="100%">
                            <div class="content">
                            <h3>Safe Drinking Water</h3>
                            <p>RO-enabled water coolers were installed to provide students and staff with safe and clean
                                drinking water.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3" data-animate="fade-bottom" data-delay="4">
                        <div class="story-box">
                            <img src="/assets/imgs/1/22.png" alt="20" width="100%">
                            <div class="content">
                            <h3>Empowering Teachers</h3>
                            <p>Faculty received hands-on orientation on operating and using Smartboards effectively in
                                classroom teaching.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3" data-animate="fade-bottom" data-delay="5">
                        <div class="story-box">
                            <img src="/assets/imgs/1/23.png" alt="20" width="100%">
                            <div class="content">
                            <h3>Better Learning Environment</h3>
                            <p>The initiative is helping create more inspiring, safe and technology-enabled learning
                                spaces for rural children.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="readmore text-center mt-md-5">
                    <a href="#" class="globalbtn">Read More Stories</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-work-section scroll-section">
    <div class="container">
        <div class="about-clm text-center">
            <div class="title ct-tooltip" data-animate="fade-left" data-delay="2">Our Work</div>
            <h2 data-animate="fade-right" data-delay="2">Our Areas of <span>Impact</span></h2>
        </div>
        <div class="row text-center mt-5">
            <div class="col-6 col-md-3" data-animate="fade-left" data-delay="2">
                <img src="/assets/imgs/works/1.webp" alt="first" width="60%">
                <p class="first">EDUCATION </p>
            </div>
            <div class="col-6 col-md-3" data-animate="fade-left" data-delay="3">
                <img src="/assets/imgs/works/2.webp" alt="second" width="60%">
                <p class="second">SAFE WATER </p>
            </div>
            <div class="col-6 col-md-3" data-animate="fade-left" data-delay="4">
                <img src="/assets/imgs/works/3.webp" alt="third" width="60%">
                <p class="third">FACULTY DEVELOPMENT </p>
            </div>
            <div class="col-6 col-md-3" data-animate="fade-left" data-delay="5">
                <img src="/assets/imgs/works/4.webp" alt="fourth" width="60%">
                <p class="fourth">CHILD DEVELOPMENT </p>
            </div>
        </div>
    </div>
    <div class="video-clm text-center mt-5">
        <video autoplay muted loop playsinline preload="metadata" width="56%">
            <source src="/assets/videos/2.mp4" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </div>
</section>

<section class="fifth-section scroll-section">
    <div class="container">
        <h2 class="text-center mb-4"><i>"At NextGen Impact, we believe that better infrastructure can create better
                opportunities for children to learn, explore and grow."</i></h2>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="img-box">
                    <img src="/assets/imgs/web/DSC_0231.webp" alt="2" width="100%">
                    <h3>Be Part of the Mission.<span></span></h3>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="right-img-box">
                    <img src="/assets/imgs/web/DSC_0181.webp" alt="11" width="48%" class="me-3">
                    <img src="/assets/imgs/web/DSC_0263.webp" alt="12" width="48%">
                </div>
                <div class="content-box">
                    <h3 class="first">Together, we can help create government schools where children have access to
                        better learning technology, safe drinking water and supportive learning environments.</h3>
                    <h3 class="number">3 Schools</h3>
                    <h3 class="last"><strong>Already supported through the Build My School Mission - India. </strong>
                    </h3>
                    <a href="#" class="globalbtn">Support the Mission - Donate Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="img-fluid text-center image-two-girs">
    <img src="/assets/imgs/bg-girls.png" alt="bg-girls" width="64%">
</div>

<section class="cta-section">
    <div class="container-fluid">
        <h2 class="text-center" data-animate="fade-top">Take <span>Actions</span></h2>
        <div class="row">
            <div class="col-12 col-md-6 text-center inner-clms" data-animate="fade-left">
                <img src="/assets/imgs/1/21.webp" alt="21" width="100%">
                <a href="#" class="globalbtn">Support a School <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="col-12 col-md-6 text-center inner-clms" data-animate="fade-right">
                <img src="/assets/imgs/1/22.webp" alt="22" width="100%">
                <a href="#" class="globalbtn">Join the Mission <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<div class="torn-edge">
  <svg viewBox="0 0 1440 60" preserveAspectRatio="none" xmlns="http://www.w3.org/2000/svg">
    <path fill="#dfe8e2" transform="translate(0,-7)"
      d="M0,38 L34,30 L66,40 L98,27 L132,37 L160,29 L196,41 L228,32 L262,43 L290,30 L326,38 L356,26 L392,36 L424,29 L458,42 L490,33 L524,40 L556,28 L592,37 L624,30 L660,43 L694,32 L728,39 L760,27 L796,36 L830,31 L862,42 L898,29 L930,38 L964,28 L998,41 L1030,33 L1064,40 L1096,27 L1130,37 L1162,30 L1198,43 L1230,32 L1264,39 L1296,28 L1330,36 L1362,31 L1396,42 L1440,33 L1440,60 L0,60Z"/>
    <path fill="#ffffff"
      d="M0,40 L30,32 L58,41 L90,28 L118,38 L150,30 L185,42 L215,33 L250,44 L280,31 L312,39 L345,27 L378,37 L410,30 L445,43 L478,34 L510,41 L545,29 L580,38 L612,31 L648,44 L680,33 L715,40 L748,28 L785,37 L818,32 L850,43 L885,30 L918,39 L950,29 L985,42 L1018,34 L1050,41 L1085,28 L1118,38 L1150,31 L1185,44 L1218,33 L1250,40 L1285,29 L1318,37 L1350,32 L1385,43 L1415,34 L1440,38 L1440,60 L0,60Z"/>
  </svg>
</div>

<section class="clinic-testimonial-section my-md-5 scroll-section">
    <div class="testimonial-bg-title">
        Testimonials
    </div>

    <div class="testimonial-images testimonial-left">
        <div class="test-img img-1">
            <img src="/assets/imgs/reviews/1.webp" alt="Patient">
        </div>

        <div class="test-img img-2">
            <img src="/assets/imgs/reviews/2.webp" alt="Patient">
        </div>

        <div class="test-img img-3">
            <img src="/assets/imgs/reviews/3.webp" alt="Patient">
        </div>

        <div class="test-img img-4">
            <img src="/assets/imgs/reviews/4.webp" alt="Patient">
        </div>

        <div class="test-img img-5">
            <img src="/assets/imgs/reviews/5.webp" alt="Patient">
        </div>

    </div>


    <!-- Right Images -->
    <div class="testimonial-images testimonial-right">

        <div class="test-img img-6">
            <img src="/assets/imgs/reviews/6.webp" alt="Patient">
        </div>

        <div class="test-img img-7">
            <img src="/assets/imgs/reviews/7.webp" alt="Patient">
        </div>

        <div class="test-img img-8">
            <img src="/assets/imgs/reviews/8.webp" alt="Patient">
        </div>

        <div class="test-img img-9">
            <img src="/assets/imgs/reviews/9.webp" alt="Patient">
        </div>

        <div class="test-img img-10">
            <img src="/assets/imgs/reviews/2.webp" alt="Patient">
        </div>

    </div>


    <!-- Main Content -->
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-7 col-md-9">
                <div class="testimonial-content">
                    <div class="testimonial-heading">
                        <h2>What Donor <span>Says</span></h2>
                    </div>
                    <div class="testimonial-slider">

                        <div class="testimonial-slide">
                            <p class="testimonial-text">
                                I truly appreciate Bal Raksha Bharat for the incredible work they do in standing up for
                                those in need. It’s heartening to see how small acts of kindness can bring real change.
                                When each of us contributes in our own way, we help build a more caring and united
                                world.
                            </p>
                            <div class="testimonial-author">
                                <span>–</span>
                                Pradhuman Gangwar,
                                <strong>Gujarat</strong>
                            </div>
                        </div>


                        <div class="testimonial-slide">
                            <p class="testimonial-text">
                                It’s a simple contribution from my end, but it brings me immense happiness and
                                fulfillment. I truly admire the heartfelt efforts of your organization in uplifting
                                children in need. Your selfless service is inspiring, and I hope more people come
                                forward to support this cause.
                            </p>
                            <div class="testimonial-author">
                                <span>–</span>
                                Rahul Sharma,
                                <strong>Delhi</strong>
                            </div>
                        </div>

                        <div class="testimonial-slide">
                            <p class="testimonial-text">
                                I truly appreciate Bal Raksha Bharat for the incredible work they do in standing up for
                                those in need. It’s heartening to see how small acts of kindness can bring real change.
                                When each of us contributes in our own way, we help build a more caring and united
                                world.
                            </p>
                            <div class="testimonial-author">
                                <span>–</span>
                                Ankit Joshi,
                                <strong>Uttarakhand</strong>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

<section class="story-section scroll-section">
    <div class="container">
        <div class="row">
            <div class="about-clm text-center">
                <h2>Our <span>Blogs</span></h2>
                <div class="row mt-4">
                    <div class="col-12 col-md-3">
                        <div class="story-box">
                            <img src="/assets/imgs/1/20.webp" alt="20" width="100%">
                            <div class="content">
                            <h3>Build My School Mission – India</h3>
                            <p>An overview of the initiative and its vision for rural government schools.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="story-box">
                            <img src="/assets/imgs/1/21.jpg" alt="20" width="100%">
                            <div class="content">
                            <h3>Bringing Smart Learning to Rural Schools</h3>
                            <p>How AI Interactive Flat Panel Displays can make classroom learning more engaging.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="story-box">
                            <img src="/assets/imgs/1/22.png" alt="20" width="100%">
                            <div class="content">
                            <h3>Safe Drinking Water in Schools</h3>
                            <p>Strengthening basic student amenities through RO-enabled water coolers.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="story-box">
                            <img src="/assets/imgs/1/23.png" alt="20" width="100%">
                            <div class="content">
                            <h3>Empowering Teachers Through Technology</h3>
                            <p>Faculty orientation for effective classroom use of Smartboards.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="readmore text-center mt-md-5">
                    <a href="#" class="globalbtn">Read More Stories</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="br-faq-section scroll-section">
    <div class="container-fluid">
        <div class="br-faq-wrapper row">
            <div class="br-faq-visual col-md-6">
                <div class="br-question-mark">?</div>
            </div>
            <div class="br-faq-content col-md-6">
                <h2 class="br-faq-title">FAQs</h2>
                <div class="br-faq-list">
                    <div class="br-faq-item">
                        <button class="br-faq-question">
                            <span class="br-faq-icon">+</span>
                            <span>What is the Build My School Mission?</span>
                        </button>
                        <div class="br-faq-answer">
                            <p>Build My School Mission is an initiative under NextGen Impact focused on strengthening
                                government schools in underserved rural areas through improved learning infrastructure
                                and basic student amenities.</p>
                        </div>
                    </div>
                    <div class="br-faq-item">
                        <button class="br-faq-question">
                            <span class="br-faq-icon">+</span>
                            <span>Where has the project been implemented?</span>
                        </button>

                        <div class="br-faq-answer">
                            <p>The project has been implemented across three government schools in Churu and Nagaur
                                districts of Rajasthan.</p>
                        </div>
                    </div>
                    <div class="br-faq-item">
                        <button class="br-faq-question">
                            <span class="br-faq-icon">+</span>
                            <span>What facilities were provided?</span>
                        </button>
                        <div class="br-faq-answer">
                            <p>Each school received an AI Interactive Flat Panel Display (Smartboard) and a water cooler
                                with RO unit.</p>
                        </div>
                    </div>
                    <div class="br-faq-item">
                        <button class="br-faq-question">
                            <span class="br-faq-icon">+</span>
                            <span>Was teacher training provided?</span>
                        </button>
                        <div class="br-faq-answer">
                            <p>Yes. Hands-on orientation was conducted for school faculty on operating and effectively
                                using the Smartboard.</p>
                        </div>
                    </div>
                    <div class="br-faq-item">
                        <button class="br-faq-question">
                            <span class="br-faq-icon">+</span>
                            <span>What is the expected impact?</span>
                        </button>
                        <div class="br-faq-answer">
                            <p>The project aims to improve classroom engagement, access to safe drinking water, teaching
                                capacity and the overall learning environment.</p>
                        </div>
                    </div>
                    <div class="br-faq-item">
                        <button class="br-faq-question">
                            <span class="br-faq-icon">+</span>
                            <span>Who are the CSR partners?</span>
                        </button>
                        <div class="br-faq-answer">
                            <p>GEM Enviro Management Ltd. (Green Earth Movement) and Securocrop are the CSR partners
                                supporting the initiative.</p>
                        </div>
                    </div>
                    <!-- <div class="br-faq-item">
                    <button class="br-faq-question">
                        <span class="br-faq-icon">+</span>
                        <span>HOW SAFE IS MY PERSONAL INFORMATION WITH NextGen Impact?</span>
                    </button>
                    <div class="br-faq-answer">
                        <p>
                            Personal information should be handled according to the
                            organization's privacy policy and applicable data protection laws.
                        </p>
                    </div>
                </div> -->
                </div>
            </div>
        </div>
    </div>
</section>


@endsection
@section('customjs')
<script src="https://cdn.jsdelivr.net/npm/d3@7"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
const workingStates = [
    "Andhra Pradesh",
    "Arunachal Pradesh",
    "Assam",
    "Bihar",
    "Chhattisgarh",
    "Goa",
    "Gujarat",
    "Haryana",
    "Himachal Pradesh",
    "Jharkhand",
    "Karnataka",
    "Kerala",
    "Madhya Pradesh",
    "Maharashtra",
    "Manipur",
    "Meghalaya",
    "Mizoram",
    "Nagaland",
    "Odisha",
    "Punjab",
    "Rajasthan",
    "Sikkim",
    "Tamil Nadu",
    "Telangana",
    "Tripura",
    "Uttar Pradesh",
    "Uttarakhand",
    "West Bengal",
    "Andaman and Nicobar Islands",
    "Chandigarh",
    "Dadra and Nagar Haveli and Daman and Diu",
    "Delhi",
    "Jammu and Kashmir",
    "Ladakh",
    "Lakshadweep",
    "Puducherry"
];

const indiaGeoJSON =
    "https://cdn.jsdelivr.net/npm/geojson-india@0.0.2/india.json";


const width = 650;
const height = 650;


const svg = d3.select("#india-map")
    .append("svg")
    .attr("viewBox", `0 0 ${width} ${height}`)
    .attr("preserveAspectRatio", "xMidYMid meet");


const tooltip =
    document.getElementById("state-tooltip");


d3.json(indiaGeoJSON)

    .then(function(india) {

        const projection = d3.geoMercator()
            .fitSize(
                [width - 20, height - 20],
                india
            );
        const path = d3.geoPath()
            .projection(projection);
        svg.selectAll(".state")
            .data(india.features)
            .enter()
            .append("path")

            .attr("class", function(d) {

                const stateName =
                    getStateName(d);

                if (
                    workingStates.includes(stateName)
                ) {
                    return "state working-state";
                }

                return "state";
            })

            .attr("d", path)

            .attr(
                "data-state",
                function(d) {
                    return getStateName(d);
                }
            )

            .on(
                "mouseenter",
                function(event, d) {
                    const stateName =
                        getStateName(d);
                    if (
                        !workingStates.includes(
                            stateName
                        )
                    ) {
                        return;
                    }


                    tooltip.innerText =
                        stateName;

                    tooltip.style.display =
                        "block";


                    tooltip.style.left =
                        (event.clientX + 12) +
                        "px";

                    tooltip.style.top =
                        (event.clientY + 12) +
                        "px";
                }
            )

            .on(
                "mousemove",
                function(event, d) {

                    const stateName =
                        getStateName(d);


                    if (
                        !workingStates.includes(
                            stateName
                        )
                    ) {
                        return;
                    }


                    tooltip.style.left =
                        (event.clientX + 12) +
                        "px";

                    tooltip.style.top =
                        (event.clientY + 12) +
                        "px";
                }
            )

            .on(
                "mouseleave",
                function() {

                    tooltip.style.display =
                        "none";
                }
            );

    })

    .catch(function(error) {

        console.error(
            "India Map Error:",
            error
        );

    });

function getStateName(d) {

    const p = d.properties || {};

    return (
        p.st_nm ||
        p.ST_NM ||
        p.NAME_1 ||
        p.name ||
        p.NAME ||
        p.State ||
        p.state ||
        ""
    );
}
</script>
<script src="https://cdn.jsdelivr.net/npm/d3@7"></script>

<script>
const workingStates = [
    "Uttarakhand",
    "Uttar Pradesh",
    "Delhi",
    "Haryana",
    "Punjab"
];

const indiaGeoJSON =
    "https://cdn.jsdelivr.net/npm/geojson-india@0.0.2/india.json";

const width = 650;
const height = 650;


const svg = d3.select("#india-map")
    .append("svg")
    .attr("viewBox", `0 0 ${width} ${height}`)
    .attr("preserveAspectRatio", "xMidYMid meet");
const tooltip = document.getElementById("state-tooltip");
d3.json(indiaGeoJSON)
    .then(function(india) {
        console.log("India GeoJSON Loaded:", india);
        const projection = d3.geoMercator()
            .fitSize(
                [width - 20, height - 20],
                india
            );

        const path = d3.geoPath()
            .projection(projection);

        svg.selectAll(".state")
            .data(india.features)
            .enter()
            .append("path")
            .attr("class", function(d) {
                const stateName = getStateName(d);
                if (workingStates.includes(stateName)) {
                    return "state working-state";
                }
                return "state";
            })
            .attr("d", path)
            .attr("data-state", function(d) {
                return getStateName(d);
            })
            .on("mouseenter", function(event, d) {
                const stateName = getStateName(d);
                if (!workingStates.includes(stateName)) {
                    return;
                }
                tooltip.innerText = stateName;
                tooltip.style.display = "block";
                tooltip.style.left =
                    (event.clientX + 12) + "px";
                tooltip.style.top =
                    (event.clientY + 12) + "px";
            })

            .on("mousemove", function(event, d) {
                const stateName = getStateName(d);
                if (!workingStates.includes(stateName)) {
                    return;
                }
                tooltip.style.left =
                    (event.clientX + 12) + "px";
                tooltip.style.top =
                    (event.clientY + 12) + "px";
            })


            .on("mouseleave", function() {

                tooltip.style.display = "none";

            });

    })

    .catch(function(error) {

        console.error(
            "India map load error:",
            error
        );

        document.getElementById("india-map").innerHTML =
            "<p style='color:red'>India map load nahi ho paya.</p>";
    });

function getStateName(d) {
    const p = d.properties || {};
    return (
        p.st_nm ||
        p.ST_NM ||
        p.NAME_1 ||
        p.name ||
        p.NAME ||
        p.State ||
        p.state ||
        ""
    );
}
</script>

<script>
document.addEventListener("DOMContentLoaded", function() {
    const counters = document.querySelectorAll(".counter");
    counters.forEach(counter => {
        const target = parseInt(counter.getAttribute("data-target"));
        let current = 0;
        const duration = 2000; // 2 seconds
        const increment = target / (duration / 16);

        function updateCounter() {
            current += increment;
            if (current < target) {
                counter.textContent = Math.floor(current) + "+";
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target + "+";
            }
        }
        updateCounter();
    });

});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {
    const faqItems = document.querySelectorAll(".br-faq-item");
    faqItems.forEach(function(item) {
        const question = item.querySelector(".br-faq-question");
        const icon = item.querySelector(".br-faq-icon");
        question.addEventListener("click", function() {
            const isActive = item.classList.contains("active");
            faqItems.forEach(function(otherItem) {
                otherItem.classList.remove("active");
                const otherIcon =
                    otherItem.querySelector(".br-faq-icon");
                otherIcon.textContent = "+";
            });
            if (!isActive) {
                item.classList.add("active");
                icon.textContent = "−";
            }
        });
    });
});
</script>

<script>
$(document).ready(function() {
    $('.testimonial-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 5000,
        speed: 700,
        arrows: false,
        dots: true,
        adaptiveHeight: true,
        pauseOnHover: true,
        swipe: true
    });
});
</script>
<script>
$('.first-hero-section').slick({
    slidesToShow: 1,
    arrows: true,
    infinite: true,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [{
        breakpoint: 768,
        settings: {
            slidesToShow: 1,
            arrows: false,
            dots: true,
        }
    }]
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const textTarget = document.getElementById('typewriter-text');
    const counterTarget = document.getElementById('load-count');
    const progressFill = document.getElementById('ngo-progress-fill');
    const preloader = document.getElementById('ngo-preloader');

    const phrase = "Creating change that last...";
    let textIndex = 0;
    let currentPercent = 0;
    let isWindowLoaded = false;

    // 1. One-by-one Typewriter Animation
    function typeLetter() {
        if (textIndex < phrase.length) {
            textTarget.textContent += phrase.charAt(textIndex);
            textIndex++;
            setTimeout(typeLetter, 75); // Type speed
        }
    }
    typeLetter();

    // 2. Realistic 0 - 100 Counter Logic
    const interval = setInterval(() => {
        // Jab tak window load na ho tab tak smoothly 92% tak jayega
        if (!isWindowLoaded) {
            if (currentPercent < 90) {
                currentPercent += Math.floor(Math.random() * 4) + 1;
            }
        } else {
            // Window load hote hi tezi se 100 tak pahunchega
            currentPercent += 5;
        }

        if (currentPercent >= 100) {
            currentPercent = 100;
            clearInterval(interval);
            finishLoading();
        }

        counterTarget.textContent = currentPercent;
        progressFill.style.width = currentPercent + '%';
    }, 45);

    // Page window loaded listener
    window.addEventListener('load', function() {
        isWindowLoaded = true;
    });

    // 3. Smooth Exit
    function finishLoading() {
        setTimeout(() => {
            if (preloader) {
                preloader.classList.add('fade-out');
                setTimeout(() => {
                    preloader.remove();
                }, 850);
            }
        }, 400);
    }
});
</script>

@endsection
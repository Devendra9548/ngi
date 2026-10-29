@extends('templates.front.main')
@section('customcss')
<title>Our Work | NextGen Impact – Plastic Waste Awareness Drive</title>
<link rel="stylesheet" href="/assets/css/front/our-work.css" />
@endsection
@section('body')
<div class="ngi-event">
    <section class="hero gradient-bg" id="hero">
        <div class="bubbles"><span></span><span></span><span></span><span></span><span></span><span></span></div>
        <div class="container-fluid position-relative">
            <div class="row align-items-center g-5">
                <div class="col-lg-6">
                    <h1 class="seq">Plastic Waste Awareness Drive at UPS Chuharpur Khadar
                        <span class="font-special">A Cleaner Earth, A Happier Childhood</span>
                    </h1>
                    <p class="lead seq mt-4">NextGen Impact and GEM Enviro Management Limited, with Gautam Buddha
                        University as coordination partner, helped villagers and schoolchildren learn to manage plastic
                        waste responsibly and turn it into a resource.</p>
                    <div class="seq mt-3">
                        <p class="event-meta mb-4"><i class="bi bi-geo-alt-fill me-2"></i>Chuharpur Khadar, Gautam
                            Buddha Nagar &nbsp;&nbsp;<i class="bi bi-clock-fill me-2"></i>11:30 AM – 1:30 PM</p>
                        <div class="d-flex flex-wrap gap-3">
                            <a href="#highlights" class="btn btn-ngi">See what happened</a>
                            <a href="#moments" class="btn btn-ghost">View photos</a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="photo-stack seq">
                        <img class="photo-main" src="/assets/imgs/web/qna.jpg"
                            alt="Children raising their hands during the awareness session">
                        <img class="photo-small" src="/assets/imgs/web/signs.jpg"
                            alt="Volunteers with campaign posters">
                        <div class="chip c1"><i class="bi bi-mortarboard-fill"></i>
                            <div><b data-count="5">0</b>Classes took part</div>
                        </div>
                        <div class="chip c2"><i class="bi bi-stopwatch-fill"></i>
                            <div><b data-count="2">0</b>Hours of learning</div>
                        </div>
                        <div class="chip c3"><i class="bi bi-handshake-fill"></i>
                            <div><b data-count="3">0</b>Partners together</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="wave"><svg viewBox="0 0 1440 90" preserveAspectRatio="none">
                <path fill="#f1f8f6" d="M0,40 C240,100 480,0 720,40 C960,80 1200,10 1440,50 L1440,90 L0,90 Z" />
            </svg></div>
    </section>

    <section class="highlights" id="highlights">
        <div class="container-fluid">
            <div class="text-center mb-5 reveal">
                <h2 class="section-title">Learning that ends with <span class="font-special">something to take
                        home</span></h2>
                <div class="title-bar"></div>
                <p class="mx-auto mt-3" style="max-width:38rem;color:#4b6575">Children and villagers saw recycling
                    happen, asked questions, and left with gifts made from recycled plastic.</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-5 reveal">
                    <div class="hl-card">
                        <div class="hl-icon"><i class="bi bi-recycle"></i></div>
                        <h3>Live recycling demonstration</h3>
                        <p>Experts showed how plastic is recycled and explained which types of plastic can be recycled
                            and which cannot.</p>
                    </div>
                </div>
                <div class="col-lg-7 reveal">
                    <div class="photo-card">
                        <img src="/assets/imgs/web/qna.jpg" alt="Children raising hands for the Q&A" loading="lazy">
                        <div class="caption">
                            <div class="hl-icon"><i class="bi bi-chat-heart-fill"></i></div>
                            <h3>Interactive Q&amp;A</h3>
                            <p>Children asked questions and answered quizzes on waste segregation and recycling.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 reveal mt-5">
                    <div class="photo-card">
                        <img src="/assets/imgs/web/bottles.jpg" alt="Students holding up recycled-material bottles"
                            loading="lazy">
                        <div class="caption">
                            <div class="hl-icon"><i class="bi bi-gift-fill"></i></div>
                            <h3>Gifts for participants</h3>
                            <p>Students received bottles made from recycled material, and residents received T-shirts
                                made from recycled plastic.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-5">
                    <div class="row g-4 h-100">
                        <div class="col-12 reveal">
                            <div class="hl-card" style="min-height:0">
                                <div class="hl-icon"><i class="bi bi-award-fill"></i></div>
                                <h3>Certificates</h3>
                                <p>The organising team presented certificates to participants.</p>
                            </div>
                        </div>
                        <div class="col-12 reveal">
                            <div class="hl-card" style="min-height:0">
                                <div class="hl-icon"><i class="bi bi-cup-hot-fill"></i></div>
                                <h3>Refreshments</h3>
                                <p>The event ended with refreshments for all.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Moments -->
            <div class="text-center moments-head reveal" id="moments">
                <h2 class="section-title">Moments from <span class="font-special">the day</span></h2>
                <div class="title-bar"></div>
            </div>
            <div class="moment-grid reveal">
                <button class="moment m1" data-img="/assets/imgs/web/signs.jpg" data-bs-toggle="modal"
                    data-bs-target="#lightbox"><img src="/assets/imgs/web/signs.jpg"
                        alt="Volunteers with campaign posters" loading="lazy"><span>Posters: “I Support Recycling”,
                        “Don’t Waste Create”</span></button>
                <button class="moment m2" data-img="/assets/imgs/web/class-1.jpg" data-bs-toggle="modal"
                    data-bs-target="#lightbox"><img src="/assets/imgs/web/class-1.jpg" alt="Classroom session"
                        loading="lazy"><span>Session in the classroom</span></button>
                <button class="moment m3" data-img="/assets/imgs/web/class-2.jpg" data-bs-toggle="modal"
                    data-bs-target="#lightbox"><img src="/assets/imgs/web/class-2.jpg" alt="Students listening"
                        loading="lazy" style="object-position:center 30%"><span>Students listening
                        closely</span></button>
                <button class="moment m4" data-img="/assets/imgs/web/bottles.jpg" data-bs-toggle="modal"
                    data-bs-target="#lightbox"><img src="/assets/imgs/web/bottles.jpg"
                        alt="Students with recycled bottles" loading="lazy"><span>Recycled bottles for every
                        student</span></button>
                <button class="moment m5" data-img="/assets/imgs/web/qna.jpg" data-bs-toggle="modal"
                    data-bs-target="#lightbox"><img src="/assets/imgs/web/qna.jpg" alt="Hands up for the quiz"
                        loading="lazy"><span>Hands up for the quiz</span></button>
            </div>
        </div>
    </section>

    <div class="modal fade" id="lightbox" tabindex="-1" aria-label="Photo viewer">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content"><img id="lightboxImg" src="" alt=""></div>
        </div>
    </div>

    <!-- ===================== SECTION 3 : TEAM & PARTNERS ===================== -->
    <section class="team" id="team">
        <div class="container-fluid">
            <div class="text-center mb-4 reveal">
                <h2 class="section-title">The people and partners <span class="font-special">behind the day</span></h2>
                <div class="title-bar"></div>
            </div>

            <ul class="nav nav-pills org-tabs justify-content-center gap-2 my-5 reveal" role="tablist">
                <li class="nav-item"><button class="nav-link active" data-bs-toggle="pill" data-bs-target="#tab-ngi"
                        type="button" role="tab">NextGen Impact</button></li>
                <li class="nav-item"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab-gem"
                        type="button" role="tab">GEM Enviro</button></li>
                <li class="nav-item"><button class="nav-link" data-bs-toggle="pill" data-bs-target="#tab-gbu"
                        type="button" role="tab">Gautam Buddha University</button></li>
            </ul>

            <!-- Photos yahan se aati hain: images/team/<naam>.jpg  (same naam ki file replace kar do, code badalne ki zarurat nahi) -->
            <div class="tab-content reveal">
                <div class="tab-pane fade show active org-panel" id="tab-ngi" role="tabpanel">
                    <div class="org-note">
                        <h3>NextGen Impact</h3>
                        <p>A social initiative working on community-focused environmental and social change. <span
                                class="font-special fs-5">Creating change that lasts.</span></p>
                    </div>
                    <div class="team-grid">
                        <div class="member">
                            <div class="member-photo"><img src="/assets/imgs/web/team/sainshringdi-hojai.jpg"
                                    alt="Ms. Sainshringdi Hojai" loading="lazy"><span class="org-badge"><i
                                        class="bi bi-leaf-fill"></i></span></div>
                            <h4>Ms. Sainshringdi<br>Hojai</h4><small>Treasurer</small>
                        </div>
                        <div class="member">
                            <div class="member-photo"><img src="/assets/imgs/web/team/woman.png"
                                    alt="Ms. Vanshika Sharma" loading="lazy"><span class="org-badge"><i
                                        class="bi bi-leaf-fill"></i></span></div>
                            <h4>Ms. Vanshika<br>Sharma</h4><small>Committee Member</small>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade org-panel" id="tab-gem" role="tabpanel">
                    <div class="org-note">
                        <h3>GEM Enviro Management Limited</h3>
                        <p>An environmental services company offering EPR compliance, solid waste management, waste
                            collection and recycling, ESG consulting, and related solutions.</p>
                        <a href="https://www.gemenviro.com" target="_blank" rel="noopener"
                            class="btn btn-ngi btn-sm mt-3">www.gemenviro.com</a>
                    </div>
                    <div class="team-grid">
                        <div class="member">
                            <div class="member-photo"><img src="/assets/imgs/web/team/man.png"
                                    alt="Mr. Puneet Shrivastava" loading="lazy"><span class="org-badge"><i
                                        class="bi bi-recycle"></i></span></div>
                            <h4>Mr. Puneet<br>Shrivastava</h4><small>Plastic Expert</small>
                        </div>
                        <div class="member">
                            <div class="member-photo"><img src="/assets/imgs/web/team/man.png"
                                    alt="Mr. Sujeet Singh" loading="lazy"><span class="org-badge"><i
                                        class="bi bi-recycle"></i></span></div>
                            <h4>Mr. Sujeet<br>Singh</h4><small>Expert</small>
                        </div>
                        <div class="member">
                            <div class="member-photo"><img src="/assets/imgs/web/team/man.png"
                                    alt="Mr. Pravin Kumar" loading="lazy"><span class="org-badge"><i
                                        class="bi bi-recycle"></i></span></div>
                            <h4>Mr. Pravin<br>Kumar</h4><small>Expert</small>
                        </div>
                        <div class="member">
                            <div class="member-photo"><img src="/assets/imgs/web/team/man.png"
                                    alt="Mr. Deepak Bhardwaj" loading="lazy"><span class="org-badge"><i
                                        class="bi bi-recycle"></i></span></div>
                            <h4>Mr. Deepak<br>Bhardwaj</h4><small>Media Team</small>
                        </div>
                        <div class="member">
                            <div class="member-photo"><img src="/assets/imgs/web/team/man.png"
                                    alt="Mr. Ramesh Kumar" loading="lazy"><span class="org-badge"><i
                                        class="bi bi-recycle"></i></span></div>
                            <h4>Mr. Ramesh<br>Kumar</h4><small>Media Team</small>
                        </div>
                        <div class="member">
                            <div class="member-photo"><img src="/assets/imgs/web/team/man.png"
                                    alt="Mr. Raghav Kumar" loading="lazy"><span class="org-badge"><i
                                        class="bi bi-recycle"></i></span></div>
                            <h4>Mr. Raghav<br>Kumar</h4><small>IT Team</small>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade org-panel" id="tab-gbu" role="tabpanel">
                    <div class="org-note">
                        <h3>Gautam Buddha University</h3>
                        <p>Greater Noida. Coordination partner that organised the event with us and mobilised its social
                            work students as volunteers.</p>
                    </div>
                    <div class="team-grid">
                        <div class="member">
                            <div class="member-photo"><img src="/assets/imgs/web/team/man.png"
                                    alt="Dr. Rahul Kapoor" loading="lazy"><span class="org-badge"><i
                                        class="bi bi-mortarboard-fill"></i></span></div>
                            <h4>Dr. Rahul<br>Kapoor</h4><small>Faculty Member</small>
                        </div>
                        <div class="member">
                            <div class="member-photo"><img src="/assets/imgs/web/team/man.png"
                                    alt="Mr. Shalab Yadav" loading="lazy"><span class="org-badge"><i
                                        class="bi bi-mortarboard-fill"></i></span></div>
                            <h4>Mr. Shalab<br>Yadav</h4><small>Student Volunteer</small>
                        </div>
                        <div class="member">
                            <div class="member-photo"><img src="/assets/imgs/web/team/woman.png"
                                    alt="Ms. Simran Nagar" loading="lazy"><span class="org-badge"><i
                                        class="bi bi-mortarboard-fill"></i></span></div>
                            <h4>Ms. Simran<br>Nagar</h4><small>Student Volunteer</small>
                        </div>
                        <div class="member">
                            <div class="member-photo"><img src="/assets/imgs/web/team/man.png"
                                    alt="Mr. Rashishree Sharma" loading="lazy"><span class="org-badge"><i
                                        class="bi bi-mortarboard-fill"></i></span></div>
                            <h4>Mr. Rashishree<br>Sharma</h4><small>Student Volunteer</small>
                        </div>
                        <div class="member">
                            <div class="member-photo"><img src="/assets/imgs/web/team/woman.png"
                                    alt="Mrs. Sneha Ranjan" loading="lazy"><span class="org-badge"><i
                                        class="bi bi-mortarboard-fill"></i></span></div>
                            <h4>Mrs. Sneha<br>Ranjan</h4><small>Student Volunteer</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="closing-band text-center reveal">
                <h3 class="mb-2">Small habits, <span class="font-special fs-2">lasting change</span></h3>
                <p class="mb-0 mx-auto" style="max-width:40rem">By involving children, teachers and village residents,
                    we hope to build lasting habits of segregating waste at source, reusing materials and recycling.</p>
            </div>
        </div>
    </section>


</div>

<script>
(function() {
    var root = document.querySelector('.ngi-event');
    if (!root) return;

    // scroll reveal
    var io = new IntersectionObserver(function(entries) {
        entries.forEach(function(e, i) {
            if (e.isIntersecting) {
                setTimeout(function() {
                    e.target.classList.add('in');
                }, (i % 3) * 120);
                io.unobserve(e.target);
            }
        });
    }, {
        threshold: .15
    });
    root.querySelectorAll('.reveal').forEach(function(el) {
        io.observe(el);
    });

    // count-up numbers
    root.querySelectorAll('[data-count]').forEach(function(el) {
        var target = +el.dataset.count,
            n = 0;
        setTimeout(function() {
            var t = setInterval(function() {
                el.textContent = ++n;
                if (n >= target) clearInterval(t);
            }, 220);
        }, 1100);
    });

    // lightbox
    var lbImg = document.getElementById('lightboxImg');
    root.querySelectorAll('.moment').forEach(function(b) {
        b.addEventListener('click', function() {
            lbImg.src = b.dataset.img;
        });
    });
})();
</script>
@endsection
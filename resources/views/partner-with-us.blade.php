@extends('templates.front.main')
@section('customcss')
<title>Partner With Us | NextGen Impact</title>
<link rel="stylesheet" href="/assets/css/front/about.css" />
<link rel="stylesheet" href="/assets/css/front/partners.css" />
@endsection
@section('body')
<x-mainbanner name="Partner With Us" para="Let's build a childhood worth remembering, together"
    imgs="/assets/imgs/our-team.jpeg" />
<div class="pt">
    <section class="pt-intro">
        <div class="pt-wrap">
            <div>
                <span class="pt-eyebrow">Join the movement</span>
                <h2 class="pt-title">Your partnership can change how a child learns.</h2>
                <p class="pt-lead">NextGen Impact, a unit of Earth Initiative Foundation, brings smart classrooms and
                    safe drinking water to government schools in rural India, and leads community action for a cleaner
                    earth. We grow through partners who share our belief that every child deserves an inspiring place to
                    learn.</p>
                <div class="pt-quote">"Let's not just build school, let's build a childhood worth remembering."</div>
                <a class="pt-btn pt-btn-green" href="#join">Become a partner</a>
            </div>
            <div class="pt-stats">
                <div class="pt-stat"><b>3</b><span>government schools upgraded under the Build My School Mission</span>
                </div>
                <div class="pt-stat"><b>2</b><span>districts of Rajasthan reached: Churu and Nagaur</span></div>
                <div class="pt-stat"><b>3</b><span>lasting interventions in every school: AI Smartboard, RO water cooler
                        and faculty training</span></div>
            </div>
        </div>
    </section>

    <!-- 2. WAYS TO PARTNER -->
    <section class="pt-ways">
        <div class="pt-wrap">
            <div class="pt-head">
                <span class="pt-eyebrow">Ways to partner</span>
                <h2 class="pt-title">Find the way that fits you</h2>
                <p class="pt-lead">Whether you represent a company, a campus or yourself, there is a place for you in
                    our work.</p>
            </div>
            <div class="pt-cards">
                <article class="pt-card">
                    <div class="no">01</div>
                    <h3>CSR Partner</h3>
                    <p>Fund and co-create projects that meet your CSR goals and reach real classrooms.</p>
                    <ul>
                        <li>Adopt a school or project</li>
                        <li>Smart classrooms and clean water</li>
                        <li>Clear reports on every project</li>
                    </ul>
                </article>
                <article class="pt-card">
                    <div class="no">02</div>
                    <h3>Institutional Partner</h3>
                    <p>Universities, schools and organisations that help us reach and mobilise communities.</p>
                    <ul>
                        <li>Co-host awareness drives</li>
                        <li>Student and faculty involvement</li>
                        <li>Local coordination support</li>
                    </ul>
                </article>
                <article class="pt-card">
                    <div class="no">03</div>
                    <h3>Volunteer or Intern</h3>
                    <p>Give your time and skills to field activities, media, research and outreach.</p>
                    <ul>
                        <li>On-ground school and village events</li>
                        <li>Content, design and IT support</li>
                        <li>Certificate on completion</li>
                    </ul>
                </article>
                <article class="pt-card">
                    <div class="no">04</div>
                    <h3>Individual Supporter</h3>
                    <p>Support a school, share our story or bring your own idea for community change.</p>
                    <ul>
                        <li>Contribute to a project</li>
                        <li>Spread the word in your network</li>
                        <li>Suggest a school that needs help</li>
                    </ul>
                </article>
            </div>
        </div>
    </section>

    <!-- 3. WHY PARTNER -->
    <section class="pt-why">
        <div class="pt-wrap">
            <span class="pt-eyebrow">Why NextGen Impact</span>
            <h2 class="pt-title">Impact you can see and trust</h2>
            <p class="pt-lead">We keep our work simple, visible and accountable, so partners know exactly what their
                support has changed.</p>
            <div class="pt-perks">
                <div class="pt-perk">
                    <div class="ic"><svg viewBox="0 0 24 24">
                            <path d="M3 21h18M5 21V10l7-6 7 6v11M9 21v-6h6v6" />
                        </svg></div>
                    <h3>Direct, on-ground work</h3>
                    <p>Every project is planned with the school, surveyed on site, installed, handed over and followed
                        up.</p>
                </div>
                <div class="pt-perk">
                    <div class="ic"><svg viewBox="0 0 24 24">
                            <path d="M4 20V10M10 20V4M16 20v-7M22 20H2" />
                        </svg></div>
                    <h3>Transparent reporting</h3>
                    <p>Partners receive a project report with schools covered, work done and expected outcomes.</p>
                </div>
                <div class="pt-perk">
                    <div class="ic"><svg viewBox="0 0 24 24">
                            <circle cx="12" cy="8" r="5" />
                            <path d="M8.5 12.5 7 22l5-3 5 3-1.5-9.5" />
                        </svg></div>
                    <h3>Recognition for partners</h3>
                    <p>With your agreement, we credit partners in our reports, events and press releases.</p>
                </div>
            </div>
            <div class="pt-trust">
                <small>Working together with</small>
                <div class="pt-chips">
                    <span>GEM Enviro Management Ltd.</span>
                    <span>Securocrop</span>
                    <span>Gautam Buddha University</span>
                    <span>Government schools of Rajasthan</span>
                </div>
            </div>
        </div>
    </section>

    <!-- 4. HOW IT WORKS + CTA -->
    <section class="pt-join" id="join">
        <div class="pt-wrap">
            <div class="pt-head" style="margin-bottom:0">
                <span class="pt-eyebrow">How it works</span>
                <h2 class="pt-title">Four simple steps to get started</h2>
            </div>
            <div class="pt-steps">
                <div class="pt-step">
                    <h3>Say hello</h3>
                    <p>Write or call us and tell us how you would like to help.</p>
                </div>
                <div class="pt-step">
                    <h3>Choose your cause</h3>
                    <p>We suggest schools or programmes that match your goals.</p>
                </div>
                <div class="pt-step">
                    <h3>We deliver</h3>
                    <p>Our team handles permissions, survey, installation and training.</p>
                </div>
                <div class="pt-step">
                    <h3>See the impact</h3>
                    <p>You get a report, photos and follow-up on how it is being used.</p>
                </div>
            </div>

            <div class="pt-cta">
                <div>
                    <h2>Ready to build a childhood worth remembering?</h2>
                    <p>Tell us a little about you or your organisation and we will get back to you with the next steps.
                    </p>
                </div>
                <div class="pt-contact">
                    <div><small>Email</small><a href="mailto:your-email@yourdomain.org"><span
                                class="fill">your-email@yourdomain.org</span></a></div>
                    <div><small>Phone</small><a href="tel:+91XXXXXXXXXX"><span class="fill">+91-XXXXXXXXXX</span></a>
                    </div>
                    <div><small>Office</small>Plot No. 36, Block-F14, Phase II, Model Town, Delhi – 110009</div>
                    <a class="pt-btn pt-btn-green"
                        href="mailto:your-email@yourdomain.org?subject=Partnership%20enquiry">Write to us</a>
                </div>
            </div>
        </div>
    </section>

</div>
@endsection
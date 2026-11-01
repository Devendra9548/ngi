@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/about.css" />
<title>About Us | NextGen Impact</title>
@endsection
@section('body')
<x-mainbanner name="Our Team" para="We are here always.." imgs="/assets/imgs/our-team.jpeg" />

<section class="tm-team" id="team">
    <div class="container">

        <div class="about-clm text-center mb-5">
            <div class="title ct-tooltip" data-animate="fade-left"><i class="fa-solid fa-people-group"></i> Our Team
            </div>
            <h2 data-animate="fade-right">Meet Our <span>- Team</span></h2>
            <p class="theme-para" data-animate="fade-right" data-delay="2">Meet the passionate people working together
                to create meaningful change and lasting impact.</p>
        </div>

        <div class="row g-4 justify-content-center">

            <!-- Member 1 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="tm-team__card">
                    <img src="/assets/imgs/teams/sainshringdi-hojai.png" alt="Sainshringdi Hojai"
                        class="tm-team__img rounded-circle" width="170" height="170" loading="lazy">
                    <h5 class="tm-team__name">Sainshringdi Hojai</h5>
                    <p class="tm-team__role">Treasurer</p>
                    <p class="tm-team__bio">Sainshringdi Hojai, Treasurer of Earth Initiative Foundation, brings a
                        diverse perspective shaped by her Northeast Indian roots and upbringing in mainland India.
                        Inspired by her life experiences, she is committed to social impact, inclusive education, and
                        giving back to society.</p>
                    <button type="button" class="tm-team__btn" data-bs-toggle="modal"
                        data-bs-target="#tmTeamModal1">View Profile</button>
                </div>
            </div>
            <!-- Member 2 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="tm-team__card">
                    <img src="/assets/imgs/teams/sainshringdi-hojai.png" alt="Sainshringdi Hojai"
                        class="tm-team__img rounded-circle" width="170" height="170" loading="lazy">
                    <h5 class="tm-team__name">Sainshringdi Hojai</h5>
                    <p class="tm-team__role">Treasurer</p>
                    <p class="tm-team__bio">Sainshringdi Hojai, Treasurer of Earth Initiative Foundation, brings a
                        diverse perspective shaped by her Northeast Indian roots and upbringing in mainland India.
                        Inspired by her life experiences, she is committed to social impact, inclusive education, and
                        giving back to society.</p>
                    <button type="button" class="tm-team__btn" data-bs-toggle="modal"
                        data-bs-target="#tmTeamModal2">View Profile</button>
                </div>
            </div>
            <!-- Member 3 -->
            <div class="col-12 col-sm-6 col-lg-4">
                <div class="tm-team__card">
                    <img src="/assets/imgs/teams/sainshringdi-hojai.png" alt="Sainshringdi Hojai"
                        class="tm-team__img rounded-circle" width="170" height="170" loading="lazy">
                    <h5 class="tm-team__name">Sainshringdi Hojai</h5>
                    <p class="tm-team__role">Treasurer</p>
                    <p class="tm-team__bio">Sainshringdi Hojai, Treasurer of Earth Initiative Foundation, brings a
                        diverse perspective shaped by her Northeast Indian roots and upbringing in mainland India.
                        Inspired by her life experiences, she is committed to social impact, inclusive education, and
                        giving back to society.</p>
                    <button type="button" class="tm-team__btn" data-bs-toggle="modal"
                        data-bs-target="#tmTeamModal3">View Profile</button>
                </div>
            </div>

        </div>
    </div>

    <!-- Popup 1 -->
    <div class="modal fade tm-team__modal" id="tmTeamModal1" tabindex="-1" aria-labelledby="tmTeamModalLabel1"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-4 text-center">
                            <img src="/assets/imgs/teams/sainshringdi-hojai.png" alt="Sainshringdi Hojai"
                                class="tm-team__modal-img rounded-circle" width="220" height="220" loading="lazy">
                            <div class="tm-team__social mt-3">
                                <a href="https://www.facebook.com/" target="_blank" rel="noopener" aria-label="Facebook"
                                    title="Facebook"><svg viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M13.5 21v-7.5h2.6l.4-3h-3V8.6c0-.9.3-1.5 1.6-1.5h1.6V4.4c-.3 0-1.2-.1-2.3-.1-2.3 0-3.9 1.4-3.9 4v2.2H8v3h2.5V21h3z" />
                                    </svg></a>
                                <a href="https://x.com/" target="_blank" rel="noopener" aria-label="X" title="X"><svg
                                        viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M17.7 3h3.1l-6.8 7.8L22 21h-6.3l-4.9-6.4L5.2 21H2.1l7.3-8.3L2 3h6.4l4.4 5.9L17.7 3zm-1.1 16.2h1.7L7.5 4.7H5.7l10.9 14.5z" />
                                    </svg></a>
                                <a href="https://www.linkedin.com/" target="_blank" rel="noopener" aria-label="LinkedIn"
                                    title="LinkedIn"><svg viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M5.4 8.5a1.9 1.9 0 1 1 0-3.8 1.9 1.9 0 0 1 0 3.8zM3.8 10h3.2v10H3.8V10zm5.2 0h3v1.4c.5-.9 1.6-1.7 3.2-1.7 3.2 0 3.8 2.1 3.8 4.8V20h-3.2v-4.9c0-1.2 0-2.7-1.7-2.7s-1.9 1.3-1.9 2.6V20H9V10z" />
                                    </svg></a>
                                <a href="https://www.instagram.com/" target="_blank" rel="noopener"
                                    aria-label="Instagram" title="Instagram"><svg viewBox="0 0 24 24"
                                        aria-hidden="true">
                                        <path
                                            d="M12 7.2A4.8 4.8 0 1 0 12 16.8 4.8 4.8 0 0 0 12 7.2zm0 7.9a3.1 3.1 0 1 1 0-6.2 3.1 3.1 0 0 1 0 6.2zM17.1 6a1.1 1.1 0 1 0 0 2.2 1.1 1.1 0 0 0 0-2.2zM12 3c-2.4 0-2.7 0-3.7.1-3 .1-4.7 1.8-4.8 4.8C3.4 8.9 3.4 9.1 3.4 12s0 3.1.1 4.1c.1 3 1.8 4.7 4.8 4.8 1 .1 1.3.1 3.7.1s2.7 0 3.7-.1c3-.1 4.7-1.8 4.8-4.8.1-1 .1-1.3.1-4.1s0-3.1-.1-4.1c-.1-3-1.8-4.7-4.8-4.8C14.7 3 14.4 3 12 3zm0 1.7c2.4 0 2.7 0 3.6.1 2.2.1 3.2 1.1 3.3 3.3.1.9.1 1.2.1 3.6s0 2.7-.1 3.6c-.1 2.2-1.1 3.2-3.3 3.3-.9.1-1.2.1-3.6.1s-2.7 0-3.6-.1c-2.2-.1-3.2-1.1-3.3-3.3-.1-.9-.1-1.2-.1-3.6s0-2.7.1-3.6C5.2 5.9 6.2 4.9 8.4 4.8c.9-.1 1.2-.1 3.6-.1z" />
                                    </svg></a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4 class="tm-team__modal-name" id="tmTeamModalLabel1">Sainshringdi Hojai</h4>
                            <p class="tm-team__role mb-3">Treasurer, Earth Initiative Foundation</p>
                            <p class="tm-team__modal-text">Sainshringdi Hojai, Treasurer of Earth Initiative Foundation,
                                brings a diverse perspective shaped by her Northeast Indian roots and upbringing in
                                mainland India. Inspired by her life experiences, she is committed to social impact,
                                inclusive education, and giving back to society.</p>

                            <ul class="tm-team__details list-unstyled mb-0">
                                <li><span>Organisation</span>Earth Initiative Foundation</li>
                                <li><span>Designation</span>Treasurer</li>
                                <li><span>Focus Areas</span>Social impact, inclusive education, community giving</li>
                                <!-- TODO: apni real email / phone yahan daaliye -->
                                <li><span>Email</span><a href="mailto:info@example.org">info@example.org</a></li>
                                <li><span>Phone</span><a href="tel:+910000000000">+91 00000 00000</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Popup 2 -->
    <div class="modal fade tm-team__modal" id="tmTeamModal2" tabindex="-1" aria-labelledby="tmTeamModalLabel2"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-4 text-center">
                            <img src="/assets/imgs/teams/sainshringdi-hojai.png" alt="Sainshringdi Hojai"
                                class="tm-team__modal-img rounded-circle" width="220" height="220" loading="lazy">
                            <div class="tm-team__social mt-3">
                                <a href="https://www.facebook.com/" target="_blank" rel="noopener" aria-label="Facebook"
                                    title="Facebook"><svg viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M13.5 21v-7.5h2.6l.4-3h-3V8.6c0-.9.3-1.5 1.6-1.5h1.6V4.4c-.3 0-1.2-.1-2.3-.1-2.3 0-3.9 1.4-3.9 4v2.2H8v3h2.5V21h3z" />
                                    </svg></a>
                                <a href="https://x.com/" target="_blank" rel="noopener" aria-label="X" title="X"><svg
                                        viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M17.7 3h3.1l-6.8 7.8L22 21h-6.3l-4.9-6.4L5.2 21H2.1l7.3-8.3L2 3h6.4l4.4 5.9L17.7 3zm-1.1 16.2h1.7L7.5 4.7H5.7l10.9 14.5z" />
                                    </svg></a>
                                <a href="https://www.linkedin.com/" target="_blank" rel="noopener" aria-label="LinkedIn"
                                    title="LinkedIn"><svg viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M5.4 8.5a1.9 1.9 0 1 1 0-3.8 1.9 1.9 0 0 1 0 3.8zM3.8 10h3.2v10H3.8V10zm5.2 0h3v1.4c.5-.9 1.6-1.7 3.2-1.7 3.2 0 3.8 2.1 3.8 4.8V20h-3.2v-4.9c0-1.2 0-2.7-1.7-2.7s-1.9 1.3-1.9 2.6V20H9V10z" />
                                    </svg></a>
                                <a href="https://www.instagram.com/" target="_blank" rel="noopener"
                                    aria-label="Instagram" title="Instagram"><svg viewBox="0 0 24 24"
                                        aria-hidden="true">
                                        <path
                                            d="M12 7.2A4.8 4.8 0 1 0 12 16.8 4.8 4.8 0 0 0 12 7.2zm0 7.9a3.1 3.1 0 1 1 0-6.2 3.1 3.1 0 0 1 0 6.2zM17.1 6a1.1 1.1 0 1 0 0 2.2 1.1 1.1 0 0 0 0-2.2zM12 3c-2.4 0-2.7 0-3.7.1-3 .1-4.7 1.8-4.8 4.8C3.4 8.9 3.4 9.1 3.4 12s0 3.1.1 4.1c.1 3 1.8 4.7 4.8 4.8 1 .1 1.3.1 3.7.1s2.7 0 3.7-.1c3-.1 4.7-1.8 4.8-4.8.1-1 .1-1.3.1-4.1s0-3.1-.1-4.1c-.1-3-1.8-4.7-4.8-4.8C14.7 3 14.4 3 12 3zm0 1.7c2.4 0 2.7 0 3.6.1 2.2.1 3.2 1.1 3.3 3.3.1.9.1 1.2.1 3.6s0 2.7-.1 3.6c-.1 2.2-1.1 3.2-3.3 3.3-.9.1-1.2.1-3.6.1s-2.7 0-3.6-.1c-2.2-.1-3.2-1.1-3.3-3.3-.1-.9-.1-1.2-.1-3.6s0-2.7.1-3.6C5.2 5.9 6.2 4.9 8.4 4.8c.9-.1 1.2-.1 3.6-.1z" />
                                    </svg></a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4 class="tm-team__modal-name" id="tmTeamModalLabel2">Sainshringdi Hojai</h4>
                            <p class="tm-team__role mb-3">Treasurer, Earth Initiative Foundation</p>
                            <p class="tm-team__modal-text">Sainshringdi Hojai, Treasurer of Earth Initiative Foundation,
                                brings a diverse perspective shaped by her Northeast Indian roots and upbringing in
                                mainland India. Inspired by her life experiences, she is committed to social impact,
                                inclusive education, and giving back to society.</p>

                            <ul class="tm-team__details list-unstyled mb-0">
                                <li><span>Organisation</span>Earth Initiative Foundation</li>
                                <li><span>Designation</span>Treasurer</li>
                                <li><span>Focus Areas</span>Social impact, inclusive education, community giving</li>
                                <!-- TODO: apni real email / phone yahan daaliye -->
                                <li><span>Email</span><a href="mailto:info@example.org">info@example.org</a></li>
                                <li><span>Phone</span><a href="tel:+910000000000">+91 00000 00000</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Popup 3 -->
    <div class="modal fade tm-team__modal" id="tmTeamModal3" tabindex="-1" aria-labelledby="tmTeamModalLabel3"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pt-0">
                    <div class="row g-4 align-items-center">
                        <div class="col-md-4 text-center">
                            <img src="/assets/imgs/teams/sainshringdi-hojai.png" alt="Sainshringdi Hojai"
                                class="tm-team__modal-img rounded-circle" width="220" height="220" loading="lazy">
                            <div class="tm-team__social mt-3">
                                <a href="https://www.facebook.com/" target="_blank" rel="noopener" aria-label="Facebook"
                                    title="Facebook"><svg viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M13.5 21v-7.5h2.6l.4-3h-3V8.6c0-.9.3-1.5 1.6-1.5h1.6V4.4c-.3 0-1.2-.1-2.3-.1-2.3 0-3.9 1.4-3.9 4v2.2H8v3h2.5V21h3z" />
                                    </svg></a>
                                <a href="https://x.com/" target="_blank" rel="noopener" aria-label="X" title="X"><svg
                                        viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M17.7 3h3.1l-6.8 7.8L22 21h-6.3l-4.9-6.4L5.2 21H2.1l7.3-8.3L2 3h6.4l4.4 5.9L17.7 3zm-1.1 16.2h1.7L7.5 4.7H5.7l10.9 14.5z" />
                                    </svg></a>
                                <a href="https://www.linkedin.com/" target="_blank" rel="noopener" aria-label="LinkedIn"
                                    title="LinkedIn"><svg viewBox="0 0 24 24" aria-hidden="true">
                                        <path
                                            d="M5.4 8.5a1.9 1.9 0 1 1 0-3.8 1.9 1.9 0 0 1 0 3.8zM3.8 10h3.2v10H3.8V10zm5.2 0h3v1.4c.5-.9 1.6-1.7 3.2-1.7 3.2 0 3.8 2.1 3.8 4.8V20h-3.2v-4.9c0-1.2 0-2.7-1.7-2.7s-1.9 1.3-1.9 2.6V20H9V10z" />
                                    </svg></a>
                                <a href="https://www.instagram.com/" target="_blank" rel="noopener"
                                    aria-label="Instagram" title="Instagram"><svg viewBox="0 0 24 24"
                                        aria-hidden="true">
                                        <path
                                            d="M12 7.2A4.8 4.8 0 1 0 12 16.8 4.8 4.8 0 0 0 12 7.2zm0 7.9a3.1 3.1 0 1 1 0-6.2 3.1 3.1 0 0 1 0 6.2zM17.1 6a1.1 1.1 0 1 0 0 2.2 1.1 1.1 0 0 0 0-2.2zM12 3c-2.4 0-2.7 0-3.7.1-3 .1-4.7 1.8-4.8 4.8C3.4 8.9 3.4 9.1 3.4 12s0 3.1.1 4.1c.1 3 1.8 4.7 4.8 4.8 1 .1 1.3.1 3.7.1s2.7 0 3.7-.1c3-.1 4.7-1.8 4.8-4.8.1-1 .1-1.3.1-4.1s0-3.1-.1-4.1c-.1-3-1.8-4.7-4.8-4.8C14.7 3 14.4 3 12 3zm0 1.7c2.4 0 2.7 0 3.6.1 2.2.1 3.2 1.1 3.3 3.3.1.9.1 1.2.1 3.6s0 2.7-.1 3.6c-.1 2.2-1.1 3.2-3.3 3.3-.9.1-1.2.1-3.6.1s-2.7 0-3.6-.1c-2.2-.1-3.2-1.1-3.3-3.3-.1-.9-.1-1.2-.1-3.6s0-2.7.1-3.6C5.2 5.9 6.2 4.9 8.4 4.8c.9-.1 1.2-.1 3.6-.1z" />
                                    </svg></a>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <h4 class="tm-team__modal-name" id="tmTeamModalLabel3">Sainshringdi Hojai</h4>
                            <p class="tm-team__role mb-3">Treasurer, Earth Initiative Foundation</p>
                            <p class="tm-team__modal-text">Sainshringdi Hojai, Treasurer of Earth Initiative Foundation,
                                brings a diverse perspective shaped by her Northeast Indian roots and upbringing in
                                mainland India. Inspired by her life experiences, she is committed to social impact,
                                inclusive education, and giving back to society.</p>

                            <ul class="tm-team__details list-unstyled mb-0">
                                <li><span>Organisation</span>Earth Initiative Foundation</li>
                                <li><span>Designation</span>Treasurer</li>
                                <li><span>Focus Areas</span>Social impact, inclusive education, community giving</li>
                                <!-- TODO: apni real email / phone yahan daaliye -->
                                <li><span>Email</span><a href="mailto:info@example.org">info@example.org</a></li>
                                <li><span>Phone</span><a href="tel:+910000000000">+91 00000 00000</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
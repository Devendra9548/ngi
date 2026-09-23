@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/home.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
<style>


</style>
@endsection
@section('body')

<section class="first-hero-section">
    <picture>
        <source media="(max-width: 767px)" srcset="/assets/imgs/banners/new/5.webp">
        <source media="(min-width: 768px)" srcset="/assets/imgs/banners/new/5.webp">
        <img src="/assets/imgs/banners/new/3.webp" alt="Banner" width="100%">
    </picture>
    <picture>
        <source media="(max-width: 767px)" srcset="/assets/imgs/banners/new/4.webp">
        <source media="(min-width: 768px)" srcset="/assets/imgs/banners/new/4.webp">
        <img src="/assets/imgs/banners/new/4.webp" alt="Banner" width="100%">
    </picture>
</section>

<section class="first-section scroll-section">
    <div class="container">
        <div class="about-clm text-center">
            <div class="title ct-tooltip" data-animate="fade-left">About Us</div>
            <h2 data-animate="fade-right">Build My School Mission <span>- INDIA</span></h2>
            <h3 data-animate="fade-left" class="subheading">- NextGen Impact</h3>
            <p data-animate="fade-right" data-delay="2">"Let's not just build school, let's build a childhood worth remembering"</p>
        </div>
        <div class="row imgs-row mt-3">
            <div class="col-12 col-md" data-animate="fade-top" data-delay="1">
                <img src="/assets/imgs/about/1.webp" alt="1" width="100%">
                <p>Digital <br>Learning</p>
            </div>
            <div class="col-12 col-md" data-animate="fade-top" data-delay="2">
                <img src="/assets/imgs/about/2.webp" alt="1" width="100%">
                <p>Safe Drinking<br> Water</p>
            </div>
            <div class="col-12 col-md" data-animate="fade-top" data-delay="3">
                <img src="/assets/imgs/about/3.webp" alt="1" width="100%">
                <p>Faculty <br>Training</p>
            </div>
            <div class="col-12 col-md" data-animate="fade-top" data-delay="4">
                <img src="/assets/imgs/about/4.jpeg" alt="1" width="100%">
                <p>Better <br>Classrooms</p>
            </div>
            <div class="col-12 col-md" data-animate="fade-top" data-delay="5">
                <img src="/assets/imgs/about/5.jpeg" alt="1" width="100%">
                <p>Sustainable <br>Impact</p>
            </div>
        </div>
    </div>
</section>

<section class="second-section scroll-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6">
                <img src="/assets/imgs/1/student-reading.webp" alt="6" width="100%" clsas="mt-3">
            </div>
            <div class="col-12 col-md-6 ps-md-4">
                <h2 data-animate="fade-left" data-delay="9">NextGen Impact <span> - A Unit of Earth Initiative Foundation</span></h2>
                <p class="mb-2" data-animate="fade-left" data-delay="11">Earth Initiative Foundation is a registered non-governmental organization working to
                    strengthen education and child development through Corporate Social Responsibility initiatives. </p>
                <p data-animate="fade-left" data-delay="9">Under its flagship CSR programme, NextGen Impact, the Foundation launched the Build My School Mission
                    in Rajasthan to create safe, inspiring and technology-enabled learning environments for children
                    from rural and economically weaker backgrounds.</p>
                <!-- <div class="d-flex">
                    <div class="mission-vision-clm" data-animate="fade-left" data-delay="11">
                        <h3>Our Vision</h3>
                        <p>Every government school inspires curiosity, nurtures creativity and empowers every child
                            through joyful learning, innovation and life skills.</p>
                    </div>
                    <div class="mission-vision-clm" data-animate="fade-left" data-delay="11">
                        <h3>Our Mission</h3>
                        <p>To create spaces where children feel safe, inspired and excited to learn every day.</p>
                    </div>
                </div> -->
                <a href="#" class="globalbtn" data-animate="fade-left" data-delay="11">Read Our Story</a>
            </div>
        </div>
    </div>
</section>

<section class="third-section scroll-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 d-flex align-items-center">
                <div class="content">
                    <h2 class="mb-4" data-animate="fade-left" data-delay="2">Our Future Goal - <span>Building Better Schools, Across India</span></h2>
                    <p class="mb-3" data-animate="fade-right" data-delay="2">The Build My School Mission begins with strengthening government schools in
                        underserved communities. With a vision to expand to more schools, NextGen Impact is working
                        towards a future where every child can learn in an environment that inspires curiosity,
                        creativity and confidence.</p>
                    <p class="mb-4" data-animate="fade-left" data-delay="2">Expand the Build My School Mission to more government schools, creating safe,
                        inspiring and technology-enabled learning spaces for children across India.</p>
                    <a href="#" class="globalbtn" data-animate="fade-top" data-delay="2">Read Our Story</a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div id="india-map"></div>
                <div id="state-tooltip"></div>

            </div>
        </div>
    </div>
</section>

<section class="fourth-section scroll-section">
    <div class="main-row">
        <div class="left-img">
            <img src="/assets/imgs/1/left-1.webp" alt="left" width="100%">
        </div>
        <div class="right-content">
            <div class="inner-content">
                <h2 class="mb-3" data-animate="fade-top" data-delay="2">Every Number Tells <span class="subheading">A Story</span></h2>
                <p data-animate="fade-bottom" data-delay="2">A focused intervention across <strong>government schools in rural Rajasthan</strong> is creating
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
                            <h3>Smart Learning Begins</h3>
                            <p>AI Interactive Flat Panel Displays were installed to make classroom learning more
                                engaging, interactive and effective.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3" data-animate="fade-bottom" data-delay="3">
                        <div class="story-box">
                            <img src="/assets/imgs/1/21.jpg" alt="20" width="100%">
                            <h3>Safe Drinking Water</h3>
                            <p>RO-enabled water coolers were installed to provide students and staff with safe and clean
                                drinking water.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3" data-animate="fade-bottom" data-delay="4">
                        <div class="story-box">
                            <img src="/assets/imgs/1/22.png" alt="20" width="100%">
                            <h3>Empowering Teachers</h3>
                            <p>Faculty received hands-on orientation on operating and using Smartboards effectively in
                                classroom teaching.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3" data-animate="fade-bottom" data-delay="5">
                        <div class="story-box">
                            <img src="/assets/imgs/1/23.png" alt="20" width="100%">
                            <h3>Better Learning Environment</h3>
                            <p>The initiative is helping create more inspiring, safe and technology-enabled learning
                                spaces for rural children.</p>
                        </div>
                    </div>
                </div>
                <div class="readmore text-center mt-5">
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
                    <img src="/assets/imgs/1/26.jpeg" alt="2" width="100%">
                    <h3>Be Part of the Mission.<span></span></h3>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="right-img-box">
                    <img src="/assets/imgs/1/27.jpeg" alt="11" width="48%" class="me-3">
                    <img src="/assets/imgs/1/28.jpeg" alt="12" width="48%">
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

<div class="img-fluid text-center">
    <img src="/assets/imgs/bg-girls.png" alt="bg-girls" width="64%">
</div>

<section class="cta-section">
    <div class="container-fluid">
        <h2 class="text-center" data-animate="fade-top">Take <span>Actions</span></h2>
        <div class="row">
            <div class="col-12 col-md-6 text-center inner-clms"  data-animate="fade-left">
                <img src="/assets/imgs/1/21.webp" alt="21" width="100%">
                <a href="#" class="globalbtn">Support a School <i class="fa-solid fa-arrow-right"></i></a>
            </div>
            <div class="col-12 col-md-6 text-center inner-clms"  data-animate="fade-right">
                <img src="/assets/imgs/1/22.webp" alt="22" width="100%">
                <a href="#" class="globalbtn">Join the Mission <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<section class="clinic-testimonial-section my-5 scroll-section">
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
                            <h3>Build My School Mission – India</h3>
                            <p>An overview of the initiative and its vision for rural government schools.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="story-box">
                            <img src="/assets/imgs/1/21.jpg" alt="20" width="100%">
                            <h3>Bringing Smart Learning to Rural Schools</h3>
                            <p>How AI Interactive Flat Panel Displays can make classroom learning more engaging.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="story-box">
                            <img src="/assets/imgs/1/22.png" alt="20" width="100%">
                            <h3>Safe Drinking Water in Schools</h3>
                            <p>Strengthening basic student amenities through RO-enabled water coolers.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="story-box">
                            <img src="/assets/imgs/1/23.png" alt="20" width="100%">
                            <h3>Empowering Teachers Through Technology</h3>
                            <p>Faculty orientation for effective classroom use of Smartboards.</p>
                        </div>
                    </div>
                </div>
                <div class="readmore text-center mt-5">
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
@endsection
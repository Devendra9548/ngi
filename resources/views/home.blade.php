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
<section class="first-section">
    <div class="container">
        <div class="about-clm text-center">
            <div class="title ct-tooltip">About Us</div>
            <h2>Millions of Children <span>Risk
                    Being</span></h2>
            <h3 class="subheading">Left Behind</h3>
            <p>Without urgent action today, <strong>an
                    entire
                    generation of India's most vulnerable children</strong> will
                grow up without the
                education, skills, or confidence to shape their own futures.</p>
        </div>
        <div class="row imgs-row mt-3">
            <div class="col-12 col-md">
                <img src="/assets/imgs/1/1.png" alt="1" width="100%">
                <p>PM POSHAN Programme</p>
            </div>
            <div class="col-12 col-md">
                <img src="/assets/imgs/1/2.png" alt="1" width="100%">
                <p>PM POSHAN Programme</p>
            </div>
            <div class="col-12 col-md">
                <img src="/assets/imgs/1/3.png" alt="1" width="100%">
                <p>PM POSHAN Programme</p>
            </div>
            <div class="col-12 col-md">
                <img src="/assets/imgs/1/4.png" alt="1" width="100%">
                <p>PM POSHAN Programme</p>
            </div>
            <div class="col-12 col-md">
                <img src="/assets/imgs/1/5.png" alt="1" width="100%">
                <p>PM POSHAN Programme</p>
            </div>
        </div>
    </div>
</section>

<section class="second-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-5">
                <img src="/assets/imgs/1/6.png" alt="6" width="100%">
            </div>
            <div class="col-12 col-md-7">
                <h2>NextGen Impact <span>Foundation</span></h2>
                <p>NextGen Impact Foundation is a not-for-profit organisation headquartered in Bengaluru, India. The
                    Foundation strives to eliminate classroom hunger by implementing the PM POSHAN (Mid-Day Meal)
                    Programme. It provides nutritious meals to children studying in government schools and
                    government-aided schools. NextGen Impact also aims to counter malnutrition and support the Right to
                    Education of children hailing from socio-economically challenging backgrounds.</p>
                <div class="d-flex">
                    <div class="mission-vision-clm">
                        <h3>Our Vision</h3>
                        <p>No child in India shall be deprived of education because of hunger</p>
                    </div>
                    <div class="mission-vision-clm">
                        <h3>Our Mission</h3>
                        <p>No child in India shall be deprived of education because of hunger</p>
                    </div>
                </div>
                <a href="#" class="globalbtn">Read More</a>
            </div>
        </div>
    </div>
</section>

<section class="third-section">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 d-flex align-items-center">
                <div class="content">
                    <h2 class="mb-4">NextGen Impact's <span>Nationwide Programmes</span></h2>
                    <p class="mb-3">NextGen Impact's programmes are creating meaningful change across India by
                        empowering communities, supporting sustainable development, and addressing local challenges
                        through impactful initiatives designed for long-term progress and inclusion.</p>
                    <p class="mb-4">From grassroots communities to growing cities, our programmes focus on education,
                        opportunity, awareness, and social development, building stronger communities and creating
                        positive outcomes for people across diverse regions.</p>
                    <a href="#" class="globalbtn">Read More</a>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div id="india-map"></div>
                <div id="state-tooltip"></div>

            </div>
        </div>
    </div>
</section>

<section class="story-section">
    <div class="container">
        <div class="row">
            <div class="about-clm text-center">
                <!-- <div class="title ct-tooltip">Stories</div> -->
                <h2>Success <span>Stories</span></h2>
                <!-- <h3 class="subheading">Left Behind</h3> -->
                <!-- <p>NextGen Impact's interventions have empowered countless marginalised children to transform their
                    own lives. From the slums of Delhi to remote rural reaches, we have witnessed stories of triumph in
                    the face of child marriage, poverty, health struggles and more. The organisation's investment in
                    instilling skills, mindsets, and values is fuelling journeys to education, financial independence
                    and advocacy roles within communities. Be it defeating poverty or combating chronic diseases,
                    success stories speak of incredible resilience and change catalysed in the most vulnerable
                    communities.
                </p> -->
                <div class="row mt-4">
                    <div class="col-12 col-md-3">
                        <div class="story-box">
                            <img src="/assets/imgs/1/20.webp" alt="20" width="100%">
                            <h3>Ensuring Hygiene & Dignity Amid Flood</h3>
                            <p>Twelve-year-old Ruma Kurmi is dealing with losses far beyond her years. Two months ago,
                                she lost her mother after a prolonged illness. Just as the family was beginning to cope
                                with the loss of</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="story-box">
                            <img src="/assets/imgs/1/21.jpg" alt="20" width="100%">
                            <h3>Hope Finds Its Way…even Amidst The Hardest Of Times</h3>
                            <p>In the midst of severe flooding in #Assam, a quiet but powerful act of resilience took
                                place on the 80th Independence Day, at Bamunpukhuri, Nazira, Sivasagar—we inaugurated
                                the Child Friendly Space</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="story-box">
                            <img src="/assets/imgs/1/22.png" alt="20" width="100%">
                            <h3>Ravinder’s Courageous Journey: A Voice Against Substance Abuse</h3>
                            <p>“Change begins the moment you decide to fight your own battles — not with others, but
                                within yourself.” – Ravinder In the quiet lanes of Rampur village, Shravasti district,
                                Uttar Pradesh</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="story-box">
                            <img src="/assets/imgs/1/23.png" alt="20" width="100%">
                            <h3>Irtiqa’s Journey Back To School: Rebuilding Dreams Through Education</h3>
                            <p>When support arrives at the right time, it can turn hesitation into hope and bring a
                                child back to where they belong — In the remote village of Pethmakhama in Budgam
                                district, Kashmir</p>
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

<section class="fourth-section">
    <div class="main-row">
        <div class="left-img">
            <img src="/assets/imgs/1/1.avif" alt="" width="100%">
        </div>
        <div class="right-content">
            <div class="inner-content">
                <h2 class="mb-3">Every Number is a <span class="subheading">Story</span></h2>
                <p><strong>Behind every statistic is a child</strong> who discovered their potential, a volunteer who
                    found their purpose, a school that was transformed</p>
            </div>
            <div class="row mt-5">
                <div class="col-6 col-md-6 mb-5">
                    <h2 class="counter" data-target="95">0K+</h2>
                    <p>Children empowered every year</p>
                </div>

                <div class="col-6 col-md-6 mb-5">
                    <h2 class="counter" data-target="905">0K+</h2>
                    <p>Children empowered every year</p>
                </div>

                <div class="col-6 col-md-6 mb-5">
                    <h2 class="counter" data-target="950">0K+</h2>
                    <p>Children empowered every year</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="our-work-section">
    <div class="container">
        <div class="about-clm text-center">
            <div class="title ct-tooltip">Our Work</div>
            <h2>Our Fields of <span>Work</span></h2>
        </div>
        <div class="row text-center mt-5">
            <div class="col-6 col-md-2">
                <img src="/assets/imgs/works/1.webp" alt="first" width="60%">
                <p class="first">EDUCATION </p>
            </div>
            <div class="col-6 col-md-2">
                <img src="/assets/imgs/works/2.webp" alt="second" width="60%">
                <p class="second">HEALTH </p>
            </div>
            <div class="col-6 col-md-2">
                <img src="/assets/imgs/works/3.webp" alt="third" width="60%">
                <p class="third">RESILIENCE </p>
            </div>
            <div class="col-6 col-md-2">
                <img src="/assets/imgs/works/4.webp" alt="fourth" width="60%">
                <p class="fourth">LIVELIHOOD </p>
            </div>
            <div class="col-6 col-md-2">
                <img src="/assets/imgs/works/5.webp" alt="fifth" width="60%">
                <p class="fifth">PROTECTION </p>
            </div>
            <div class="col-6 col-md-2">
                <img src="/assets/imgs/works/6.webp" alt="sixth" width="60%">
                <p class="sixth">HUMANITARIAN </p>
            </div>
        </div>
    </div>
    <div class="video-clm text-center mt-5">
        <video autoplay muted loop playsinline width="56%">
            <source src="/assets/videos/1.mp4" type="video/mp4">
        </video>
    </div>
</section>

<section class="fifth-section">
    <div class="container">
        <h2 class="text-center mb-4"><i>"Young people are often told they are the future. At NextGen Impact, they are
                already shaping it."</i></h2>
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="img-box">
                    <img src="/assets/imgs/1/10.png" alt="2" width="100%">
                    <h3>Be the Reason <span>Someone Smiles.</span></h3>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="right-img-box">
                    <img src="/assets/imgs/1/11.avif" alt="11" width="48%" class="me-3">
                    <img src="/assets/imgs/1/12.avif" alt="12" width="48%">
                </div>
                <div class="content-box">
                    <h3 class="first">Join us in the journey to empower communities and change lives.</h3>
                    <h3 class="number">80,000+</h3>
                    <h3 class="last"><strong>Youth and Children reached </strong></h3>
                    <a href="#" class="globalbtn">Donate Now</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="clinic-testimonial-section">

    <!-- Background Title -->
    <div class="testimonial-bg-title">
        Testimonials
    </div>

    <!-- Left Images -->
    <div class="testimonial-images testimonial-left">

        <div class="test-img img-1">
            <img src="images/testimonial-1.jpg" alt="Patient">
        </div>

        <div class="test-img img-2">
            <img src="images/testimonial-2.jpg" alt="Patient">
        </div>

        <div class="test-img img-3">
            <img src="images/testimonial-3.jpg" alt="Patient">
        </div>

        <div class="test-img img-4">
            <img src="images/testimonial-4.jpg" alt="Patient">
        </div>

        <div class="test-img img-5">
            <img src="images/testimonial-5.jpg" alt="Patient">
        </div>

    </div>


    <!-- Right Images -->
    <div class="testimonial-images testimonial-right">

        <div class="test-img img-6">
            <img src="images/testimonial-6.jpg" alt="Patient">
        </div>

        <div class="test-img img-7">
            <img src="images/testimonial-7.jpg" alt="Patient">
        </div>

        <div class="test-img img-8">
            <img src="images/testimonial-8.jpg" alt="Patient">
        </div>

        <div class="test-img img-9">
            <img src="images/testimonial-9.jpg" alt="Patient">
        </div>

        <div class="test-img img-10">
            <img src="images/testimonial-10.jpg" alt="Patient">
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

<section class="story-section">
    <div class="container">
        <div class="row">
            <div class="about-clm text-center">
                <!-- <div class="title ct-tooltip">News</div> -->
                <h2>Our <span>Blogs</span></h2>
                <!-- <h3 class="subheading">Left Behind</h3>
                <p>Donors across the country share our commitment to providing every child with a safe and nurturing
                    environment. Here, you can read inspiring words, written by people like you, about how they value
                    investing in underprivileged children and showing them a better and brighter future. Through their
                    words, you will discover that every rupee and every person matters in our common journey towards a
                    better tomorrow.
                </p> -->
                <div class="row mt-4">
                    <div class="col-12 col-md-3">
                        <div class="story-box">
                            <img src="/assets/imgs/1/20.webp" alt="20" width="100%">
                            <h3>Ensuring Hygiene & Dignity Amid Flood</h3>
                            <p>Twelve-year-old Ruma Kurmi is dealing with losses far beyond her years. Two months ago,
                                she lost her mother after a prolonged illness. Just as the family was beginning to cope
                                with the loss of</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="story-box">
                            <img src="/assets/imgs/1/21.jpg" alt="20" width="100%">
                            <h3>Hope Finds Its Way…even Amidst The Hardest Of Times</h3>
                            <p>In the midst of severe flooding in #Assam, a quiet but powerful act of resilience took
                                place on the 80th Independence Day, at Bamunpukhuri, Nazira, Sivasagar—we inaugurated
                                the Child Friendly Space</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="story-box">
                            <img src="/assets/imgs/1/22.png" alt="20" width="100%">
                            <h3>Ravinder’s Courageous Journey: A Voice Against Substance Abuse</h3>
                            <p>“Change begins the moment you decide to fight your own battles — not with others, but
                                within yourself.” – Ravinder In the quiet lanes of Rampur village, Shravasti district,
                                Uttar Pradesh</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-3">
                        <div class="story-box">
                            <img src="/assets/imgs/1/23.png" alt="20" width="100%">
                            <h3>Irtiqa’s Journey Back To School: Rebuilding Dreams Through Education</h3>
                            <p>When support arrives at the right time, it can turn hesitation into hope and bring a
                                child back to where they belong — In the remote village of Pethmakhama in Budgam
                                district, Kashmir</p>
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

<section class="br-faq-section">
    <div class="br-faq-wrapper">
        <div class="br-faq-visual">
            <div class="br-question-mark">?</div>
        </div>
        <div class="br-faq-content">
            <h2 class="br-faq-title">FAQs</h2>
            <div class="br-faq-list">
                <div class="br-faq-item">
                    <button class="br-faq-question">
                        <span class="br-faq-icon">+</span>
                        <span>WHAT IS THE PROCESS TO AVAIL TAX EXEMPTION CERTIFICATE?</span>
                    </button>
                    <div class="br-faq-answer">
                        <p>
                            After making your donation, the required donation receipt
                            and tax exemption documentation can be provided as per
                            the applicable process.
                        </p>
                    </div>
                </div>
                <div class="br-faq-item">
                    <button class="br-faq-question">
                        <span class="br-faq-icon">+</span>
                        <span>HOW CAN I DONATE ONLINE?</span>
                    </button>

                    <div class="br-faq-answer">
                        <p>
                            You can donate online through the official donation
                            platform using the available payment options.
                        </p>
                    </div>
                </div>
                <div class="br-faq-item">
                    <button class="br-faq-question">
                        <span class="br-faq-icon">+</span>
                        <span>IS THERE ANY ADVANTAGE TO DONATING ONLINE?</span>
                    </button>
                    <div class="br-faq-answer">
                        <p>
                            Online donations are quick, convenient and provide
                            an easy way to receive confirmation of your contribution.
                        </p>
                    </div>
                </div>
                <div class="br-faq-item">
                    <button class="br-faq-question">
                        <span class="br-faq-icon">+</span>
                        <span>IS IT SAFE TO GIVE MY CREDIT CARD DETAILS ONLINE?</span>
                    </button>
                    <div class="br-faq-answer">
                        <p>
                            Payments should always be made through the organization's
                            official and secure payment gateway. Avoid sharing card
                            details through email or other unsecured channels.
                        </p>
                    </div>
                </div>
                <div class="br-faq-item">
                    <button class="br-faq-question">
                        <span class="br-faq-icon">+</span>
                        <span>HOW DO I CONTACT YOU REGARDING MY DONATION?</span>
                    </button>
                    <div class="br-faq-answer">
                        <p>
                            You can contact the organization's support or donation
                            team through the contact details provided on its official website.
                        </p>
                    </div>
                </div>
                <div class="br-faq-item">
                    <button class="br-faq-question">
                        <span class="br-faq-icon">+</span>
                        <span>IS IT COMPLICATED TO MAKE A DONATION ONLINE?</span>
                    </button>
                    <div class="br-faq-answer">
                        <p>
                            No. The online donation process is designed to be simple
                            and can generally be completed in just a few steps.
                        </p>
                    </div>
                </div>
                <div class="br-faq-item">
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
                counter.textContent = Math.floor(current) + "K+";
                requestAnimationFrame(updateCounter);
            } else {
                counter.textContent = target + "K+";
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
@endsection
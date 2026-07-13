@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/home.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">

<style>
.main-container .content-section {
    background: transparent !important;
}

.hero-slider {
    width: 100%;
}

.hero-slider .slide img {
    width: 100%;
    height: auto;
    object-fit: cover;
    display: block;
}

/* Arrow */
.slick-prev,
.slick-next {
    width: 50px;
    height: 50px;
    z-index: 10;
}

.slick-prev {
    left: 30px;
}

.slick-next {
    right: 30px;
}

.slick-prev:before,
.slick-next:before {
    font-size: 40px;
    color: #fff;
}

/* Dots */
.slick-dots {
    bottom: 25px;
    display: none !important;
}

.slick-dots li button:before {
    font-size: 12px;
    color: #fff;
}

.slick-dots li.slick-active button:before {
    color: #28a745;
}

.slick-dotted.slick-slider {
    margin-bottom: 0px !important;
}


/* /// Next */

.why-this-mission-matters-section{

background:#f8fbff !important;

overflow:hidden !important;

}

.why-this-mission-matters-section .sub-title{

color:#19b65b !important;

font-weight:700 !important;

letter-spacing:2px !important;

}

.why-this-mission-matters-section h2{

font-size:48px !important;

font-weight:800 !important;

margin:15px 0 !important;

}

.why-this-mission-matters-section h2 span{

color:#0b5aa9 !important;

}

.why-this-mission-matters-section p{

color:#666 !important;

}

.why-this-mission-matters-section .mission-card{

background:#fff !important;

border-radius:20px !important;

padding:35px !important;

text-align:center !important;

height:100% !important;

transition:.5s !important;

box-shadow:0 15px 40px rgba(0,0,0,.06) !important;

position:relative !important;

overflow:hidden !important;

}

.why-this-mission-matters-section .mission-card::before{

content:"" !important;

position:absolute !important;

left:0 !important;

top:0 !important;

width:100% !important;

height:5px !important;

background:linear-gradient(90deg,#19b65b,#0b5aa9) !important;

transform:scaleX(0) !important;

transition:.5s !important;

}

.why-this-mission-matters-section .mission-card:hover::before{

transform:scaleX(1) !important;

}

.why-this-mission-matters-section .mission-card:hover{

transform:translateY(-12px) !important;

}

.why-this-mission-matters-section .icon{

width:85px !important;

height:85px !important;

border-radius:50% !important;

margin:auto !important;

display:flex !important;

align-items:center !important;

justify-content:center !important;

font-size:34px !important;

color:#fff !important;

background:linear-gradient(135deg,#1bc0ff,#164574) !important;

margin-bottom:25px !important;

transition:.5s !important;

}

.why-this-mission-matters-section .icon i{
    color: #fff !important
}

.why-this-mission-matters-section .mission-card:hover .icon{

transform:rotateY(180deg) scale(1.1) !important;

}

.why-this-mission-matters-section h4{

font-weight:700 !important;

margin-bottom:15px !important;

}

.why-this-mission-matters-section .reveal{

opacity:0 !important;

transform:translateY(80px) !important;

transition:1s !important;

}

.why-this-mission-matters-section .reveal.active{

opacity:1 !important;

transform:none !important;

}

.why-this-mission-matters-section .reveal{
    opacity:1 !important;
    transform:none !important;
}

@media only screen and (max-width:768px) {

    .slick-prev:before,
    .slick-next:before {
        font-size: 18px;
        color: #01406f;
        background: #fff;
        padding-top: 4px;
        border-radius: 100%;
        padding-bottom: 0px;
        padding-left: 2px;
        padding-right: 2px;
    }

    .slick-prev {
        left: 0px;
        display: none !important;
    }

    .slick-next {
        right: 0px;
        display: none !important;
    }
}

/* Next */
.our-solution-section{

background:#f9fbff;

}

.our-solution-section .subtitle{

color:#19b65b;

font-weight:700;

letter-spacing:2px;

}

.our-solution-section h2{

font-size:50px;

font-weight:800;

}

.our-solution-section h2 span{

color:#0d63c9;

}

.our-solution-section .solution-item{

margin-bottom:90px;

}

.our-solution-section .image-box{

overflow:hidden;

border-radius:25px;

position:relative;

}

.our-solution-section .image-box img{

width:100%;

border-radius:25px;

transition:.7s;

display:block;

}

.our-solution-section .image-box::before{

content:"";

position:absolute;

inset:0;

background:linear-gradient(45deg,#0d63c950,#19b65b40);

opacity:0;

transition:.5s;

z-index:1;

}

.our-solution-section .image-box:hover::before{

opacity:1;

}

.our-solution-section .image-box:hover img{

transform:scale(1.08);

}

.our-solution-section .content-box{

padding:30px;

}

.our-solution-section .content-box span{

font-size:60px;

font-weight:800;

color:#e9eef5;

display:block;

line-height:1;

}

.our-solution-section h3{

margin-top:-25px;

font-size:34px;

font-weight:700;

margin-bottom:20px;

}

.our-solution-section p{

color:#666;

line-height:1.8;

font-size:17px;

}

.our-solution-section .solution-item{

opacity:0;

transform:translateY(80px);

transition:1s;

}

.our-solution-section .solution-item.active{

opacity:1;

transform:none;

}

@media(max-width:992px){

.our-solution-section h2{

font-size:36px;

}

.our-solution-section .content-box{

padding:0;

text-align:center;

}

}


/* First Section */

/* Next */

.home-cta-section{

position:relative;

overflow:hidden;

padding:120px 0;

background:linear-gradient(135deg,#0A4D8F 0%,#1166C1 55%,#19B65B 100%);

}

.home-cta-section::before{

content:"";

position:absolute;

width:500px;

height:500px;

border-radius:50%;

background:rgba(255,255,255,.07);

top:-220px;

left:-150px;

animation:moveOne 12s linear infinite;

}

.home-cta-section::after{

content:"";

position:absolute;

width:380px;

height:380px;

border-radius:50%;

background:rgba(255,255,255,.05);

bottom:-180px;

right:-100px;

animation:moveTwo 10s linear infinite alternate;

}

.home-cta-section .container{

position:relative;

z-index:5;

}

.home-cta-section .sub-heading{

display:inline-block;

padding:10px 22px;

border-radius:50px;

background:rgba(255,255,255,.12);

color:#fff;

font-weight:600;

letter-spacing:2px;

margin-bottom:25px;

backdrop-filter:blur(8px);

}

.home-cta-section h2{

color:#fff;

font-size:58px;

font-weight:800;

line-height:1.15;

margin-bottom:30px;

}

.home-cta-section h2 span{

color:#FFE46B;

}

.home-cta-section p{

color:rgba(255,255,255,.88);

font-size:19px;

line-height:1.9;

max-width:820px;

margin:auto;

}

.home-cta-section .cta-buttons{

margin-top:45px;

display:flex;

justify-content:center;

gap:18px;

flex-wrap:wrap;

}

.home-cta-section .cta-buttons a{

text-decoration:none;

padding:17px 38px;

border-radius:60px;

font-size:16px;

font-weight:700;

transition:.4s;

}

.home-cta-section .btn-donate{

background:#fff;

color:#0A4D8F;

box-shadow:0 15px 35px rgba(0,0,0,.15);

}

.home-cta-section .btn-donate:hover{

transform:translateY(-8px);

background:#FFE46B;

color:#111;

}

.home-cta-section .btn-contact{

border:2px solid rgba(255,255,255,.35);

color:#fff;

backdrop-filter:blur(12px);

}

.home-cta-section .btn-contact:hover{

background:#fff;

color:#0A4D8F;

transform:translateY(-8px);

}

.home-cta-section::selection{

background:#fff;

color:#0A4D8F;

}

/* Floating Glow */

.home-cta-section .container::before{

content:"";

position:absolute;

width:120px;

height:120px;

border-radius:50%;

background:rgba(255,255,255,.15);

left:10%;

top:20%;

filter:blur(10px);

animation:float 6s ease-in-out infinite;

}

.home-cta-section .container::after{

content:"";

position:absolute;

width:90px;

height:90px;

border-radius:50%;

background:rgba(255,255,255,.12);

right:12%;

bottom:10%;

animation:float 8s ease-in-out infinite;

}

@keyframes float{

0%{transform:translateY(0);}
50%{transform:translateY(-20px);}
100%{transform:translateY(0);}

}

@keyframes moveOne{

0%{transform:translate(0,0);}
50%{transform:translate(50px,40px);}
100%{transform:translate(0,0);}

}

@keyframes moveTwo{

0%{transform:translate(0,0);}
100%{transform:translate(-40px,-40px);}

}

@media(max-width:992px){

.home-cta-section{

padding:80px 0;

}

.home-cta-section h2{

font-size:38px;

}

.home-cta-section p{

font-size:16px;

}

}

@media(max-width:576px){

.home-cta-section h2{

font-size:30px;

}

.home-cta-section .cta-buttons{

flex-direction:column;

}

.home-cta-section .cta-buttons a{

width:100%;

}

}


/* // Next */

.home-cta-section{

opacity:0;

transform:translateY(80px);

transition:1s ease;

}

.home-cta-section.show{

opacity:1;

transform:translateY(0);

}

.latest-blog-section{

background:#f8fbff;

}

.latest-blog-section .section-tag{

color:#19b65b;

letter-spacing:2px;

font-weight:700;

}

.latest-blog-section h2{

font-size:48px;

font-weight:800;

margin:15px 0;

}

.latest-blog-section h2 span{

color:#0B63CE;

}

.latest-blog-section p{

color:#666;

}

.latest-blog-section .view-all-btn{

color:#0B63CE;

font-weight:700;

text-decoration:none;

}

.latest-blog-section .blog-card{

background:#fff;

border-radius:22px;

overflow:hidden;

margin:12px;

box-shadow:0 15px 40px rgba(0,0,0,.08);

transition:.4s;

}

.latest-blog-section .blog-card:hover{

transform:translateY(-12px);

}

.latest-blog-section .blog-image{

position:relative;

overflow:hidden;

}

.latest-blog-section .blog-image img{

width:100%;

height:260px;

object-fit:cover;

transition:.6s;

}

.latest-blog-section .blog-card:hover img{

transform:scale(1.08);

}

.latest-blog-section .date{

position:absolute;

left:20px;

top:20px;

background:#fff;

color:#0B63CE;

padding:10px 16px;

border-radius:12px;

font-weight:700;

}

.latest-blog-section .blog-content{

padding:28px;

}

.latest-blog-section .category{

color:#19b65b;

font-size:14px;

font-weight:700;

}

.latest-blog-section h3{

font-size:24px;

margin:15px 0;

line-height:1.4;

font-weight:700;

}

.latest-blog-section .blog-content a{

text-decoration:none;

color:#0B63CE;

font-weight:700;

}

.latest-blog-section .slick-track{

display:flex;

}

.latest-blog-section .slick-slide{

height:inherit;

}


</style>
@endsection

<!--
  
    CTA + Donate now button + Contact  button + Full Width
    Latest Blogs (where 4 blogs show where horizontal scroll also use slick slider for this)
    Footer CTA + Contact + Full Width
    
    
-->

@section('body')
<section class="hero-slider">
    <div class="slide">
        <picture>
            <!-- Mobile Banner -->
            <source media="(max-width: 767px)" srcset="/assets/imgs/banners/6.webp">
            <!-- Desktop Banner -->
            <source media="(min-width: 768px)" srcset="/assets/imgs/banners/3.webp">
            <img src="/assets/imgs/banners/3.webp" alt="Build My School Mission" class="img-fluid w-100">
        </picture>
    </div>
    <div class="slide">
        <picture>
            <!-- Mobile Banner -->
            <source media="(max-width: 767px)" srcset="/assets/imgs/banners/7.webp">
            <!-- Desktop Banner -->
            <source media="(min-width: 768px)" srcset="/assets/imgs/banners/4.webp">
            <img src="/assets/imgs/banners/4.webp" alt="Build My School Mission" class="img-fluid w-100">
        </picture>
    </div>
</section>
<hr class="golden-hr">

<section class="first-section py-5">
    <div class="container">

        <div class="row justify-content-center text-center mb-5">
            <div class="col-lg-8">
                <span class="small-title">OUR PURPOSE</span>
                <h2 class="main-title mt-2">
                    Mission <span>&</span> Vision
                </h2>

                <p class="mt-3">
                    Empowering government schools through innovation, joyful learning,
                    and sustainable development to create brighter futures for every child.
                </p>
            </div>
        </div>

        <div class="row g-4">

            <!-- Mission -->

            <div class="col-lg-6">
                <div class="info-card reveal-card">

                    <div class="icon-box">
                        <i class="bi bi-bullseye"></i>
                    </div>

                    <h3>Our Mission</h3>
                    <p>
                        Our mission is to create spaces where children feel safe, inspired, and excited to learn every
                        day.
                        <i>“Let’s not just build schools. let’s build childhoods worth remembering.”</i>
                    </p>

                </div>
            </div>

            <!-- Vision -->

            <div class="col-lg-6">
                <div class="info-card reveal-card">

                    <div class="icon-box">
                        <i class="bi bi-eye"></i>
                    </div>

                    <h3>Our Vision</h3>

                    <p>
                        A future where every government school inspires curiosity, nurtures creativity, and empowers
                        every child through joyful learning, scientific exploration, innovation, and life skills to
                        reach their fullest potential. <i>“One District. One School. Multiple Futures and Vision.”</i>
                    </p>

                </div>
            </div>

        </div>

    </div>
</section>

<section class="info-banner-section py-5">
    <img src="/assets/imgs/full-page-banner.webp" alt="full page" width="100%">
</section>

<section class="cta-mid-section">
    <div class="container">
        <div class="cta-content">
            <span>BUILD MY SCHOOL MISSION</span>
            <h2>Together We Can Transform Government Schools</h2>
            <p>
                Join hands with us to build joyful learning spaces, digital classrooms,
                safe playgrounds, and brighter futures for thousands of children.
            </p>
            <div class="cta-btns">
                <a href="#" class="donate-btn">Donate Now</a>
                <a href="#" class="read-btn">Read More</a>
            </div>
        </div>
    </div>
</section>

<section class="why-this-mission-matters-section py-5">

    <div class="container">

        <div class="row justify-content-center mb-5">

            <div class="col-lg-8 text-center">

                <span class="sub-title">
                    WHY THIS MISSION MATTERS
                </span>

                <h2>
                    Every Child Deserves a Better
                    <span>Learning Environment</span>
                </h2>

                <p>
                    Millions of children studying in government schools still face challenges
                    that affect their education, health, confidence, and future opportunities.
                </p>

            </div>

        </div>


        <div class="row g-4">

            <div class="col-lg-4 col-md-6">

                <div class="mission-card reveal">

                    <div class="icon">
                        <i class="bi bi-building"></i>
                    </div>

                    <h4>Infrastructure Gap</h4>

                    <p>
                        Many government schools still require safe, child-friendly classrooms and improved infrastructure.
                    </p>

                </div>

            </div>


            <div class="col-lg-4 col-md-6">

                <div class="mission-card reveal">

                    <div class="icon">
                        <i class="bi bi-droplet-half"></i>
                    </div>

                    <h4>Clean Drinking Water</h4>

                    <p>
                        Access to clean drinking water remains a basic challenge in many schools.
                    </p>

                </div>

            </div>


            <div class="col-lg-4 col-md-6">

                <div class="mission-card reveal">

                    <div class="icon">
                        <i class="bi bi-laptop"></i>
                    </div>

                    <h4>Digital Learning</h4>

                    <p>
                        Students often miss opportunities because modern digital learning tools are unavailable.
                    </p>

                </div>

            </div>


            <div class="col-lg-4 col-md-6">

                <div class="mission-card reveal">

                    <div class="icon">
                        <i class="bi bi-controller"></i>
                    </div>

                    <h4>Play & Development</h4>

                    <p>
                        Safe playgrounds are essential for healthy physical and mental development.
                    </p>

                </div>

            </div>


            <div class="col-lg-4 col-md-6">

                <div class="mission-card reveal">

                    <div class="icon">
                        <i class="bi bi-people"></i>
                    </div>

                    <h4>Rural Communities</h4>

                    <p>
                        Rural children are the most affected due to limited educational resources.
                    </p>

                </div>

            </div>


            <div class="col-lg-4 col-md-6">

                <div class="mission-card reveal">

                    <div class="icon">
                        <i class="bi bi-heart"></i>
                    </div>

                    <h4>Bright Futures</h4>

                    <p>
                        Happy childhoods create confident learners and stronger communities.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="our-solution-section py-5">

    <div class="container">

        <div class="row text-center mb-5">

            <div class="col-lg-8 mx-auto">

                <span class="subtitle">OUR SOLUTION</span>

                <h2>
                    Transforming Schools,
                    <span>Changing Lives</span>
                </h2>

                <p>
                    We create inspiring government schools through smart classrooms,
                    clean water, playgrounds, safe infrastructure and joyful learning spaces.
                </p>

            </div>

        </div>

        <!-- Row 1 -->

        <div class="row align-items-center gy-5 solution-item">

            <div class="col-lg-6">

                <div class="image-box">

                    <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=900" class="img-fluid">

                </div>

            </div>

            <div class="col-lg-6">

                <div class="content-box">

                    <span>01</span>

                    <h3>AI Smart Classroom</h3>

                    <p>
                        Interactive smart boards and digital education create engaging
                        classrooms where every child enjoys learning.
                    </p>

                </div>

            </div>

        </div>


        <!-- Row 2 -->

        <div class="row align-items-center gy-5 flex-lg-row-reverse solution-item">

            <div class="col-lg-6">

                <div class="image-box">

                    <img src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?w=900" class="img-fluid">

                </div>

            </div>

            <div class="col-lg-6">

                <div class="content-box">

                    <span>02</span>

                    <h3>Clean Drinking Water</h3>

                    <p>
                        RO water systems ensure every child has access to clean and safe
                        drinking water throughout the school day.
                    </p>

                </div>

            </div>

        </div>



        <!-- Row 3 -->

        <div class="row align-items-center gy-5 solution-item">

            <div class="col-lg-6">

                <div class="image-box">

                    <img src="https://images.unsplash.com/photo-1516627145497-ae6968895b74?w=900" class="img-fluid">

                </div>

            </div>

            <div class="col-lg-6">

                <div class="content-box">

                    <span>03</span>

                    <h3>Outdoor Playground</h3>

                    <p>
                        Playgrounds help children stay healthy, active and develop teamwork,
                        creativity and confidence.
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="home-cta-section">

    <div class="container">

        <div class="row justify-content-center">

            <div class="col-xl-10 text-center">

                <span class="sub-heading">
                    EVERY CHILD DESERVES A CHANCE
                </span>

                <h2>
                    A Better School Today,
                    <span>A Brighter Tomorrow.</span>
                </h2>

                <p>
                    Help us create modern classrooms, digital learning spaces, safe playgrounds,
                    clean drinking water facilities, and nurturing environments where every child
                    can discover their potential and build a stronger future.
                </p>

                <div class="cta-buttons">

                    <a href="#" class="btn-donate">
                        Support This Mission
                    </a>

                    <a href="#" class="btn-contact">
                        Contact Our Team
                    </a>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="latest-blog-section py-5">

    <div class="container-fluid px-lg-5">

        <div class="row align-items-end mb-5">

            <div class="col-lg-8">

                <span class="section-tag">
                    OUR BLOGS
                </span>

                <h2>
                    Stories That Inspire
                    <span>Change</span>
                </h2>

                <p>
                    Explore inspiring stories, mission updates, school transformation journeys,
                    and insights that are helping build a better future for every child.
                </p>

            </div>

            <div class="col-lg-4 text-lg-end">

                <a href="#" class="view-all-btn">
                    View All Blogs →
                </a>

            </div>

        </div>


        <div class="blog-slider">

            <!-- Blog -->

            <div>

                <article class="blog-card">

                    <div class="blog-image">

                        <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?w=900">

                        <span class="date">
                            18 JUL
                        </span>

                    </div>

                    <div class="blog-content">

                        <span class="category">
                            Education
                        </span>

                        <h3>
                            Why Every Child Deserves A Better Learning Environment
                        </h3>

                        <a href="#">
                            Read Article →
                        </a>

                    </div>

                </article>

            </div>



            <div>

                <article class="blog-card">

                    <div class="blog-image">

                        <img src="https://images.unsplash.com/photo-1513258496099-48168024aec0?w=900">

                        <span class="date">
                            15 JUL
                        </span>

                    </div>

                    <div class="blog-content">

                        <span class="category">
                            Smart Schools
                        </span>

                        <h3>
                            Transforming Government Schools Through Digital Learning
                        </h3>

                        <a href="#">
                            Read Article →
                        </a>

                    </div>

                </article>

            </div>




            <div>

                <article class="blog-card">

                    <div class="blog-image">

                        <img src="https://images.unsplash.com/photo-1497486751825-1233686d5d80?w=900">

                        <span class="date">
                            10 JUL
                        </span>

                    </div>

                    <div class="blog-content">

                        <span class="category">
                            Community
                        </span>

                        <h3>
                            Building Schools That Inspire Children To Dream Bigger
                        </h3>

                        <a href="#">
                            Read Article →
                        </a>

                    </div>

                </article>

            </div>





            <div>

                <article class="blog-card">

                    <div class="blog-image">

                        <img src="https://images.unsplash.com/photo-1529390079861-591de354faf5?w=900">

                        <span class="date">
                            05 JUL
                        </span>

                    </div>

                    <div class="blog-content">

                        <span class="category">
                            Mission
                        </span>

                        <h3>
                            Together We Can Build Futures, Not Just Schools
                        </h3>

                        <a href="#">
                            Read Article →
                        </a>

                    </div>

                </article>

            </div>

        </div>

    </div>

</section>

@endsection

@section('customjs')

<script>
$('.fourcolumnslider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-arrow-left"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-arrow-right"></i></button>',
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]

});
</script>

<script>
$('.twoslide-slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 1,
    slidesToScroll: 1,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-arrow-left"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-arrow-right"></i></button>',
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }
    ]

});
</script>
<script src="/assets/js/front/home.js"></script>
<script>
function getimagedata(e) {
    const getimg = e.getAttribute('data-items');
    document.querySelector(".inner-solution").style.backgroundImage = `url('/assets/imgs/${getimg}')`;
}


function getsaboutimg(e) {
    const getsimg = e.getAttribute('data-items');
    document.querySelector("#targetImgAbout").src = `/assets/imgs/${getsimg}`;
}
</script>
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

<script>
$(function() {
    $('.hero-slider').slick({
        dots: true,
        arrows: true,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 3000,
        speed: 800
    });
});
</script>
<script>
document.addEventListener("DOMContentLoaded", function() {

    const cards = document.querySelectorAll(".first-section .reveal-card");

    function revealCards() {

        const trigger = window.innerHeight * 0.85;

        cards.forEach(card => {

            const top = card.getBoundingClientRect().top;

            if (top < trigger) {

                card.classList.add("active");

            }

        });

    }

    revealCards();

    window.addEventListener("scroll", revealCards);

});
</script>
<script>
    document.addEventListener("scroll",function(){

document.querySelectorAll(".our-solution-section .solution-item").forEach(function(el){

if(el.getBoundingClientRect().top<window.innerHeight-120){

el.classList.add("active");

}

});

});

window.dispatchEvent(new Event("scroll"));
</script>


<script>
    document.addEventListener("DOMContentLoaded",()=>{

const section=document.querySelector(".home-cta-section");

const observer=new IntersectionObserver(entries=>{

    entries.forEach(entry=>{

        if(entry.isIntersecting){

            section.classList.add("show");

        }

    });

},{threshold:.2});

observer.observe(section);

});
</script>


<script>
    $('.blog-slider').slick({

slidesToShow:4,

slidesToScroll:1,

arrows:true,

dots:false,

infinite:true,

autoplay:true,

autoplaySpeed:3000,

speed:700,

responsive:[

{

    breakpoint:992,

    settings:{

        slidesToShow:2

    }

},

{

    breakpoint:768,

    settings:{

        slidesToShow:1

    }

}

]

});
</script>
@endsection
@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/careers.css" />
@endsection
@section('body')
<x-mainbanner name="Careers" para="" imgs="/assets/imgs/Careers-Banner-2.jpg" />
<section class="first-section py-5">
    <div class="container pt-5">
        <h2 class="text-center">Shape the Future of Trade</h2>
        <!-- <hr class="blue-line"> -->
        <p class="text-center">We believe careers should be more than just jobs — they should be journeys of growth, purpose and impact. By becoming part of our team, you’ll work in an inclusive environment that values authenticity, collaboration and well-being. With business associates across 50+ countries, you’ll gain global exposure, develop future-ready skills and contribute to driving progress for industries worldwide. Together, we rise above the possible.</p>
    </div>
</section>

<section class="second-section">
    <div class="container pb-5">
        <div class="row">
            <div class="col-12 col-md-6 p-md-5">
              <img src="/assets/imgs/52.jpg" alt="4" width="100%">
            </div>
            <div class="col-12 col-md-6 p-md-5 ps-md-0">
                <div class="cards">
                    <h2>Where Possibility Ends, We Begin</h2>
                    <!-- <hr class="blue-line"> -->
                    <p>Semzo Global, growth isn’t just encouraged — it’s built into everything we do. We believe in empowering every individual to learn, innovate, and unlock their full potential.
Here, you’re in control of your own career journey. Whether you aim to deepen your expertise, explore new roles, or take your talent to the global stage, we provide the opportunities and support to get you there.
Our culture is rooted in collaboration, inclusivity, and shared ambition. By working together, we achieve more — for our people, our partners, and the industries we serve. At Semzo, your ideas matter, your growth matters, and your impact matters. Together, we rise above the possible.
</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- <section class="goldensection">
    <div class="bgimg py-5 my-5">
    <div class="container py-5">
       <h2 class="text-center mb-3">Join a Team That Inspires</h2>
       <hr class="blue-line mb-5">
       <div class="row">
        <div class="col-12 col-md-3">
            <div class="cards">
                <i class="fas fa-chart-line"></i>
                <h3>Professional Growth</h3>
                <p>We invest in your growth through training, mentorship, and new opportunities. We value leadership, initiative, and passion—join us to develop your career and reach your potential.</p>
            </div>
        </div>
        <div class="col-12 col-md-3">
           <div class="cards">
                <i class="fa-solid fa-people-group"></i>
                <h3>Diverse Culture.</h3>
                <p>We believe diverse perspectives drive great ideas. Our inclusive team combines unique talents and backgrounds, fostering collaboration, creativity, and teamwork to achieve shared success together.</p>
            </div>
        </div>
        <div class="col-12 col-md-3">
            <div class="cards">
                <i class="fas fa-briefcase"></i>
                <h3>Work Hard, Play Hard</h3>
                <p>We value work-life balance and support your well-being. Our environment respects personal time, encouraging you to enjoy the Upper Peninsula’s many recreational opportunities.</p>
            </div>
        </div>
       </div>
    </div>
    </div>
</section> -->

<section class="joinateamsection py-md-5">
    <div class="container py-5">
        <h2 class="text-center pb-0">Join a Team That Inspires</h2>
        <!-- <hr class="blue-line"> -->
        <div class="row mt-4 d-flex justify-content-center">
         <div class="col-12 col-md-3 mb-3 mb-md-0">
            <div class="cards">
              <i class="fas fa-chart-line"></i>
              <h3>Professional Growth</h3>
              <p>We invest in your growth through training, mentorship, and new opportunities. We value leadership, initiative, and passion—join us to develop your career and reach your potential.</p>
            </div>
         </div>
         <div class="col-12 col-md-3 mb-3 mb-md-0">
            <div class="cards">
              <i class="fa-solid fa-people-group"></i>
              <h3>Diverse Culture.</h3>
              <p>We believe diverse perspectives drive great ideas. Our inclusive team combines unique talents and backgrounds, fostering collaboration, creativity, and teamwork to achieve shared success together.</p>
            </div>
         </div>
         <div class="col-12 col-md-3 mb-3 mb-md-0">
            <div class="cards">
              <i class="fas fa-briefcase"></i>
              <h3>Work Hard, Play Hard</h3>
              <p>We value work-life balance and support your well-being. Our environment respects personal time, encouraging you to enjoy the Upper Peninsula’s many recreational opportunities.</p>
            </div>
         </div>
        </div>
    </div>
</section>

<section class="cta-section pb-5">
    <div class="container py-5">
        <h2>Great talent belongs in Great places</h2>
        <h2>we’d love to hear from you!</h2>
        <p class="m-0"><a class="btn-blue" href="mailto:semzoglobal@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>
 semzoglobal@gmail.com</a></p>
    </div>
</section>
@endsection
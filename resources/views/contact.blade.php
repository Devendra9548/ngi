@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/contact.css" />
<link rel="stylesheet" href="/assets/css/front/style.css" />
<link rel="stylesheet" href="/assets/css/front/careers.css" />
<title>Contact Us </title>
<style>
.address-here:hover {
    color: #000 !important;
    cursor: default;
}
</style>
@endsection
@section('body')
<x-mainbanner name="Reach Out." para="We are here always.." imgs="/assets/imgs/1/13.avif" />

<section class="first-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">General <span>Support</span></h2>
            </div>
            <div class="col-12 col-md-6 left-clm">
                <img src="/assets/imgs/1/14.avif" alt="14" width="100%">
                <div class="contact-box">
                    <div class="single-contact-box d-flex align-items-center">
                        <div class="icon-box">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Our Mail</h3>
                            <p>contact@bhumi.ngo</p>
                        </div>
                    </div>
                </div>
                <div class="contact-box">
                    <div class="single-contact-box d-flex align-items-center">
                        <div class="icon-box">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Our Contact</h3>
                            <p>87544-13255</p>
                        </div>
                    </div>
                </div>
                <div class="contact-box">
                    <div class="single-contact-box d-flex align-items-center">
                        <div class="icon-box">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="contact-text">
                            <h3>Our Address</h3>
                            <p>3/2, Karpaga Vinayagar Koil Street, Alandur, Chennai – 600016, India</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 right-clm">
              <div class="right-inner-clm">
                <p class="mb-0">Ready To Bring The Change? </p>
                <p class="mb-3">Let's get to work. </p>
                <img src="/assets/imgs/1/15.avif" alt="15" width="100%">
                <a href="#" class="globalbtn">Contact Us Now <i class="fa-solid fa-arrow-right"></i></a>
              </div>
            </div>
        </div>
    </div>
</section>
<section class="contact-us-section pt-0">
    <div class="container-fluid py-5">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Child Protection <span>Code Of Conduct</span></h2>
            </div>
            <div class="col-12 col-md-6 left-clm">
              <div class="right-inner-clm">
                <p class="mb-3">Child Protection Code Of Conduct For Children of India. </p>
                <img src="/assets/imgs/1/15.avif" alt="15" width="100%">
              </div>
            </div>
            <div class="col-12 col-md-6 mt-5 mt-md-0">
                <div class="ctform">
                    <form action="" method="post" id="contactform">
                        @csrf
                        <input type="hidden" name="lat" id="lat">
                        <input type="hidden" name="lon" id="lon">
                        <div class="groups-2">
                            <label for="name">Full Name<span class="star">*</span></label>
                            <input type="text" id="name" name="name" placeholder="Full Name" required>
                        </div>
                        <div class="groups-2">
                            <label for="email">Email<span class="star">*</span></label>
                            <input type="email" id="email" name="email" placeholder="Email Address" required>
                        </div>
                        <div class="groups-2">
                            <label for="phone">Phone Number<span class="star">*</span></label>
                            <input type="text" id="phone" name="phone" placeholder="Phone Number"
                                onchange="validphone()" required>
                            <span id="error"
                                style="color: red;font-size: 12px;margin-bottom: 0px;margin-top: -10px;   display: block;position: absolute;"></span>

                        </div>
                        <div class="groups-2">
                            <label for="subject">Subject<span class="star">*</span></label>
                            <input type="subject" id="subject" name="subject" placeholder="Subject" required>
                        </div>
                        <div class="groups-2">
                            <label for="cname">Message<span class="star">*</span></label>
                            <textarea name="message" id="message" cols="30" rows="10" placeholder="Write Message"
                                required></textarea>
                        </div>
                        <button type="submit" class="globalbtn">Submit <i class="fa-solid fa-arrow-right"></i></button>
                        <img src="/assets/imgs/spinner.gif" alt="" width="22px" id="CtSpinner">
                        <p id="messagehere">Thank you for your submission.</p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cta-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Our Regional <span>Offices</span></h2>
                <p class="heading">Chennai Office</p>
                <p class="address">3/2, Karpaga Vinayagar Koil Street, Alandur, Chennai – 600016, India</p>
                <a href="#" class="globalbtn">Have Questions? Check our FAQs <i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>

<script src="/assets/js/front/contact.js"></script>

@endsection

<script>
function validphone() {
    const phoneInput = document.getElementById('phone');
    const errorSpan = document.getElementById('error');
    const phone = phoneInput.value.trim();

    // Check if input is only digits
    const numberRegex = /^[0-9]+$/;

    // Optional: check phone number length (5 to 15 digits)
    if (!numberRegex.test(phone)) {
        errorSpan.textContent = 'Phone number must contain only digits';
        phoneInput.value = '';
        phoneInput.focus();
    } else if (phone.length < 5 || phone.length > 15) {
        errorSpan.textContent = 'Phone number must be between 5 and 15 digits';
        phoneInput.value = '';
        phoneInput.focus();
    } else {
        errorSpan.textContent = '';
    }
}
</script>



<script>
(function() {
    if (!navigator.geolocation) return;

    navigator.geolocation.getCurrentPosition(
        function(pos) {
            var latEl = document.getElementById('lat');
            var lonEl = document.getElementById('lon');
            if (latEl && lonEl) {
                latEl.value = pos.coords.latitude;
                lonEl.value = pos.coords.longitude;
            }
        },
        function(err) {
            console.warn('Geolocation not available or permission denied:', err && err.message);
        }, {
            enableHighAccuracy: false,
            timeout: 8000,
            maximumAge: 60 * 1000
        }
    );
})();
</script>
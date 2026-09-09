@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/contact.css" />
<link rel="stylesheet" href="/assets/css/front/style.css" />
<link rel="stylesheet" href="/assets/css/front/careers.css" />
<title>Contact Us </title>
<style>
.address-here:hover
{
    color: #000!important;
    cursor: default;
}
</style>
@endsection
@section('body')
<x-mainbanner name="Reach Out." para="We are here always.." imgs="/assets/imgs/1/13.avif" />
<section class="contact-us-section py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-12 col-md-6 pe-md-5">
                <div class="contact-infos">
                <h2>Contact Information</h2>
                
                <div class="ds-contact-info mt-4"> 
                   
            <div class="icon-main-row" style="display: flex; padding-top: 20px;"> 
             <div class="icon-box" style="width: 10%;"> 
               <!-- Phone Icon -->
             <img src="https://cdn-icons-png.flaticon.com/512/597/597177.png" style="width: 30px; height: auto; margin-top: 0px;margin-bottom:10px" />
             </div> 
             <div class="icon-text" style="width: 92%;"> 
              <a href="tel:+919999787894" target="_blank" class="size-21 centers-name-list">{{$gseo->whatsapp}}</a> 
             </div> 
            </div> 

            <div class="icon-main-row" style="display: flex; padding-top: 10px;"> 
             <div class="icon-box" style="width: 10%;"> 
             <img src="https://cdn-icons-png.flaticon.com/512/732/732200.png" style="width: 30px;height: auto;margin-top: 0px;border-radius: 0px;margin-bottom:10px" />
             </div> 
             <div class="icon-text" style="width: 92%;">
              <a href="mailto:semzoglobal@gmail.com" class="size-21 centers-name-list" title=""> semzoglobal@gmail.com</a> 
             </div> 
            </div> 

            <div class="icon-main-row" style="display: flex; padding-top: 20px;"> 
             <div class="icon-box" style="width: 10%;"> 
               <img src="https://flagcdn.com/w40/in.png" style="width: 30px;height: auto;border-radius: 0px; margin-top: 6px;" />
             </div> 
             <div class="icon-text" style="width: 92%;"> 
              <a href="javascript:void(0)" class="size-21 centers-name-list address-here">{{$gseo->address1}}</a> 
             </div> 
            </div>
      
            <div class="icon-main-row" style="display: flex; padding-top: 20px;"> 
             <div class="icon-box" style="width: 10%;"> 
             <img src="https://flagcdn.com/w40/ae.png" style="width: 30px;height: 20px;border-radius: 0px; margin-top: 6px;" />
             </div> 
             <div class="icon-text" style="width: 92%;"> 
              <a href="javascript:void(0)" class="size-21 centers-name-list address-here">{{$gseo->address2}}</a> 
             </div> 
            </div> 
 
<!-- 
            <div class="icon-main-row" style="display: flex; padding-top: 20px;"> 
             <div class="icon-box" style="width: 10%;"> 
             <i class="fa-brands fa-square-facebook"></i>
             </div> 
             <div class="icon-text" style="width: 92%;"> 
              <a href="https://www.facebook.com/semzoglobal/" target="_blank" class="size-21 centers-name-list">Facebook.com/semzoglobal</a> 
             </div> 
            </div> 


            <div class="icon-main-row" style="display: flex; padding-top: 20px;"> 
             <div class="icon-box" style="width: 10%;"> 
             <i class="fa-brands fa-square-x-twitter"></i>
             </div> 
             <div class="icon-text" style="width: 92%;"> 
              <a href="https://x.com/Semzoglobal" target="_blank" class="size-21 centers-name-list">X.com/semzoglobal</a> 
             </div> 
            </div> 

            <div class="icon-main-row" style="display: flex; padding-top: 20px;"> 
             <div class="icon-box" style="width: 10%;"> 
             <i class="fa-brands fa-youtube"></i>
             </div> 
             <div class="icon-text" style="width: 92%;"> 
              <a href="http://www.youtube.com/@semzoglobal" target="_blank" class="size-21 centers-name-list">Youtube.com/@semzoglobal</a> 
             </div> 
            </div> 

            <div class="icon-main-row" style="display: flex; padding-top: 20px;"> 
             <div class="icon-box" style="width: 10%;"> 
             <i class="fa-brands fa-linkedin"></i>
             </div> 
             <div class="icon-text" style="width: 92%;"> 
              <a href="https://www.linkedin.com/company/semzoglobal/" target="_blank" class="size-21 centers-name-list">Linkedin.com/company/semzoglobal</a> 
             </div> 
            </div> 

            <div class="icon-main-row" style="display: flex; padding-top: 20px;"> 
             <div class="icon-box" style="width: 10%;"> 
             <i class="fa-brands fa-instagram"></i>
             </div> 
             <div class="icon-text" style="width: 92%;"> 
              <a href="https://www.instagram.com/semzoglobal/" target="_blank" class="size-21 centers-name-list">Instagram.com/semzoglobal</a> 
             </div> 
            </div> 

 -->
           </div>

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
                <div class="groups-2 lsgroup">
                   <label for="email">Email<span class="star">*</span></label>
                   <input type="email" id="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="groups-2">
                   <label for="phone">Phone Number<span class="star">*</span></label>
                   <input type="text" id="phone" name="phone" placeholder="Phone Number" onchange="validphone()" required>
                   <span id="error" style="color: red;font-size: 12px;margin-bottom: 0px;margin-top: -10px;   display: block;position: absolute;"></span>

                </div>
                <div class="groups-2">
                   <label for="cname">Message<span class="star">*</span></label>
                   <textarea name="message" id="message" cols="30" rows="10" placeholder="Write Message" required></textarea>
                </div>
                <input type="submit" value="Send" class="btn-blue">
                 <img src="/assets/imgs/spinner.gif" alt="" width="22px" id="CtSpinner">
                 <p id="messagehere">Thank you for your submission.</p>
              </form>
           </div>
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
(function(){
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
    },
    {
      enableHighAccuracy: false,
      timeout: 8000,
      maximumAge: 60 * 1000
    }
  );
})();
</script>

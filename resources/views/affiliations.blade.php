@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/affiliations.css" />
<style>
    #sphereContainer {
    width: 100%;
    height: 452px;
    position: relative;
    background: transparent;
    margin-top: -14px;
     display: flex;
    align-items: center;
    }
    #sphereContainer canvas{
      width: 100% !important;
      height: auto !important;
    }
  </style>
@endsection
@section('body')
<x-mainbanner name="Affiliation" para="" imgs="/assets/imgs/Contact-Banner.webp" />
<section class="why-affiliations py-5">
    <div class="container py-5">
        <h2 class="text-center pb-0">Why Affiliate with Us?</h2>
        
        <div class="row mt-4">
         <div class="col-12 mb-3 col-md-3">
            <div class="cards">
              <i class="fas fa-globe"></i>
              <h3>Extensive Reach</h3>
              <p>Unlock opportunities in dynamic markets across the Middle East, Africa, and global regions.</p>
              <p>Reliable distribution channels designed to deliver your products quickly and efficiently.</p>
            </div>
         </div>
         <div class="col-12 mb-3 col-md-3">
            <div class="cards">
              <i class="fas fa-lightbulb"></i> 
              <h3>Innovative Solutions</h3>
              <p>Advanced logistics and smart supply chain strategies to optimize your business operations.</p>
              <p>Specialized support in import/export, customs clearance, and seamless door-to-door delivery.</p>
            </div>
         </div>
         <div class="col-12 mb-3 col-md-3">
            <div class="cards">
              <i class="fas fa-trophy"></i>
              <h3>Trusted Reputation</h3>
              <p>10+ years of proven expertise in delivering consistent quality and reliability.</p>
              <p>Strong portfolio of successful collaborations with leading global brands.</p>
            </div>
         </div>
         <div class="col-12 mb-3 col-md-3">
            <div class="cards">
              <i class="fas fa-hand-holding-heart"></i>
              <h3>Customer Focus</h3>
              <p>Dedicated to creating outstanding customer experiences at every stage.</p>
              <p>Customized solutions crafted to address the specific needs of your business.</p>
            </div>
         </div>
        </div>
    </div>
</section>

<section class="affiliations-models">
   <h2 class="text-center mb-3">Our Affiliation Models</h2>    
   
   <div class="bgimg">
    <div class="bglayer py-2 py-md-5">
        <div class="container py-2 py-md-5">
            <div class="row">
                <div class="col-12 col-md-6 cards maincard">
                    <h3>1. Supplier Partnership</h3>
                    <p>Partner with us to deliver premium-quality products that strengthen and expand our global distribution network.</p>
                    <h3>2. Logistics Partnership</h3>
                    <p>Become part of our logistics ecosystem to improve supply chain efficiency and ensure faster, more reliable deliveries across regions.</p>
                    <h3>3. Intermediaries Partnership</h3>
                    <p class="mb-0">Collaborate with us on long-term ventures to unlock new markets, drive innovation, and create sustainable growth opportunities.</p>
                </div>
            </div>
        </div>
    </div>
   </div>
</section>
<section class="become-affiliations py-5">
    <div class="container py-5">
       <h2 class="text-center mb-4">How to Become a Affiliate</h2>
       
       <div class="row">
        <div class="col-12 col-md-6 cards">
        <h3>1. Contact Us</h3>
        <p>Submit the partnership form, and our team will reach out to connect with you and explore potential collaboration opportunities.</p><br>
        <h3>2. Discuss Opportunities</h3>
        <p>We’ll arrange a detailed consultation to learn about your business goals and identify mutually beneficial ways to work together.</p><br>
        <h3>3. Sign the Agreement</h3>
        <p>After aligning on objectives, we’ll finalize the collaboration with a transparent and well-structured agreement.</p><br>
        <h3>4. Start Growing Together</h3>
        <p class="mb-0">Partner with us to unlock new business opportunities and drive long-term growth and success.</p><br>
        <div id="sphereContainer"></div>
        <p class="mb-5 text-center ncnda-p desktop-show-2" style="position:relative;z-index:100"><a class="btn-blue text-decoration-none" href="{{route('ncndamain')}}">NCNDA <i class="fa-solid fa-download"></i></a></p>
        </div>
        <div class="col-12 col-md-6">
           <div class="ctform">
              <form action="" method="post" id="affiliateform">
                @csrf
                <input type="hidden" name="lat" id="lat">
                <input type="hidden" name="lon" id="lon">
                <input type="hidden" name="signature" id="signature_input">
                <div class="groups">
                   <label for="name">Full Name<span class="star">*</span></label>
                   <input type="text" id="name" name="name" placeholder="Full Name" autocomplete="off" required>
                </div>
                <div class="groups">
                   <label for="cname">Company Name</label>
                   <input type="text" id="cname" name="cname" placeholder="Company Name" required>
                </div>
                <div class="groups">
                   <label for="phone">Phone Number<span class="star">*</span></label>
                   <input type="text" id="phone" name="phone" placeholder="Phone Number" onchange="validphone()" required>
                   <span id="error" style="color: red;font-size: 12px;margin-bottom: 0px;margin-top: -10px;   display: block;position: absolute;"></span>
                </div>
                <div class="groups">
                   <label for="wphone">Whatsapp Number<span class="star">*</span></label>
                   <input type="text" id="wphone" name="wphone" placeholder="Whatsapp Number" onchange="validphoned()" required>
                   <span id="errors" style="color: red;font-size: 12px;margin-bottom: 0px;margin-top: -10px;   display: block;position: absolute;"></span>
                </div>
                <div class="groups">
                   <label for="country">Country<span class="star">*</span></label>
                   <input type="text" id="country" name="country" placeholder="Country" required>
                </div>
                <div class="groups">
                   <label for="address">Address<span class="star">*</span></label>
                   <input type="text" id="address" name="address" placeholder="Address" required>
                </div>
                <div class="groups-2">
                   <label for="partnership">Type of Partnership<span class="star">*</span></label>
                   <select name="partnership" id="partnership">
                       <option value="Intermediaries Partnership">Intermediaries Partnership</option>
                       <option value="Supplier Partnership">Supplier Partnership</option>
                       <option value="Logistics Partnership">Logistics Partnership</option>
                   </select>
                </div>
                <div class="groups lsgroup">
                   <label for="email">Email<span class="star">*</span></label>
                   <input type="email" id="email" name="email" placeholder="Email Address" required>
                </div>
                <div class="groups">
                   <label for="website">Website</label>
                   <input type="text" id="website" name="website" placeholder="Website" class="w-100 m-0" required>
                </div>
                <div class="groups-2">
                   <label for="cname">Message<span class="star">*</span></label>
                   <textarea name="message" id="message" cols="30" rows="10" placeholder="Write Message" required></textarea>
                </div>
                <div class="signature-container">
                   <label>Signature</label>
                   <canvas id="signature-pad"></canvas>
                   <div class="actions">
                      <a href="javascript:void(0)" id="clear">Clear</a>
                   </div>
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
<script src="/assets/js/front/affiliations.js"></script>

<script>
function validphoned() {
    const phoneInput = document.getElementById('wphone');
    const errorSpan = document.getElementById('errors');
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

<!-- <section>
  <div class="container ncnda mb-5">
  <p class="mb-5 mb-5 text-center ncnda-p mobile-show"><a class="btn-blue text-decoration-none" href="javascript:void(0)" onclick="downloadPDF()">NCNDA <i class="fa-solid fa-download"></i></a></p>
  <iframe src="/assets/pdfs/NCNDA.pdf"></iframe>
  </div>
</section> -->


<!-- <section class="why-affiliations py-5">
    <div class="container py-5">
        <h2 class="text-center pb-0">What is NCNDA?</h2>
        
        <p class="text-center">An NCNDA, or Non-Circumvention, Non-Disclosure Agreement, is a legal contract commonly used in international trade and business transactions to protect the interests of the parties involved. It ensures that no party bypasses or circumvents the other to make direct deals with introduced contacts and that all shared information remains confidential. This agreement helps build trust and safeguards sensitive business relationships and proprietary information.</p>

        <h2 class="mt-5 text-center pb-0">Key Components of an NCNDA</h2>
        
        <div class="row mt-4">
         <div class="col-12 mb-3 col-md-3">
            <div class="cards">
              <i class="fas fa-file-contract"></i>
              <h3>Non-Circumvention Clause</h3>
              <p>This clause prevents any party from bypassing the other to deal directly with introduced clients or partners, protecting business interests.</p>
            </div>
         </div>
         <div class="col-12 mb-3 col-md-3">
            <div class="cards">
              <i class="fas fa-user-secret"></i>
              <h3>Non-Disclosure Clause</h3>
              <p>It ensures that all shared business details, financial data, and client information remain strictly confidential and are not shared externally.</p>
            </div>
         </div>
         <div class="col-12 mb-3 col-md-3">
            <div class="cards">
              <i class="fas fa-handshake"></i>
              <h3>Parties <br>Obligations</h3>
              <p>This section defines each party’s duties, ethical conduct, and cooperation to maintain trust and fairness throughout the agreement period.</p>
            </div>
         </div>
         <div class="col-12 mb-3 col-md-3">
            <div class="cards">
              <i class="fas fa-stop-circle"></i>
              <h3>Duration and Termination</h3>
              <p>Customized solutions crafted to address the specific needs of your business.</p>
            </div>
         </div>
        </div>
        <p class=" mt-4 mb-0 text-center"><a class="btn-blue text-decoration-none" href="mailto:semzoglobal@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i>
 semzoglobal@gmail.com</a></p>
    </div>
</section> -->


<script src="https://cdn.jsdelivr.net/npm/signature_pad@4.0.0/dist/signature_pad.umd.min.js"></script>

<script>
    const canvas = document.getElementById('signature-pad');
    const signaturePad = new SignaturePad(canvas);
    const nameInput = document.getElementById('name');
    const clearBtn = document.getElementById('clear');
    const ctx = canvas.getContext('2d');

    let hasAutoSignature = false;
    let firstDraw = true; 

    function resizeCanvas() {
      const ratio = Math.max(window.devicePixelRatio || 1, 1);
      canvas.width = canvas.offsetWidth * ratio;
      canvas.height = canvas.offsetHeight * ratio;
      ctx.scale(ratio, ratio);
      signaturePad.clear();
      hasAutoSignature = false;
      firstDraw = true;
    }
    window.addEventListener("resize", resizeCanvas);
    resizeCanvas();

    
    function drawAutoSignature(name) {
      signaturePad.clear();
      if (!name) return;
      ctx.font = "66px 'AnimalChariot'";
      ctx.fillStyle = "#2c3e50";
      ctx.textAlign = "center";
      ctx.textBaseline = "middle";
      ctx.fillText(name, canvas.width / 2 / (window.devicePixelRatio || 1), canvas.height / 2 / (window.devicePixelRatio || 1));
      hasAutoSignature = true;
    }

    
    nameInput.addEventListener('input', () => {
      const name = nameInput.value.trim();
      drawAutoSignature(name);
      firstDraw = true; 
    });

    
    function clearAutoSignatureFirstTime() {
      if (firstDraw && hasAutoSignature) {
        signaturePad.clear();
        hasAutoSignature = false;
        firstDraw = false;
      }
    }

    canvas.addEventListener('mousedown', clearAutoSignatureFirstTime);
    canvas.addEventListener('touchstart', clearAutoSignatureFirstTime);

    
    clearBtn.addEventListener('click', () => {
      signaturePad.clear();
      hasAutoSignature = false;
      firstDraw = true; 
    });
  </script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r128/three.min.js"></script>

<script>
    const container = document.getElementById("sphereContainer");
    const renderer = new THREE.WebGLRenderer({ antialias: true, alpha: true });
    renderer.setSize(container.clientWidth, container.clientHeight);
    container.appendChild(renderer.domElement);
    const scene = new THREE.Scene();
    const camera = new THREE.PerspectiveCamera(75, container.clientWidth / container.clientHeight, 0.1, 1000);
    camera.position.z = 14;
    const radius = 6; 
    const geometry = new THREE.SphereGeometry(radius, 40, 40); 
    const material = new THREE.PointsMaterial({
      color: 0x1890aa,
      size: 0.1, 
      transparent: true
    });
    const sphere = new THREE.Points(geometry, material);
    scene.add(sphere);
    sphere.rotation.x = 0.4;
    sphere.rotation.z = 0.2;
    let rotateClockwise = true;
    setInterval(() => {
      rotateClockwise = !rotateClockwise;
    }, 5000);
    function animate() {
      requestAnimationFrame(animate);
      sphere.rotation.y += rotateClockwise ? 0.003 : -0.003;
      sphere.rotation.x += Math.sin(Date.now() * 0.001) * 0.0001;
      renderer.render(scene, camera);
    }
    animate();
    window.addEventListener("resize", () => {
      const width = container.clientWidth;
      const height = container.clientHeight;
      renderer.setSize(width, height);
      camera.aspect = width / height;
      camera.updateProjectionMatrix();
    });
  </script>

<script>
function downloadPDF() {
  const link = document.createElement('a');
  link.href = '/assets/pdfs/NCNDA.pdf';
  link.download = 'NCNDA.pdf';
  document.body.appendChild(link);
  link.click();
  document.body.removeChild(link);
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


@endsection




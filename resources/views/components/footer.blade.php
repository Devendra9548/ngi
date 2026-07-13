<section class="tcsfooter">

</footer>

<div class="whatsapp">
<a href="https://wa.me/{{$mail}}?text=Hello%20Semzo%20Global,%0AI%20found%20your%20website%20and%20would%20like%20to%20inquire%20about%20your%20service%20offerings.%20Please%20connect%20me%20with%20your%20business%20executive." class="">
  <img src="/assets/imgs/whatsapp.png" alt="whatsapp">
</a>

</div>

<button id="scrollTopBtn" title="Go to top">
    <i class="fa-solid fa-arrow-up" style="color:#fff"></i>
  </button>

  <script>
    const scrollTopBtn = document.getElementById("scrollTopBtn");

window.onscroll = function() {
  if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
    scrollTopBtn.classList.add("show");
  } else {
    scrollTopBtn.classList.remove("show");
  }
};
scrollTopBtn.addEventListener("click", () => {
  window.scrollTo({
    top: 0,
    behavior: "smooth"
  });
});

  </script>
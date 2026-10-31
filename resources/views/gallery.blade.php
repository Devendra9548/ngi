@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/gallery.css" />
<title>Gallery | NextGen Impact</title>
<style>
.main-banner-pages img{
    object-position: center !important;
}
</style>
@endsection
@section('body')
<x-mainbanner name="Our Gallery" para="Moments of Hope, Compassion & Change.."
    imgs="/assets/imgs/3/2%20(50).webp" />

<?php 
$gallery=[
    [
        "url" => "/assets/imgs/3/2 (5).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (6).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (7).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (8).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (9).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (10).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (11).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (12).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (13).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (14).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (15).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (16).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (17).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (18).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (19).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (20).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (21).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (22).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (23).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (24).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (25).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (26).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (27).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (28).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (29).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (30).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (31).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (32).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (33).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (1).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (2).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (3).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (4).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (34).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (35).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (36).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (37).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (38).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (39).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (40).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (41).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (42).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (43).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (44).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (45).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (46).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (47).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (48).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (49).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (50).webp",
    ],
    [
        "url" => "/assets/imgs/3/2 (51).webp",
    ],
];
?>

<section class="gallery-section">
    <div class="container">
       <div class="about-clm text-center">
            <div class="title ct-tooltip" data-animate="fade-left">Our Impact</div>
            <h2 data-animate="fade-right">Stories Through <span> Pictures</span></h2>
            <p class="theme-para" data-animate="fade-right" data-delay="2">Every picture tells a story of hope, compassion and
                positive change. Explore some of the memorable moments
                from our work and community initiatives.</p>
        </div>
        <div class="gallery-filters mt-4">
            <button class="gallery-filter active" data-filter="all">
                All
            </button>

            <button class="gallery-filter" data-filter="ChuharpurKhadar">
                Chuharpur Khadar
            </button>
        </div>
        <div class="gallery-grid" id="galleryGrid">
        @foreach($gallery as $gallery)
            <div class="gallery-item" data-category="ChuharpurKhadar" data-title=""
                data-description="Chuharpur Khadar"
                data-image="{{$gallery['url']}}">

                <img src="{{$gallery['url']}}"
                    alt="Children learning together" loading="lazy">

                <div class="gallery-zoom">
                    <i class="bi bi-zoom-in"></i>
                </div>

                <div class="gallery-content">
                    <!-- <h5>Education for Every Child</h5> -->
                    <span>Education</span>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>

<section class="cta-section other-cta-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center">
                <h2>Our Regional <span>Offices</span></h2>
                <p class="heading">Chennai Office</p>
                <p class="address">3/2, Karpaga Vinayagar Koil Street, Alandur, Chennai – 600016, India</p>
                <a href="{{route('contact')}}" class="globalbtn">Need Help? Get in Touch<i class="fa-solid fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</section>



<div class="modal fade gallery-modal" id="galleryModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">

        <div class="modal-content">

            <div class="modal-body">

                <button type="button" class="lightbox-close" data-bs-dismiss="modal" aria-label="Close">
                    <i class="bi bi-x-lg"></i>
                </button>


                <button type="button" class="lightbox-nav lightbox-prev" id="lightboxPrev" aria-label="Previous image">
                    <i class="bi bi-chevron-left"></i>
                </button>


                <img id="lightboxImage" class="lightbox-image" src="" alt="">


                <button type="button" class="lightbox-nav lightbox-next" id="lightboxNext" aria-label="Next image">
                    <i class="bi bi-chevron-right"></i>
                </button>


                <div class="lightbox-caption">

                    <h5 id="lightboxTitle"></h5>

                    <p id="lightboxDescription"></p>

                </div>

            </div>

        </div>

    </div>

</div>



<script>
document.addEventListener("DOMContentLoaded", function() {

    const galleryItems = Array.from(
        document.querySelectorAll(".gallery-item")
    );

    const filterButtons = document.querySelectorAll(
        ".gallery-filter"
    );

    const modalElement = document.getElementById(
        "galleryModal"
    );

    const galleryModal = new bootstrap.Modal(
        modalElement
    );

    const lightboxImage = document.getElementById(
        "lightboxImage"
    );

    const lightboxTitle = document.getElementById(
        "lightboxTitle"
    );

    const lightboxDescription = document.getElementById(
        "lightboxDescription"
    );

    const prevButton = document.getElementById(
        "lightboxPrev"
    );

    const nextButton = document.getElementById(
        "lightboxNext"
    );

    let visibleItems = [...galleryItems];
    let currentIndex = 0;


    filterButtons.forEach(function(button) {
        button.addEventListener("click", function() {
            const filter = this.dataset.filter;
            filterButtons.forEach(function(btn) {
                btn.classList.remove("active");
            });

            this.classList.add("active");

            visibleItems = [];

            galleryItems.forEach(function(item) {

                const category =
                    item.dataset.category;

                if (
                    filter === "all" ||
                    category === filter
                ) {
                    item.style.display = "";
                    visibleItems.push(item);
                } else {
                    item.style.display = "none";
                }
            });
        });
    });



    galleryItems.forEach(function(item) {

        item.addEventListener("click", function() {

            const index = visibleItems.indexOf(this);

            if (index === -1) {
                return;
            }

            currentIndex = index;

            showImage(currentIndex);

            galleryModal.show();

        });

    });



    function showImage(index) {

        if (!visibleItems.length) {
            return;
        }

        if (index < 0) {
            index = visibleItems.length - 1;
        }

        if (index >= visibleItems.length) {
            index = 0;
        }

        currentIndex = index;

        const item = visibleItems[currentIndex];

        const image =
            item.dataset.image;

        const title =
            item.dataset.title;

        const description =
            item.dataset.description;


        lightboxImage.src = image;

        lightboxImage.alt = title;

        lightboxTitle.textContent = title;

        lightboxDescription.textContent =
            description;

    }



    prevButton.addEventListener("click", function(event) {

        event.stopPropagation();

        showImage(currentIndex - 1);

    });



    nextButton.addEventListener("click", function(event) {

        event.stopPropagation();

        showImage(currentIndex + 1);

    });



    document.addEventListener("keydown", function(event) {

        if (!modalElement.classList.contains("show")) {
            return;
        }

        if (event.key === "ArrowLeft") {
            showImage(currentIndex - 1);
        }

        if (event.key === "ArrowRight") {
            showImage(currentIndex + 1);
        }

        if (event.key === "Escape") {
            galleryModal.hide();
        }

    });



    modalElement.addEventListener(
        "hidden.bs.modal",
        function() {

            lightboxImage.src = "";

        }
    );

});
</script>

@endsection
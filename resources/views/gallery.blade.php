@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/gallery.css" />
<title>Gallery | NGO</title>
<style>
.main-banner-pages img{
    object-position: center !important;
}
</style>
@endsection
@section('body')
<x-mainbanner name="Our Gallery" para="Moments of Hope, Compassion & Change.."
    imgs="/assets/imgs/gallery/gallery-3.jpeg" />

<section class="gallery-section">
    <div class="container">
        <div class="section-heading">
            <span>Our Impact</span>
            <h2>Stories Through Pictures</h2>
            <p>
                Every picture tells a story of hope, compassion and
                positive change. Explore some of the memorable moments
                from our work and community initiatives.
            </p>
        </div>


        <div class="gallery-filters">
            <button class="gallery-filter active" data-filter="all">
                All
            </button>

            <button class="gallery-filter" data-filter="education">
                Education
            </button>

            <button class="gallery-filter" data-filter="health">
                Health
            </button>

            <button class="gallery-filter" data-filter="community">
                Community
            </button>

            <button class="gallery-filter" data-filter="events">
                Events
            </button>

        </div>


        <div class="gallery-grid" id="galleryGrid">

            <div class="gallery-item large" data-category="education" data-title="Education for Every Child"
                data-description="Creating opportunities through education."
                data-image="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=1400&q=85">

                <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=1000&q=80"
                    alt="Children learning together" loading="lazy">

                <div class="gallery-zoom">
                    <i class="bi bi-zoom-in"></i>
                </div>

                <div class="gallery-content">
                    <h5>Education for Every Child</h5>
                    <span>Education</span>
                </div>
            </div>


            <!-- Image 2 -->
            <div class="gallery-item" data-category="community" data-title="Building Strong Communities"
                data-description="Working together for a better tomorrow."
                data-image="https://images.unsplash.com/photo-1594708767771-a7502209ff51?auto=format&fit=crop&w=1400&q=85">

                <img src="https://images.unsplash.com/photo-1594708767771-a7502209ff51?auto=format&fit=crop&w=900&q=80"
                    alt="Community activity" loading="lazy">

                <div class="gallery-zoom">
                    <i class="bi bi-zoom-in"></i>
                </div>

                <div class="gallery-content">
                    <h5>Strong Communities</h5>
                    <span>Community</span>
                </div>
            </div>


            <!-- Image 3 -->
            <div class="gallery-item" data-category="health" data-title="Healthcare Support"
                data-description="Making healthcare accessible to communities."
                data-image="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=1400&q=85">

                <img src="https://images.unsplash.com/photo-1576091160399-112ba8d25d1d?auto=format&fit=crop&w=900&q=80"
                    alt="Healthcare support" loading="lazy">

                <div class="gallery-zoom">
                    <i class="bi bi-zoom-in"></i>
                </div>

                <div class="gallery-content">
                    <h5>Healthcare Support</h5>
                    <span>Health</span>
                </div>
            </div>


            <!-- Image 4 -->
            <div class="gallery-item" data-category="events" data-title="Community Event"
                data-description="Coming together to create positive change."
                data-image="https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=1400&q=85">

                <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=900&q=80"
                    alt="Community event" loading="lazy">

                <div class="gallery-zoom">
                    <i class="bi bi-zoom-in"></i>
                </div>

                <div class="gallery-content">
                    <h5>Community Event</h5>
                    <span>Events</span>
                </div>
            </div>


            <!-- Image 5 -->
            <div class="gallery-item large" data-category="community" data-title="Together We Can"
                data-description="People coming together for meaningful change."
                data-image="https://images.unsplash.com/photo-1559027615-cd4628902d4a?auto=format&fit=crop&w=1400&q=85">

                <img src="https://images.unsplash.com/photo-1559027615-cd4628902d4a?auto=format&fit=crop&w=1000&q=80"
                    alt="People working together" loading="lazy">

                <div class="gallery-zoom">
                    <i class="bi bi-zoom-in"></i>
                </div>

                <div class="gallery-content">
                    <h5>Together We Can</h5>
                    <span>Community</span>
                </div>
            </div>


            <!-- Image 6 -->
            <div class="gallery-item" data-category="education" data-title="Learning Together"
                data-description="Helping young minds build a brighter future."
                data-image="https://images.unsplash.com/photo-1542810634-71277d95dcbb?auto=format&fit=crop&w=1400&q=85">

                <img src="https://images.unsplash.com/photo-1542810634-71277d95dcbb?auto=format&fit=crop&w=900&q=80"
                    alt="Children learning" loading="lazy">

                <div class="gallery-zoom">
                    <i class="bi bi-zoom-in"></i>
                </div>

                <div class="gallery-content">
                    <h5>Learning Together</h5>
                    <span>Education</span>
                </div>
            </div>


            <!-- Image 7 -->
            <div class="gallery-item" data-category="health" data-title="Care & Compassion"
                data-description="Supporting healthier communities."
                data-image="https://images.unsplash.com/photo-1576765608866-5b51046452be?auto=format&fit=crop&w=1400&q=85">

                <img src="https://images.unsplash.com/photo-1576765608866-5b51046452be?auto=format&fit=crop&w=900&q=80"
                    alt="Healthcare initiative" loading="lazy">

                <div class="gallery-zoom">
                    <i class="bi bi-zoom-in"></i>
                </div>

                <div class="gallery-content">
                    <h5>Care & Compassion</h5>
                    <span>Health</span>
                </div>
            </div>


            <!-- Image 8 -->
            <div class="gallery-item" data-category="events" data-title="Making Memories"
                data-description="Celebrating the impact we create together."
                data-image="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?auto=format&fit=crop&w=1400&q=85">

                <img src="https://images.unsplash.com/photo-1517457373958-b7bdd4587205?auto=format&fit=crop&w=900&q=80"
                    alt="NGO event" loading="lazy">

                <div class="gallery-zoom">
                    <i class="bi bi-zoom-in"></i>
                </div>

                <div class="gallery-content">
                    <h5>Making Memories</h5>
                    <span>Events</span>
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
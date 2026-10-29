document.addEventListener("DOMContentLoaded", function () {

    /* =========================
       SECTION ANIMATION
    ========================= */

    const sections = document.querySelectorAll(".scroll-section");

    const sectionObserver = new IntersectionObserver(
        function (entries) {

            entries.forEach(function (entry) {

                if (entry.isIntersecting) {

                    // Section viewport me aaya
                    entry.target.classList.add("section-show");

                } else {

                    // Section viewport se bahar gaya
                    entry.target.classList.remove("section-show");

                }

            });

        },
        {
            threshold: 0.15,
            rootMargin: "0px 0px -80px 0px"
        }
    );


    sections.forEach(function (section) {
        sectionObserver.observe(section);
    });


    /* =========================
       ELEMENT ANIMATION
    ========================= */

    const animatedElements = document.querySelectorAll("[data-animate]");

    const elementObserver = new IntersectionObserver(
        function (entries) {

            entries.forEach(function (entry) {

                if (entry.isIntersecting) {

                    // Element viewport me aaya
                    entry.target.classList.add("animate-show");

                } else {

                    // Element viewport se bahar gaya
                    entry.target.classList.remove("animate-show");

                }

            });

        },
        {
            threshold: 0.15,
            rootMargin: "0px 0px -60px 0px"
        }
    );


    animatedElements.forEach(function (element) {
        elementObserver.observe(element);
    });

});
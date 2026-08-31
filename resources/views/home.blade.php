@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/home.css">
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
                <h2>NextGen Impact Foundation</h2>
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
                    <h2 class="mb-4">NextGen Impact's Programmes Across India</h2>
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

@endsection
@section('customjs')
<script src="https://cdn.jsdelivr.net/npm/d3@7"></script>

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
document.addEventListener("DOMContentLoaded", function () {
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
@endsection
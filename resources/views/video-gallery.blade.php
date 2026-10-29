@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/gallery.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<title>Video Gallery | NextGen Impact</title>
<style>
.main-banner-pages img {
    object-position: center !important;
}

/* ==========================================
       1. FILTER BUTTONS
       ========================================== */
.ngi-v-filter-group {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 10px;
    margin-bottom: 40px;
}

.ngi-v-filter-btn {
    border: 1px solid #cbd5e1 !important;
    color: #334155 !important;
    background-color: #ffffff !important;
    padding: 10px 26px !important;
    border-radius: 50px !important;
    font-weight: 600 !important;
    font-size: 15px !important;
    cursor: pointer !important;
    transition: all 0.25s ease !important;
    outline: none !important;
}

.ngi-v-filter-btn:hover {
    border-color: #00c25e !important;
    color: #00c25e !important;
}

.ngi-v-filter-btn.ngi-active {
    background-color: #0b4371 !important;
    border-color: #0b4371 !important;
    color: #ffffff !important;
    box-shadow: 0 6px 16px rgba(11, 67, 113, 0.25) !important;
}

/* ==========================================
       2. GALLERY VIDEO CARDS
       ========================================== */
.ngi-v-card {
    position: relative !important;
    border-radius: 18px !important;
    overflow: hidden !important;
    cursor: pointer !important;
    height: 240px !important;
    background: #0f172a !important;
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08) !important;
    transition: transform 0.3s ease !important;
}

.ngi-v-card:hover {
    transform: translateY(-6px) !important;
}

.ngi-v-thumb {
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
    display: block !important;
    transition: transform 0.5s ease !important;
}

.ngi-v-card:hover .ngi-v-thumb {
    transform: scale(1.06) !important;
}

.ngi-v-overlay {
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    height: 100% !important;
    background: linear-gradient(180deg, rgba(11, 67, 113, 0.2) 0%, rgba(0, 0, 0, 0.7) 100%) !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
}

.ngi-v-play-btn {
    width: 60px !important;
    height: 60px !important;
    background: #ffffff !important;
    border-radius: 50% !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    color: #0b4371 !important;
    font-size: 32px !important;
    padding-left: 4px !important;
    box-shadow: 0 0 25px rgba(0, 194, 94, 0.7) !important;
    transition: all 0.3s ease !important;
}

.ngi-v-card:hover .ngi-v-play-btn {
    transform: scale(1.15) !important;
    background: #00c25e !important;
    color: #ffffff !important;
}

/* ==========================================
       3. JQUERY POPUP OVERLAY
       ========================================== */
#ngi-jq-popup {
    position: fixed !important;
    top: 0 !important;
    left: 0 !important;
    right: 0 !important;
    bottom: 0 !important;
    width: 100vw !important;
    height: 100vh !important;
    background: rgba(5, 10, 24, 0.9) !important;
    backdrop-filter: blur(8px) !important;
    -webkit-backdrop-filter: blur(8px) !important;
    z-index: 2147483647 !important;
    display: none;
}

.ngi-jq-center-wrap {
    width: 100% !important;
    height: 100% !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    padding: 15px !important;
}

/* ==========================================
       4. RESPONSIVE DEVICE FRAME (MOBILE VS TABLET/DESKTOP)
       ========================================== */

/* Default (Mobile View: Vertical Phone Frame) */
.ngi-device-frame {
    position: relative !important;
    width: 290px !important;
    height: 580px !important;
    max-width: 90vw !important;
    max-height: 85vh !important;
    background: #1a202c !important;
    border-radius: 46px !important;
    padding: 12px !important;
    border: 4px solid #4a5568 !important;
    box-shadow: 0 25px 60px rgba(0, 0, 0, 0.9), 0 0 35px rgba(0, 194, 94, 0.3) !important;
    box-sizing: border-box !important;
    display: block !important;
    transition: all 0.3s ease;
}

/* Red Close Button */
.ngi-jq-close {
    position: absolute !important;
    top: -16px !important;
    right: -16px !important;
    width: 40px !important;
    height: 40px !important;
    border-radius: 50% !important;
    background: #ef4444 !important;
    color: #ffffff !important;
    border: 3px solid #ffffff !important;
    font-size: 18px !important;
    display: flex !important;
    align-items: center !important;
    justify-content: center !important;
    cursor: pointer !important;
    z-index: 999 !important;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.5) !important;
}

.ngi-jq-close:hover {
    background: #dc2626 !important;
    transform: scale(1.1) !important;
}

.ngi-phone-screen {
    position: relative !important;
    width: 100% !important;
    height: 100% !important;
    background: #000000 !important;
    border-radius: 34px !important;
    overflow: hidden !important;
}

.ngi-phone-notch {
    position: absolute !important;
    top: 10px !important;
    left: 50% !important;
    transform: translateX(-50%) !important;
    width: 90px !important;
    height: 22px !important;
    background: #000000 !important;
    border-radius: 20px !important;
    z-index: 20 !important;
    border: 1px solid #2d3748 !important;
    display: flex !important;
    align-items: center !important;
    justify-content: flex-end !important;
    padding-right: 8px !important;
    pointer-events: none !important;
}

.ngi-notch-cam {
    width: 9px !important;
    height: 9px !important;
    border-radius: 50% !important;
    background: #1e3a8a !important;
}

#ngi-jq-video {
    position: absolute !important;
    top: 0 !important;
    left: 0 !important;
    width: 100% !important;
    height: 100% !important;
    object-fit: cover !important;
    background: #000000 !important;
    display: block !important;
}

.ngi-phone-bar {
    position: absolute !important;
    bottom: 8px !important;
    left: 50% !important;
    transform: translateX(-50%) !important;
    width: 100px !important;
    height: 4px !important;
    background: rgba(255, 255, 255, 0.7) !important;
    border-radius: 10px !important;
    z-index: 20 !important;
    pointer-events: none !important;
}

/* 
       TABLET & DESKTOP SCREEN ME AUTOMATICALLY BADA TABLET/LAPTOP FRAME BAN JAYEGA 
    */
@media (min-width: 768px) {
    .ngi-device-frame {
        width: 760px !important;
        height: 445px !important;
        max-width: 85vw !important;
        max-height: 80vh !important;
        border-radius: 22px !important;
        border-width: 6px !important;
        padding: 10px !important;
    }

    .ngi-phone-screen {
        border-radius: 14px !important;
    }

    /* Tablet/Desktop par phone notch aur home bar ki zaroorat nahi */
    .ngi-phone-notch,
    .ngi-phone-bar {
        display: none !important;
    }
}
</style>
@endsection
@section('body')
<x-mainbanner name="Our Gallery" para="Moments of Hope, Compassion & Change.."
    imgs="/assets/imgs/gallery/gallery-3.jpeg" />

<?php
 $videos=[
    [

    ],
 ]
?>

<div class="container py-5">
    <div class="ngi-v-filter-group">
        <button type="button" class="ngi-v-filter-btn ngi-active" data-filter="all">All</button>
        <button type="button" class="ngi-v-filter-btn" data-filter="house">House Video</button>
        <button type="button" class="ngi-v-filter-btn" data-filter="premium">Premium Video</button>
        <button type="button" class="ngi-v-filter-btn" data-filter="events">Event Highlights</button>
    </div>
    <div class="row g-4">
        <div class="col-12 col-md-6 col-lg-4 ngi-v-item" data-category="house">
            <div class="ngi-v-card" data-video="{{ asset('assets/videos/gallery/1.mp4') }}">
                <img src="{{ asset('assets/videos/gallery/1.jpeg') }}" alt="Thumbnail" class="ngi-v-thumb">
                <div class="ngi-v-overlay">
                    <div class="ngi-v-play-btn">
                        <i class="bi bi-play-fill"></i>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-12 col-md-6 col-lg-4 ngi-v-item" data-category="premium">
            <div class="ngi-v-card" data-video="{{ asset('assets/videos/gallery/1.mp4') }}">
                <img src="{{ asset('assets/videos/gallery/1.jpeg') }}" alt="Thumbnail" class="ngi-v-thumb">
                <div class="ngi-v-overlay">
                    <div class="ngi-v-play-btn">
                        <i class="bi bi-play-fill"></i>
                    </div>
                </div>
            </div>
        </div>


        <div class="col-12 col-md-6 col-lg-4 ngi-v-item" data-category="events">
            <div class="ngi-v-card" data-video="{{ asset('assets/videos/gallery/1.mp4') }}">
                <img src="{{ asset('assets/videos/gallery/1.jpeg') }}" alt="Thumbnail" class="ngi-v-thumb">
                <div class="ngi-v-overlay">
                    <div class="ngi-v-play-btn">
                        <i class="bi bi-play-fill"></i>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


<div id="ngi-jq-popup">
    <div class="ngi-jq-center-wrap">
        <div class="ngi-device-frame">

            <!-- Close Button -->
            <button type="button" class="ngi-jq-close" id="ngi-close-btn">
                <i class="bi bi-x-lg"></i>
            </button>

            <!-- Screen Area -->
            <div class="ngi-phone-screen">
                <!-- Mobile Notch -->
                <div class="ngi-phone-notch">
                    <span class="ngi-notch-cam"></span>
                </div>

                <!-- Video Element -->
                <video id="ngi-jq-video" controls playsinline preload="none"></video>

                <div class="ngi-phone-bar"></div>
            </div>

        </div>
    </div>
</div>

<script>
jQuery(document).ready(function($) {
    $('#ngi-jq-popup').appendTo('body');
    $(document).on('click', '.ngi-v-card', function(e) {
        e.preventDefault();
        e.stopPropagation();

        var videoSrc = $(this).attr('data-video');
        var videoEl = $('#ngi-jq-video')[0];

        if (!videoSrc) {
            alert('Video path nahi mila!');
            return;
        }

        videoEl.src = videoSrc;
        videoEl.load();

        $('#ngi-jq-popup').fadeIn(250);
        $('body').css('overflow', 'hidden');

        var playPromise = videoEl.play();
        if (playPromise !== undefined) {
            playPromise.catch(function(err) {
                console.log("Autoplay blocked:", err);
            });
        }
    });

    function closeNgiPopup() {
        var videoEl = $('#ngi-jq-video')[0];
        if (videoEl) {
            videoEl.pause();
            videoEl.currentTime = 0;
            videoEl.removeAttribute('src');
        }
        $('#ngi-jq-popup').fadeOut(200);
        $('body').css('overflow', '');
    }

    $(document).on('click', '#ngi-close-btn', function(e) {
        e.preventDefault();
        closeNgiPopup();
    });

    $(document).on('click', '.ngi-jq-center-wrap', function(e) {
        if ($(e.target).hasClass('ngi-jq-center-wrap')) {
            closeNgiPopup();
        }
    });

    $(document).on('keydown', function(e) {
        if (e.key === "Escape") {
            closeNgiPopup();
        }
    });

    $(document).on('click', '.ngi-v-filter-btn', function() {
        $('.ngi-v-filter-btn').removeClass('ngi-active');
        $(this).addClass('ngi-active');

        var filterValue = $(this).attr('data-filter');

        if (filterValue === 'all') {
            $('.ngi-v-item').fadeIn(250);
        } else {
            $('.ngi-v-item').each(function() {
                if ($(this).attr('data-category') === filterValue) {
                    $(this).fadeIn(250);
                } else {
                    $(this).hide();
                }
            });
        }
    });

});
</script>


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


@endsection
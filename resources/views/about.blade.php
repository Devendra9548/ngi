@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/about.css" />
<style>
.main-banner-pages img {
    object-position: bottom !important;
}
</style>
@endsection
@section('body')
<x-mainbanner name="About Us" para="We are here always.." imgs="/assets/imgs/banners/12.jpeg" />

<section class="first-section pt-5 py-md-5">
    <div class="container">
        <p class="text-center main-headling">NextGen Impact was founded on August 15, 2006 by a group of friends, who
            believed that every underprivileged child deserves quality education. Since then, NextGen Impact has
            transformed this conviction into a volunteering opportunity for India’s youth, launching a snowball effect
            of nurturing talent on the path to an educated, poverty-free India.</p>
        <img src="/assets/imgs/1/16.avif" alt="15" width="100%">
    </div>
</section>


@endsection
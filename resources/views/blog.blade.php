@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/blog.css">
<title>Our Blogs | NextGen Impact</title>
@endsection
@section('body')

<x-mainbanner name="Our Blogs" para="Stories That Inspire Change..." imgs="/assets/imgs/contact/13.jpeg"/>

<section class="ngi-blog-section">
    <div class="container">
        <div class="ngi-blog-toolbar">

            <div class="ngi-blog-count">
                <span>Explore</span>
                <strong>Our Latest Stories</strong>
            </div>

            <form action="{{ url('/blog') }}" method="GET" class="ngi-blog-search">
                <input type="text" name="search" value="{{ request('search') }}" placeholder="Search stories...">
                <button type="submit"><i class="fa-solid fa-magnifying-glass"></i> Search</button>
            </form>
        </div>

        <div class="row g-4">
            @forelse($blogs as $blog)
            <div class="col-lg-4 col-md-6">
                <article class="ngi-blog-card">
                    <a href="/blog/{{ $blog->slug }}">
                    <div class="ngi-blog-image">
                        <img src="/blogs/{{ $blog->file }}" alt="{{ $blog->title }}">
                        <div class="ngi-blog-category">{{ $blog->blogCategory->bcname ?? 'Stories' }}</div>
                        <div class="ngi-blog-arrow"><i class="fa-solid fa-arrow-up-right-from-square"></i></div>
                    </div>
                    <div class="ngi-blog-content">
                        <div class="ngi-blog-meta">
                            <span><i class="fa-regular fa-calendar"></i>{{ $blog->created_at->format('j M, Y') }}</span>
                        </div>
                        <h2>{{ $blog->title }}</h2>
                        <p>{{ \Illuminate\Support\Str::limit($blog->description, 125) }}</p>
                        <span href="/blog/{{ $blog->slug }}" class="ngi-read-more">Read Story <i class="fa-solid fa-arrow-right"></i></span>
                    </div>
                    </a>
                </article>
            </div>
            @empty
            <div class="col-12">
                <div class="ngi-no-blog">
                    <i class="fa-regular fa-face-frown"></i>
                    <h3>No stories found</h3>
                    <p>Try searching with a different keyword.</p>
                </div>
            </div>
            @endforelse
        </div>
        @if($blogs->lastPage() > 1)
        <div class="ngi-blog-pagination">
            {{ $blogs->links() }}
        </div>
        @endif
    </div>
</section>

@endsection








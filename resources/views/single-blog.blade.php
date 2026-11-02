@extends('templates.front.main')
@section('customcss')
<meta name="description" content="Discover expert eye care advice, helpful health guides, treatment information, and the latest updates from | NextGen Impact, Haldwani.">
<meta name="keywords" content="| NextGen Impact, About us, Our Vision, Our Mission, Eye Care Hospital, eye hospital in Haldwani, best eye hospital, eye specialist in Haldwani, eye care hospital, ophthalmology hospital, eye doctor, best eye doctor in Haldwani, cataract surgery, cataract treatment, advanced eye care, LASIK eye surgery, LASIK surgery in Haldwani, retina specialist, retina treatment, glaucoma treatment, glaucoma specialist, diabetic eye care, diabetic retinopathy treatment, pediatric eye care, eye checkup, comprehensive eye examination, refractive eye surgery, ICL eye surgery, squint eye treatment, cornea treatment, dry eye treatment, eye surgery in India, advanced eye hospital in India, super speciality eye hospital, comprehensive eye care, Retina & Vitreous Care, Orbit & Oculoplasty, Cornea Care, Glaucoma Care, Squint Care, Eye Trauma & Emergency, Cataract & Lens Surgery">
<meta name="author" content="| NextGen Impact">
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="website" />
<meta property="og:title" content="{{$blog->title}} | | NextGen Impact" />
<meta property="og:description" content="Discover expert eye care advice, helpful health guides, treatment information, and the latest updates from | NextGen Impact, Haldwani." />
<meta property="og:url" content="https://shubhanueyehospital.com/{{$blog->slug}}" />
<meta property="og:site_name" content="| NextGen Impact" />
<meta property="og:image" content="https://shubhanueyehospital.com/assets/front/imgs/banners/1.webp" />
<meta property="og:image:width" content="1280" />
<meta property="og:image:height" content="720" />
<meta property="og:image:type" content="image/webp" />
<link rel="canonical" href="https://shubhanueyehospital.com/{{$blog->slug}}" />
<link rel="stylesheet" href="/assets/css/front/style.css" />
<link rel="stylesheet" href="/assets/css/front/singleblog.css" />
<title>{{$blog->title}} | | NextGen Impact</title>
@endsection
@section('body')
<section class="badge-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <a href="/">Home</a> /
                <a href="/blog">Blogs</a> /
                <a href="javascript:void(0)">{{$blog->title}}</a>
            </div>
        </div>
    </div>
</section>
<section class="main-blog py-5">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-md-8 left-clm">
                <img src="/blogs/{{$blog->file}}" alt="{{$blog->title}}" width="100%">
                <div class="main-content">
                    <h1>{{$blog->title}}</h1>
                    <div class="desc">
                        {!!$blog->description!!}
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="right-clm">
                    <h2>Other Blogs</h2>
                    <hr>
                    @foreach($allblog as $allblog)
                    @if($allblog->slug != $blog->slug)
                    <a href="/blog/{{$allblog->slug}}">
                        <div class="recent-blog d-flex align-items-center">
                            <div class="left">
                                <img src="/blogs/{{$allblog->file}}" alt="{{$allblog->title}}" width="100%">
                            </div>
                            <div class="right">
                                <h3>{{$allblog->title}}</h3>
                                <p>{{ $allblog->created_at->format('d M, Y') }}</p>
                            </div>
                        </div>
                    </a>
                    @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<br><br><br><br>
@endsection

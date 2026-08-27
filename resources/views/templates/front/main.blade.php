<!DOCTYPE html>
<html lang="en">

<head>
@if(!empty($pageseo[0]->title))
<title>{{ $pageseo[0]->title }}</title>
@endif
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

@if(!empty($pageseo[0]->description))
<meta name="description" content="{{ $pageseo[0]->description }}">
<meta name="keywords" content="{{ $pageseo[0]->keywords }}">
<meta name="author" content="{{ $pageseo[0]->author }}">
@if($pageseo[0]->slug == 'home')
<link rel="canonical" href="{{ url('/') }}" />
@else
<link rel="canonical" href="{{ url('/') }}/{{$pageseo[0]->slug}}" />
@endif
@if($pageseo[0]->slug == 'home')
@else
@endif
@endif
@if(!empty($pageseo[0]->smarkup))
{!! $pageseo[0]->smarkup !!}
@endif
<link rel="stylesheet" href="/assets/css/front/header.css">
<link rel="stylesheet" href="/assets/css/front/footer.css">
@yield('customcss')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
        integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Manrope:wght@200..800&family=Open+Sans:ital,wght@0,300..800;1,300..800&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

<link href="/assets/css/front/style.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="/assets/css/slick.css" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
@if (!empty($gseo->globalheader))
    {!! $gseo->globalheader !!}
@endif
<script src="/assets/js/jquery.min.js"></script>
<script src="/assets/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <x-header />
    @yield('body')
    <x-footer 
    facebook="{{ isset($gseo->facebook) ? $gseo->facebook : '' }}"
    linkedin="{{ isset($gseo->linkedin) ? $gseo->linkedin : '' }}"
    instagram="{{ isset($gseo->instagram) ? $gseo->instagram : '' }}"
    twitter="{{ isset($gseo->twitter) ? $gseo->twitter : '' }}"
    youtube="{{ isset($gseo->youtube) ? $gseo->youtube : '' }}"
    mail="{{ isset($gseo->whatsapp) ? $gseo->whatsapp : '' }}"
/>
@if (!empty($gseo->gfbs))
    {!! $gseo->gfbs !!}
@endif
    


    <script type="text/javascript" src="/assets/js/slick.min.js"></script>
    
    @yield('customjs')
    @if (!empty($gseo->gfas))
    {!! $gseo->gfas !!}
    @endif

<script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement(
        {pageLanguage: 'en'},
        'google_translate_element'
      );
    }
  </script>
  <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

  <script>
    const btn = document.getElementById('translate-btn');
    const menu = document.getElementById('flag-menu');
    const langs = document.querySelectorAll('.lang-item');

    btn.addEventListener('click', () => {
      menu.style.display = menu.style.display === 'block' ? 'none' : 'block';
    });

    document.addEventListener('click', (e) => {
      if (!btn.contains(e.target) && !menu.contains(e.target)) {
        menu.style.display = 'none';
      }
    });

    langs.forEach(lang => {
      lang.addEventListener('click', () => {
        const code = lang.getAttribute('data-lang');
        const select = document.querySelector('.goog-te-combo');
        if (select) {
          select.value = code;
          select.dispatchEvent(new Event('change'));
        }
        menu.style.display = 'none';
      });
    });
  </script>
    <script>
    const header = document.getElementById('mainHeader');

    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        header.classList.add('mainHeader-active');
      } else {
        header.classList.remove('mainHeader-active');
      }
    });
  </script>


</body>

</html>
<header>
    <div class="herosection d-flex align-items-center bg-white">
       <div class="be-img"><img src="/assets/imgs/NGI-Logo.webp" alt="" width="70%"></div>
    </div>
    <div class="container left-menus">
        <div class="row">
            <div class="col-12" style="display: flex;align-items: start;justify-content: space-between;flex-direction: column;height: 86vh;">
                <nav>
                    <ul>
                    <li><a href="{{ route('dashboard') }}"><i class="fa-solid fa-gauge"></i> Dashboard</a></li>
                    <li><a href="{{ route('all-blogs') }}"><i class="fa-solid fa-blog"></i> Products</a></li>
                    <!-- <li><a href="{{ route('all-reviews') }}"><i class="fa-solid fa-ranking-star"></i> Reviews</a></li> -->
                    <li><a href="{{ route('all-contacts') }}"><i class="fa-solid fa-address-card"></i> Contacts</a></li>
                    <li><a href="{{ route('all-affiliates') }}"><i class="fa-solid fa-address-card"></i> Affiliates</a></li>
                    <li><a href="{{ route('page-seo') }}"><i class="fa-solid fa-book-atlas"></i> Pages Seo</a></li>
                    <li><a href="{{ route('global-seo') }}"><i class="fa-solid fa-globe"></i> Global Seo</a></li>
                    <li><a href="{{ route('admin-info') }}"><i class="fa-solid fa-circle-user"></i> Admin Info</a></li>
                    </ul>
                </nav>
                <div class="d-flex align-items-center bg-dark" style="position: fixed; bottom: 0px;left: 0px; width: 16%; padding: 12px;">
                <h2 class="top-head text-white">
                    <?php
                    $cookie = Cookie::get('name');
                    echo $cookie;
                    ?>
                    </h2>
       
                </div>
            </div>
        </div>
    </div>
</header>

<style>
    @keyframes spin{
    from
    {
        transform: rotate(0deg)
    }
    to{
        transform: rotate(360deg)
    }
}
</style>
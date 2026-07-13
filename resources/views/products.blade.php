@extends('templates.front.main')
@section('customcss')
<link rel="stylesheet" href="/assets/css/front/products.css" />
@endsection
@section('body')


<?php
$allproducts = [
    [
        "name" => "Agriculture",
        "desc" => "Connecting farms to global markets with smarter, sustainable sourcing. Semzo Global bridges farmers, growers, and producers with worldwide opportunities, ensuring efficiency, transparency, and long-term growth.",
        "img" => "/assets/imgs/products/2.jpg",
    ],
    [
        "name" => "Fruits",
        "desc" => "Delivering freshness worldwide with precision and care. From orchards to global markets, we enable seamless trade of fresh produce, safeguarding quality and ensuring timely delivery every step of the way.",
        "img" => "/assets/imgs/products/1.jpg",
    ],
    [
        "name" => "Pharmaceuticals",
        "desc" => "Ensuring safe, reliable, and timely access to life-saving solutions. We empower pharmaceutical businesses with secure, compliant, and efficient global trade channels—helping vital products reach the people who need them most.",
        "img" => "/assets/imgs/products/3.jpeg",
    ],
    [
        "name" => "Automobile",
        "desc" => "Powering mobility through global trade and innovation. From trucks and trailers to cranes and car parts, Semzo Global streamlines supply chains to keep the automotive industry moving with speed, precision, and reliability.",
        "img" => "/assets/imgs/products/4.webp",
    ],
    [
        "name" => "Mining & Minerals",
        "desc" => "Strengthening industries with the resources that fuel progress. We connect mining and mineral producers to global markets, enabling secure, efficient, and sustainable trade of essential raw materials that drive economic growth.",
        "img" => "/assets/imgs/products/5.jpg",
    ],
    [
        "name" => "Plastics & Rubber Products",
        "desc" => "Enabling flexible solutions for a dynamic world. Semzo Global helps manufacturers of plastic and rubber products expand into global markets, ensuring timely access, consistent quality, and innovative trade pathways.",
        "img" => "/assets/imgs/products/6.jpg",
    ],
    [
        "name" => "Chemicals & Petrochemicals",
        "desc" => "Building safer, smarter, and future-ready supply networks. With compliance, safety, and efficiency at the core, we empower chemical and petrochemical companies to reach international markets seamlessly while upholding global standards.",
        "img" => "/assets/imgs/products/7.jpg",
    ],
    [
        "name" => "Food & Beverages",
        "desc" => "Delivering taste, quality, and trust across borders. From packaged goods to beverages, we ensure food producers and distributors can expand globally while maintaining freshness, safety, and consumer satisfaction.",
        "img" => "/assets/imgs/products/8.jpg",
    ],
    [
        "name" => "Pulp, Paper & Forestry Products",
        "desc" => "Transforming resources into opportunities for sustainable growth. Semzo Global connects forestry, pulp, and paper industries to global demand, ensuring efficient trade while supporting environmentally conscious practices.",
        "img" => "/assets/imgs/products/9.webp",
    ],
    [
        "name" => "Retail",
        "desc" => "Driving consumer access and business growth worldwide. We help retailers thrive in a global marketplace by simplifying complex supply chains, enhancing efficiency, and enabling seamless delivery from source to shelf.<",
        "img" => "/assets/imgs/products/10.jpg",
    ],
  ];
?>




<?php
$ownproducts = [
[
                "name"=>"Basmati Rice",
                "imgs"=>"/assets/imgs/products/basmati rice supplier.jpg",
],
[
            "name"=>"Corn Maize",
            "imgs"=>"/assets/imgs/products/corn exporters.jpg",
],
[
            "name"=>"Fans",
            "imgs"=>"/assets/imgs/products/fan manufacturers.jpg",
],
[
            "name"=>"Diesel EN590",
            "imgs"=>"/assets/imgs/products/Diesel EN590.jpg",
],
[
            "name"=>"Plastic Pallets",
            "imgs"=>"/assets/imgs/products/plastic pallets.jpg",
],
[
            "name"=>"Charcoal Briquettes",
            "imgs"=>"/assets/imgs/products/charcoal powder.jpg",
],
[
            "name"=>"HDPE Plastic LDPE",
            "imgs"=>"/assets/imgs/products/plastic granules.jpg",
],
[
            "name"=>"Bitumen",
            "imgs"=>"/assets/imgs/products/Bitumen Export.jpg",
],
[
            "name"=>"Urea",
            "imgs"=>"/assets/imgs/products/urea exporters.jpg",
],
[
            "name"=>"Sulphur Granular",
            "imgs"=>"/assets/imgs/products/chemical exports.jpg",
],
[
            "name"=>"DAP Fertilizer",
            "imgs"=>"/assets/imgs/products/dap exports.jpg",
],
[
            "name"=>"Electrical Cables",
            "imgs"=>"/assets/imgs/products/Electrical Cables.jpg",
],
[
            "name"=>"Printed Circuit Board",
            "imgs"=>"/assets/imgs/products/pcb export.jpg",
],
[
            "name"=>"HDPE Pipes",
            "imgs"=>"/assets/imgs/products/hdp eexports.jpg",
],
[
            "name"=>"Safety Equipments",
            "imgs"=>"/assets/imgs/products/safety equipment.jpg",
],
[
            "name"=>"Screws Nuts Bolts",
            "imgs"=>"/assets/imgs/products/Screws And Bolts exports.jpg",
],
[
            "name"=>"Rebar Steel",
            "imgs"=>"/assets/imgs/products/rebar exports.jpg",
],
[
            "name"=>"Steel Coils",
            "imgs"=>"/assets/imgs/products/steel exports.jpg",
],
[
            "name"=>"R50 R65 Rail Steel",
            "imgs"=>"/assets/imgs/products/steel manufactures.jpg",
],
[
            "name"=>"Jet A1 Fuel",
            "imgs"=>"/assets/imgs/products/Jet A1 Fuelexports.jpg",
],
[
            "name"=>"LNG",
            "imgs"=>"/assets/imgs/products/LNG exports.jpg",
],
[
            "name"=>"UBC Aluminium",
            "imgs"=>"/assets/imgs/products/Recycling Solutions.jpg",
],
[
            "name"=>"Aluminium Wires",
            "imgs"=>"/assets/imgs/products/Aluminum wires Exports.jpg",
],
[
            "name"=>"Aluminium Ingots A7-A8",
            "imgs"=>"/assets/imgs/products/Aluminum Ingots.jpg",
],
[
            "name"=>"Cooking Oil",
            "imgs"=>"/assets/imgs/products/food export services.jpg",
],
[
            "name"=>"Copper Coils",
            "imgs"=>"/assets/imgs/products/copper mining.jpg",
],
[
            "name"=>"Copper Ore",
            "imgs"=>"/assets/imgs/products/DRC mining.jpg",
],
[
            "name"=>"Copper Cathode",
            "imgs"=>"/assets/imgs/products/Copper Cathode.jpg",
],
[
            "name"=>" Sugar ICUMSA 45",
            "imgs"=>"/assets/imgs/products/ICUMSA 45 Exports.jpg",
],
[
            "name"=>"Coffee Beans",
            "imgs"=>"/assets/imgs/products/coffee beans roasting.jpg",
],
[
            "name"=>"Tea",
            "imgs"=>"/assets/imgs/products/Tea Exports.jpg",
],
[
            "name"=>"Poly Rope",
            "imgs"=>"/assets/imgs/products/poly propylene.jpg",
],
  ];
?>


<section class="our-products mt-0 mt-md-5 pb-5 py-md-5">
    <div class="container py-5">
        <div class="row productcats">
          @foreach($allproducts as $oneproducts)
           <div class="col">
              <div class="cards">
                <img src="{{$oneproducts['img']}}" alt="{{$oneproducts['name']}}" width="100%">
                <p>{{$oneproducts['name']}}</p>
              </div>
           </div>
           @endforeach
        </div>
    </div>
</section>

<section class="other-products mb-5">
  <div class="container">
     <h2 class="text-center mb-4">Our Products</h2>
    
    <div class="row"> 
      @foreach($pro as $allproducts)
      <div class="col-12 col-md-3 mb-3">
        <div class="pcards">
          <img src="/blogs/{{$allproducts->file}}" alt="{{$allproducts->title}}" width="100%">
          <p>{{$allproducts->title}}</p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</section>
@endsection

@section('customjs')

<script src="/assets/js/front/home.js"></script>
<script>
  
  $('.productcats').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 5,
    slidesToScroll: 5,
    prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa-solid fa-arrow-left"></i></button>',
    nextArrow: '<button class="slide-arrow next-arrow"><i class="fa-solid fa-arrow-right"></i></button>',
    responsive: [{
            breakpoint: 1024,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
            }
        },
        {
            breakpoint: 600,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 2
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1
            }
        }
    ]

});

</script>


@endsection
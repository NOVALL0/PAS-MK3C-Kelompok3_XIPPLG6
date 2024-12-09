<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Grocery Website Design Tutorial</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
      <link rel="stylesheet" href="{{ asset('CSS-website/kategory.css')}}"
</head>
<body>
<header class="header">
    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i>SUKI Mart </a>
    <nav class="navbar">
       <a href="{{ route('landingpage') }}">home</a>
        <a href="{{ route('sayur') }}">Sayur</a>
        <a href="{{ route('buah') }}">Buah</a>
        <a href="{{ route('protein') }}">Protein</a>
        <a href="{{ route('bahanpokok') }}">Bahan Pokok</a>
    </nav>
    <div class="icons">
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn"></div>
    </div>
    <form action="" class="search-form">
        <input type="search" id="search-box" placeholder="search here...">
        <label for="search-box" class="fas fa-search"></label>
    </form>
   
   
</header>
<section class="home" id="home">
</section>
</section>
<section class="categories" id="categories">
</section>
<section class="products" id="products">
    <h1 class="heading"><span>Buah</span> </h1>
    <div class="swiper product-slider">
        <div class="swiper-wrapper">
           
            @foreach ($products as $product)
            <div class="swiper-slide box">
                <img src="{{ url('storage/' . $product->image) }}" alt="{{ $product->name }}">
                <h3>{{ $product->name }}</h3>
                <div class="price">${{ number_format($product->price, 2) }}</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                
                <a href="#" class="btn">Add to Cart</a>
            </div>
           @endforeach
        </div>
    </div>
    
        </div>
    </div>
</section>
<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3> SukiMart <i class="fas fa-shopping-basket"></i> </h3>
            <div class="share">
                <a href="#" class="fab fa-facebook-f"></a>
                <a href="#" class="fab fa-twitter"></a>
                <a href="#" class="fab fa-instagram"></a>
                <a href="#" class="fab fa-linkedin"></a>
            </div>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#" class="links"> <i class="fas fa-phone"></i> +62 858 6577 6027 </a>
            <a href="#" class="links"> <i class="fas fa-envelope"></i> Sukimart@gmail.com </a>
            <a href="#" class="links"> <i class="fas fa-map-marker-alt"></i> Jl. Profesor DR. HR Boenyamin No.637C, Dukuhbandong, Grendeng, Kec. Purwokerto Utara, Kabupaten Banyumas, Jawa Tengah 53121 </a>
        </div>
        <div class="box">
            <h3>quick links</h3>
            <a href="index.html" class="links"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="index.html" class="links"> <i class="fas fa-arrow-right"></i> top features products </a>
            <a href="pagesayur.html" class="links"> <i class="fas fa-arrow-right"></i> sayur </a>
            <a href="Pagebuah.html" class="links"> <i class="fas fa-arrow-right"></i> buah </a>
            <a href="Pageprotein.html" class="links"> <i class="fas fa-arrow-right"></i> protein </a>
            <a href="Pagebahanpokok.html" class="links"> <i class="fas fa-arrow-right"></i> bahan pokok </a>
        </div>
        <div class="box">
            <div class="box">
                <h3>Our irformation</h3>
                <a href="#" class="links">  <i class=""></i> Privacy </a>
                <a href="#" class="links">  <i class=""></i> Use Term & Condition </a>
                <a href="#" class="links">  <i class=""></i> Return Policy </a>
            </div>
        </div>
    </div>
    <div class="credit"> Copyright © 2024 Sukimart. All Rights Reserved.</div>
</section>
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
<script src="js-website/project.js"></script>
</body>
</html>
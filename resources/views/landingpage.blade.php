<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Grocery Website Design Tutorial</title>
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('CSS-website/landingpage.css') }}">
    <link rel="stylesheet" href="{{ asset('CSS-website/kategory.css') }}">
  
</head>
<body>
<header class="header"><!-- NAVBAR -->
    <a href="#" class="logo"> <i class="fas fa-shopping-basket"></i> SUKI Mart </a>
    <nav class="navbar">
        <a href="{{ route('landingpage') }}">home</a>
        <a href="{{ route('sayur') }}">Sayur</a>
        <a href="{{ route('buah') }}">Buah</a>
        <a href="{{ route('protein') }}">Protein</a>
        <a href="{{ route('bahanpokok') }}">Bahan Pokok</a>
    </nav>
    <div class="icons">  <!-- ICON -->
        <div class="fas fa-bars" id="menu-btn"></div>
        <div class="fas fa-search" id="search-btn"></div>
        <div class="fas fa-shopping-cart" id="cart-btn"></div>
        <div class="fas fa-user" id="login-btn" ></div>
    </div>
</header>
<section class="home" id="home">
    <div class="content">
        <h3>fresh and <span>organic</span> products for your</h3>
        <p>This Prospecious November you will have many discounts on bulk products hope you like this service.</p>
        <a href="#" class="btn">shop now</a>
    </div>
</section>
</section>
<section class="categories" id="categories">
    <h1 class="heading"> product <span>categories</span> </h1>
    <div class="box-container">
        <div class="box">
            <img src="img/sayur.png" alt="" >
            <h3>Sayur</h3>
            <p>up to 10% off</p>
            <a href="pagesayur.html" class="btn">shop now</a>
        </div>
        <div class="box">
            <img src="img/buah 2.png" alt="" >
            <h3>Buah</h3>
            <p>up to 5% off</p>
            <a href="Pagebuah.html" class="btn">shop now</a>
        </div>
        <div class="box">
            <img src="img/Ayam.png" alt="" >
            <h3>Protein</h3>
            <p>up to 15% off</p>
            <a href="Pageprotein.html" class="btn">shop now</a>
        </div>
        <div class="box">
            <img src="img/minyak.png" alt="" >
            <h3>Bahan Pokok</h3>
            <p>up to 10% off</p>
            <a href="Pagebahanpokok.html" class="btn">shop now</a>
        </div>
    </div>
</section>
</section>
<section class="products" id="products">
    <h1 class="heading"> Top Featured <span>products</span> </h1>
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
            <a href="#" class="links"> <i class="fas fa-phone"></i> +62 562 1721 2782 </a>
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
<script>
    document.getElementById("login-btn").addEventListener("click", function() {
      window.location.href = "login.html";
    });
  </script>
</body>
</html>
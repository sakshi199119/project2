<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

<!--swiper css link-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> 

<!-- custom css file link-->
<link rel="stylesheet" href="style.css">

</head>
<body>

<?php
include("header.php");
?>
<!--home section starts-->
<section class="home">

    <div class="swiper home-slider">

        <div class="swiper-wrapper">

            <div class="swiper-slide slide" style="background:url(images/beach1.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Travel around the world</h3>
                    <a href="package.php" class="btn">Discover more</a>
                 </div>
              </div> 

              <div class="swiper-slide slide" style="background:url(images/desert.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Discover the new places</h3>
                    <a href="package.php" class="btn">Discover more</a>
                 </div>
              </div> 

              <div class="swiper-slide slide" style="background:url(images/beach.jpg) no-repeat">
                <div class="content">
                    <span>explore, discover, travel</span>
                    <h3>Make your tour worthwhile</h3>
                    <a href="package.php" class="btn">Discover more</a>
                 </div>
              </div> 
        </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>

    </div>
</section>
<!--home section ends-->

<!--services section starts-->
<section class="services">

<h1 class="heading-title">Our services</h1>

<div class="box-container">

    <div class="box">
        <img src="images/logo1.png" >
        <h3>Adventure</h3>
</div>

<div class="box">
        <img src="images/tourguide.png">
        <h3>Tour guide</h3>
</div>

<div class="box">
        <img src="images/trekking.png" >
        <h3>Trekking</h3>
</div>

<div class="box">
        <img src="images/fire.png" >
        <h3>Camp fire</h3>
</div>

<div class="box">
        <img src="images/offroad.png">
        <h3>Off road</h3>
</div>

<div class="box">
        <img src="images/camp.png" >
        <h3>Camping</h3>
</div>

</div>
</section>
<!--services sector ends-->

<!--home about section starts-->

<section class="home-about">
<div class="image">
<img src="images/aboutus.jpg" alt="">
</div>

<div class="content">
    <h3>About us</h3>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
       Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
       when an unknown printer took a galley of type and scrambled it to make a type
       specimen book. It has survived not only five centuries, but also the leap into
       electronic typesetting, remaining essentially unchanged. It was popularised in
       the 1960s with the release of Letraset sheets containing Lorem Ipsum passages,
       and more recently with desktop publishing software like Aldus PageMaker including
       versions of Lorem Ipsum.</p>
    <a href="about.php" class="btn">Read more</a>
</div>

</section>

<!--home about section ends-->

<!--home packages section starts-->

<section class="home-packages">

    <h1 class="heading-title">Our packages</h1>

    <div class="box-container">

        <div class="box">
            <div class="image">
                <img src="images/travel.jpg" alt="">
</div>
<div class="content">
    <h3>Adventure & tour</h3>
    <p>Yatra is one of India's leading online travel portals, offering holiday packages in 
       India and abroad. Yatra offers value for money packages, luxury packages, group 
       departures as well as customized packages.

Yatra was one of the first aggregators of holiday packages and since 2015 it has provided a forum for agents and holiday package sellers to sell their packages directly on the Yatra website. This has enabled Yatra to give a wide range of holiday packages including niche and exotic packages to its customers, while providing localised services.</p>
    <a href="package.php" class="btn">Book now</a>
</div>
</div>

<div class="box">
            <div class="image">
                <img src="images/travel1.jpg" alt="">
</div>
<div class="content">
    <h3>Adventure & tour</h3>
    <p>Yatra is one of India's leading online travel portals, offering holiday packages in 
       India and abroad. Yatra offers value for money packages, luxury packages, group 
       departures as well as customized packages.

Yatra was one of the first aggregators of holiday packages and since 2015 it has provided a forum for agents and holiday package sellers to sell their packages directly on the Yatra website. This has enabled Yatra to give a wide range of holiday packages including niche and exotic packages to its customers, while providing localised services.</p>
    <a href="package.php" class="btn">Book now</a>
</div>
</div>

<div class="box">
            <div class="image">
                <img src="images/travel2.jpg" alt="">
</div>
<div class="content">
    <h3>Adventure & tour</h3>
    <p>Yatra is one of India's leading online travel portals, offering holiday packages in 
       India and abroad. Yatra offers value for money packages, luxury packages, group 
       departures as well as customized packages.

Yatra was one of the first aggregators of holiday packages and since 2015 it has provided a forum for agents and holiday package sellers to sell their packages directly on the Yatra website. This has enabled Yatra to give a wide range of holiday packages including niche and exotic packages to its customers, while providing localised services.</p>
    <a href="package.php" class="btn">Book now</a>
</div>
</div>

</div>

<div class="load-more"><a href="package.php" class="btn">Load more</a></div>

</section>

<!--home packages section ends-->

<!--home offer section starts-->

<section class="home-offer">
    <div class="content">
        <h3>Upto 50% off</h3>
        <p>Explore the iconic Vatican Museums, home to some of the world's most famous artworks
           and historical artifacts. Choose from skip-the-line tickets for quick access, guided
           tours for in-depth exploration, combo tickets for a broader experience, or early
           morning and after-hour options that offer a more private visit.</p>
        <a href="book.php" class="btn">Book now</a>
    </div>
</section>

<!--home offer section ends-->
<?php
include("footer.php");
?>

<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!--custom js file link-->
<script src="script.js"></script>
    
</body>
</html>
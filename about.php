<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<!--swiper css link-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <!-- font awesome cdn link -->
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> 

<!-- custom css file link-->
<link rel="stylesheet" href="style.css">

</head>
<body>

<!--header section starts-->
<?php
include("header.php");
?>
<!--header section ends-->

<div class="heading" style="background:url(images/trees.png) no-repeat">
<h1>About us</h1>
</div>

<!--about section starts-->


<section class="about">
<div class="image">
    <img src="images/aboutus.jpg" alt="">
</div>

<div class="content">
    <h3>Why choose us?</h3>
    <p>Welcome to IndiaTouristPlaces! We are a passionate team of travel enthusiasts dedicated
       to bringing you the best of India’s breathtaking destinations and hidden gems. Our
       blog is your ultimate guide to exploring the diverse and captivating land of India.</p>
    <p>Welcome to IndiaTouristPlaces! We are a passionate team of travel enthusiasts dedicated
       to bringing you the best of India’s breathtaking destinations and hidden gems.</p>
    <div class="icons-container">
        <div class="icons">
            <i class="fas fa-map"></i>
            <span>Top Destination</span>
        </div>

        <div class="icons">
            <i class="fas fa-hand-holding-usd"></i>
            <span>Affordable price</span>
        </div>

        <div class="icons">
            <i class="fas fa-headset"></i>
            <span>24/7 guide service</span>
        </div>

    </div>
</div>

</section>


<!--about section ends-->

<!--reviews section starts-->
<section class="reviews">

<div class="swiper reviews-slider">

    <div class="swiper-wrapper">

        <div class="swiper-slider slide">

            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
</div>
<p>Google reviews provide useful information and help your business stand out. Reviews show
     up next to your Business Profile in Maps and Search.
Important: Reviews are only available in certain countries or regions, or to certain categories
of businesses. To better match with the ways people search for businesses, availability of 
reviews may change over time.</p>
<h3>John Deo</h3>
<span>Traveller</span>
<img src="images/man.jpg" alt="">
</div>

<div class="swiper-slider slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
</div>
<p> Reviews show up next to your Business Profile in Maps and Search.
Reviews are only available in certain countries or regions, or to certain categories
of businesses.</p>
<h3>John Deo</h3>
<span>Traveller</span>
<img src="images/man2.jpg" alt="">
</div>

<div class="swiper-slider slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
</div>
<p>Reviews are only available in certain countries or regions, or to certain categories
of businesses. To better match with the ways people search for businesses, availability of 
reviews may change over time.</p>
<h3>John Deo</h3>
<span>Traveller</span>
<img src="images/man1.jpg" alt="">
</div>

<div class="swiper-slider slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
</div>
<p>Reviews are only available in certain countries or regions, or to certain categories
of businesses. To better match with the ways people search for businesses, availability of 
reviews may change over time.</p>
<h3>John Deo</h3>
<span>Traveller</span>
<img src="images/man.jpg" alt="">
</div>

<div class="swiper-slider slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
</div>
<p>Trustpilot is a platform where you can find and share reviews of companies and products in
   various categories. You can also get tips and insights on how to buy with confidence and
   sleep better.</p>
<h3>John Deo</h3>
<span>Traveller</span>
<img src="images/man4.jpg" alt="">
</div>

<div class="swiper-slider slide">
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
</div>
<p>Discover what an employer is really like before you make your next move. Search reviews and
   ratings, and filter companies based on the qualities that matter most to your job search.</p>
<h3>John Deo</h3>
<span>Traveller</span>
<img src="images/man5.jpg" alt="">
</div>

</div>
</div>
</section>

<!--reviews section ends-->

<?php
include("footer.php");
?>

<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!--custom js file link-->
<script src="script.js"></script>

    
</body>
</html>
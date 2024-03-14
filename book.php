<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

<!--swiper css link-->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>

    <!-- font awesome cdn link -->
    <link rel ="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"> 

<!-- custom css file link-->
<link rel="stylesheet" href="style.css">

</head>
<body>

<?php
include("header.php");
?>

<div class="heading" style="background:url(images/now.png) no-repeat">
<h1>Book Now</h1>
</div>

<!--booking section starts-->
<section class="booking">
<h1 class="heading-title">Book your trip!</h1>
<form action="book_form.php" method="post" class="book-form">
<div class="flex">
    <div class="inputBox">
        <span>Name: </span>
        <input type="text" placeholder="Enter your name" name="name">
</div>

<div class="inputBox">
        <span>Email: </span>
        <input type="text" placeholder="Enter your email" name="email">
</div>

<div class="inputBox">
        <span>Phone: </span>
        <input type="number" placeholder="Enter your number" name="phone">
</div>

<div class="inputBox">
        <span>Address: </span>
        <input type="text" placeholder="Enter your address" name="address">
</div>

<div class="inputBox">
        <span>Where to: </span>
        <input type="text" placeholder="Place you want to visit" name="location">
</div>

<div class="inputBox">
        <span>How many: </span>
        <input type="number" placeholder="Number of guests" name="guests">
</div>

<div class="inputBox">
        <span>Arrivals: </span>
        <input type="date" name="arrivals">
</div>

<div class="inputBox">
        <span>Leaving: </span>
        <input type="date" name="leaving">
</div>
</div>

<input type="submit" value="submit" class="btn" name="send">

</form>
</section>

<!--booking section ends-->

<?php
include("footer.php");
?>

<!--swiper js link-->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!--custom js file link-->
<script src="script.js"></script>
    
</body>
</html>
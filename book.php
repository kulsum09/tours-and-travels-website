<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tours & Travels | Book</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"/>

</head>
<body>
   
<section class="header">
    <a href="home.html" class="logo">Tours & Travels</a>
    <nav class="navbar">
        <a href="home.html">Home</a>
        <a href="about.html">About us</a>
        <a href="package.html">Package</a>
        <a href="book.php">book</a>
    </nav>
    <div id="menu-btn" class="fas fa-bars"></div>
</section>

<!-- <div class="heading">
     <h1>book</h1>
</div> -->

<section class="booking">
    <h1 class="heading-title">book your trip!</h1>
    <form action="book_form.php" method="post" class="book_form">
        <div class="flex">
            <div class="inputBox">
                <span>name:</span>
                <input type="text" placeholder="enter your name" name="name">
            </div>
            <div class="inputBox">
                <span>email:</span>
                <input type="email" placeholder="enter your email" name="email">
            </div>
            <div class="inputBox">
                <span>phone:</span>
                <input type="number" placeholder="enter your number" name="phone">
            </div>
            <div class="inputBox">
                <span>address:</span>
                <input type="text" placeholder="enter your address" name="address">
            </div>
            <div class="inputBox">
                <span>place:</span>
                <input type="text" placeholder="where to visit" name="location">
            </div>
            <div class="inputBox">
                <span>How many:</span>
                <input type="number" placeholder="number of person" name="person">
            </div>
             <div class="inputBox">
                <span>arrivals:</span>
                <input type="date" name="arrivals" !important>
            </div>
             <div class="inputBox">
                <span>leaving:</span>
                <input type="date" name="leaving">
            </div>
        </div>
        <input type="submit" value="submit" class="btn" name="send">
    </form>
</section>







<section class="footer">
    <div class="box-container">
        <div class="box">
            <h3>Quick Links</h3>
        <a href="home.html"><i class="fas fa-angle-right"></i>home</a>
        <a href="about.html"><i class="fas fa-angle-right"></i>about us</a>
        <a href="package.html"><i class="fas fa-angle-right"></i>package</a>
        <a href="book.php"><i class="fas fa-angle-right"></i>book</a>
        </div>
        <div class="box">
            <h3>Extra links</h3>
            <a href="#"><i class="fas fa-angle-right"></i>ask Question</a>
            <a href="#"><i class="fas fa-angle-right"></i>about us</a>
            <a href="#"><i class="fas fa-angle-right"></i>Privacy policy</a>
            <a href="#"><i class="fas fa-angle-right"></i>terms of use</a>
        </div>
        <div class="box">
            <h3>contact info</h3>
            <a href="#"><i class="fas fa-phone"></i> 8850814831</a>
            <a href="#"><i class="fas fa-phone"></i> 8828605650</a>
            <a href="#"><i class="fas fa-envelope"></i> tourstravels37@gmail.com</a>
            <a href="#"><i class="fas fa-location-dot"></i> Panvel, India - 410206</a>
        </div>
        <div class="box">
            <h3>Follow us</h3>
            <a href="#"><i class="fab fa-facebook-f"></i> Facebook</a>
            <a href="#"><i class="fab fa-twitter"></i> Twitter</a>
            <a href="#"><i class="fab fa-instagram"></i> Instagram</a>
            <a href="#"><i class="fab fa-youtube"></i> YouTube</a>
        </div>
    </div>
    <div class="credit">created by <span> Kulsum</span> | all rights reserved</div>

</section>











<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script src="script.js"></script>
</body>
</html>
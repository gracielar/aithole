<!DOCTYPE html>
<!--
File Name: index.html
Proyect: Ace in the Hole
Date: 07/28/20
Programmer: Graciela Rodriguez
-->
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">

    <meta name="author" content="Graciela Rodriguez">

    <title>Ace in the Hole</title>

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">

    <link href="css/reset.css" rel="stylesheet" type="text/css">

    <link href="css/helper.css" rel="stylesheet" type="text/css">

    <link href="css/grid.css" rel="stylesheet" type="text/css">

    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <link href="css/styles.less" rel="stylesheet/less" type="text/css">

    <link href="css/palette.css" rel="stylesheet/css" type="text/css">

    <link href="css/palette.less" rel="stylesheet/less" type="text/css">

    <link rel="stylesheet" href="css/fontello.css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

    <div id="wrapper">

   <?php include'includes/nav.inc.html.php';?>

  <?php include'includes/header.inc.html.php';?>


        <h2>THE EVENT IN IMAGES</h2>


        <!-- Slideshow container -->
        <div class="slideshow-container">

            <!-- Full-width images with number and caption text -->
            <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="../aithole/images/ace1.jpg" style="width:100%" alt="the race">
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="../aithole/images/ace18.jpg" style="width:100%" alt="let's go">
                <div class="text"></div>
            </div>

            <div class="mySlides fade">
                <div class="numbertext"></div>
                <img src="../aithole/images/ace7.jpg" style="width:100%" alt="winner">
                <div class="text"></div>
            </div>

            <!-- Next and previous buttons -->
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <!-- The dots/circles -->
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>


        <!-- End Slideshow container -->

        <p>Each participant has a memory of fun, joy and success<br> in this traditional sporting event</p>
        <p><em>Be part of the next, this year!</em></p>
        <h2>Ace in the Hole MultiSport Annual Events</h2>
        <h2>Portland, Oregon</h2>
        <h3>Why wait!</h3>


        <button onclick="document.location='registration.html' ">Register Now!</button>


<?php include'includes/footer.inc.html.php';?>

    </div>

    <script>
        var slideIndex = 0;
        showSlides();

        function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slideIndex++;
            if (slideIndex > slides.length) {
                slideIndex = 1
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            setTimeout(showSlides, 3000); // Change image every 2 seconds
        }

    </script>
    <script>
        function myFunction() {
            var x = document.getElementById("myTopnav");
            if (x.className === "topnav") {
                x.className += " responsive";
            } else {
                x.className = "topnav";
            }
        }

    </script>
</body>

</html>

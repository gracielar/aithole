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

        <h2>THE ANNUAL MULTISPORT EVENT</h2>

        <img src="images/ace18.jpg">


        <button onclick="document.location='registration.html.php' ">Register Now!</button>


        <div class="container-fluid">
            <div class="row">

                <div class="col-sm-4">

                    <img src="images/ace5.jpg" alt="biking">

                    <h2>A UNIQUE SPORT WEEKEND THAT YOU'LL NEVER FORGET!</h2>


                </div>


                <div class="col-sm-4">
                    <img src="images/ace3.jpg" alt="Competition">

                    <h2>Come to experience your first race or</h2>
                    <h2> come to compete to win,but make sure you come to have fun!</h2>




                </div>

                <div class="col-sm-4">

                    <img src="images/ace2.jpg" alt="sport for everbody">

                    <h2>There is something for every level of athletic ability</h2>

                    <h3>Do yo want to know more about us, or our next Annual Event Multisport, please contact us.</h3>
                    <button onclick="document.location='contact.html' ">Contact Us</button>
                </div>
            </div>
            <?php include'includes/footer.inc.html.php';?>

        </div>
    </div>
</body>

</html>

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

<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    // Next/previous controls
    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    // Thumbnail image controls
    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 2000); // Change image every 2 seconds
    }

</script>

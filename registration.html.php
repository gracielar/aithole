<!DOCTYPE html>
<!--
File Name: registration.html
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

    <link href="../css/reset.css" rel="stylesheet" type="text/css">

    <link href="../css/helper.css" rel="stylesheet" type="text/css">

    <link href="../css/grid.css" rel="stylesheet" type="text/css">

    <link href="../css/styles.css" rel="stylesheet" type="text/css">

    <link href="../css/styles.less" rel="stylesheet/less" type="text/css">

    <link href="../css/palette.css" rel="stylesheet/css" type="text/css">

    <link href="../css/palette.less" rel="stylesheet/less" type="text/css">

    <link rel="stylesheet" href="../css/fontello.css">

    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/2.7.1/less.min.js"></script>

    <script src="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>

    <div id="wrapper">

        <?php include'../includes/nav.inc.html.php';?>

        <?php include'../includes/header.inc.html.php';?>

        <img src="../images/ace12.jpg" alt="Biking">




        <h2>REGISTRATION PAGE</h2>
        <h3>A UNIQUE SPORT WEEKEND THAT YOU'LL NEVER FORGET!</h3>
        <p>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-11" style="background-color: #d3dcde;">

                    <h2>Register Your course</h2>

                    <form method="POST" action=" " id="inquiryForm">

                        <label for="name">Full Name:</label>
                        <input type="text" name="name" id="name" placeholder="Your name..."><br>

                        <label for="age">Age:</label>
                        <input type="text" name="age" id="age" placeholder="Your age..."><br>

                        <label for="party">Role: </label>
                        <select id="role" name="role" form="inquiryForm">
                            <option>Choose Your Party</option>
                            <option value="Athlete">Athlete</option>
                            <option value="Volunteer">Volunteer</option>
                        </select><br>

                        <label for="phone">Telephone:</label>
                        <input type="text" name="phone" id="phone"><br>
                        <label for="email">E-mail:</label>
                        <input type="text" name="email" id="email"><br>

                        <label for="gender">Gender:</label>
                        <select id="gender" name="gender" form="inquiryForm">
                            <option>Your Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                            <option value="Non-binary">Non-binary</option>
                            <option value="other">Other</option>
                        </select><br>

                        <label for="tshirt">Select a size for your T-Shirt</label>
                        <select id="tshirt" name="tshirt" form="inquiryForm">
                            <option>Select a size</option>
                            <option value="XS">XS</option>
                            <option value="S">S</option>
                            <option value="M">M</option>
                            <option value="L">L</option>
                            <option value="XL">XL</option>
                            <option value="XXL">XXL</option>
                            <option value="XXXL">XXXL</option>
                            <option value="XXXXL">XXXXL</option>
                        </select><br>

                        <label for="contname">Emergency Contact Name: </label>
                        <input type="text" name="contname" id="contname"><br>

                        <label for="contnumber">Emergency Contact Number: </label>
                        <input type="text" name="contnumber" id="contnumber"><br>

                        <label for="accomodations">Let Us Know If There Are Any Accommodations needed</label>
                        <textarea form="inquiryForm" rows="4" cols="40" name="accomodations" id="accomodations"></textarea>
                        <input id="mySubmit" type="submit" value="Submit">
                    </form>
                </div>
            </div>
            <div class="col-sm-6">

                <h3>REGISTRATION COST</h3>
                <ul>
                    <li>Long Course - $240</li>
                    <li>Olympic - $110</li>
                    <li>10K - $50</li>
                    <li>Half Marathon - $75</li>
                    <li>Spring - $90</li>
                    <li>Try-a-Tri - $65</li>

                </ul>
            </div>
            <div class="col-sm-6">

                <h3>Cost Includes</h3>

                <p>Food &amp; Beer</p>
                <p>Access to the weekend&#39;s live entertainment &amp; Finess Expo </p>
                <p>Commemorative Finisher medal</p>
                <p>Accurate Chip Timing for Competitive races</p>
                <p>Post-event party &amp; entertainment</p>
                <p>Ace in the Hole Multisport Weekend Tech Shirt</p>

                <p>NOTE:Tech shrits guaranteed to pre-registered participants only.</p>

                <p>Questions? Please,contact us</p>
                <button onclick="document.location='contact/contact.html.php' ">Contact Us</button>




            </div>

        </div>


    </div>

    <?php include'../includes/footer.inc.html.php';?>

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

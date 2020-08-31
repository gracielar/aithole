<!DOCTYPE html>
<!--
File Name: contact.html.php
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

    <link href="css/grid.css" rel="stylesheet" type="text/css">

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
        <img src="../images/ace6.jpg">




        <button onclick="document.location='registration.html.php' ">Register Now!</button>


        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">

                    <h2>CONTACT PAGE</h2>

                    <h2>Questions? We'd love to hear from you!</h2>
                    <div class="container">
                        <form action="">
                            <label for="fname">First Name</label>
                            <input type="text" id="fname" name="firstname" placeholder="Your name..">

                            <label for="email">Email</label>
                            <input type="text" id="email" name="email" placeholder="Your E-mail address...">

                            <label for="role">Role:</label>
                            <select id="role" name="role">
                                <option value="athlete">Athlete</option>
                                <option value="volunteer">Volunteer</option>
                                <option value="interested party">Interested party</option>

                            </select>

                            <label for="subject">Comments or question</label>
                            <textarea id="subject" name="subject" placeholder="Write something.." style="height:100px;"></textarea>

                            <input type="submit" value="Submit">
                        </form>

                    </div>
                </div>

                <div class="col-sm-6">

                    <h3>A UNIQUE SPORT WEEKEND THAT YOU'LL NEVER FORGET!</h3>
                    <p>There is something for every level of athletic ability. The weekend includes a first timer triathlon, a sprint, Olympic, and Half-Iron triathlons and 10K and Half marathon runs. Come to experience your first race or come to compete to win, but make sure you come to have fun!</p>

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

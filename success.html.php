<?php
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ace in the Hole Registration Form/title>
    <meta name="description" content="Reserve your spot for the Annual Multisport Event.">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href=../style.css> <link href='https://fonts.googleapis.com/css?family=Cinzel' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->
</head>

<body>
    <div id="wrapper">
        <?php include '../includes/header.inc.html.php'; ?>
<?php include '../includes/nav.inc.html.php'; ?>
<main>
    <h1>Success!</h1>

    <p>Our records show you submitted the following:<br>

        Name: <?php echo htmlspecialchars($myName, ENT_QUOTES, 'UTF-8'); ?><br>
        Age: <?php echo htmlspecialchars($myAge, ENT_QUOTES, 'UTF-8'); ?><br>
        Role: <?php echo htmlspecialchars($myRole, ENT_QUOTES, 'UTF-8'); ?><br>
        Phone: <?php echo htmlspecialchars($myPhone, ENT_QUOTES, 'UTF-8'); ?><br>
        Email: <?php echo htmlspecialchars($myEmail, ENT_QUOTES, 'UTF-8'); ?><br>
        Gender: <?php echo htmlspecialchars($myGender, ENT_QUOTES, 'UTF-8'); ?><br>
        T-Shirt: <?php echo htmlspecialchars($myTshirt, ENT_QUOTES, 'UTF-8'); ?><br>
        Contact Name: <?php echo htmlspecialchars($myContname, ENT_QUOTES, 'UTF-8'); ?><br>
        Contact Number: <?php echo htmlspecialchars($myContnumber, ENT_QUOTES, 'UTF-8'); ?><br>
        Accomodations: <?php echo htmlspecialchars($myAccomodations, ENT_QUOTES, 'UTF-8'); ?><br>




    </p>

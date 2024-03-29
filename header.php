<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SecondLife Solutions</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/mobile.css">
</head>


<body>
    <header>
        <img src = "./assets/sls.png" width="350px"> 
    </header>

    <div class="container teal borderYtoX">
        <a href="index.php">HOME</a>
        <a href="join.php">JOIN</a>
        <a href = "donate.php">SUPPORT</a>
        <a href = "inventory.php"> INVENTORY </a>
        <a href="about.php">ABOUT US</a>
        <a href="contact.php">CONTACT</a>
       

        <?php
        session_start();
        if(!isset($_SESSION['emailID']) && !isset($_SESSION['distributor_emailID']))
            echo "<a href='contributor_login.php'>Contributor's Login</a>";
        if(!isset($_SESSION['emailID']) && !isset($_SESSION['distributor_emailID']))
            echo "<a href='distributor_login.php'>Distributor's Login</a>";
        if(isset($_SESSION['emailID']) || isset($_SESSION['distributor_emailID']))
            echo "<a href='logout.php'>Logout</a>";
?>
    </div>
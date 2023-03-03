<?php include "config.php";
session_start();
if(!isset($_SESSION['user'])){

header("location:index.php");

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Karla:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <!--jquery ui stylesheet-->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">

    <!-- site favicon -->
    <link rel="icon" href="images/favicon.png" />

    <!--selectric stylesheet-->
    <link rel="stylesheet" href="css/selectric.css" />
    <!--font awesome stylesheet-->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!--swipe box stylesheet-->
    <link rel="stylesheet" href="css/swipebox.css" />
    <!-- mean menu stylesheet-->
    <link rel="stylesheet" href="css/meanmenu.css" />
    <!--slick slider stylesheet-->
    <link rel="stylesheet" href="css/slick.css" />
    <link rel="stylesheet" href="css/slick-theme.css" />
    <!--bootstrap stylesheets-->
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/bootstrap-theme.css" />
    <!--animate stylesheet-->
    <link rel="stylesheet" href="css/animate.css" />
    <!--main stylesheet-->
    <link rel="stylesheet" href="css/main.css" />
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous"> -->
    <title>Document</title>
</head>
<style>
    .success {

        border: 3px solid green;


    }

    .error {

        border: 3px solid red;


    }
</style>

<body>
    <!--header-->
    <header>
        <div class="header header-main header-var2 fade-load-down">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2">
                        <div class="logo-wrapper">
                            <a href="index.html"><img src="images/logo.png" alt="logo" /></a>
                        </div>
                    </div>
                    <div class="col-lg-10">
                        <div class="outer-nav">
                            <div class="wrapper-links">
                                <ul class="header-social-icons">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                                <span class="sign-in-buttons">
                                    <a class="login" href="profile.php?logout=true">Log out</a>
                                    <!-- <a class="register" href="register.php">Register</a> -->
                                </span>
                            </div>
                            <div class="wrapper-links">
                                <h4>Hello ! <?php echo ucfirst($_SESSION['user'])  ?></h4>
                            </div>
                            <div class="wrapper-main-nav ">
                                <nav class="nav-collapse responsive-menu">
                                    <ul class="main-menu">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="recipe-listing-grid.html">Recent Recipes</a></li>
                                        <li><a href="single.html">Blog</a></li>
                                        <li><a href="our-chefs.html">Chefs</a></li>
                                        <li><a href="single.html">About</a></li>
                                        <li><a href="contact.php">Contact</a></li>
                                        <li class="submit-recipe"><a href="submit-recipe.html">Submit Recipe</a></li>
                                    </ul>

                                </nav>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <?php

    if (isset($_GET["logout"])) {

        session_unset();
        session_destroy();
        // header("location:login.php");
        echo "<script>window.location.href = 'index.html';</script>";

    }


    ?>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
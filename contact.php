<?php

include "config.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['number'];
    $message = $_POST['message'];

    $sql = "INSERT INTO `contact` ( `name`, `email`, `number`, `message`) VALUES ( '$name', '$email', ' $number', '$message')";
    $res =  mysqli_query($conn, $sql);

    if ($res) {
        echo "<script>alert('Thank You! your message has been recored.')</script>";
        echo "<script>window.location.href = 'contact.php';</script>";
    } else {

        echo "error";
    }
}


?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">

    <title>Food & Health</title>
    <!--google fonts-->
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
</head>

<body>
    <!--pre-loader-->
    <div class="preloader">
        <div class="loadr">
            <svg viewbox="0 0 74.6 81">
                <path d="M67.8,12.9C51.7,5.2,26.2,0.2,26.2,0.2c-10.9-1.8-9.3,11.4-9,20.2c0,0.7,0.1,1.4,0.1,2c7.8,1.5,19.7,4,29.2,7.4c11.4,4.1,9.6,8.3,9.2,16c-0.2,4.9-0.4,14,1.1,21.3c7.7,1.4,13.8,1.9,13.1-0.3c-6.3-7.2-0.1-29.6,1.8-34.2C73.3,28.7,79.3,18.4,67.8,12.9z">
                </path>
                <path d="M58.9,79.5c-6.5-5.6-6.2-23.6-5.8-31.3c0.4-7.7,2.1-11.9-9.2-16c-15.3-5.5-37.3-8.8-37.3-8.8c-9.1-1.1-6.6,8.4-5.5,15.1c1.7,10,5.4,22,7.9,27.8c2.8,6.5,8.9,7.3,8.9,7.3S65.4,85.1,58.9,79.5z">
                </path>
            </svg>
        </div>
    </div>
    <!--pre-loader ends-->

    <!--header-->
    <header>
        <div class="header header-var1 fade-load-down">
            <div class="responsive-menu"></div>
            <div class="nav-var1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5">

                            <div class="left-nav">
                                <nav class="nav-collapse">
                                    <ul class="main-menu left">
                                        <li><a href="index.html">Home</a>
                                            <ul>
                                                <li><a href="variation1.html">variation one</a></li>
                                                <li><a href="variation2.html">variation two</a></li>
                                                <li><a href="variation3.html">variation three</a></li>
                                                <li><a href="variation4.html">variation four</a></li>
                                                <li><a href="variation5.html">variation five</a></li>
                                                <li><a href="variation6.html">variation six</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="recipe-listing.html">Recent Recipes</a>
                                            <ul>
                                                <li><a href="recipe-listing.html">recipe listing list view</a></li>
                                                <li><a href="recipe-listing-grid.html">recipe listing grid view</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="#">Recipe Detail</a>
                                            <ul>
                                                <li><a href="recipe-detail.html">recipe detail version 1</a></li>
                                                <li><a href="recipe-detail2.html">recipe detail version 2</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="our-chefs.html">Chefs</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>

                        <div class="col-md-2">
                            <div class="logo-wrapper">
                                <a href="#"><img src="images/logo.png" alt="logo" /></a>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="right-nav">
                                <div class="wrapper-links">
                                    <ul class="header-social-icons">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    <span class="sign-in-buttons">
                                        <a class="login" href="#">Login</a>
                                        <a class="register" href="#">Register</a>
                                    </span>
                                </div>
                                <nav class="nav-collapse">
                                    <ul class="main-menu right">
                                        <li><a href="blog.html">blog</a>
                                            <ul>
                                                <li><a href="single.html">Single post</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="elements.html">elements</a></li>
                                        <li><a href="contact.html">contact</a></li>
                                        <li><a class="submit-recipe" href="submit-recipe.html">Submit recipe</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!--header ends-->

    <!--banner-->
    <div class="banner banner-blog">
        <div class="container ">
            <div class="main-heading">
                <h1>Contact us</h1>
            </div>

        </div>
    </div>
    <div class="advance-search">
        <!--advance search form-->

        <div class="container">
            <div class="wrapper-search">
                <div class="container-tags">
                    <span class="tag">
                        <span class="tag-inner">Find Recipes <i class="fa fa-angle-down"></i></span>
                    </span>

                </div>
                <div class="outer-advance-search">

                    <form action="#" id="advance-search">
                        <fieldset>
                            <div class="inner-advance-search">

                                <div class="form-field">
                                    <label for="ingredient">ingredient</label>
                                    <select name="ingredient" id="ingredient" class="advance-selectable">
                                        <option value="ing1" selected="selected">Any Ingredient</option>
                                        <option value="ing2">Butter</option>
                                        <option value="ing3">Cheese</option>
                                        <option value="ing4">Cream</option>
                                        <option value="ing5">Yeast</option>
                                    </select>
                                </div>

                                <div class="form-field">
                                    <label for="course">course</label>
                                    <select name="course" id="course" class="advance-selectable">
                                        <option value="ing1" selected="selected">Any Course</option>
                                        <option value="ing2">Butter</option>
                                        <option value="ing3">Cheese</option>
                                        <option value="ing4">Cream</option>
                                        <option value="ing5">Yeast</option>
                                    </select>
                                </div>

                                <div class="form-field">
                                    <label for="cuisine">cuisine</label>
                                    <select name="cuisine" id="cuisine" class="advance-selectable">
                                        <option value="ing1" selected="selected">Any Cuisine</option>
                                        <option value="ing2">Butter</option>
                                        <option value="ing3">Cheese</option>
                                        <option value="ing4">Cream</option>
                                        <option value="ing5">Yeast</option>
                                    </select>
                                </div>

                                <div class="form-field">
                                    <label for="time">Cooking Time</label>
                                    <select name="time" id="time" class="advance-selectable">
                                        <option value="ing1" selected="selected">Any Cooking Time</option>
                                        <option value="ing2">Butter</option>
                                        <option value="ing3">Cheese</option>
                                        <option value="ing4">Cream</option>
                                        <option value="ing5">Yeast</option>
                                    </select>
                                </div>

                                <div class="form-field">
                                    <label for="calories">calories</label>
                                    <select name="calories" id="calories" class="advance-selectable">
                                        <option value="ing1" selected="selected">Any Calories</option>
                                        <option value="ing2">Butter</option>
                                        <option value="ing3">Cheese</option>
                                        <option value="ing4">Cream</option>
                                        <option value="ing5">Yeast</option>
                                    </select>
                                </div>

                                <button type="submit"><i class="fa fa-search"></i></button>

                            </div>
                        </fieldset>

                    </form>
                </div>
            </div>
        </div>

        <!--advance search form ends-->
    </div>

    <!--banner ends-->

    <!--main content area-->
    <section class="recipes-home-body inner-page">
        <div class="container">
            <div class="recipe-set">
                <h2>Our Locations</h2>
                <div class="contact-container">
                    <div class="row">
                        <div class="col-md-4">
                            <section class="contact-option-single">
                                <h3>Registered office</h3>
                                <p>
                                    Recipe north street, opp secure garden. Hotel
                                    View, City State Office, Melbournebr <br />
                                    Australia. 123456
                                </p>
                                <ul class="contact-options">
                                    <li class="phone"><span>Phone: </span>+123 4567 890</li>
                                    <li class="fax"><span>Fax: </span>+123 4567 890</li>
                                    <li class="email"><span>Email: </span><a href="#">info@foodandtaste.com</a></li>
                                </ul>
                            </section>
                        </div>
                        <div class="col-md-4">
                            <section class="contact-option-single">
                                <h3>Our Restaurant</h3>
                                <p>
                                    Recipe north street, opp secure garden. Hotel
                                    View, City State Office, Melbourne <br />
                                    Australia. 123456
                                </p>
                                <ul class="contact-options">
                                    <li class="phone"><span>Phone: </span>+123 4567 890</li>
                                    <li class="fax"><span>Fax: </span>+123 4567 890</li>
                                    <li class="email"><span>Email: </span><a href="#">info@foodandtaste.com</a></li>
                                </ul>
                            </section>
                        </div>
                        <div class="col-md-4">
                            <section class="contact-option-single">
                                <h3>Other Office</h3>
                                <p>
                                    Recipe north street, opp secure garden. Hotel
                                    View, City State Office, Melbourne <br />
                                    Australia. 123456
                                </p>
                                <ul class="contact-options">
                                    <li class="phone"><span>Phone: </span>+123 4567 890</li>
                                    <li class="fax"><span>Fax: </span>+123 4567 890</li>
                                    <li class="email"><span>Email: </span><a href="#">info@foodandtaste.com</a></li>
                                </ul>
                            </section>
                        </div>
                    </div>

                    <div class="separator-post"></div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="contact-option-single">
                                <h3>Quick Contact</h3>
                                <fieldset>
                                    <form action="contact.php" id="contact-form" method="post" novalidate="novalidate">
                                        <input class="required" type="text" name="name" placeholder="Name" title="*Enter Your Name" required />
                                        <input class="required" type="email" name="email" placeholder="Email Address" title="*enter valid email address" required />
                                        <input type="number" class="number" name="number" placeholder="Phone Number" required />
                                        <textarea class="required" name="message" id="message" cols="30" rows="10" placeholder="Message" title="*type your message" required></textarea>
                                        <button type="submit" name="submit">submit message</button>
                                        <img src="images/loader2.gif" id="contact-loader" alt="Loading...">


                                    </form>
                                


                                </fieldset>
                                <div class="error-container"></div>
                                <div id="message-sent"></div>
                            </div>
                        </div>
                        <div class="col-md-6">


                            <!--google map-->
                            <div class="contact-option-single">
                                <h3>Find Location on Map</h3>
                                <div class="map-wrapper">
                                    <div id="map_canvas"></div>

                                </div>
                                <script type="text/javascript" src="http://maps.google.com/maps/api/js?v=3&amp;sensor=false"></script>
                                <script type="text/javascript">
                                    function init_map() {

                                        var mapLatitude = 39.0500155,
                                            mapLongitude = -77.1169103,
                                            mapZoom = 14;

                                        var myOptions = {
                                            zoom: mapZoom,
                                            scrollwheel: false,
                                            center: new google.maps.LatLng(mapLatitude, mapLongitude),
                                            mapTypeId: google.maps.MapTypeId.ROADMAP,
                                            styles: [{
                                                    "featureType": "landscape",
                                                    "elementType": "labels",
                                                    "stylers": [{
                                                        "visibility": "off"
                                                    }]
                                                },
                                                {
                                                    "featureType": "transit",
                                                    "elementType": "labels",
                                                    "stylers": [{
                                                        "visibility": "off"
                                                    }]
                                                },
                                                {
                                                    "featureType": "poi",
                                                    "elementType": "labels",
                                                    "stylers": [{
                                                        "visibility": "off"
                                                    }]
                                                },
                                                {
                                                    "featureType": "water",
                                                    "elementType": "labels",
                                                    "stylers": [{
                                                        "visibility": "off"
                                                    }]
                                                },
                                                {
                                                    "featureType": "road",
                                                    "elementType": "labels.icon",
                                                    "stylers": [{
                                                        "visibility": "off"
                                                    }]
                                                },
                                                {
                                                    "stylers": [{
                                                            "hue": "#00aaff"
                                                        },
                                                        {
                                                            "saturation": -100
                                                        },
                                                        {
                                                            "gamma": 1.15
                                                        },
                                                        {
                                                            "lightness": 12
                                                        }
                                                    ]
                                                },
                                                {
                                                    "featureType": "road",
                                                    "elementType": "labels.text.fill",
                                                    "stylers": [{
                                                            "visibility": "on"
                                                        },
                                                        {
                                                            "lightness": 24
                                                        }
                                                    ]
                                                },
                                                {
                                                    "featureType": "road",
                                                    "elementType": "geometry",
                                                    "stylers": [{
                                                        "lightness": 10
                                                    }]
                                                }
                                            ]
                                        };
                                        map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);

                                        marker = new google.maps.Marker({
                                            map: map,
                                            position: new google.maps.LatLng(mapLatitude, mapLongitude)
                                        });

                                    }
                                    google.maps.event.addDomListener(window, "load", init_map);
                                </script>
                            </div>
                            <!--google map ends-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--main content area-->

    <!--footer-->
    <div class="footer footer-variant-one footer-fluid">
        <div class="container">
            <div class="footer-inner">
                <div class="text-center">
                    <a class="logo-footer wow animated zoomIn" href="index.html"><img src="images/logo2.png" alt="Logo" /></a>
                    <p class="wow animated flipInX">
                        Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt
                        ut labore et dolore
                        <br />
                        magna aliquyam erat, with an extra ordinary design and quality development features in low
                    </p>

                </div>

                <div class="subs-social-options">
                    <div class="row custom-row-footer">
                        <div class="col-md-6 custom-col-options">
                            <div class="left-side">
                                <div class="widget widget-footer news-letter-signup wow animated flipInY">
                                    <h2>Newsletter Signup</h2>

                                    <form class="subs-form" action="#" method="post">
                                        <div class="email-field">
                                            <input type="email" name="email" placeholder="Enter you email address" />
                                            <button><i class="fa fa-paper-plane-o"></i></button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="right-side">
                                <div class="widget widget-footer social-icons">
                                    <h2 class="wow animated fadeInRight">Get Social with Us</h2>
                                    <ul>
                                        <li class="wow animated bounceInRight"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li class="wow animated bounceInRight animation-delay100ms"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li class="wow animated bounceInRight animation-delay200ms"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                        <li class="wow animated bounceInRight animation-delay300ms"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li class="wow animated bounceInRight animation-delay400ms"><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                        <li class="wow animated bounceInRight animation-delay500ms"><a href="#"><i class="fa fa-flickr"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright text-center wow animated flipInX">
                    <p>&copy; Copyright 2015 All Rights Reserved by <a href="#">Majestic Themes</a></p>
                </div>
                <div class="corner-image wow animated fadeInRight">
                    <img src="images/footer-corner-image.jpg" alt="image" />
                </div>
            </div>
        </div>
    </div>
    <!--footer ends-->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery-ui.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/jquery.meanmenu.js"></script>
    <script src="js/jquery.selectric.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.swipebox.js"></script>
    <script src="js/custom.js"></script>

</body>

</html>
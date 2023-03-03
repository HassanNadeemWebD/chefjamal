<?php
include "config.php";
session_start();
// Check if form is submitted
if (isset($_POST['login'])) {
    // Get form data


    $email = $_POST['email'];
    $password = $_POST['password'];
    $encryptPassword = sha1($_POST['password']);


    if (empty(trim($_POST["email"]))) {
        $email_err = "Please enter email.";
    } else {
        $email = trim($_POST["email"]);
    }

    // Check if the password is empty
    if (empty(trim($_POST["password"]))) {
        $password_err = "Please enter your password.";
    } else {
        $password = trim($_POST["password"]);
    }

    // Validate credentials
    if (empty($email_err) && empty($password_err)) {
        // Prepare a select statement
        $sql =  "SELECT * FROM users WHERE email = '$email' AND  password = '$encryptPassword' ";
        $data = mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($data);
        if ($row > 0) {
         

            $userID = $row['userID'];
            $userName = $row['userName'];
            $_SESSION['id'] = $userID;
            $_SESSION['user'] = $userName;

            if (isset($_POST['rememberme'])) {
                setcookie('useremail', $_POST['email'], time() + (86400 * 30));
                setcookie('userpassword', $_POST['password'], time() + (86400 * 30));
            }



            echo "<script>alert('login successful')</script>";

            echo "<script>window.location.href = 'profile.php';</script>";
            // echo  $_SESSION['user'];
        } else {
            echo "<script>document.getElementById('loginfailed').style.display='block'</script>";
        }
    }
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
                                    <!-- <a class="login" href="login.php">Login</a> -->
                                    <a class="register" href="register.php">Register</a>
                                </span>
                            </div>
                            <!-- <div class="wrapper-main-nav ">
                                <nav class="nav-collapse responsive-menu">
                                    <ul class="main-menu">
                                        <li><a href="index.html">Home</a></li>
                                        <li><a href="recipe-listing-grid.html">Recent Recipes</a></li>
                                        <li><a href="single.html">Blog</a></li>
                                        <li><a href="our-chefs.html">Chefs</a></li>
                                        <li><a href="single.html">About</a></li>
                                        <li><a href="contact.html">Contact</a></li>
                                        <li class="submit-recipe"><a href="submit-recipe.html">Submit Recipe</a></li>
                                    </ul>

                                </nav>

                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="container d-flex align-items-center mt-5">
        <div class=" mask d-flex align-items-center h-100 gradient-custom-3 col-md-6 mx-auto">
            <div class="container h-100 ">
                <div class="row d-flex justify-content-center align-items-center h-80">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Login</h2>
                                <p class='fw-bolder text-center' id="loginfailed" style='color:red; display:none'>email or password is incorrect </p>

                                <form action="login.php" method="post">





                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control form-control-lg" required />
                                    </div>




                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" onkeyup="checkPass()" required minlength="4" />
                                        <div>
                                            <input type="checkbox" id="check" name="rememberme" />
                                            <label class="form-label" for="check">remember me</label>
                                        </div>
                                    </div>







                                    <div class="d-flex justify-content-center">
                                        <button type="submit" name="login" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Login</button>
                                    </div>


                                </form>
                            





                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script>
        let showPass = () => {

            let passInput = document.getElementById("password");
            // console.log(passInput);

            if (passInput.type == "text") {

                passInput.type = "password"


            } else {

                // passInput.setAttribute("class", "success");
                // console.log(passInput);
                passInput.type = "text";


            }

        }

        // password confirmation
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
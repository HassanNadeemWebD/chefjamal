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
    <link rel="stylesheet" href="css/selectric.css"/>
    <!--font awesome stylesheet-->
    <link rel="stylesheet" href="css/font-awesome.min.css"/>
    <!--swipe box stylesheet-->
    <link rel="stylesheet" href="css/swipebox.css"/>
    <!-- mean menu stylesheet-->
    <link rel="stylesheet" href="css/meanmenu.css"/>
    <!--slick slider stylesheet-->
    <link rel="stylesheet" href="css/slick.css"/>
    <link rel="stylesheet" href="css/slick-theme.css"/>
    <!--bootstrap stylesheets-->
    <link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrap-theme.css"/>
    <!--animate stylesheet-->
    <link rel="stylesheet" href="css/animate.css"/>
    <!--main stylesheet-->
    <link rel="stylesheet" href="css/main.css"/>
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

<body >
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
                                    <a class="login" href="login.php">Login</a>
                                    <!-- <a class="register" href="#">Register</a> -->
                                </span>
                            </div>
                            <div class="wrapper-main-nav ">
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section class="container d-flex align-items-center">
        <div class=" mask d-flex align-items-center h-100 gradient-custom-3 col-md-6 mx-auto">
            <div class="container h-100 ">
                <div class="row d-flex justify-content-center align-items-center h-80">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Register Yourself</h2>
                                <p class='fw-bolder text-center' id="userExist" style='color:red; display:none'>Username already exist</p>

                                <form action="register.php" method="post">
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="firstName">First Name</label>
                                        <input type="text" id="firstName" name="firstname" class="form-control form-control-lg" required />
                                    </div>
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="lastName">Last Name</label>
                                        <input type="text" id="lastName" name="lastname" class="form-control form-control-lg" required />
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="username">Username</label>
                                        <input type="text" id="username" name="username" class="form-control form-control-lg" required />
                                    </div>


                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" id="email" name="email" class="form-control form-control-lg" required />
                                    </div>




                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="password">Password</label>
                                        <input type="password" id="password" name="password" class="form-control form-control-lg" onkeyup="checkPass()" required minlength="4" />
                                        <div>
                                            <input type="checkbox" id="check" onclick="showPass()" />
                                            <label class="form-label" for="check">Show Password</label>
                                        </div>
                                    </div>



                                    <div class="form-outline mb-4">
                                        <input type="password" id="confirmPass" name="confirmPassword" class="form-control form-control-lg" onkeyup="checkPass()" />
                                        <label class="form-label" for="confirmPass">Confirm Password</label>

                                    </div>

                                    <!-- <div class="form-check d-flex justify-content-center mb-5">
                                        <input class="form-check-input me-2" type="checkbox" value=""
                                            id="form2Example3cg" />
                                        <label class="form-check-label" for="form2Example3g">
                                            I agree all statements in <a href="#!" class="text-body"><u>Terms of
                                                    service</u></a>
                                        </label>
                                    </div> -->

                                    <div class="d-flex justify-content-center">
                                        <button type="submit" name="submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                    </div>


                                </form>
                                <!-- PHP For Registration -->
                                <?php
                                include "config.php";
                                // Check if form is submitted
                                if (isset($_POST['submit'])) {
                                    // Get form data
                                    $firstName = $_POST['firstname'];
                                    $lastName = $_POST['lastname'];
                                    $username = $_POST['username'];
                                    $email = $_POST['email'];
                                    $password = $_POST['password'];
                                    $confirm_password = $_POST['confirmPassword'];

                                    $check_query = "SELECT * FROM users WHERE userName='$username'";
                                    $check_result = mysqli_query($conn, $check_query);
                                    if (mysqli_num_rows($check_result) > 0) {
                                        // echo "<script>alert('Username already exists');</script>";
                                        // echo "<p class='fw-bolder text-center' style='color:red;'>Username already exist</p>";
                                        echo "<script>document.getElementById('userExist').style.display='block'</script>";
                                    } else {
                                        if ($password == $confirm_password) {
                                            $encryptPass = sha1($password);
                                            $query = "INSERT INTO `users` (`userName`, `firstName`, `lastName`, `email`, `password`) VALUES 
                                            ( '$username', '$firstName', '$lastName', '$email', '$encryptPass')";
                                            $result = mysqli_query($conn, $query);
                                            if ($result) {
                                                echo "<script>alert('Registration Successful');</script>";
                                                echo "<script>window.location.href = 'login.php';</script>";
                                            }
                                        } else {
                                            echo "<script>alert('Password and Confirm Password should match');</script>";
                                        }
                                    }
                                }
                                ?>

                                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>



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
        let checkPass = () => {
            let pass = document.getElementById("password");
            let confirmPass = document.getElementById("confirmPass");
            if (pass.value !== "" && confirmPass.value !== "") {
                if (pass.value == confirmPass.value) {


                    pass.classList.remove("error")
                    confirmPass.classList.remove("error")

                    pass.classList.add("success")
                    confirmPass.classList.add("success")




                } else {


                    pass.classList.remove("success")
                    confirmPass.classList.remove("success")
                    pass.classList.add("error")
                    confirmPass.classList.add("error")


                }
            }

        }
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>
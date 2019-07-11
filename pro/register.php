<!DOCTYPE html>
<?php
require "server/functions.php";
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tech Box</title>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bangers|Old+Standard+TT">
    <script>
        function checkEmail(str) {
            if (str.length == 0) {
                document.getElementById("hint").innerHTML = "";
                return;
            } else {
                var xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("hint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET", "check_email.php?e=" + str, true);
                xmlhttp.send();
                //document.getElementById('hint').innerHTML = 'loading...';
            }
        }
    </script>
</head>
<body>

<header class="container-fluid">
    <div class="row">
        <div class="col-12 no-padding">
            <nav class="navbar navbar-light bg-light navbar-expand-sm fixed-top">
                <a class="navbar-brand" href="index.php"><img src="media/logo.png" width="175" height="50" alt="logo">
                </a>
                <button class="navbar-toggler" type="button"
                        data-toggle="collapse"
                        data-target="#navbarToggler" aria-controls="navbarToggler" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse row" id="navbarToggler">
                    <div class="col-lg-8 offset-lg-1 col-md-8 col-sm-7">
                        <form class="form-inline">
                            <div class="input-group">
                                <input type="search" class="form-control"
                                       id="search-bar" name="search"
                                       placeholder="Find Mobile Phones, Laptops, and more..">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary btn-lg" type="submit"><i class="fas fa-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-5">
                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0 float-sm-right">
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html"><i class="fas fa-heart sc-color fa-2x"></i></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html"><i class="fas fa-shopping-cart sc-color fa-2x"></i></a>
                            </li>
                            <li class="nav-item active">
                                <a class="nav-link" href="index.html"> <span class="sc-fs">Login </span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </div>

</header>
<div class="wrapper">
    <!-- Sidebar  -->
    <nav id="sidebar" class="bg-light">
        <ul class="list-unstyled components">
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle nav-link">
                    <i class="fas fa-sitemap"></i>
                    Categories
                </a>
                <ul class="collapse show list-unstyled" id="homeSubmenu">
                    <?php getCats(); ?>
                </ul>
            </li>
            <li class="active">
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="true" class="dropdown-toggle nav-link">
                    <i class="fas fa-briefcase"></i>
                    Brands
                </a>
                <ul class="collapse show list-unstyled" id="pageSubmenu">
                    <?php getBrands(); ?>
                </ul>
            </li>
            <li>
                <a class="nav-link"  href="#">
                    <i class="fas fa-question"></i>
                    FAQ
                </a>
            </li>
            <li>
                <a class="nav-link"  href="#">
                    <i class="fas fa-paper-plane"></i>
                    Contact
                </a>
            </li>
        </ul>
    </nav>
    <article id="content" class="container-fluid bg-white">
        <h1 class="text-center my-4"><i class="fas fa-plus fa-md"></i> Create Account </h1>
        <form action="register.php" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                    <label for="c_name" class="float-md-right">  Name:</label>
                </div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-user"></i></div>
                        </div>
                        <input type="text" class="form-control" id="c_name" name="c_name" placeholder="Enter your name"
                               required pattern="abc">
                    </div>
                </div>
                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                    <label for="c_email" class="float-md-right"> Email:</label>
                </div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-at"></i></div>
                        </div>
                        <input type="text" class="form-control" id="c_email" name="c_email" placeholder="Enter your email"
                               onkeyup="checkEmail(this.value)">
                        <span class="text-danger" id="hint"></span>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                    <label for="c_password" class="float-md-right">  Password:</label>
                </div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-key"></i></div>
                        </div>
                        <input type="password" class="form-control" id="c_password" name="c_password" placeholder="Enter your password" >
                    </div>
                </div>
                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                    <label for="c_img" class="float-md-right"> Picture:</label>
                </div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-image"></i></div>
                        </div>
                        <input class="form-control" type="file" id="c_image" name="c_image">
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                    <label for="c_country" class="float-md-right"> Country :</label>
                </div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-globe"></i></div>
                        </div>
                        <input class="form-control" id="c_country" name="c_country" placeholder="Enter your country">
                    </div>
                </div>
                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                    <label for="c_contact" class="float-md-right"> Contact:</label>
                </div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4 mt-3 mt-lg-0">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="fas fa-mobile"></i></div>
                        </div>
                        <input class="form-control" type="text" id="c_contact" name="c_contact" placeholder="Enter your contact number">
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto">
                    <label for="c_address" class="float-md-right"> Address:</label>
                </div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text"><i class="far fa-comment-alt"></i></div>
                        </div>
                        <textarea class="form-control" type="file" id="c_address" name="c_address" placeholder="Enter your address"></textarea>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="d-none d-sm-block col-sm-3 col-md-4 col-lg-2 col-xl-2 mt-auto"></div>
                <div class="col-sm-9 col-md-8 col-lg-4 col-xl-4">
                    <button type="submit" name="create_account" class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Create Account </button>
                </div>
            </div>
        </form>
    </article>


</div>
<footer class="container-fluid">
    <div class="row">
        <div class="col text-center">
            &copy; 2019 by Muhammad Ali Makhdoom
        </div>
    </div>
</footer>
<script src="js/jquery-3.3.1.js"></script>
<script src="js/bootstrap.bundle.js"></script>
</body>
</html>
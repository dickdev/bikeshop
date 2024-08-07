<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bikeshop</title>
    <link rel="website icon" type="jpg" href="img/shoplogo.jpg">
    <link rel="stylesheet" href="css/home.css?v=<?php echo time(); ?>" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>
    <!-- //http://localhost/project/index.php -->
    <!-- NAVIGATION -->


    <nav class="navbar">
        <div class="banner-logo-title">
            <a href="index.php?page=home"> <img src="img/shoplogo.jpg" /></a>
            <h1 style="font-family:Lucida Handwriting">Bikeshop</h1>
        </div>
        <div class="menu">
            <ul>
                <li><a href="index.php?page=home">Home</a></li>
                <li><a href="index.php?page=about">About</a></li>
                <li><a href="index.php?page=product">Product</a></li>
                <li><a href="index.php?page=prof">Profile</a></li>
                <li><a href="index.php?page=order">Cart</a></li>
                <li><a onclick="Logout()">Logout</a></li>


            </ul>
        </div>
    </nav>
    <!-- SIDEBAR  -->
    <!-- <div class="sidebar">
        <ul>
            <li><a href="">Customer</a></li>
            <li><a href="#product">Product</a></li>
            <li><a href="">Supplier</a></li><br>
            <li><a href="logout.php">Logout</a></li>
            includes/logout.inc.php
        </ul>
    
    </div> -->

    <script>
        function Logout() {

            Swal.fire({
                title: "Are you sure you want to logout?",
                //   text: "You won't be able to revert this!",
                icon: "question",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonColor: "#bcbcbc",
                confirmButtonText: "Okay"
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location.href = "logout.php";

                }
            });
        }
    </script>
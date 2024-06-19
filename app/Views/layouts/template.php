<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/reset.css">
    <!-- icon -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <!-- jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar">
        <div class="transparent-nav">
            <div class="container nav_container">
                <div class="nav_img_left">
                    <img src="/img/logo.png" alt="" style="width: 90px;">
                </div>
                <div class="navbar-header">
                    <span class="material-symbols-outlined" id="toggle_btn_nav">menu</span>
                </div>
                <div class="nav_img_right">
                    <img src="/img/logo.png" alt="" style="width: 90px;">
                </div>
                <div class="navbar_login">
                    <div class="navbar_link">
                        <ul>
                            <li><a href="/">Beranda</a></li>
                            <li><a href="/produk">Produk</a></li>
                            <li><a href="/tentang">Tentang</a></li>
                            <li><a href="toko">Toko</a></li>
                        </ul>
                    </div>
                    <div class="navbar_link_icon">
                        <ul>
                            <li><span class="material-symbols-outlined">account_circle</span></li>
                            <li class="vl"><a href="/loginUser"> Login</a></li>
                            <li><span class="material-symbols-outlined">login</span></li>
                            <li><a href="signUpUser">Sign Up</a></li>
                            <li><span class="material-symbols-outlined">local_mall</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <div class="container dropdown_nav" id="myNavbar">
        <div class="navbar_link_dropdown">
            <ul>
                <li><a href="#">Beranda</a></li>
                <li><a href="#">Produk</a></li>
                <li><a href="#">Tentang</a></li>
                <li><a href="#">Toko</a></li>
            </ul>
        </div>
        <div class="navbar_login_dropdown">
            <ul class="nav navbar-nav-dropdown">
                <div class="nav_dropdown_wrap">
                    <li><span class="material-symbols-outlined geser">account_circle</span></li>
                    <li><a href="#"> Sign Up</a></li>
                </div>
                <div class="nav_dropdown_wrap">
                    <li><span class="material-symbols-outlined">logout</span></li>
                    <li><a href="#">Login</a></li>
                </div>
            </ul>
        </div>
    </div>

    <div class="sidebar">

    </div>
    <script>
        $(document).ready(function() {
            $("#toggle_btn_nav").click(function() {
                $(".dropdown_nav").toggleClass("dropdown_nav_active");
            });
        });
    </script>
    <!-- end of navbar -->







    
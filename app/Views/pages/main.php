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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar">
        <div class="container nav_container">
            <div class="navbar-header">
                <span class="material-symbols-outlined">menu</span>
            </div>
            <img src="/img/logo.png" alt="" style="width: 90px;">
            <div class="navbar_login">
                <ul class="nav navbar-nav">
                    <li><span class="material-symbols-outlined">account_circle</span></li>
                    <li class="vl"><a href="#"> Sign Up</a></li>
                    <li><span class="material-symbols-outlined">logout</span></li>
                    <li><a href="#">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container dropdown_nav" id="myNavbar">
        <div class="navbar_link">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">Page1</a></li>
                <li><a href="#">Page2</a></li>
                <li><a href="#">Page3</a></li>
            </ul>
        </div>
        <div class="navbar_login_dropdown">
            <ul class="nav navbar-nav">
                <div class="dropdown_wrap">
                    <li><span class="material-symbols-outlined geser">account_circle</span></li>
                    <li><a href="#"> Sign Up</a></li>
                </div>
                <div class="dropdown_wrap">
                    <li><span class="material-symbols-outlined">logout</span></li>
                    <li><a href="#">Login</a></li>
                </div>
            </ul>
        </div>
    </div>

    <script></script>
    <!-- end of navbar -->

    <!-- footer -->
    <footer class="footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>Griya Bakpia</h3>
                    <p>Griya Bakpia - Nomor Telepon</p>
                </div>
                <div class="footer-section">
                    <h3>Link Cepat</h3>
                    <ul>
                        <li><a href="#">Tentang Kami</a></li>
                        <li><a href="#">Kebijakan Privasi</a></li>
                        <li><a href="#">Syarat & Ketentuan</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>Ikuti Kami</h3>
                    <a href="#">Facebook</a> |
                    <a href="#">Twitter</a> |
                    <a href="#">Instagram</a>
                </div>
            </div>
            <div class="footer-bottom">
                &copy; 2024 Griya Bakpia | Designed by team
            </div>
        </div>
    </footer>
    <!-- end of footer -->


</body>

</html>
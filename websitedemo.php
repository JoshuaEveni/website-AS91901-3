<!DOCTYPE html>
<link rel="stylesheet" href="websitedemo.css">
<head>
<script src="//code.tidio.co/bzrkqxdfwodbh1ves1vubmdpnt0yhasv.js" async></script>
<body>

<!-- MAIN CODE -->
<div class="topinfo">
    <p>Free Shipping NZ Wide</p>
</div>
<div class="main">
    <!-- NAVIGATION -->
    <nav>

        <!-- Logo -->
        <div class="logo"> 
            <h1>HydroSift</h1>
        </div>

        <!-- Popout menu -->
        <div id="mySidenav" class="sidenav" tabindex="0">
            <p href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</p>
            <a href="websidedemo_aboutpage.php" target="_blank"> About Us </a>
            <a href="products.php" target="_blank"> Products </a>
            <a href="https://share-eu1.hsforms.com/1W52GxXnHQdWOYMkNNQNBwgfmxxb" target="_blank"> Contact Us </a>
            <a href="https://share-eu1.hsforms.com/1QnbNS743TZCbBti-UY2CoAfmxxb" target="_blank"> Feedback </a>
        </div>

        <span class="menubtn" onclick="openNav()">&#9776;</span>
    </nav>

<br>
    <div class="row">

        <!-- Slogan / Introduction -->
        <div class="col-1">
            <h1>World Leading Water Filtration</h1>
            <p>Buy From Us And Support The Movement.</p>
            <a class="buynow" href="products.php" target="_blank">Buy Now</a>

            <ul>
                <li class="btn active"></li>
                <li class="btn"></li>
                <li class="btn"></li>
            </ul>
        </div>
       
        <!-- Images -->
        <div class="col-2">
            <img src="images/bottle1.png" id="banner">
        </div>
    </div>
<br>
<div class="row2">
    <!-- Information -->
    <div class="col-3">
        <h2>When you buy from us, 50% of the proceeds go towards providing clean water to those in need.</h2>
    </div>

    <div class="col-4">
        <img src="images/cleaner-water.jpg" id="waterimage">
    </div>
</div>

<!-- JAVASCRIPT -->
<script>

    // Image Slideshow //
    var btn = document.getElementsByClassName("btn");
    var banner = document.getElementById("banner");

    btn[0].onclick = function() {
        banner.src = "images/bottle1.png";
        animation();
        this.classList.add("active");
    }

    btn[1].onclick = function() {
        banner.src = "images/bottle3.png";
        animation();
        this.classList.add("active");
    }

    btn[2].onclick = function() {
        banner.src = "images/bottlelots.png";
        animation();
        this.classList.add("active");
    }

    function animation() {
        banner.classList.add("zoom");
        setTimeout(function() {
            banner.classList.remove("zoom");
        }, 500);

        for(b of btn){
            b.classList.remove("active");
        }
    }
    
    // Navigation //
    function openNav() {
      document.getElementById("mySidenav").style.width = "1000px";
      document.getElementById("mySidenav").style.height = "155px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }

</script>
<br>
<!-- FOOTER -->
<footer>
    <a>©2022 HydroSift</a>
</footer>
</body>
</head>
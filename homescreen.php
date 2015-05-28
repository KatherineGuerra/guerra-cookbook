<?php ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="css/CSS.css">
    <title></title>
</head>
<body id="homescreen">
    <!--    I made my own logo on this page-->
    <img src="unnamed.png" alt="" class="logo"/>
    <nav>
        <a id="current-link" href="homescreen.php">Home •</a>
        <a href="dessert.php">My Recipes •</a>
        <a href="flavors.php">Flavors •</a>
        <a href="login.php">Logout</a>
    </nav>
    <br> <p id="suggestion">Suggestions</p>
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <!--            Each of theses images are recipes but you are not able to click them  -->
            <div class="item active">
                <img src="19a2ba8c-0821-4444-ae1e-373329298faa.jpg" alt="" class="lava">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="coconutcupcake.jpg" alt="" class="lava">
                <div class="carousel-caption">

                </div>
            </div>
            <div class="item">
                <img src="sugarcookie.jpg" alt="" class="lava">
                <div class="carousel-caption">

                </div>
            </div>
            ...
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span  aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span  aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>       
</body>
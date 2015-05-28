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
    <!--    In the dessert page i will add three recipes 
            in the three categories -->
    <img src="unnamed.png" alt="" class="logo"/>
    <nav>
        <!--all of theses navs will be shown on every page-->
        <a href="homescreen.php">Home •</a>
        <a href="dessert.php">My Recipes •</a>
        <a href="flavors.php">Flavors •</a>
        <a href="login.php">Logout</a>
    </nav>
    <!--    i added a article tag to take all the code and move it together-->
    <article>
        <br> <p id="desserts">Cakes</p>
        <img src="19a2ba8c-0821-4444-ae1e-373329298faa.jpg" alt="" class="image_rounded"/>
        <a href="lavacake.php">molten lava cake</a>
        <img src="vanillacake.jpg" alt="" class="image_rounded"/>
        <a href="vanillacake.php">Vanilla cake</a>
        <img src="lemoncake.jpg" alt="" class="image_rounded"/>
        <a href="lemoncake.php">Lemon cake</a>
        <!--When see more is pressed you would able to see more recipes on that category-->      
        <a href="cakes.php">See more</a>

        <br> <p id="desserts">Cookies</p>
        <img src="chocolatechipcookie.jpg" alt="" class="image_rounded"/>
        <a href="chocolatechip.php">Chocolate chip</a>
        <img src="redcookie.jpg" alt="" class="image_rounded"/>
        <a href="redvelvetcookies.php">Red velvet</a>
        <img src="sugarcookie.jpg" alt="" class="image_rounded"/>
        <a href="sugarcookies.php">Sugar cookies</a>
        <a href="cookies.php">See more</a>

        <br> <p id="desserts">Cupcakes</p>
        <img src="vanillacupcake.jpg" alt="" class="image_rounded"/>  
        <a href="vanillacupcake.php">Vanilla cupcake</a>

        <img src="chocolatecupcake.jpg" alt="" class="image_rounded"/> 
        <a href="chocolatecupcake.php">Chocolate cupcake</a>

        <img src="redvelvetcupcake.jpg" alt="" class="image_rounded"/>
        <a href="redvelvetcupcake.php">Velvet cupcake</a>
        <a href="cupcakes.php">See more</a>
    </article>
</body>
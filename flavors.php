<?php ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="css/CSS.css">
    <title></title>
</head>
<!--I did not have enough time to fix the position of this code on the website-->
<body id="homescreen">
<!--    made my own logo-->
    <img src="unnamed.png" alt="" class="logo"/>
    <!--    theses navs will appear on every page-->
    <nav>  
        <a href="homescreen.php">Home •</a>
        <a href="dessert.php">My Recipes •</a>
        <a  href="flavors.php">Flavors •</a>
        <a href="login.php">Logout</a>
    </nav>  
    <!--    I tried to add a article to move the text on the page but its difficult 
        because the paragraph tag would move around-->
    <article>
        <br> <p id="flavors">Cake Flavors</p>
        <br> <ul style="list-style-type:circle" id='cakeflavor'>
            <li>Vanilla</li>
            <li>Lava Cake</li>
            <li>Lemon Cake</li>
        </ul>
        <p id='cookieflavors'>Cookie Flavors</p>
        <ul style="list-style-type:circle" id='cookieflavor'>
            <li>Chocolate chip</li>
            <li>Red Velvet</li>
            <li>Sugar Cookies</li>
        </ul>
        <p id='cupcakeflavors'>Cupcake Flavors</p>
        <ul style="list-style-type:circle" id='cupcakeflavor'>
            <li>Chocolate</li>
            <li>Coconut</li>
            <li>Red Velvet</li>
            <li>Vanilla</li>
        </ul>
    </article>
</body>


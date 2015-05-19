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
    <header>
    <nav>
    <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
            Dropdown
            <span class="caret"></span>
        </button>
        <!--this dropdown menu will link to other pages-->
        <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
<!--    <li role="presentation"><a role="menuitem" tabindex="-1" href="index.html">About</a></li>-->
            <li role="presentation"><a role="menuitem" tabindex="-1" id="current-link-active" href="homescreen.php">Home</a></li>
            <li role="presentation"><a role="menuitem" tabindex="-1" href="logout-user.php">Logout</a></li>


        </ul>
    </div>
    </nav>
    </header>
    <div>
        <h1><a href="dessert.php">Suggestions</a></h1>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">
                <div class="item active">
                    <img src="..." alt="...">
                    <div class="carousel-caption">
                        <h2>hi</h2>
                    </div>
                </div>
                <div class="item">
                    <img src="..." alt="...">
                    <div class="carousel-caption">
                        ...
                    </div>
                </div>
                ...
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
                
</body>
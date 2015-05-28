<?php
require_once(__DIR__ . "/../model/config.php");
?> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
    <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="css/CSS.css">
    <title></title>
</head>
<!--this id tag on the body will give it a background image -->
<body id='unnamed'>
    <!--    this return tag will be able to return to the index page-->
    <a class="btn btn-large" href="index.php"><i class="icon-star"></i> return</a>
    <h1>Register</h1>

    <form method='post' action='<?php echo $path . "homescreen.php"; ?>'>
        <div>
            <label for='email'>Email: </label>
            <input type='text' name='email'/>
        </div>

        <div>
            <label for='username'>Username: </label>
            <input type='text' name='username'/>
        </div>

        <div>
            <label for='password'>Password: </label>
            <input type='password' name='password'/>
        </div>

        <div>
            <button type='submit'>Submit</button>
        </div>
    </form>         
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script> 
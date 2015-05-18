<?php
    require_once(__DIR__ . "/../model/config.php");
?>
<button type="button" class="btn btn-default btn-lg">
  <span class="glyphicon glyphicon-circle-arrow-left" aria-hidden="true"></span> Star
</button>

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
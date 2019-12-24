<section class="container">
<form name="loginForm" method="post" action="phpscripts/Authenticate.php">
<div class="form">
    <div>
        <h3>Login</h3>
    </div>
    <div>
        <label for="username">Username : </label>
        <input type="text" id="username" name="username" placeholder="Enter username">
    </div>

    <div>
        <label for="username">Password : </label>
        <input type="password" name="password" placeholder="Enter Password">
    </div>

    <div>
        <input type="submit" value="submit">
        <a href="view/register.php" > register here </a>        
    </div>
</div>
</form>
</section>
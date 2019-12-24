<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Employee Register Page</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='../css/main.css'>
    <script src='../scripts/main.js'></script>
</head>
<body>

<section class="container">

<div class="registrationForm">
    <form name="regiterForm" method="post" action="../phpscripts/register.php" >
    <div>
        <h3>Register</h3>
    </div>
    <div>
        <label for="firstName">First Name : </label>
        <input type="text" id="firstName" name="firstName" placeholder="Enter first name">
    </div>

    <div>
        <label for="lastName">Last Name : </label>
        <input type="text" id="lastName" name="lastName" placeholder="Enter last name">
    </div>

    <div>
        <label for="DOB">Date of Birth : </label>
        <input type="date" id="DOB" name="DOB" placeholder="Enter DOB">
    </div>

    <div>
        <label for="email">Email : </label>
        <input type="email" id="email" name="email" placeholder="Enter Email">
    </div>

    <div>
        <label for="contact">Contact No : </label>
        <input type="text" id="contact" name="contact" placeholder="Enter Contact Number">
    </div>

    <div>
        <label for="gender">Gender: </label>
        <input id="gender" type="radio" name="gender" value="Male" checked> Male
        <input id="gender" type="radio" name="gender" value="Female"> Female
    </div>

    <div>
        <label for="password">Password: </label>
        <input type="password" name="password" id="password">
    </div>

    <div>
        <label for="confirmPass">Comfirm Password : </label>
        <input type="password" name="cPassword" id="confirmPass">
    </div>

    <div>
        <label for="company">Company Name : </label>
        <input type="text" name="company" id="company" placeholder="Enter Company Name">
    </div>

    <div>
        <input type="submit" value="submit">
        <a href="../index.php" > Login Here </a>        
    </div>
</div>
</form>

</section>


</body>
</html>
<?php

session_start();

?>

<!DOCTYPE html>
<html>
<body>

<?php

$_SESSION["userData"] = "Kaustubh Joshi";
$_SESSION["PRN"] = "190840120093";

echo "Session created successfully.<br>";

//uncomment this code to unset the session (destroy session)
// session_unset();
// session_destroy();

?>

</body>
</html>

<html>
<body>

<h1>Session Data</h1>
<?php
    echo "Session Data is: ";
    print_r($_SESSION);
?>

<br>
<hr>
<button onclick="reloadPage()" >refresh me</button>

<script>
function reloadPage()
{
    location.reload();
}
</script>
</body>
</html>
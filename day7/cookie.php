<?php
$cookie_name = "userData";
$cookie_value = "Kaustubh Joshi";

setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

?>
<html>
<body>

<h1>Cookie Data</h1>
<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: ".$_COOKIE[$cookie_name];
}
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
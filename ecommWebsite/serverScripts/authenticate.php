<?php
include "DBConnector.php";

//print_r($_REQUEST);


$sql = "select * from user where email='".$_REQUEST['email']."' AND password='".md5($_REQUEST['password'])."';";

    echo $sql;

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $data = $result->fetch_assoc();
    if($_SESSION) {
        session_unset();
        session_abort();
        session_destroy();
    }
    session_start();
    $_SESSION["firstName"] = $data['firstName'];
    $_SESSION["lastName"] = $data['lastName'];
    $_SESSION["email"] = $data['email'];
    $_SESSION["contact"] = $data['contact'];

    setcookie('userData', json_encode($_SESSION), time() + (86400 * 30), "/");

//    print_r($_SESSION);

    header("Location: http://localhost/ecommWebsite/");
}
else
{
//    session_unset();
//    session_destroy();

    echo "<br>Invalid username/password</h3><br/>";
    echo "<a href='http://localhost/ecommWebsite/views/loginView.php'>retry</a>";

}
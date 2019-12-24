<?php

include "DBConnector.php";

$auth = "SELECT * FROM employee where username='".$_POST['username']."' and password='".md5($_POST['password'])."';";


$res=$conn->query($auth);

if ($res -> num_rows > 0) {
    while($row = $res->fetch_assoc()) {
        header("Location: ../view/result.php");
    }
} else {
    echo "<h1>Login Failed.Please Retry</h1>";
}
$conn->close();
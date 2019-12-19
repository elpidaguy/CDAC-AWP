<?php

//    session_start();

    session_unset();
    session_abort();
    session_destroy();

    unset($_COOKIE['userData']);
    setcookie("userData", json_encode("{}"),time() - 3600,"/");

    header("Location: http://localhost/ecommWebsite/views/loginView.php");
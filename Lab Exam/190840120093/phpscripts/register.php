<?php

include "DBConnector.php";

$sql = "INSERT INTO employee (id,EmpFirstName, EmpLastName, username, DOB, Email, PhoneNo, Gender, Password, CompanyName) VALUES(default,'".$_POST['firstName']."', '".$_POST['lastName']."', '".$_POST['email']."'  ,'".$_POST['DOB']."','".$_POST['email']."', '".$_POST['contact']."', '".$_POST['gender']."','".md5($_POST['password'])."','".$_POST['company']."')";

if($_POST['password'] == $_POST['cPassword'])
{

if ($conn->query($sql) === TRUE) {
    echo "Record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    echo "Something went wrong!";
}

}
else {

    echo "Password must match";

}
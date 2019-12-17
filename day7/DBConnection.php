<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname="kaustubh";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<hr>";


//uncomment to insert new record
// $sql = "INSERT INTO session6 (name, contact)
// VALUES ('Jason', '1234567898')";

// if ($conn->query($sql) === TRUE) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . $conn->error;
// }

//uncomment to update current records
// $sql = "UPDATE session6 SET contact='9876543210', name='kaustubh' WHERE id=3";

// if ($conn->query($sql) === TRUE) {
//     echo "Record updated successfully<br>";
// } else {
//     echo "Error updating record: " . $conn->error. "<br>";
//}


$sql = "SELECT * FROM session6";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "Id: " . $row["id"]. " - Name: " . $row["name"]. " - Contact: " . $row["contact"]. "<br>";
    }
} else {
    echo "0 results";
}

//uncoment to delete data from record
// $sql = "DELETE FROM session6 WHERE id=1";

// if ($conn->query($sql) === TRUE) {
//     echo "Record deleted successfully<br>";
// } else {
//     echo "Error deleting record: " . $conn->error."<br>";
// }


$conn->close();


?>
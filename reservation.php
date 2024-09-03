<?php
// Connect to the MySQL database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sample";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$name = $_POST['name'];
$date = $_POST["date"];
$time = $_POST["time"];
$guests = $_POST["guests"];
$hotel = $_POST["hotel"];
$mno = $_POST["mno"];
$email = $_POST["email"];


// Insert the data into the database
$sql = "INSERT INTO reservation (name,date,time,guests,hotel,mno,email) VALUES ('$name', '$date', '$time','$guests','$hotel','$mno','$email')";

if (mysqli_query($conn, $sql)) {
    //echo "Reservation done successfully ";
    header("Location: reservationsuccess.html");
} else {
    echo "Error inserting registration record: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>

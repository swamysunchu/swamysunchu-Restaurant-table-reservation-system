<?php
// Connect to the MNySQL database
$servername = "localhost";
$username = "root";
$password = "";
$database = "sample";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the form data
$name = $_POST['username'];
$pwd = $_POST['pwd'];
$mno = $_POST['mno'];
$email = $_POST['email'];

// Insert the data into the database
$sql = "INSERT INTO registration (name,password,mno,email) VALUES ('$name', '$pwd','$mno','$email')";

if (mysqli_query($conn, $sql)) {
   //echo "Registered successfully";
   header("Location: registersuccess.html");
}
   else {
    echo "Error inserting registration record: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>

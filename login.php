<?php
// Assuming you have already installed the intl extension

$servername = "localhost";
$username = "root";
$password = "";
$database = "sample";

$conn = mysqli_connect($servername, $username, $password, $database);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve user credentials from a form or any other source
$username = $_POST['username'];
$password = $_POST['password'];

// Prepare and execute a query to fetch user data
$query = "SELECT password FROM registration WHERE name = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

if ($result) {
    $userData = $result->fetch_assoc();
    
    if ($userData) {
       
        // Compare the entered password with the stored password
        $storedPassword = $userData['password'];

        if ($password === $storedPassword) {
            // Valid login information
            
            // Start the session
            session_start();
            
            // Store the username in a session variable
            $_SESSION['username'] = $username;
    
            header("Location: home1.php");
            exit;
        } else {
            // Invalid password
            echo "Invalid password!";
        }
    } else {
        // Username does not exist in the database
        echo "Username not found!";
    }
} else {
    // Query execution failed
    echo "Error executing the query: " . $conn->error;
}

// Close the database connection
$conn->close();
?>

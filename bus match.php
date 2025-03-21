<?php
session_start();

// Database connection details
$servername = "localhost";  // Database server (usually localhost)
$username = "root";         // Your MySQL username
$password = "";             // Your MySQL password
$dbname = "sri";       // The database you created

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $studentName = $_POST['Student Name'];
    $studentRegNo = $_POST['Stdent Reg No'];
    $email = $_POST['Email ID'];
    $totalBusFees = $_POST['Total bus Fees'];

    // Prepare the SQL query to insert data into the database
    $sql = "INSERT INTO payments (studentName, studentRegNo, email, totalBusFees)
            VALUES ('$studentName', '$studentRegNo', '$email', '$totalBusFees')";

    // Check if the query executed successfully
    if ($conn->query($sql) === TRUE) {
        echo "<div class='message success'>Payment details saved successfully!</div>";
    } else {
        echo "<div class='message error'>Error: " . $sql . "<br>" . $conn->error . "</div>";
    }

    // Close connection
    $conn->close();
}
?>


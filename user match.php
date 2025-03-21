

<?php
// Database connection
$servername = "localhost";
$username = "root"; // your DB username
$password = ""; // your DB password
$dbname = "ajithkumar";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
if($_SERVER["REQUEST_METHOD"]=="POST"){
//$user_input_id= $_POST["id"];
$input_username = $_POST['username'];
$input_password = $_POST['password'];
//$hashed_password = password_hash($input_password,'345');
// Prepare the SQL statement to prevent SQL injection
$sql = "SELECT username,password FROM access WHERE username=?";
//$sql1= "SELECT username,password FROM logindata1 WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s" ,$input_username);
//$stmt->bind_param("s" ,$input_password);
$stmt->execute();
//$stmt->bind_result($hashed_password);
//$stmt->fetch();
$result = $stmt->get_result();

// Check if username exists
if ($result->num_rows > 0) {
   $user = $result->fetch_assoc();
    //$password = 'user_password';  // The password the user enters
//$hashed_password = password_hash($password, PASSWORD_DEFAULT);

// Insert into the database (example)
//$sql = "INSERT INTO logindata (username, password) VALUES ('$username)";
    // Check if the hashed password matches
    //if (password_verify($input_password,$user["password"])) {
        //echo "Login successful!";
       // session_start();
      // $_SESSION["user_id"] = $user["id"];
       //$_SESSION["username"] = $user["username"];
    ///}// else {
           //echo "Invalid password!";
   // }
} else {
    echo "Username not found!";
}

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);

}
if($_SERVER["REQUEST_METHOD"]=="POST"){
//$user_input_id= $_POST["id"];
//$input_username = $_POST['username'];
$input_password = $_POST['password'];
//$hashed_password = password_hash($input_password,'345');
// Prepare the SQL statement to prevent SQL injection
$sql = "SELECT username,password FROM access WHERE password=?";
//$sql1= "SELECT username,password FROM logindata1 WHERE username=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s" ,$input_password);
//$stmt->bind_param("s" ,$input_password);
$stmt->execute();
//$stmt->bind_result($hashed_password);
//$stmt->fetch();
$result = $stmt->get_result();

// Check if username exists
if ($result->num_rows > 0) {
   $user = $result->fetch_assoc();
   header("location:regno.php");
   
   exit();
   
} else {
    echo "                  password not found!";
}
}
}
$stmt->close();
$conn->close();

// Collect and sanitize input data

?>

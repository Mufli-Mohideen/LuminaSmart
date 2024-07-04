<?php
// MySQL database connection parameters
$servername = "localhost"; // Change if your database is hosted elsewhere
$username = "root";
$password = "";
$database = "led_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if form data is received
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Update bulb states in the database
    $bulb1State = isset($_POST['1']) ? $_POST['1'] : 0;
    $bulb2State = isset($_POST['2']) ? $_POST['2'] : 0;

    // Update bulb states in the database
    $sql = "UPDATE led_control SET Stat = CASE Id
            WHEN 1 THEN $bulb1State
            WHEN 2 THEN $bulb2State
            ELSE Stat
            END";
            
    if ($conn->query($sql) === TRUE) {
        $response = array("success" => true, "message" => "Bulb states updated successfully");
    } else {
        $response = array("success" => false, "message" => "Error updating bulb states: " . $conn->error);
    }

    // Send JSON response
    header('Content-Type: application/json');
    echo json_encode($response);
    exit; // Terminate PHP script after sending JSON response
}

// Close connection
$conn->close();
?>

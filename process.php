<?php
// Hardcoded user details in an array
$userDetails = array(
    array("username" => "user1", "firstName" => "John", "lastName" => "Doe", "address" => "123 Main St", "phoneNumber" => "123-456-7890"),
    array("username" => "user2", "firstName" => "Jane", "lastName" => "Smith", "address" => "456 Elm St", "phoneNumber" => "987-654-3210"),
    // ... (other user details)
);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];

    // Check if the username exists in the hardcoded user details
    foreach ($userDetails as $user) {
        if ($user["username"] === $username) {
            // Start a session and set the matched user details as a session variable
            session_start();
            $_SESSION['matchedUser'] = $user;
            break;
        }
    }
}

header("Location: display.php"); // Redirect to the display page
?>

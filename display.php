<?php
session_start();

if (isset($_SESSION['matchedUser'])) {
    $user = $_SESSION['matchedUser'];
    echo "<table border='1'>";
    echo "<tr><th>Username</th><th>First Name</th><th>Last Name</th><th>Address</th><th>Phone Number</th></tr>";
    echo "<tr><td>{$user['username']}</td><td>{$user['firstName']}</td><td>{$user['lastName']}</td><td>{$user['address']}</td><td>{$user['phoneNumber']}</td></tr>";
    echo "</table>";
} else {
    echo "No matching user found!";
}
?>

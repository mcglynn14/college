<?php
session_start();
include '../../../config/dbconfig.php';

// Check if user is logged in
if (!isset($_SESSION['loggedin'])) {
    header('Location: ../login/');
    exit;
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $userId = $_POST["userId"];
    $newUsername = $_POST["username"];
    $isActive = $_POST["isActive"];
    $isAdmin = $_POST["isAdmin"];

    // Prepare and execute SQL query to update user information
    $stmt = $conn->prepare('UPDATE users SET username=?, active=?, is_admin=? WHERE id=?');

    // Check for SQL statement preparation error
    if (!$stmt) {
        echo "Error preparing statement: " . $conn->error;
        exit;
    }

    // Bind parameters to the prepared statement
    $stmt->bind_param('siii', $newUsername, $isActive, $isAdmin, $userId);

    // Execute the prepared statement
    if ($stmt->execute()) {
        header('Location: ../../admin/user.php');
        echo "User account updated successfully";
    } else {
        echo "Error updating user account: " . $stmt->error;
    }

    // Close statement
    $stmt->close();
}
?>

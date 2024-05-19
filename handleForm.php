<?php
session_start();

if (isset($_POST['submitBtn'])) {
    $username = trim($_POST['firstName']);
    $password = trim($_POST['password']);

    // Validate input
    if (empty($username) || empty($password)) {
        echo "Both fields are required.";
        exit;
    }

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'farepherals');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Check if the user is registered
    $stmt = $conn->prepare("SELECT password FROM tb_users WHERE username = ?");
    if (!$stmt) {
        echo "Error preparing statement: " . $conn->error;
        exit;
    }

    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        $stmt->bind_result($hashedPassword);
        $stmt->fetch();

        if (password_verify($password, $hashedPassword)) {
            $_SESSION['firstName'] = $username;
            header("Location: farepherals.php");
            exit();
        } else {
            echo "Invalid username or password. Password mismatch.";
        }
    } else {
        echo "Invalid username or password. No such user.";
    }

    $stmt->close();
    $conn->close();
}
?>

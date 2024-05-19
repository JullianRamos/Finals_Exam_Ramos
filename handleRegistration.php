<?php
if (isset($_POST['registerBtn'])) {
    $username = trim($_POST['firstName']);
    $password = trim($_POST['password']);

    // Validate input
    if (empty($username) || empty($password)) {
        echo "Both fields are required.";
        exit;
    }

    // Hash the password
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    echo "Hashed password for user " . $username . ": " . $hashedPassword . "<br>";

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'farepherals');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Insert user into database
    $stmt = $conn->prepare("INSERT INTO tb_users (username, password) VALUES (?, ?)");
    if (!$stmt) {
        echo "Error preparing statement: " . $conn->error;
        exit;
    }
    $stmt->bind_param("ss", $username, $hashedPassword);

    if ($stmt->execute()) {
        echo "Registration successful. <a href='login.php'>Login here</a>";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

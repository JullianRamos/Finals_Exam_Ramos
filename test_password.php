<?php
// Testing password hashing and verification
$originalPassword = 'yourpassword';  // Change 'yourpassword' to the password you want to test
$hashedPassword = password_hash($originalPassword, PASSWORD_BCRYPT);

echo "Original Password: " . $originalPassword . "<br>";
echo "Hashed Password: " . $hashedPassword . "<br>";

if (password_verify($originalPassword, $hashedPassword)) {
    echo "Password verified successfully!";
} else {
    echo "Password verification failed.";
}
?>

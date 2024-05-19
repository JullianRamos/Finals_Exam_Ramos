<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Register</title>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f9f9f9;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }
    .container {
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 300px;
    }
    .Directions {
        font-family: 'Arial Black', sans-serif;
        color: white;
        background-color: green;
        padding: 10px;
        border-radius: 8px;
        margin-bottom: 20px;
    }
    .Directions h1 {
        margin: 0;
        font-size: 18px;
    }
    form input[type="text"],
    form input[type="password"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    form input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        background-color: green;
        color: white;
        cursor: pointer;
        font-size: 16px;
    }
    form input[type="submit"]:hover {
        background-color: darkgreen;
    }
    p a {
        color: green;
        text-decoration: none;
    }
    p a:hover {
        text-decoration: underline;
    }
</style>
</head>
<body>
    <div class="container">
        <div class="Directions">
            <h1>Register</h1>
        </div>
        <form action="handleRegistration.php" method="POST">
            <input type="text" placeholder="INPUT YOUR NAME" name="firstName" required>
            <input type="password" placeholder="PASSWORD" name="password" required>
            <input type="submit" value="Register" name="registerBtn">
        </form>
        <p><a href="login.php">Already have an account? Login here</a></p>
    </div>
</body>
</html>

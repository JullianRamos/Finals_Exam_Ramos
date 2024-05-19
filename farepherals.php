<?php
session_start();
if (!isset($_SESSION['firstName'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Order System</title>
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
        width: 400px;
        text-align: left;
    }
    h2 {
        text-align: center;
        color: #333;
    }
    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    .item {
        margin-bottom: 20px;
    }
    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    input[type="submit"] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        background-color: green;
        color: white;
        cursor: pointer;
        font-size: 16px;
    }
    input[type="submit"]:hover {
        background-color: darkgreen;
    }
</style>
</head>
<body>
    <div class="container">
        <h2>Farepherals</h2>
        <form method="post" action="summary.php">
            <div class="item">
                <label>ITEM 1: MONITOR 165 Hz</label>
                <label>Price: &#8369;5500</label>
            </div>
            <div class="item">
                <label>ITEM 2: GAMING MOUSE RAKK TALAN</label>
                <label>Price: &#8369;2500</label>
            </div>
            <div class="item">
                <label>ITEM 3: ARCADE STICK 8bit Do</label>
                <label>Price: &#8369;2900</label>
            </div>
            <div class="item">
                <label>ITEM 4: KEYBOARD HyperX ALLOY ORIGINS 65</label>
                <label>Price: &#8369;4500</label>
            </div>
            <div class="item">
                <label>ITEM 5: HEADSET Steelseries ARCTIS 7</label>
                <label>Price: &#8369;7000</label>
            </div>
            <div class="item">
                <label for="quantity1">Quantity of MONITOR:</label>
                <input type="number" id="quantity1" name="quantity1" min="0" required>
            </div>
            <div class="item">
                <label for="quantity2">Quantity of GAMING MOUSE:</label>
                <input type="number" id="quantity2" name="quantity2" min="0" required>
            </div>
            <div class="item">
                <label for="quantity3">Quantity of ARCADE STICK:</label>
                <input type="number" id="quantity3" name="quantity3" min="0" required>
            </div>
            <div class="item">
                <label for="quantity4">Quantity of KEYBOARD:</label>
                <input type="number" id="quantity4" name="quantity4" min="0" required>
            </div>
            <div class="item">
                <label for="quantity5">Quantity of HEADSET:</label>
                <input type="number" id="quantity5" name="quantity5" min="0" required>
            </div>
            <div class="item">
                <label for="cash">Amount of Cash:</label>
                <input type="number" id="cash" name="cash" required>
            </div>
            <input type="submit" name="submit" value="Submit Order">
        </form>
    </div>
</body>
</html>

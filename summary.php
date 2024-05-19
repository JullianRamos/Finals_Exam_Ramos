<?php
session_start();
if (!isset($_SESSION['firstName'])) {
    header("Location: login.php");
    exit();
}

if (isset($_POST['submit'])) {
    // Retrieve values from the form
    $quantity1 = $_POST['quantity1'];
    $quantity2 = $_POST['quantity2'];
    $quantity3 = $_POST['quantity3'];
    $quantity4 = $_POST['quantity4'];
    $quantity5 = $_POST['quantity5'];
    $cash = $_POST['cash'];

    $price1 = 5500;
    $price2 = 2500;
    $price3 = 2900;
    $price4 = 4500;
    $price5 = 7000;

    // Calculate total cost
    $total_cost = ($quantity1 * $price1) + ($quantity2 * $price2) + ($quantity3 * $price3) + ($quantity4 * $price4) + ($quantity5 * $price5);

    // Calculate change
    $change = $cash - $total_cost;
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Order Summary</title>
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
            h3 {
                color: #333;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <h3>Order Summary:</h3>
            <p>Total Cost: &#8369;<?php echo $total_cost; ?></p>
            <?php
            if ($change >= 0) {
                echo "<p>Your change is: &#8369;" . $change . "</p>";
                echo "<p>Thank you for your order!</p>";
            } else {
                echo "<p>Insufficient cash! Please provide more.</p>";
            }
            ?>
        </div>
    </body>
    </html>
    <?php
} else {
    echo "No order data submitted.";
}
?>

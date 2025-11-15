<?php
include "../Server/connection.php"; // DB connection

// Initialize variables
$orderStatus = "Order not found";
$total = 0;
$orderId = isset($_GET['orderId']) ? $_GET['orderId'] : '';

if ($orderId) {
    // Get order info
    $orderQuery = $con->query("SELECT * FROM orders WHERE order_id = '$orderId'");
    if ($orderQuery && $orderQuery->num_rows > 0) {
        $order = $orderQuery->fetch_assoc();
        $total = $order['order_cost'];
        $orderStatus = $order['order_status'];

        // Check if order items exist
        $itemsQuery = $con->query("SELECT * FROM order_items WHERE order_id = '$orderId'");
        if ($itemsQuery && $itemsQuery->num_rows > 0) {
            $orderStatus = " Order items successfully!";
        } else {
            $orderStatus = "Order items not yet successfully!";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment</title>
    <link rel="stylesheet" href="/style/home/main.css">
    <link rel="stylesheet" href="/style/Account/checkout_payment.css">
    <link rel="stylesheet" href="/style/home/footer.css">
</head>

<body>
    <!-- navbar -->
    <?php include "../Components/navbar.php" ?>

    <!-- Payment  -->
    <div class="checkout">
        <h2>Payment</h2>
        <hr>
        <div class="payment">
            <p id="orderStatus" style="font-weight:bold;">
                <?php echo htmlspecialchars($orderStatus); ?>
            </p>
            <p id="totalDisplay" style="font-weight:bold;">
                Total: $<?php echo htmlspecialchars($total); ?>
            </p>

            <!-- Optional payment button -->
            <?php if ($orderId && $total > 0): ?>
            <button onclick="window.location.href='complete_payment.php?orderId=<?php echo $orderId; ?>'">
                Pay Now
            </button>
            <?php endif; ?>
        </div>
    </div>

    <!-- footer -->
    <?php include "../Components/footer.php" ?>
</body>

</html>
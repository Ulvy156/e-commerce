<?php
include "connection.php";
session_start();
// Read the raw HTTP request body and decode JSON into a PHP array
$data = json_decode(file_get_contents("php://input"), true);

if (isset($data['placeOrder'])) {
  //1. get data from form and store user information
    $order_cost = $data['order_cost'];
    $orderstatus = "on hold";
    $userId = 1;
    $userPhone = $data['phone'];
    $userEmail = $data['email'];
    $userName = $data['name'];
    $userCity = $data['city'];
    $userAddress = $data['address'];
    $date = date('Y-m-d H:i:s');
    $cart = $data['cart'];

    //2. Insert order into orders
    $insert = "INSERT INTO orders (order_cost, order_status, user_id, user_phone, user_city, user_address, order_date)
               VALUES ('$order_cost', '$orderstatus', '$userId', '$userPhone', '$userCity', '$userAddress', '$date')";
    $insert_send = $con->query($insert);

    if ($insert_send) {
        $orderId = mysqli_insert_id($con);

        foreach ($cart as $item) {
            $product_id = $item['product_id'];
            $product_name = $item['product_name'];
            $product_image = $item['product_image'];
            $product_price = $item['product_price'];
            $product_qty = $item['quantity'];
         //3.insert data to order items table 
            $insert_item = "INSERT INTO order_items 
                            (order_id, product_id, product_name, product_image, product_price, product_qy, user_id, order_date)
                            VALUES 
                            ('$orderId', '$product_id', '$product_name', '$product_image', '$product_price', '$product_qty', '$userId', '$date')";

            $con->query($insert_item); 
        }

        // Return JSON 
        echo json_encode([
            "success" => true,
            "orderId" => $orderId,
            "orderStatus" => $orderstatus
        ]);
    } else {
        echo json_encode([
            "success" => false,
            "error" => mysqli_error($con)
        ]);
    }
}
?>

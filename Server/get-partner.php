<?php
include "connection.php"; 

$select = 'SELECT * FROM `products` WHERE product_name ="Partners"';
$send = $con->query($select);


    if ($send) {
        echo '<div class="brand-images">';
        while ($row = $send->fetch_assoc()) {
            echo '
                <img src="' . $row['product_image'] . '" alt="">
                <img src="' . $row['product_image2'] . '" alt="">
                <img src="' . $row['product_image3'] . '" alt="">
                <img src="' . $row['product_image4'] . '" alt="">
            ';
        }
        echo '</div>';
    }
?>

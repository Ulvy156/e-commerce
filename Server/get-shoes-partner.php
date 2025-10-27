<?php

    include "connection.php";
    $select = "SELECT * FROM products where product_category= 'shoes_partner'";
    $send   = $con->query($select);

    if ($send) {
        if (mysqli_num_rows($send) > 0) {
            while ($row = mysqli_fetch_assoc($send)) {
            ?>
            <article onclick="window.location.href='/pages/product-details.php?id=<?php echo $row['product_id']?>&category=<?php echo $row['product_category']?>'">
                <img src="<?php echo $row['product_image']?>" alt="">
                   <!--start  -->
            <?php include "Components/stars.php"; ?>
                <p><?php echo $row['product_name']?></p>
                <p>$<?php echo $row['product_price']?></p>
                <button>Shop Now</button>
            </article>
<?php
    }
        } else {
            echo "No products found.";
        }
    } else {
        echo "Query failed: " . mysqli_error($con);
    }
?>

<?php
    include "connection.php";

    $select = "SELECT * FROM products WHERE product_category = 'watch-partner'";
    $send   = $con->query($select);

    if ($send) {
        if (mysqli_num_rows($send) > 0) {
            while ($row = mysqli_fetch_assoc($send)) {
            ?>
            <article onclick="window.location.href='/pages/product-details.php?id=<?php echo $row['product_id']?>&category=<?php echo urlencode($row['product_category'])?>'">
                <img src="<?php echo htmlspecialchars($row['product_image'])?>" alt="<?php echo htmlspecialchars($row['product_name'])?>">

                <!-- Star rating component -->
                <?php include "Components/stars.php"; ?>

                <p><?php echo htmlspecialchars($row['product_name'])?></p>
                <p>$<?php echo htmlspecialchars($row['product_price'])?></p>
                <button>Shop Now</button>
            </article>
            <?php
                }
                    } else {
                        echo "<p>No products found.</p>";
                    }
                } else {
                    echo "<p>Query failed: " . mysqli_error($con) . "</p>";
                }
            ?>

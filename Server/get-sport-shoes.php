<?php
    include "connection.php";

    $select = "SELECT * FROM products WHERE product_name = 'Sport Shoes'";
    $send   = $con->query($select);

    if ($send && mysqli_num_rows($send) > 0) {
        while ($row = mysqli_fetch_assoc($send)) {
        ?>
           <article onclick="window.location.href='/pages/product-details.php?id=<?php echo $row['product_id'] ?>&category=<?php echo $row['product_category'] ?>'">
            <img src="<?php echo htmlspecialchars($row['product_image']) ?>" alt="<?php echo htmlspecialchars($row['product_name']) ?>">

            <!-- Include stars -->
            <?php include "Components/stars.php"; ?>

            <p><?php echo htmlspecialchars($row['product_name']) ?></p>
            <p>$<?php echo htmlspecialchars($row['product_price']) ?></p>
            <button onclick="window.location.href='/pages/product-details.php?id=<?php echo $row['product_id']?>&category=<?php echo $row['product_category']?>'">Shop Now</button>
        </article>
        <?php
            }
            } else {
                echo "<p>No products found.</p>";
            }
        ?>

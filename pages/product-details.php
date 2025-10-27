<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Details</title>
    <link href="https://fonts.googleapis.com/css2?family=Nata+Sans:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/home/main.css">
    <link rel="stylesheet" href="../style/home/footer.css">
    <link rel="stylesheet" href="../style/product-details/product-details.css">
    <link rel="stylesheet" href="../style/home/cloth.css">
</head>

<body>
    <!-- Navbar -->
    <?php include "../Components/navbar.php" ?>

    <section id="product-details">
        <!-- detail Product -->
        <article class="details">
            <?php
            include "../Server/connection.php";

            $id = $_GET['id'] ?? null;

            if ($id) {
                $search = "SELECT * FROM products WHERE product_id = $id";
                $search_send = $con->query($search);

                if ($search_send && mysqli_num_rows($search_send) > 0) {
                    $row = mysqli_fetch_assoc($search_send);
                }
            }
            ?>

            <?php if (!empty($row)) : ?>
                <img src="<?= $row['product_image'] ?>" alt="<?= htmlspecialchars($row['product_name']) ?>">

                <div class="product-content">
                    <span><?= htmlspecialchars($row['product_category']) ?></span>
                    <h2><?= htmlspecialchars($row['product_name']) ?></h2>
                    <h2><?= htmlspecialchars($row['product_price']) ?>$</h2>

                    <div class="add-to-cart">
                        <input type="text" value="1">
                        <button>ADD TO CART</button>
                    </div>

                    <h3>Product Details</h3>
                    <p><?= htmlspecialchars($row['product_description']) ?></p>
                </div>
            <?php else : ?>
                <p>Product not found.</p>
            <?php endif; ?>
        </article>

        <!-- Related Products -->
        <section class="shirt-section" style="width: 100%;">
            <div class="shirt-header">
                <h1 style="font-size: 25px;">Related Products</h1>
                <hr style="width: 5%; margin: 10px auto 0; background: #ff6b35; height: 3px; border: none;" />
            </div>

            <div class="shirt-feature">
                <?php
                $categories = $_GET['category'] ?? null;

                if ($categories) {
                    $categories_safe = mysqli_real_escape_string($con, $categories);
                    $find = "SELECT * FROM products WHERE product_category = '$categories_safe' AND product_id != $id";
                    $send_categories = $con->query($find);
                    if ($send_categories) {
                        while ($row_cat = mysqli_fetch_assoc($send_categories)) :
                ?>
                            <article class="related-product">
                                <img src="<?= $row_cat['product_image'] ?>" alt="<?= htmlspecialchars($row_cat['product_name']) ?>">
                                
                                    <!--start  -->
                                <?php include "../Components/stars.php"; ?>
                                <p><?= htmlspecialchars($row_cat['product_name']) ?></p>
                                <p><?= htmlspecialchars($row_cat['product_price']) ?>$</p>
                                <button>Shop Now</button>
                            </article>
                <?php
                        endwhile;
                    } else {
                        echo "<p>No related products found.</p>";
                    }
                }
                ?>
            </div>
        </section>
    </section>

    <!-- Footer -->
    <?php include "../Components/footer.php" ?>
</body>

</html>

<?php


include "../Server/connection.php";

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$row = null;

if ($id > 0) {
    $q = "SELECT * FROM products WHERE product_id = $id LIMIT 1";
    $res = $con->query($q);
    if ($res && mysqli_num_rows($res) > 0) {
        $row = mysqli_fetch_assoc($res);
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <title>Product Details</title>
  <link rel="stylesheet" href="../style/home/main.css">
  <link rel="stylesheet" href="../style/home/footer.css">
  <link rel="stylesheet" href="../style/product-details/product-details.css">
  <link rel="stylesheet" href="../style/home/cloth.css">
</head>
<body>
    <!-- navbar -->
  <?php include "../Components/navbar.php"; ?>
  <!-- card -->

  <section id="product-details">
    <article class="details">
      <?php if (!empty($row)): ?>
        <img src="<?= htmlspecialchars($row['product_image']); ?>" alt="<?= htmlspecialchars($row['product_name']); ?>">

        <div class="product-content">
          <span><?= htmlspecialchars($row['product_category']); ?></span>
          <h2><?= htmlspecialchars($row['product_name']); ?></h2>
          <h2><?= htmlspecialchars($row['product_price']); ?>$</h2>

          <div class="add-to-cart">
            <input type="number" min="1" value="1" id="qty-<?= (int)$row['product_id']; ?>">
            <!-- link to cart with qty param -->
            <a href="cart.php?action=add&id=<?= (int)$row['product_id']; ?>&qty=1"><button type="button">ADD TO CART</button></a>
          </div>

          <h3>Product Details</h3>
          <p><?= nl2br(htmlspecialchars($row['product_description'])); ?></p>
        </div>
      <?php else: ?>
        <p>Product not found.</p>
      <?php endif; ?>
    </article>

    <!-- Related Products -->
    <section class="shirt-section" style="width:100%;">
      <div class="shirt-header">
        <h1 style="font-size:25px;">Related Products</h1>
        <hr style="width:5%;margin:10px auto 0;background:#ff6b35;height:3px;border:none;">
      </div>

      <div class="shirt-feature">
        <?php
        // Use GET category or fallback to product's category
        $category = $_GET['category'] ?? ($row['product_category'] ?? null);

        if ($category) {
            $cat_safe = mysqli_real_escape_string($con, $category);
            $find = "SELECT * FROM products WHERE product_category = '$cat_safe' AND product_id != $id LIMIT 8";
            $cat_res = $con->query($find);
            if ($cat_res && mysqli_num_rows($cat_res) > 0) {
                while ($row_cat = mysqli_fetch_assoc($cat_res)):
        ?>
                    <article class="related-product">
                      <img src="<?= htmlspecialchars($row_cat['product_image']); ?>" alt="<?= htmlspecialchars($row_cat['product_name']); ?>">
                      <?php include "../Components/stars.php"; ?>
                      <p><?= htmlspecialchars($row_cat['product_name']); ?></p>
                      <p><?= htmlspecialchars($row_cat['product_price']); ?>$</p>
                      <a href="cart.php?action=add&id=<?= (int)$row_cat['product_id']; ?>&qty=1"><button type="button">Shop Now</button></a>
                    </article>
        <?php
                endwhile;
            } else {
                echo "<p>No related products found.</p>";
            }
        } else {
            echo "<p>No category available for related products.</p>";
        }
        ?>
      </div>
    </section>
  </section>
<!-- footer -->
  <?php include "../Components/footer.php"; ?>
</body>
</html>

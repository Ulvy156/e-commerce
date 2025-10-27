<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eshop</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nata+Sans:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style/home/main.css">
    <link rel="stylesheet" href="style/home/brad-section.css">
    <link rel="stylesheet" href="style/home/featured.css">
    <link rel="stylesheet" href="style/home/cloth.css">
    <link rel="stylesheet" href="style/home/banner.css">
    <link rel="stylesheet" href="style/home/shoes.css">
    <link rel="stylesheet" href="style/home/footer.css">
</head>

<body>
    <!-- navbar -->
     <?php include "Components/navbar.php"?>
 

    <main class="hero">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <p class="new-arrivals">NEW ARRIVALS</p>
                    <h1 class="hero-title">
                        <span class="best-prices">Best Prices</span>
                        <span class="this-season">This Season</span>
                    </h1>
                    <p class="hero-subtitle">
                        Eshop offers the best products for the most affordable prices
                    </p>
                    <button class="shop-btn">SHOP NOW</button>
                </div>
                <div class="hero-image">
                    <img src="https://i.pinimg.com/originals/16/f4/54/16f45487b6a10feb8a2cd3960e1d6971.jpg" alt="">
                </div>
            </div>
        </div>
    </main>

    <!-- brand image -->
    <section class="branch-section">
        <h1>Our Brand Partners</h1>
        <!-- Brand partner -->
            <?php include "Server/get-partner.php"; ?>
            <div class="image-bg">
            <!-- Type of shoes -->
            <?php include "Server/get-shoes-category.php"; ?>
            </div>
    </section>

    <!-- featured -->
   <section class="featured-section">
        <div class="featured-header">
            <h1>Out Featured</h1>
            <hr>
            <p>Here you can checkout our featured products</p>
        </div>
        <div class="product-feature">
        <!-- get shoes category -->
            <?php  include "Server/get-sport-shoes.php"; ?>
        </div>
    </section> 

    <!-- banner -->
    <section id="banner" class="banner">
        <div id="banner-bg" class="banner-bg">
            <div class="banner-text">
                <h2>MID SEASON'S SALE</h2>
                <h1>Autumn Collection</h1>
                <h1>Up to 30% OFF</h1>
                <Button>SHOP NOW</Button>
            </div>
        </div>
    </section>

    <!-- dress -->
    <section class="shirt-section">
        <div class="shirt-header">
            <h1>Our T-Shirt Partner</h1>
            <hr>
            <p>Here you can checkout our featured products</p>
        </div>
        <div class="shirt-feature">
            <!-- shirt product -->
           <?php include "Server/get-shirt-product.php"; ?>
        </div>
    </section>

    <!-- shoes -->
    <section class="shoes-section">
        <div class="shoes-header">
            <h1>Our Football Shoes Partner</h1>
            <hr>
            <p>Here you can checkout our featured products</p>
        </div>
        <div class="shoes-feature">
           <?php include "Server/get-shoes-partner.php" ?>

        </div>
    </section>

    <!-- watch -->
    <section class="shoes-section">
        <div class="shoes-header">
            <h1>Our Watch Partner</h1>
            <hr>
            <p>Here you can checkout our featured products</p>
        </div>
        <div class="shoes-feature">
            <?php include "Server/get-watch-partner.php" ?>
        </div>
    </section>
       <!-- Footer -->
     <?php include "Components/footer.php"?>

  
</body>


</html>
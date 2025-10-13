<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shop</title>
    <link href="https://fonts.googleapis.com/css2?family=Nata+Sans:wght@100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../style/home/main.css">
    <link rel="stylesheet" href="../style/home/footer.css">
    <link rel="stylesheet" href="../style/shop/featured.css">
    <link rel="stylesheet" href="../style/shop/pagination.css">
</head>

<body>
   <header class="header">
        <nav class="nav container">
            <div class="logo">
                <a href="/"> <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                        <path fill="#cfd8dc" d="M5 19h38v19H5z" />
                        <path fill="#b0bec5" d="M5 38h38v4H5z" />
                        <path fill="#455a64" d="M27 24h12v18H27z" />
                        <path fill="#e3f2fd" d="M9 24h14v11H9z" />
                        <path fill="#1e88e5" d="M10 25h12v9H10z" />
                        <path fill="#90a4ae" d="M36.5 33.5c-.3 0-.5.2-.5.5v2c0 .3.2.5.5.5s.5-.2.5-.5v-2c0-.3-.2-.5-.5-.5" />
                        <g fill="#558b2f">
                            <circle cx="24" cy="19" r="3" />
                            <circle cx="36" cy="19" r="3" />
                            <circle cx="12" cy="19" r="3" />
                        </g>
                        <path fill="#7cb342"
                            d="M40 6H8c-1.1 0-2 .9-2 2v3h36V8c0-1.1-.9-2-2-2m-19 5h6v8h-6zm16 0h-5l1 8h6zm-26 0h5l-1 8H9z" />
                        <g fill="#ffa000">
                            <circle cx="30" cy="19" r="3" />
                            <path d="M45 19c0 1.7-1.3 3-3 3s-3-1.3-3-3s1.3-3 3-3z" />
                            <circle cx="18" cy="19" r="3" />
                            <path d="M3 19c0 1.7 1.3 3 3 3s3-1.3 3-3s-1.3-3-3-3z" />
                        </g>
                        <path fill="#ffc107" d="M32 11h-5v8h6zm10 0h-5l2 8h6zm-26 0h5v8h-6zM6 11h5l-2 8H3z" />
                    </svg></a>
            </div>
            <div class="nav-menu-container">
                <ul class="nav-menu">
                    <li><a href="/">Home</a></li>
                    <li><a href="/pages/shop.php">Shop</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="/pages/contact.html">Contact Us</a></li>
                </ul>
                <div class="nav-icons">
                    <a href="/pages/cart.html"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M8 7V6a4 4 0 1 1 8 0v1h3c.552 0 1 .449 1 1.007v12.001c0 1.1-.895 1.992-1.994 1.992H5.994A1.994 1.994 0 0 1 4 20.008v-12C4 7.45 4.445 7 5 7zm1.2 0h5.6V6a2.8 2.8 0 0 0-5.6 0zM8 8.2H5.2v11.808c0 .436.356.792.794.792h12.012a.794.794 0 0 0 .794-.792V8.2H16V11h-1.2V8.2H9.2V11H8z" />
                        </svg></a>
                    <a href="/pages/account.html">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="1.5"
                                d="M15 7.5a3 3 0 1 1-6 0a3 3 0 0 1 6 0m4.5 13c-.475-9.333-14.525-9.333-15 0" />
                        </svg>
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- featured -->
    <section class="featured-section">
        <div class="featured-header">
            <h1>Out Featured</h1>
            <hr>
            <p>Here you can checkout our featured products</p>
        </div>
        <div class="product-feature">
            <?php  include "../Server/get-shoes-partner.php" ?>
            <?php include "../Server/get-shirt-product.php"?>
            <?php  include "../Server/get-sport-shoes.php" ?>
            <?php include "../Server/get-watch-partner.php"?>

           
            
           
       
        </div>
        <div class="pagination">
            <p>Previous</p>
            <p>1</p>
            <p>2</p>
            <p>3</p>
            <p>Next</p>
        </div>
    </section>

    <footer class="footer">
        <section>
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48">
                <path fill="#cfd8dc" d="M5 19h38v19H5z" />
                <path fill="#b0bec5" d="M5 38h38v4H5z" />
                <path fill="#455a64" d="M27 24h12v18H27z" />
                <path fill="#e3f2fd" d="M9 24h14v11H9z" />
                <path fill="#1e88e5" d="M10 25h12v9H10z" />
                <path fill="#90a4ae" d="M36.5 33.5c-.3 0-.5.2-.5.5v2c0 .3.2.5.5.5s.5-.2.5-.5v-2c0-.3-.2-.5-.5-.5" />
                <g fill="#558b2f">
                    <circle cx="24" cy="19" r="3" />
                    <circle cx="36" cy="19" r="3" />
                    <circle cx="12" cy="19" r="3" />
                </g>
                <path fill="#7cb342"
                    d="M40 6H8c-1.1 0-2 .9-2 2v3h36V8c0-1.1-.9-2-2-2m-19 5h6v8h-6zm16 0h-5l1 8h6zm-26 0h5l-1 8H9z" />
                <g fill="#ffa000">
                    <circle cx="30" cy="19" r="3" />
                    <path d="M45 19c0 1.7-1.3 3-3 3s-3-1.3-3-3s1.3-3 3-3z" />
                    <circle cx="18" cy="19" r="3" />
                    <path d="M3 19c0 1.7 1.3 3 3 3s3-1.3 3-3s-1.3-3-3-3z" />
                </g>
                <path fill="#ffc107" d="M32 11h-5v8h6zm10 0h-5l2 8h6zm-26 0h5v8h-6zM6 11h5l-2 8H3z" />
            </svg>
            <h3>We provide the best product for the most affordable prices</h3>
        </section>
        <!-- features -->
        <section class="feature">
            <h3>Featured</h3>
            <div class="feature-title">
                <p>MEN</p>
                <p>WOMEN</p>
                <p>BOYS</p>
                <p>GIRLS</p>
                <p>NEW ARRIVALS</p>
                <p>CLOTHES</p>
            </div>
        </section>
        <!-- contact us -->
        <section class="contact-us">
            <h3>Contact Us</h3>
            <div class="feature-title">
                <h4>Address</h4>
                <p>123 Street name, City</p>
                <h4>Phone</h4>
                <p>123 456 789</p>
                <h4>Email</h4>
                <p>info@gmail.com</p>
            </div>
        </section>
        <!-- instagram  -->
        <section class="instagram">
            <h3>Instagram</h3>
            <div class="images">
                <img
                    src="https://imgs.search.brave.com/a7xQ84tvk30MGRVVeIXLgpIb-boBYw8bWdAfD_BSzTI/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly93d3cu/bmlrZS5hZS9kdy9p/bWFnZS92Mi9CRFZC/X1BSRC9vbi9kZW1h/bmR3YXJlLnN0YXRp/Yy8tL1NpdGVzLWFr/ZW5lby1tYXN0ZXIt/Y2F0YWxvZy9kZWZh/dWx0L2R3YWI3M2Uy/ZGMvbmsvNmU0LzYv/Ny84LzUvZS82ZTQ2/Nzg1ZV8yZTQ5XzRm/YjBfOTdhN185OTEy/ZDhkZDFlMDIuanBn/P3N3PTUyMCZzaD01/MjAmc209Zml0" />
                <img src="https://imgs.search.brave.com/yYH_3ZZ2eLjczy6YAo4FkxJq24bJvLeIyTjD5W1dXvw/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMucHVtYS5jb20v/aW1hZ2UvdXBsb2Fk/L2ZfYXV0byxxX2F1/dG8sYl9yZ2I6ZmFm/YWZhLHdfNjAwLGhf/NjAwL2dsb2JhbC85/Mjk1MDEvMDEvZm5k/L1BOQS9mbXQvcG5n/L1BVTUEtMi1XYXRj/aA"
                    alt="">
                <img src="https://imgs.search.brave.com/lB6unC6o2uLWdtkxCAxtJEOkBzg4X_7viz8gD7aqnUo/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pbWFn/ZXMuZm9vdGJhbGxm/YW5hdGljcy5jb20v/cmVhbC1tYWRyaWQv/cmVhbC1tYWRyaWQt/YWRpZGFzLWhvbWUt/c2hpcnQtMjAyNS0y/Ni13b21lbnMtd2l0/aC1iZWxsaW5naGFt/LTUtcHJpbnRpbmdf/c3M1X3AtMjAzMTU0/NTcxK3UtaW9uZ241/dnljdGRvcGl5dGJ3/ZDkrdi1hdDc1a2p0/aHF1Y25qZm1kcWg2/NC5qcGc_X2h2PTIm/dz00MDA"
                    alt="">
                <img src="https://imgs.search.brave.com/gti3B4R13tNKi8nMEbe9TgJjz4nJ4NvmYSsbC3prrt0/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9pLnBp/bmltZy5jb20vb3Jp/Z2luYWxzLzRhLzUy/LzE2LzRhNTIxNjA1/MGY1MjZhMjg4NmFm/NTgxMDBlZTQyMjYw/LmpwZw"
                    alt="">
            </div>
        </section>
        <!-- all right reserve -->
        <section class="right-reserve">
            <img src="https://imgs.search.brave.com/KRPRchFnKi2nG17PLzXqfXvjDI-F4sLf3FPqiZMUPLs/rs:fit:860:0:0:0/g:ce/aHR0cHM6Ly9mcmVl/cG5naW1nLmNvbS90/aHVtYi9jcmVkaXRf/Y2FyZC8yNTQ2NC0x/LWNyZWRpdC1jYXJk/LXZpc2EtYW5kLW1h/c3Rlci1jYXJkLXRo/dW1iLnBuZw"
                alt="">
            <div>
                <h4>eCommerce @ 2025 All Right Reserved </h4>
                <div class="social-icons">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M12 2.04c-5.5 0-10 4.49-10 10.02c0 5 3.66 9.15 8.44 9.9v-7H7.9v-2.9h2.54V9.85c0-2.51 1.49-3.89 3.78-3.89c1.09 0 2.23.19 2.23.19v2.47h-1.26c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.45 2.9h-2.33v7a10 10 0 0 0 8.44-9.9c0-5.53-4.5-10.02-10-10.02" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M13.028 2c1.125.003 1.696.009 2.189.023l.194.007c.224.008.445.018.712.03c1.064.05 1.79.218 2.427.465c.66.254 1.216.598 1.772 1.153a4.9 4.9 0 0 1 1.153 1.772c.247.637.415 1.363.465 2.428c.012.266.022.487.03.712l.006.194c.015.492.021 1.063.023 2.188l.001.746v1.31a79 79 0 0 1-.023 2.188l-.006.194c-.008.225-.018.446-.03.712c-.05 1.065-.22 1.79-.466 2.428a4.9 4.9 0 0 1-1.153 1.772a4.9 4.9 0 0 1-1.772 1.153c-.637.247-1.363.415-2.427.465l-.712.03l-.194.006c-.493.014-1.064.021-2.189.023l-.746.001h-1.309a78 78 0 0 1-2.189-.023l-.194-.006a63 63 0 0 1-.712-.031c-1.064-.05-1.79-.218-2.428-.465a4.9 4.9 0 0 1-1.771-1.153a4.9 4.9 0 0 1-1.154-1.772c-.247-.637-.415-1.363-.465-2.428l-.03-.712l-.005-.194A79 79 0 0 1 2 13.028v-2.056a79 79 0 0 1 .022-2.188l.007-.194c.008-.225.018-.446.03-.712c.05-1.065.218-1.79.465-2.428A4.9 4.9 0 0 1 3.68 3.678a4.9 4.9 0 0 1 1.77-1.153c.638-.247 1.363-.415 2.428-.465c.266-.012.488-.022.712-.03l.194-.006a79 79 0 0 1 2.188-.023zM12 7a5 5 0 1 0 0 10a5 5 0 0 0 0-10m0 2a3 3 0 1 1 .001 6a3 3 0 0 1 0-6m5.25-3.5a1.25 1.25 0 0 0 0 2.5a1.25 1.25 0 0 0 0-2.5" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                        <path fill="currentColor"
                            d="M22.46 6c-.77.35-1.6.58-2.46.69c.88-.53 1.56-1.37 1.88-2.38c-.83.5-1.75.85-2.72 1.05C18.37 4.5 17.26 4 16 4c-2.35 0-4.27 1.92-4.27 4.29c0 .34.04.67.11.98C8.28 9.09 5.11 7.38 3 4.79c-.37.63-.58 1.37-.58 2.15c0 1.49.75 2.81 1.91 3.56c-.71 0-1.37-.2-1.95-.5v.03c0 2.08 1.48 3.82 3.44 4.21a4.2 4.2 0 0 1-1.93.07a4.28 4.28 0 0 0 4 2.98a8.52 8.52 0 0 1-5.33 1.84q-.51 0-1.02-.06C3.44 20.29 5.7 21 8.12 21C16 21 20.33 14.46 20.33 8.79c0-.19 0-.37-.01-.56c.84-.6 1.56-1.36 2.14-2.23" />
                    </svg>
                </div>
            </div>
        </section>
    </footer>
</body>

</html>